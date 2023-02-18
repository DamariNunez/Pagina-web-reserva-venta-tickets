<?php

namespace App\Http\Livewire\Admin\Image;

use App\Models\Image;
use Livewire\Component;

class Single extends Component
{

    public $image;

    public function mount(Image $Image){
        $this->image = $Image;
    }

    public function delete()
    {
        $this->image->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Image') ]) ]);
        $this->emit('imageDeleted');
    }

    public function render()
    {
        return view('livewire.admin.image.single')
            ->layout('admin::layouts.app');
    }
}
