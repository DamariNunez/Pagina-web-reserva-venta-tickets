<?php

namespace App\Http\Livewire\Admin\Audience;

use App\Models\Audience;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $type;
    public $age;
    public $description;
    
    protected $rules = [
        'type' => 'required',
        'age' => 'required',
        'description' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Audience') ])]);
        
        Audience::create([
            'type' => $this->type,
            'age' => $this->age,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.audience.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Audience') ])]);
    }
}
