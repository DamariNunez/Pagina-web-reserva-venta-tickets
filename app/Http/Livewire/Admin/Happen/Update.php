<?php

namespace App\Http\Livewire\Admin\Happen;

use App\Models\Happen;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $happen;

    
    protected $rules = [
        
    ];

    public function mount(Happen $Happen){
        $this->happen = $Happen;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Happen') ]) ]);
        
        $this->happen->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.happen.update', [
            'happen' => $this->happen
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Happen') ])]);
    }
}
