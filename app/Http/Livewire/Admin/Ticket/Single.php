<?php

namespace App\Http\Livewire\Admin\Ticket;

use App\Models\Ticket;
use Livewire\Component;

class Single extends Component
{

    public $ticket;

    public function mount(Ticket $Ticket){
        $this->ticket = $Ticket;
    }

    public function delete()
    {
        $this->ticket->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Ticket') ]) ]);
        $this->emit('ticketDeleted');
    }

    public function render()
    {
        return view('livewire.admin.ticket.single')
            ->layout('admin::layouts.app');
    }
}
