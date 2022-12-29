<?php

namespace App\Http\Livewire\Admin\Place;

use App\Models\Place;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\City;

class Update extends Component
{
    use WithFileUploads;

    public $place;

    public $name;
    public $capacity;
    public $address;
    public $idCity;
    
    protected $rules = [
        'name' => 'required',
        'capacity' => 'required',
        'address' => 'required',
        'idCity' => 'required',        
    ];

    public function mount(Place $Place){
        $this->place = $Place;
        $this->name = $this->place->name;
        $this->capacity = $this->place->capacity;
        $this->address = $this->place->address;
        $this->idCity = $this->place->idCity;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Place') ]) ]);
        
        $idCit = City::where('name', $this->idCity)->pluck('id');
        if (!empty($idCit)){
            $this->idCity = $idCit[0];
        }

        $this->place->update([
            'name' => $this->name,
            'capacity' => $this->capacity,
            'address' => $this->address,
            'idCity' => $this->idCity,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.place.update', [
            'place' => $this->place
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Place') ])]);
    }
}
