<?php

namespace App\Http\Controllers\Api\Core\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class LoginController extends Controller
{
    public function login(Request $request){ 
        $validator = Validator::make($request->all(), [ 
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json(['error'=>$validator->errors()], 401);
        }           
        
        try {
            if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){ 
                $user = Auth::user(); 
                $success['token'] =  $user->createToken('SieducaWebApi')->accessToken; 
                $success['authenticated'] = true;
                $success['user_id'] = $user->id;
                $success['roles'] = $user->roles;
                return response()->json([ 'success' => $success ], 200); 
            } else { 
                return response()->json([ 'error' => 'Sin autorización, por favor compruebe sus datos' ], 401); 
            } 
        } catch (Exception $e) {
            return response()->json(["error" => "No es posible iniciar sesión, por favor intente de nuevo"], 500);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
