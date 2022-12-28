<?php

namespace App\Http\Livewire\Admin\Held;

use App\Models\Held;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $held;

    
    protected $rules = [
        
    ];

    public function mount(Held $Held){
        $this->held = $Held;
        
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
