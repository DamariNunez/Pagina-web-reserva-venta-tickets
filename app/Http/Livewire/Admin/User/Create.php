<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $username;
    public $lastname;
    public $email;
    public $password;
    public $phone;
    
    protected $rules = [
        'username' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'password' => 'required',
        'phone' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('User') ])]);
        
        User::create([
            'username' => $this->username,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => $this->password,
            'phone' => $this->phone,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.user.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('User') ])]);
    }
}
