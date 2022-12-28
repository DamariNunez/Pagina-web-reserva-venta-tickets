<?php

namespace App\Http\Livewire\Admin\Place;

use App\Models\Place;
use Livewire\Component;

class Single extends Component
{

    public $place;

    public function mount(Place $Place){
        $this->place = $Place;
    }

    public function delete()
    {
        $this->place->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Place') ]) ]);
        $this->emit('placeDeleted');
    }

    public function render()
    {
        return view('livewire.admin.place.single')
            ->layout('admin::layouts.app');
    }
}
