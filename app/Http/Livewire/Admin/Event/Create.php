<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Audience;
use App\Models\Language;
use App\Models\Available;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $duration;
    public $value;
    public $description;
    public $idAudience;
    public $idLanguage;
    
    protected $rules = [
        'name' => 'required',
        'duration' => 'required',
        'value' => 'required',
        'description' => 'required',
        'idAudience' => 'required',  
        'idLanguage' => 'required',      
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Event') ])]);
        
        //Obtener el id de la audiencia seleccionada
        $arrayEvent = explode('-', $this->idAudience);
        $idAud =  Audience::where('type', $arrayEvent[0])->pluck('id');
        if (!empty($idAud)){
            $this->idAudience = $idAud[0];
        }

        //Almacenar evento
        Event::create([
            'name' => $this->name,
            'duration' => $this->duration,
            'value' => $this->value,
            'description' => $this->description,
            'idAudience' => $this->idAudience,
            'user_id' => auth()->id(),
        ]);

        //Obtener el id del evento almacenado
        $idEvent = Event::latest('id')->first();

        //Obtener el id del idioma seleccionado
        if(!empty($idEvent)){
            $arrayLanguages = $this->idLanguage;
            foreach ($arrayLanguages as $language){
                $idLan = Language::where('name', $language)->pluck('id');
                $this->idLanguage = $idLan[0];
                //Almacenar idiomas del evento
                Available::create([
                    'idEvent' => $idEvent->id,
                    'idLanguage' => $this->idLanguage,
                    'user_id' => auth()->id(),
                ]);
            } 
        }       

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.event.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Event') ])]);
    }
}
