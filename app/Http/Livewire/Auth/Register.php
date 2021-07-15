<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Models\Tenant;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class Register extends Component
{
    /** @var string */
    public $name = 'Kevin McKee';

    /** @var string */
    public $companyName = 'Laracasts';

    /** @var string */
    public $email = 'kevin@kevinmckee.me';

    /** @var string */
    public $password = 'password';

    public function register()
    {
        $this->validate([
            'name' => ['required', 'string'],
            'companyName' => ['required', 'string', 'unique:tenants,name'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $tenant = Tenant::create([
            'name' => $this->companyName,
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'role' => 'Admin',
            'password' => Hash::make($this->password),
            'tenant_id' => $tenant->id,
        ]);

        $user->sendEmailVerificationNotification();

        Auth::login($user, true);

        redirect(route('home'));
    }

    public function updated($value) {
        $this->resetErrorBag($value);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
