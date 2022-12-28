<?php

namespace App\Http\Livewire\Admin\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $ticket;

    
    protected $rules = [
        
    ];

    public function mount(Ticket $Ticket){
        $this->ticket = $Ticket;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Ticket') ]) ]);
        
        $this->ticket->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.ticket.update', [
            'ticket' => $this->ticket
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Ticket') ])]);
    }
}
