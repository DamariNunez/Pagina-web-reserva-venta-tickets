<?php

namespace App\Http\Livewire\Admin\Held;

use App\Models\Held;
use Livewire\Component;

class Single extends Component
{

    public $held;

    public function mount(Held $Held){
        $this->held = $Held;
    }

    public function delete()
    {
        $this->held->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Held') ]) ]);
        $this->emit('heldDeleted');
    }

    public function render()
    {
        return view('livewire.admin.held.single')
            ->layout('admin::layouts.app');
    }
}
