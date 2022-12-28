<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;

class Single extends Component
{

    public $event;

    public function mount(Event $Event){
        $this->event = $Event;
    }

    public function delete()
    {
        $this->event->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Event') ]) ]);
        $this->emit('eventDeleted');
    }

    public function render()
    {
        return view('livewire.admin.event.single')
            ->layout('admin::layouts.app');
    }
}
