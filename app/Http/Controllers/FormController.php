<?php

namespace App\Http\Controllers;

use App\Http\Requests\BackRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Register;
use App\Models\Form2;
use App\Models\Form3;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FormController extends Controller
{
    public function register(BackRequest $request):JsonResponse
    {
        $form = Register::create($request->all());
        return response()->json(['data' => $form], 200);
    }

    public function login(LoginRequest $request)
    {
        $r=Register::where('email',$request->email)->first();
        if ( $r == null) {
            return response()->json(['data' => "El email no se encuentra"], 400);
        }
        if ( $r->password != $request->password) {
            return response()->json(['data' => "El La contraseña esta mal"], 400);
        }
        
        return response()->json(['data' => "Credenciales validas"], 200);
    }

}
