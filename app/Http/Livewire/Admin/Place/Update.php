<?php

namespace App\Http\Livewire\Admin\Place;

use App\Models\Place;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $place;

    
    protected $rules = [
        
    ];

    public function mount(Place $Place){
        $this->place = $Place;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Place') ]) ]);
        
        $this->place->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.place.update', [
            'place' => $this->place
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Place') ])]);
    }
}
