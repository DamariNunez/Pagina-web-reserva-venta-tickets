<?php

namespace App\Http\Livewire\Admin\Location;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $location;

    
    protected $rules = [
        
    ];

    public function mount(Location $Location){
        $this->location = $Location;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Location') ]) ]);
        
        $this->location->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.location.update', [
            'location' => $this->location
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Location') ])]);
    }
}
