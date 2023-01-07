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
        'name' => 'required|string|max:255',
        'capacity' => 'required|numeric',
        'address' => 'required|string|max:255',
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
        
        if(!empty($this->idCity) and !is_numeric($this->idCity)){
            $idCit = City::where('name', $this->idCity)->pluck('id');
            if (!empty($idCit) and $idCit != null){
                $this->idCity = $idCit[0];
            }
        }

        //Verifica si se modifica el type
        /*echo "NombreAnterior ".$this->place->name;
        echo " NombreNuevo ".$this->name;
        echo " idCityAnterior ".$this->place->idCity;
        echo " idCityNuevo ".$this->idCity;
        $idAnterior = Place::where('name', '=', $this->place->name)->where('idCity', $this->place->idCity)->pluck('id')->first();
        $idNuevo = Place::where('name', '=', $this->name)->where('idCity', $this->idCity)->pluck('id')->first();
        echo " Anterior ".$idAnterior;
        echo " Nuevo ".$idNuevo;
        if ($idAnterior == $idNuevo){*/
            $this->place->update([
                'name' => $this->name,
                'capacity' => $this->capacity,
                'address' => $this->address,
                'idCity' => $this->idCity,
                'user_id' => auth()->id(),
            ]);
            $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Place') ]) ]);
        /*}else{
            //Verificar que no se duplique el lugar y la ciudad juntas
            $place = Place::where('name',  $this->place->name)
                        ->where('idCity', $idNuevo)
                        ->first();
            echo "name ".$this->place->name;
            echo "nuevo ".$idNuevo;
            echo "placedamaris ".$place;    
            echo $fghj;     
            if (!empty($place)){
                $this->place->update([
                    'name' => $this->name,
                    'capacity' => $this->capacity,
                    'address' => $this->address,
                    'idCity' => $this->idCity,
                    'user_id' => auth()->id(),
                ]);
                $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Place') ]) ]);
            }else {
                $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Place') ]) ]);
            }
        }*/
    }

    public function render()
    {
        return view('livewire.admin.place.update', [
            'place' => $this->place
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Place') ])]);
    }
}
