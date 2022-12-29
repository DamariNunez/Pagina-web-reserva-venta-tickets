<?php

namespace App\Http\Livewire\Admin\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Event;

class Update extends Component
{
    use WithFileUploads;

    public $ticket;

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

    public function mount(Ticket $Ticket){
        $this->ticket = $Ticket;
        $this->quantity = $this->ticket->quantity;
        $this->idUser = $this->ticket->idUser;
        $this->idEvent = $this->ticket->idEvent;
        $this->status = $this->ticket->status;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Ticket') ]) ]);
        
        $arrayUser = explode(' ', $this->idUser);
        $idUs =  User::where('username', $arrayUser[0])->pluck('id');
        if (!empty($idUs)){
            $this->idUser = $idUs[0];
        }

        $idEve = Event::where('name', $this->idEvent)->pluck('id');
        if (!empty($idEve)){
            $this->idEvent = $idEve[0];
        }
        
        $this->ticket->update([
            'quantity' => $this->quantity,
            'idUser' => $this->idUser,
            'idEvent' => $this->idEvent,
            'status' => $this->status,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.ticket.update', [
            'ticket' => $this->ticket
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Ticket') ])]);
    }
}
