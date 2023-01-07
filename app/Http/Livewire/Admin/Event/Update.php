<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Audience;
use App\Models\Language;
use App\Models\Available;

class Update extends Component
{
    use WithFileUploads;

    public $event;

    public $name;
    public $duration;
    public $value;
    public $description;
    public $idAudience;
    public $idLanguage;
    
    protected $rules = [
        'name' => 'required|string|max:255',
        'duration' => 'required|string|max:255',
        'value' => 'required|numeric|min:1',
        'description' => 'required|string|max:255',
        'idAudience' => 'required',  
        'idLanguage' => 'required',    
    ];

    public function mount(Event $Event){
        $this->event = $Event;
        $this->name = $this->event->name;
        $this->duration = $this->event->duration;
        $this->value = $this->event->value;
        $this->description = $this->event->description;
        $this->idAudience = $this->event->idAudience;  
        $this->idLanguage = $this->event->idLanguage;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Event') ]) ]);
       
        //Obtener el id de la audiencia seleccionada
        if (!empty($this->idAudience) and !is_numeric($this->idAudience)){
            $arrayEvent = explode('-', $this->idAudience);
            if (!empty($arrayEvent[0])){
                $idAud =  Audience::where('type',  $arrayEvent[0])->pluck('id');
                if (!empty($idAud) or $idAud != 0){
                    $this->idAudience = $idAud[0];
                }
            }
        }

        //Modificar evento
        $this->event->update([
            'name' => $this->name,
            'duration' => $this->duration,
            'value' => $this->value,
            'description' => $this->description,
            'idAudience' => $this->idAudience,
            'user_id' => auth()->id(),
        ]);        
        
        $languagesList = Available::where('idEvent', $this->event->id)->pluck('idLanguage');
        $arrayLanguages = $this->idLanguage;
        //Agregar idiomas
        foreach ($arrayLanguages as $language){
            $idLan = Language::where('name', $language)->pluck('id');
            $this->idLanguage = $idLan[0];
            if (!Available::where('idEvent', $this->event->id)->where('idLanguage', $this->idLanguage)->exists()){
                Available::create([
                    'idEvent' => $this->event->id,
                    'idLanguage' => $this->idLanguage,
                    'user_id' => auth()->id(),
                ]);
            }                 
        }
        //Eliminar idiomas
        $idLanguageArray[] = null;
        foreach ($arrayLanguages as $language){
            $idLan =  Language::where('name', $language)->pluck('id');
            array_push($idLanguageArray, $idLan[0]);                        
        }
        foreach ($languagesList as $lan){
            if (!in_array($lan, $idLanguageArray)){
                $languageAvailable = Available::where('idEvent', $this->event->id)
                                ->where('idLanguage', $lan)->delete();
            }
        }                
    }

    public function render()
    {
        return view('livewire.admin.event.update', [
            'event' => $this->event
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Event') ])]);
    }
}
