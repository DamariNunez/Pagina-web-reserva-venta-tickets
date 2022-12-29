<?php

namespace App\Http\Livewire\Admin\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Event;

class Create extends Component
{
    use WithFileUploads;

    public $quantity;
    public $idUser;
    public $idEvent;
    public $status;
    
    protected $rules = [
        'quantity' => 'required',
        'idUser' => 'required',
        'idEvent' => 'required',
        'status' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Ticket') ])]);
        
        $arrayUser = explode(' ', $this->idUser);
        $idUs =  User::where('username', $arrayUser[0])->pluck('id');
        if (!empty($idUs)){
            $this->idUser = $idUs[0];
        }

        $idEve =  Event::where('name', $this->idEvent)->pluck('id');
        if (!empty($idEve)){
            $this->idEvent = $idEve[0];
        }

        Ticket::create([
            'quantity' => $this->quantity,
            'idUser' => $this->idUser,
            'idEvent' => $this->idEvent,
            'status' => $this->status,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.ticket.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Ticket') ])]);
    }
}
