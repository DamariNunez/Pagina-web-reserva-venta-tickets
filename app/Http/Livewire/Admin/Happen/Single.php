<?php

namespace App\Http\Livewire\Admin\Happen;

use App\Models\Happen;
use Livewire\Component;

class Single extends Component
{

    public $happen;

    public function mount(Happen $Happen){
        $this->happen = $Happen;
    }

    public function delete()
    {
        $this->happen->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Happen') ]) ]);
        $this->emit('happenDeleted');
    }

    public function render()
    {
        return view('livewire.admin.happen.single')
            ->layout('admin::layouts.app');
    }
}
