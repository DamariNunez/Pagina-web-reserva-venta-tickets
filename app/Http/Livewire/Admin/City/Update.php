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
        'name' => 'required|string|max:100',        
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
        
        //Verifica si se modifica la ciudad
        $idAnterior = City::where('name', '=', $this->city->name)->pluck('id')->first();
        $idNuevo = City::where('name', '=', $this->name)->pluck('id')->first();
        if ($idAnterior == $idNuevo){
            $this->city->update([
                'name' => $this->name,
                'user_id' => auth()->id(),
            ]);
            $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Audience') ]) ]);
        }else{
            //Verificar si se duplica
            $exist = City::where('name', '=', $this->name)
                             ->where('id', '!=', $idAnterior)
                             ->first();
            if (empty($exist)){
                $this->city->update([
                    'name' => $this->name,
                    'user_id' => auth()->id(),
                ]);
            }else{
                $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Audience') ]) ]);
            }
        }    
    }

    public function render()
    {
        return view('livewire.admin.city.update', [
            'city' => $this->city
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('City') ])]);
    }
}
