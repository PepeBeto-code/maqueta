<?php

namespace App\Http\Controllers;

use App\Http\Requests\BackRequest;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FormController extends Controller
{
    public function register(BackRequest $request):JsonResponse
    {
        // $validated = $request->validate([
        //     'name' => 'min:5',
        //     //'body' => 'required',
        // ]);
        $form = Form::create($request->all());
        return response()->json(['data' => $form], 200);
    }
}
