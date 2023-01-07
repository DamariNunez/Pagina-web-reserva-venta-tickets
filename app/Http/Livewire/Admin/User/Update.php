<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hash;

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
        'username' => 'required|string|max:50|min:2',
        'lastname' => 'required|string|max:50|min:2',
        'email' => 'required|string|email',
        'password' => 'required|string',
        'phone' => 'required|min:9|max:10', 
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
        
        //Verifica si se modifica el email
        $idAnterior = User::where('email', '=', $this->user->email)->pluck('id')->first();
        $idNuevo = User::where('email', '=', $this->email)->pluck('id')->first();
        if ($idAnterior == $idNuevo){
            $this->user->update([
                'username' => $this->username,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'phone' => $this->phone,
                'user_id' => auth()->id(),
            ]);
            $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('User') ]) ]);
        }else{
            //Verificar si se duplica
            $exist = User::where('email', '=', $this->email)
                             ->where('id', '!=', $idNuevo)
                             ->first();
            if ($exist){
                $this->user->update([
                    'username' => $this->username,
                    'lastname' => $this->lastname,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'phone' => $this->phone,
                    'user_id' => auth()->id(),
                ]);
            }
            $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('ErrorTypeUpdatedMessage', ['name' => __('User') ]) ]);
        }
    }

    public function render()
    {
        return view('livewire.admin.user.update', [
            'user' => $this->user
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('User') ])]);
    }
}
