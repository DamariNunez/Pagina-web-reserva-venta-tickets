<?php

namespace App\Http\Livewire\Admin\Ilocation;

use App\Models\Ilocation;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $ilocation;

    
    protected $rules = [
        
    ];

    public function mount(Ilocation $Ilocation){
        $this->ilocation = $Ilocation;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Ilocation') ]) ]);
        
        $this->ilocation->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.ilocation.update', [
            'ilocation' => $this->ilocation
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Ilocation') ])]);
    }
}
