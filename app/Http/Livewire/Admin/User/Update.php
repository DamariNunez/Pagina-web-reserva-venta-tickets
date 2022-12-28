<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $user;

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

    public function mount(User $User){
        $this->user = $User;
        $this->username = $this->user->username;
        $this->lastname = $this->user->lastname;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->phone = $this->user->phone;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('User') ]) ]);
        
        $this->user->update([
            'username' => $this->username,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => $this->password,
            'phone' => $this->phone,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.user.update', [
            'user' => $this->user
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('User') ])]);
    }
}
