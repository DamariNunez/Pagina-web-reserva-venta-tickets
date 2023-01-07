<?php

namespace App\Http\Livewire\Admin\Place;

use App\Models\Place;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\City;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $capacity;
    public $address;
    public $idCity;
    
    protected $rules = [
        'name' => 'required|string|max:255',
        'capacity' => 'required|numeric',
        'address' => 'required|string|max:255',
        'idCity' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();
        
        $idCit =  City::where('name', $this->idCity)->pluck('id');
        if (!empty($idCit)){
            $this->idCity = $idCit[0];
        }

        //Verificar que no se duplique el lugar y la ciudad juntas
        $place = Place::where('name',  $this->name)
                      ->where('idCity', $this->idCity)
                      ->first();
        if (empty($place)){
            Place::create([
                'name' => $this->name,
                'capacity' => $this->capacity,
                'address' => $this->address,
                'idCity' => $this->idCity,
                'user_id' => auth()->id(),
            ]);
            $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Place') ])]);
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.admin.place.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Place') ])]);
    }
}
