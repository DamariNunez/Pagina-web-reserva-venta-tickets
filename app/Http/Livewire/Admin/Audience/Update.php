<?php

namespace App\Http\Livewire\Admin\Audience;

use App\Models\Audience;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $audience;

    public $type;
    public $age;
    public $description;
    
    protected $rules = [
        'type' => 'required',
        'age' => 'required',
        'description' => 'required',        
    ];

    public function mount(Audience $Audience){
        $this->audience = $Audience;
        $this->type = $this->audience->type;
        $this->age = $this->audience->age;
        $this->description = $this->audience->description;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Audience') ]) ]);
        
        $this->audience->update([
            'type' => $this->type,
            'age' => $this->age,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.audience.update', [
            'audience' => $this->audience
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Audience') ])]);
    }
}
