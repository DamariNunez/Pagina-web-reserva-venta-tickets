<?php

namespace App\Http\Livewire\Admin\Image;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Event;

class Create extends Component
{
    use WithFileUploads;

    public $idEvent;
    public $img;
    
    protected $rules = [
        'img' => ['required', 'mimes:pdf,png,jpg,jpeg'],
        'idEvent' => 'required',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Image') ])]);

       
        //Obtener el id del evento seleccionado
        $idEve =  Event::where('name', $this->idEvent)->pluck('id');
        if (!empty($idEve)){
            $this->idEvent = $idEve[0];
        }
        
        Image::create([
            //'img' => $this->img->getClientOriginalName(),
            //'extension' => $this->img->extension(),
            'img' => 'storage/'.$this->img->store('files', 'public'),
            'idEvent' => $this->idEvent,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.image.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Image') ])]);
    }
}
