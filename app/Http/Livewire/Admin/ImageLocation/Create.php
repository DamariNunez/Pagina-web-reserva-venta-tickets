<?php

namespace App\Http\Livewire\Admin\ImageLocation;

use App\Models\ImageLocation;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Place;

class Create extends Component
{
    use WithFileUploads;

    public $idPlace;
    public $img;

    protected $rules = [
        'img' => ['required', 'mimes:pdf,png,jpg,jpeg'],
        'idPlace' => 'required',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('ImageLocation') ])]);
        
        //Obtener el id del lugar seleccionado
        $arrayPlace = explode(', ', $this->idPlace);
        $idPla =  Place::where('name', $arrayPlace[0])->pluck('id');
        if (!empty($idPla)){
            $this->idPlace = $idPla[0];
        }

        ImageLocation::create([
            'img' => 'storage/'.$this->img->store('imagePlace', 'public'),
            'idPlace' => $this->idPlace,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.imagelocation.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('ImageLocation') ])]);
    }
}
