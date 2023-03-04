<?php

namespace App\Http\Livewire\Admin\Ilocation;

use App\Models\Ilocation;
use Livewire\Component;

class Single extends Component
{

    public $ilocation;

    public function mount(Ilocation $Ilocation){
        $this->ilocation = $Ilocation;
    }

    public function delete()
    {
        $this->ilocation->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Ilocation') ]) ]);
        $this->emit('ilocationDeleted');
    }

    public function render()
    {
        return view('livewire.admin.ilocation.single')
            ->layout('admin::layouts.app');
    }
}
