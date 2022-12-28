<?php

namespace App\Http\Livewire\Admin\Payment;

use App\Models\Payment;
use Livewire\Component;

class Single extends Component
{

    public $payment;

    public function mount(Payment $Payment){
        $this->payment = $Payment;
    }

    public function delete()
    {
        $this->payment->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Payment') ]) ]);
        $this->emit('paymentDeleted');
    }

    public function render()
    {
        return view('livewire.admin.payment.single')
            ->layout('admin::layouts.app');
    }
}
