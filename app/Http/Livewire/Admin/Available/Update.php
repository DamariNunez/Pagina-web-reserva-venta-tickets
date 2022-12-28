<?php

namespace App\Http\Livewire\Admin\Available;

use App\Models\Available;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $available;

    
    protected $rules = [
        
    ];

    public function mount(Available $Available){
        $this->available = $Available;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Available') ]) ]);
        
        $this->available->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.available.update', [
            'available' => $this->available
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Available') ])]);
    }
}
