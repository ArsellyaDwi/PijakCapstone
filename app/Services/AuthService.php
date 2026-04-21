<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * Authenticate user.
     *
     * @param string $email
     * @param string $password
     * @param bool $isRemember
     *
     * @return bool
     */
    public function authenticate(string $email, string $password, $isRemember = false): bool
    {
        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user, $isRemember);
            return true;
        }

        return false;
    }

    /**
     * Logout user.
     *
     * @return void
     */
    public function logout(): void
    {
        Auth::logout();

        session()->flush();
    }
}
