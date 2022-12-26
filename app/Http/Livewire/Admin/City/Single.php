<?php

namespace App\Http\Livewire\Admin\City;

use App\Models\City;
use Livewire\Component;

class Single extends Component
{

    public $city;

    public function mount(City $City){
        $this->city = $City;
    }

    public function delete()
    {
        $this->city->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('City') ]) ]);
        $this->emit('cityDeleted');
    }

    public function render()
    {
        return view('livewire.admin.city.single')
            ->layout('admin::layouts.app');
    }
}
