<?php

namespace App\Http\Livewire\Admin\Language;

use App\Models\Language;
use Livewire\Component;

class Single extends Component
{

    public $language;

    public function mount(Language $Language){
        $this->language = $Language;
    }

    public function delete()
    {
        $this->language->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Language') ]) ]);
        $this->emit('languageDeleted');
    }

    public function render()
    {
        return view('livewire.admin.language.single')
            ->layout('admin::layouts.app');
    }
}
