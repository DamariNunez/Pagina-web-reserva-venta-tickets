<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $event;

    
    protected $rules = [
        
    ];

    public function mount(Event $Event){
        $this->event = $Event;
        
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
        
        $this->event->update([
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
