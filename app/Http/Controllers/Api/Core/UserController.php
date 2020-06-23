<?php

namespace App\Http\Controllers\Api\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use App\Models\Core\RoleUser;

class UserController extends Controller
{

    public function index(){
        return view('user.index');
    }

    public function getUsers(){
        try {
            $users = User::with('roles')->get();
            foreach($users as $user){
                $roles = "";
                if(count($user->roles) == 0){
                    $user["concatRol"] = "Ninguno";
                } else {
                    foreach($user->roles as $rol){
                        $roles = $roles.$rol->name.', ';
                    }
                    $user["concatRol"] = mb_substr($roles, 0, -2);
                }
                
            }
            return response()->json(["success" => $users], 200);
        } catch (Exception $e) {
            return response()->json(["error" => "No es posible mostrar usuarios: ".$e->getMessage()]);
        }
    }

    public function create(){
        return view('user.create');
    }

    public function createUser(Request $r){
        $v = Validator::make($r->all(), [ 
            'name' => 'required',
            'username' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required',  
            'cpassword' => 'required|same:password', 
        ]);
        if ($v->fails()) {          
            return response()->json(['error' => $v->errors()], 400);    
        } 
        try {
            $r->merge(['password' => bcrypt($r->password)]);
            User::create($r->all());
            return response()->json(["success" => "El usuario fue creado correctamente"], 200);
        } catch (Exception $e) {
            return response()->json(["error" => "No es posible crear el usuario: ".$e->getMessage()]);
        }
    }

    public function editUser($id){
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function rolesUser($id){
        $user = User::findOrFail($id);
        return view('user.roles', compact('user'));
    }

    public function updateUser(Request $r, $id) {
        if(!$id) {
            return response()->json(['error' => 'Hubo un error en la solicitud, por favor intente de nuevo'], 400);
        }
        $v = Validator::make($r->all(), [
            'name' => 'required',
            'username' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required',
            'cpassword' => 'required|same:password'
        ]);
        if ($v->fails()) {          
            return response()->json(['error' => $v->errors()], 400);    
        } 
        try {
            if($user = User::findOrFail($id)){
                $r->merge(['password' => bcrypt($r->password)]);
                $user->name = $r->name;
                $user->username = $r->username;
                $user->password = $r->password;
                $user->email = $r->email;
                $user->save();
                return response()->json(['success' => 'El usuario fue actualizado correctamente'], 200);
            } else {
                return response()->json(['error' => 'Recurso no encontrado, por favor contacte al administrador del sistema'], 404);
            }
        } catch (Exception $e) {
            return response()->json(["error" => "No es posible actualizar el usuario: ".$e->getMessage()], 500);
        }
        if($v->fails()){
            return response()->json(["error" => $v->errors()], 400);
        }
    }

    public function deleteUser($id){
        if(!$id){
            return response()->json(['error' => 'Hubo un error en la solicitud, por favor intente de nuevo'], 400);
        }
        try{
            if(User::findOrFail($id)){
                if(count(RoleUser::where('user_id', $id)->get()) > 0){
                    $rolesuser = RoleUser::where('user_id', $id)->get(['id']);
                    RoleUser::destroy($rolesuser->toArray());
                    return response()->json(['error' => 'No es posible eliminar el usuario, cuenta con roles asignados'], 400);
                }
                User::destroy($id);
                return response()->json(['success' => 'El usuario fue eliminado correctamente'], 200);
                
            } else {
                return response()->json(['error' => 'Recurso no encontrado, por favor contacte al administrado del sistema'], 404);
            }
        } catch (Exception $e) {
            return response()->json(['error' => 'No es posible eliminar el usuario: '.$e->getMessage()], 500);
        }
    }
}
