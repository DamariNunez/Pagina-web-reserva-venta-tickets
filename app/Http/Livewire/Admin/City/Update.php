<?php

namespace App\Http\Livewire\Admin\City;

use App\Models\City;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $city;

    public $name;
    
    protected $rules = [
        'name' => 'required|string|max:100|unique:cities',        
    ];

    public function mount(City $City){
        $this->city = $City;
        $this->name = $this->city->name;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('City') ]) ]);
        
        $this->city->update([
            'name' => $this->name,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.city.update', [
            'city' => $this->city
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('City') ])]);
    }
}
