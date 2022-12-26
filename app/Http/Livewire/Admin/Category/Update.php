<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $category;

    public $nameCategory;
    
    protected $rules = [
        'nameCategory' => 'required',        
    ];

    public function mount(Category $Category){
        $this->category = $Category;
        $this->nameCategory = $this->category->nameCategory;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Category') ]) ]);
        
        $this->category->update([
            'nameCategory' => $this->nameCategory,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.category.update', [
            'category' => $this->category
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Category') ])]);
    }
}
