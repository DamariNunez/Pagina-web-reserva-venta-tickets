<?php

namespace App\Http\Livewire\Admin\Seat;

use App\Models\Seat;
use Livewire\Component;

class Single extends Component
{

    public $seat;

    public function mount(Seat $Seat){
        $this->seat = $Seat;
    }

    public function delete()
    {
        $this->seat->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Seat') ]) ]);
        $this->emit('seatDeleted');
    }

    public function render()
    {
        return view('livewire.admin.seat.single')
            ->layout('admin::layouts.app');
    }
}
