<?php

namespace App\Http\Livewire\Designer;

use Livewire\Component;
use App\Traits\WithSweetAlert;
use App\Traits\WithSweetAlertToast;
use App\Models\User;
use App\Models\Designer;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Signup extends Component
{

    use WithSweetAlert;
    use WithSweetAlertToast;


    public $name;
    public $email;
    public $password;
    public $confirm;
    public $tos;

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:8'],
        'confirm' => ['required'],
        'tos' => ['required', 'boolean']
    ];

    public function render()
    {
        return view('designer.components.signup');
    }


    public function handleFormSubmit()
    {
        return $this->createUser();
    }


    private function createUser()
    {
        $this->validate();

        if($this->password != $this->confirm)
        {
            return $this->errorToast('Confirm password not match!');
        }

        $user = new User();

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        
        if($user->save())
        {
            $user->assignRole('designer');
            Auth::login($user);

            $this->createDesigner($user->id);

            $this->reset();
            
            return redirect()->route('designer.dashboard');
        }

        return $this->error('Failed', 'Failed to create. Something went wrong');
    }

    private function createDesigner($userId)
    {
        $designer = new Designer();

        $designer->user_id = $userId;

        return $designer->save();
    }
}
