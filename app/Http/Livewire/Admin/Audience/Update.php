<?php

namespace App\Http\Livewire\Admin\Audience;

use App\Models\Audience;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $audience;

    public $type;
    public $age;
    public $description;
    
    protected $rules = [
        'type' => 'required|string|max:50',
        'age' => 'required|numeric',
        'description' => 'required|max:255',     
    ];

    public function mount(Audience $Audience){
        $this->audience = $Audience;
        $this->type = $this->audience->type;
        $this->age = $this->audience->age;
        $this->description = $this->audience->description;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();
        
        //Verifica si se modifica el type
        $idAnterior = Audience::where('type', '=', $this->audience->type)->pluck('id')->first();
        $idNuevo = Audience::where('type', '=', $this->type)->pluck('id')->first();
        if ($idAnterior == $idNuevo){
            $this->audience->update([
                'type' => $this->type,
                'age' => $this->age,
                'description' => $this->description,
                'user_id' => auth()->id(),
            ]);
            $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Audience') ]) ]);
        }else{
            //Verificar si se duplica
            $exist = Audience::where('type', '=', $this->type)
                             ->where('id', '!=', $idNuevo)
                             ->first();
            if ($exist){
                $this->audience->update([
                    'type' => $this->type,
                    'age' => $this->age,
                    'description' => $this->description,
                    'user_id' => auth()->id(),
                ]);
            }
           $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Audience') ]) ]);
        }    
    }

    public function render()
    {
        return view('livewire.admin.audience.update', [
            'audience' => $this->audience
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Audience') ])]);
    }
}
