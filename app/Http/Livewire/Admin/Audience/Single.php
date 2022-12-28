<?php

namespace App\Http\Livewire\Admin\Audience;

use App\Models\Audience;
use Livewire\Component;

class Single extends Component
{

    public $audience;

    public function mount(Audience $Audience){
        $this->audience = $Audience;
    }

    public function delete()
    {
        $this->audience->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Audience') ]) ]);
        $this->emit('audienceDeleted');
    }

    public function render()
    {
        return view('livewire.admin.audience.single')
            ->layout('admin::layouts.app');
    }
}
