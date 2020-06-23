<?php

namespace App\Http\Controllers\Api\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Core\Role;
use App\Models\Core\Webapp;
use App\Models\Core\RoleUser;
use Validator;

class RoleController extends Controller
{
    public function index(){
        return view('role.index');
    }

    public function getRoles(){
        try {
            $roles = Role::all();
            return response()->json(['success' => $roles], 200);
        } catch(Exception $e) {
            return response()->json(['error' => 'No es posible mostrar los roles: '.$e->getMessage()], 500);
        }
    }

    public function create(){
        return view('role.create');
    }

    public function createRole(Request $r){
        $v = Validator::make($r->all(), [
            'name' => 'required'
        ]);
        
        if($v->fails()){
            return response()->json(['error' => $v->errors()], 400);
        } 

        try {
            Role::create($r->all());
            return response()->json(['success' => 'El rol fue creado correctamente'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'No es posible crear el rol: '.$e->getMessage()]);
        }
    }

    public function editRole($id){
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
    }

    public function updateRole(Request $r, $id){
        if(!$id){
            return response()->json(['error' => 'Hubo un error en la solicitud, por favor intente de nuevo'], 400);
        }

        $v = Validator::make($r->all(), [
            'name' => 'required'
        ]);

        if($v->fails()){
            return response()->json(['error' => $v->errors()], 400);
        } 

        try {
            if($role = Role::findOrFail($r->id)){
                $role->name = $r->name;
                $role->save();
                return response()->json(['success' => 'El rol se ha actualizado correctamente'], 200);
            } else {
                return response()->json(['error' => 'Recurso no encontrado, por favor contacte al administrador del sistema'], 404);
            }
        } catch (Exception $e) {
            return response()->json(['error' => 'No es posible actualizar el rol: '.$e->getMessage()], 500);
        }
    }

    public function deleteRole($id){
        if(!$id){
            return response()->json(['error' => 'Hubo un error en la solicitud, por favor intente de nuevo'], 400);
        }
        try {
            if(Role::findOrFail($id)){
                if(count(RoleUser::where('role_id', $id)->get()) > 0){
                    return response()->json(['error' => 'No es posible eliminar el rol, está asignado a uno o más usuarios'], 400);
                } else {
                    Role::destroy($id);
                    return response()->json(['success' => 'El rol fue eliminado correctamente'], 200);   
                }
            } else {
                return response()->json(['error' => 'Recurso no encontrado, por favor contacte al administrador del sistema'], 404);
            }
        } catch(Exception $e) {
            return response()->json(['error' => 'No es posible eliminar el rol: '.$e->getMessage()], 500);
        }
    }
}
