<?php

namespace App\Http\Livewire\Admin\Timetable;

use App\Models\Timetable;
use Livewire\Component;

class Single extends Component
{

    public $timetable;

    public function mount(Timetable $Timetable){
        $this->timetable = $Timetable;
    }

    public function delete()
    {
        $this->timetable->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Timetable') ]) ]);
        $this->emit('timetableDeleted');
    }

    public function render()
    {
        return view('livewire.admin.timetable.single')
            ->layout('admin::layouts.app');
    }
}
