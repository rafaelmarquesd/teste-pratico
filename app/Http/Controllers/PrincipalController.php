<?php

namespace App\Http\Controllers;
use App\Models\Pessoa;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();

        return view('principal', [
            'pessoas' => $pessoas,
        ]);
        
    }
}
