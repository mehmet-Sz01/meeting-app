<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // $user değişkeni içinde Google'dan gelen kullanıcı bilgilerini kullanabilirsiniz

        // Örneğin, bu noktada Google Calendar API ile etkileşim kurabilirsiniz.

        return redirect('/');
    }

}
