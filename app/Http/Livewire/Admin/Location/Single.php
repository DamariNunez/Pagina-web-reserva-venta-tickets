<?php

namespace App\Http\Livewire\Admin\Location;

use App\Models\Location;
use Livewire\Component;

class Single extends Component
{

    public $location;

    public function mount(Location $Location){
        $this->location = $Location;
    }

    public function delete()
    {
        $this->location->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Location') ]) ]);
        $this->emit('locationDeleted');
    }

    public function render()
    {
        return view('livewire.admin.location.single')
            ->layout('admin::layouts.app');
    }
}
