<?php

namespace App\Http\Livewire\Admin\Payment;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $totalCost;
    public $voucher;
    
    protected $rules = [
        'totalCost' => 'required',
        'voucher' => ['required', 'mimes:pdf,png,jpg,jpeg'],
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Payment') ])]);
        
        Payment::create([
            'totalCost' => $this->totalCost,
            'voucher' => 'storage/'.$this->voucher->store('comprobantes', 'public'),
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.payment.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Payment') ])]);
    }
}
