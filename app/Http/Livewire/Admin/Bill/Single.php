<?php

namespace App\Http\Livewire\Admin\Bill;

use App\Models\Bill;
use Livewire\Component;

class Single extends Component
{

    public $bill;

    public function mount(Bill $Bill){
        $this->bill = $Bill;
    }

    public function delete()
    {
        $this->bill->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Bill') ]) ]);
        $this->emit('billDeleted');
    }

    public function render()
    {
        return view('livewire.admin.bill.single')
            ->layout('admin::layouts.app');
    }
}
