<?php

namespace App\Http\Livewire\Admin\Happen;

use App\Models\Happen;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Timetable;
use App\Models\Event;

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
        
        $arrayTimetable = explode(' ', $this->idTimetable);
        $idTime = Timetable::where('time', $arrayTimetable[1])->pluck('id');
        $idDate = Timetable::where('date', $arrayTimetable[0])->pluck('id');
        if (!empty($idTime) and !empty($idDate) and $idTime[0] == $idDate[0]){
            $this->idTimetable = $idTime[0];
        }

        $idEv = Event::where('name',$this->idEvent)->pluck('id');
        if (!empty($idEv)){
            $this->idEvent = $idEv[0];
        }
        
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
