<?php

namespace App\Http\Livewire\Admin\ImageLocation;

use App\Models\ImageLocation;
use Livewire\Component;

class Single extends Component
{

    public $imagelocation;

    public function mount(ImageLocation $ImageLocation){
        $this->imagelocation = $ImageLocation;
    }

    public function delete()
    {
        $this->imagelocation->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('ImageLocation') ]) ]);
        $this->emit('imagelocationDeleted');
    }

    public function render()
    {
        return view('livewire.admin.imagelocation.single')
            ->layout('admin::layouts.app');
    }
}
