<?php

namespace App\Http\Controllers\Api\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\RoleUser;
use Validator;

class RoleUserController extends Controller
{
    public function getRolesUser($id){
        try {
            return response()->json(['success' => RoleUser::where('user_id', $id)->with('role', 'user')->get()], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'No es posible mostrar los roles asignados a usuarios'], 400);
        }
    }

    public function createRoleUser(Request $r){
        $v = Validator::make( $r->all(),[
            'role_id' => 'required',
            'user_id' => 'required'
        ]);

        if($v->fails()){
            return response()->json(['error' => $v->errors()], 400);
        }
        
        try {
            if(count(RoleUser::where('user_id', $r->user_id)->where('role_id', $r->role_id)->get()) > 0){
                return response()->json(['error' => 'El rol ya se encuentra asignado al usuario'], 400);
            } 
            RoleUser::create($r->all());
            return response()->json(['success' => 'El rol se ha asignado al usuario correctamente'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'No es posible asignal el rol a usuario: '.$e->getMessage()], 500);
        }
    }

    public function deleteRoleUser($id){
        if(!$id) {
            return response()->json(['error' => 'Hubo un error en la solicitud, por favor intente de nuevo'], 400);
        }
        try {
            if(RoleUser::findOrFail($id)){
                RoleUser::destroy($id);
                return response()->json(['success' => 'La asignación de rol a usuario se eliminó correctamente'], 200);
            } 
        } catch (Exception $e) {
            return response()->json(['error' => 'No es posible eliminar la asignación de rol a usuario: '.$e->getMessage()], 500);
        }
    }
}
