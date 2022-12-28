<?php

namespace App\Http\Livewire\Admin\Available;

use App\Models\Available;
use Livewire\Component;

class Single extends Component
{

    public $available;

    public function mount(Available $Available){
        $this->available = $Available;
    }

    public function delete()
    {
        $this->available->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Available') ]) ]);
        $this->emit('availableDeleted');
    }

    public function render()
    {
        return view('livewire.admin.available.single')
            ->layout('admin::layouts.app');
    }
}
