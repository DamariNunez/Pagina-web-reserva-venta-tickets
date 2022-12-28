<?php

namespace App\Http\Livewire\Admin\Seat;

use App\Models\Seat;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $seat;

    
    protected $rules = [
        
    ];

    public function mount(Seat $Seat){
        $this->seat = $Seat;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Seat') ]) ]);
        
        $this->seat->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.seat.update', [
            'seat' => $this->seat
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Seat') ])]);
    }
}
