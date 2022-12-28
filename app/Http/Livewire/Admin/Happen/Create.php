<?php

namespace App\Http\Livewire\Admin\Happen;

use App\Models\Happen;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $idTimetable;
    public $idEvent;
    
    protected $rules = [
        'idTimetable' => 'required',
        'idEvent' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Happen') ])]);
        
        Happen::create([
            'idTimetable' => $this->idTimetable,
            'idEvent' => $this->idEvent,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.happen.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Happen') ])]);
    }
}
