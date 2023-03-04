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

    public $idUser;
    public $status;
    
    protected $rules = [
        'status' => 'required|string',      
    ];

    public function mount(Ticket $Ticket){
        $this->ticket = $Ticket;
        $this->idUser = $this->ticket->idUser;
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

        $user = User::where('id', $this->idUser)->get();
        if ($this->status == 'approved'){
            Mail::to($user[0]->email)->send(new EmailApproved($user[0]->id));
        }

        $this->ticket->update([
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
