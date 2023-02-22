<?php

namespace App\Http\Livewire\Admin\Ticket;

use App\Models\Ticket;
use App\Models\User;
use App\Models\Event;
use App\Models\Held;
use App\Models\Place;
use App\Mail\EmailApproved;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;

class Update extends Component
{
    use WithFileUploads;

    public $ticket;

    public $quantity;
    public $idUser;
    public $idEvent;
    public $idHeld;
    public $idPlace;
    public $status;
    
    protected $rules = [
        'quantity' => 'required|numeric',
        'idUser' => 'required',
        'idEvent' => 'required',
        'idHeld'=> 'required', 
        'idPlace' => 'required',
        'status' => 'required|string',      
    ];

    public function mount(Ticket $Ticket){
        $this->ticket = $Ticket;
        $this->quantity = $this->ticket->quantity;
        $this->idUser = $this->ticket->idUser;
        $this->idEvent = $this->ticket->idEvent;
        $this->idHeld = $this->ticket->idHeld;
        $this->idPlace = $this->ticket->idPlace;
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
        
        $arrayHeld = explode(' ', $this->idHeld);
        $idHe =  Held::where('date', $arrayHeld[0])
                     ->where('time', $arrayHeld[1])->pluck('id');
        if (!empty($idHe)){
            $this->idHeld = $idHe[0];
        }

        $arrayPlace = explode('-', $this->idPlace);
        $idPla =  Place::where('name', $arrayPlace[0])->pluck('id');
        if (!empty($idPla)){
            $this->idPlace = $idPla[0];
        }

        $user = User::where('id', $this->idUser)->get();
        if ($this->status == 'approved'){
            Mail::to($user[0]->email)->send(new EmailApproved($user[0]->id));
        }

        $this->ticket->update([
            'quantity' => $this->quantity,
            'idUser' => $this->idUser,
            'idEvent' => $this->idEvent,
            'idHeld' => $this->idHeld,
            'idPlace' => $this->idPlace,
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
