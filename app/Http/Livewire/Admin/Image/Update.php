<?php

namespace App\Http\Livewire\Admin\Image;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $image;

    
    protected $rules = [
        
    ];

    public function mount(Image $Image){
        $this->image = $Image;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Image') ]) ]);
        
        $this->image->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.image.update', [
            'image' => $this->image
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Image') ])]);
    }
}
