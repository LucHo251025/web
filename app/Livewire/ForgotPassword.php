<?php

namespace App\Livewire;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $email;

    public function save(){
        $this->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $status = Password::sendResetLink(['email' => $this->email]);

        if($status === Password::RESET_LINK_SENT){
            session()->flash('success', 'Password reset link has been sent to your email');
                $this->email = '';
        }
    }
    public function render()
    {
        return view('livewire.forgot-password')->layout('components.layouts.log-res');
    }
}
