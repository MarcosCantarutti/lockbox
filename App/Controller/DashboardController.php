<?php

namespace App\Controller;

class DashboardController
{
    public function __invoke()
    {
        if (!auth()) {
            return redirect('/login');
        }


        return view('/dashboard', [
            'user' => auth(),
        ]);
    }
}
