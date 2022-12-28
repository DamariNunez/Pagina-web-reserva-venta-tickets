<?php

namespace App\Http\Livewire\Admin\Timetable;

use App\Models\Timetable;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $timetable;

    
    protected $rules = [
        
    ];

    public function mount(Timetable $Timetable){
        $this->timetable = $Timetable;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Timetable') ]) ]);
        
        $this->timetable->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.timetable.update', [
            'timetable' => $this->timetable
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Timetable') ])]);
    }
}
