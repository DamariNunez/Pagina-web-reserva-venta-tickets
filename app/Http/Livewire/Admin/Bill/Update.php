<?php

namespace App\Http\Livewire\Admin\Bill;

use App\Models\Bill;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $bill;

    public $date;
    public $totalValue;
    public $idPayment;
    
    protected $rules = [
        'date' => 'required',
        'totalValue' => 'required',
        'idPayment' => 'required',        
    ];

    public function mount(Bill $Bill){
        $this->bill = $Bill;
        $this->date = $this->bill->date;
        $this->totalValue = $this->bill->totalValue;
        $this->idPayment = $this->bill->idPayment;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Bill') ]) ]);
        
        $this->bill->update([
            'date' => $this->date,
            'totalValue' => $this->totalValue,
            'idPayment' => $this->idPayment,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.bill.update', [
            'bill' => $this->bill
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Bill') ])]);
    }
}
