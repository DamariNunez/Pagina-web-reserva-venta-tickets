<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Audience;

class Update extends Component
{
    use WithFileUploads;

    public $event;

    public $name;
    public $duration;
    public $value;
    public $description;
    public $idAudience;
    
    protected $rules = [
        'name' => 'required',
        'duration' => 'required',
        'value' => 'required',
        'description' => 'required',
        'idAudience' => 'required',        
    ];

    public function mount(Event $Event){
        $this->event = $Event;
        $this->name = $this->event->name;
        $this->duration = $this->event->duration;
        $this->value = $this->event->value;
        $this->description = $this->event->description;
        $this->idAudience = $this->event->idAudience;        
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
       
        $arrayEvent = explode('-', $this->idAudience);
        $idAud =  Audience::where('type',  $arrayEvent[0])->pluck('id');
        if (!empty($idAud)){
            $this->idAudience = $idAud[0];
        }
        $this->event->update([
            'name' => $this->name,
            'duration' => $this->duration,
            'value' => $this->value,
            'description' => $this->description,
            'idAudience' => $this->idAudience,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.event.update', [
            'event' => $this->event
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Event') ])]);
    }
}
