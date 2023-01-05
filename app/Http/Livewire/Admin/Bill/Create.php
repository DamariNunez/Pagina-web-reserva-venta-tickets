<?php

namespace App\Http\Livewire\Admin\Bill;

use App\Models\Bill;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $date;
    public $totalValue;
    public $idPayment;
    
    protected $rules = [
        'date' => 'required|date',
        'totalValue' => 'required|numeric',
        'idPayment' => 'required|numeric',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Bill') ])]);
        
        Bill::create([
            'date' => $this->date,
            'totalValue' => $this->totalValue,
            'idPayment' => $this->idPayment,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.bill.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Bill') ])]);
    }
}
