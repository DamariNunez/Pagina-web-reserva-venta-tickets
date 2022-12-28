<?php

namespace App\Http\Livewire\Admin\Language;

use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $language;

    
    protected $rules = [
        
    ];

    public function mount(Language $Language){
        $this->language = $Language;
        
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
