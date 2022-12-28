<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Audience;

class Create extends Component
{
    use WithFileUploads;

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

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Event') ])]);
        
        $arrayEvent = explode('-', $this->idAudience);
        $idAud =  Audience::where('type', $arrayEvent[0])->pluck('id');
        if (!empty($idAud)){
            $this->idAudience = $idAud[0];
        }
        Event::create([
            'name' => $this->name,
            'duration' => $this->duration,
            'value' => $this->value,
            'description' => $this->description,
            'idAudience' => $this->idAudience,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.event.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Event') ])]);
    }
}
