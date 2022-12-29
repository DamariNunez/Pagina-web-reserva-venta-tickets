<?php

namespace App\Http\Livewire\Admin\Language;

use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $language;

    public $name;
    public $ISO_code;
    
    protected $rules = [
        'name' => 'required',
        'ISO_code' => 'required',        
    ];

    public function mount(Language $Language){
        $this->language = $Language;
        $this->name = $this->language->name;
        $this->ISO_code = $this->language->ISO_code;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Language') ]) ]);
        
        $this->language->update([
            'name' => $this->name,
            'ISO_code' => $this->ISO_code,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.language.update', [
            'language' => $this->language
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Language') ])]);
    }
}
