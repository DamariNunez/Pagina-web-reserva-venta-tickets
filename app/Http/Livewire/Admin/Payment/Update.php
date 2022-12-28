<?php

namespace App\Http\Livewire\Admin\Payment;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $payment;

    
    protected $rules = [
        
    ];

    public function mount(Payment $Payment){
        $this->payment = $Payment;
        
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
