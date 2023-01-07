<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $category;

    public $name;
    
    protected $rules = [
        'name' => 'required|string|max:150',        
    ];

    public function mount(Category $Category){
        $this->category = $Category;
        $this->name = $this->category->name;        
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
        
        //Verifica si se modifica la categoría
        $idAnterior = Category::where('name', '=', $this->category->name)->pluck('id')->first();
        $idNuevo = Category::where('name', '=', $this->name)->pluck('id')->first();
        if ($idAnterior == $idNuevo){
            $this->category->update([
                'name' => $this->name,
                'user_id' => auth()->id(),
            ]);
            $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Category') ]) ]);
        }else{
            //Verificar si se duplica
            $exist = Category::where('name', '=', $this->name)
                             ->where('id', '!=', $idAnterior)
                             ->first();
            if (empty($exist)){
                $this->category->update([
                    'name' => $this->name,
                    'user_id' => auth()->id(),
                ]);
            }else{
                $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('Category') ]) ]);
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.category.update', [
            'category' => $this->category
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Category') ])]);
    }
}
