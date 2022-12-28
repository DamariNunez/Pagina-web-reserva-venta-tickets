<?php

namespace App\Http\Livewire\Admin\Timetable;

use App\Models\Timetable;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $time;
    public $date;
    
    protected $rules = [
        'time' => 'required',
        'date' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Timetable') ])]);
        
        Timetable::create([
            'time' => $this->time,
            'date' => $this->date,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.timetable.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Timetable') ])]);
    }
}
