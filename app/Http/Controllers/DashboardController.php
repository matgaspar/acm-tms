<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class DashboardController extends Controller
{
    /**
     * Show the general profile settings screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function Load(Request $request)
    {
        return Jetstream::inertia()->render($request, 'Dashboard', [
            'Dados' => [
                "Name" => "ACM",
                "Description" => "Teste de Descrição.",
                "Users" => $request->user()->all()
            ],
        ]);
    }
}
