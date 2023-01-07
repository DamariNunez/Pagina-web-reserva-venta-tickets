<?php

namespace App\Http\Livewire\Admin\Language;

use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $language;

    public $name;
    public $ISO_code;
    
    protected $rules = [
        'name' => 'required|string|max:50',
        'ISO_code' => 'required|string|max:2|min:1',       
    ];

    public function mount(Language $Language){
        $this->language = $Language;
        $this->name = $this->language->name;
        $this->ISO_code = $this->language->ISO_code;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Language') ]) ]);
        
        //Verifica si se modifica el idioma y el ISO_code
        $idAnterior = Language::where('name', $this->language->name)->where('ISO_code', $this->language->ISO_code)->first();
        $idNuevo = Language::where('name', $this->name)->where('ISO_code', $this->ISO_code)->first();
        if ($idAnterior != $idNuevo){
            //verificar si se duplica
            $exist = Language::where('name', $this->name)->where('ISO_code', $this->ISO_code)->first();
            //Modificar lugar, fecha y hora del evento
            if(empty($exist)){
                $this->language->update([
                    'name' => $this->name,
                    'ISO_code' => $this->ISO_code,
                    'user_id' => auth()->id(),
                ]);
            }else{
                $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Held') ])]);
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.language.update', [
            'language' => $this->language
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Language') ])]);
    }
}
