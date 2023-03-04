<?php

namespace App\Http\Livewire\Admin\ImageLocation;

use App\Models\ImageLocation;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $imagelocation;

    
    protected $rules = [
        
    ];

    public function mount(ImageLocation $ImageLocation){
        $this->imagelocation = $ImageLocation;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('ImageLocation') ]) ]);
        
        $this->imagelocation->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.imagelocation.update', [
            'imagelocation' => $this->imagelocation
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('ImageLocation') ])]);
    }
}
