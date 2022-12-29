<?php

namespace App\Http\Livewire\Admin\Language;

use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $ISO_code;
    
    protected $rules = [
        'name' => 'required',
        'ISO_code' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Language') ])]);
        
        Language::create([
            'name' => $this->name,
            'ISO_code' => $this->ISO_code,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.language.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Language') ])]);
    }
}
