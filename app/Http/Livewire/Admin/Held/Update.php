<?php

namespace App\Http\Livewire\Admin\Held;

use App\Models\Held;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $held;

    public $idEvent;
    public $idPlace;
    public $date;
    public $time;
    
    protected $rules = [
        'idEvent' => 'required',
        'idPlace' => 'required',
        'date' => 'required',
        'time' => 'required',        
    ];

    public function mount(Held $Held){
        $this->held = $Held;
        $this->idEvent = $this->held->idEvent;
        $this->idPlace = $this->held->idPlace;
        $this->date = $this->held->date;
        $this->time = $this->held->time;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Held') ]) ]);
        
        $this->held->update([
            'idEvent' => $this->idEvent,
            'idPlace' => $this->idPlace,
            'date' => $this->date,
            'time' => $this->time,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.held.update', [
            'held' => $this->held
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Held') ])]);
    }
}
