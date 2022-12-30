<?php

namespace App\Http\Livewire\Admin\Payment;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $payment;

    public $totalCost;
    public $idTicket;
    
    protected $rules = [
        'totalCost' => 'required',
        'idTicket' => 'required',        
    ];

    public function mount(Payment $Payment){
        $this->payment = $Payment;
        $this->totalCost = $this->payment->totalCost;
        $this->idTicket = $this->payment->idTicket;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Payment') ]) ]);
        
        $this->payment->update([
            'totalCost' => $this->totalCost,
            'idTicket' => $this->idTicket,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.payment.update', [
            'payment' => $this->payment
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Payment') ])]);
    }
}
