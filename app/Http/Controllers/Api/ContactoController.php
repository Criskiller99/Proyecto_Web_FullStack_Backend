<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacto;
use Illuminate\Http\Response;

class ContactoController extends Controller
{
    //crear usuario con solicitudes enviadas del formulario de contacto
    public function create(Request $request)
    {
        $usuarios = new Contacto();

        $usuarios->Nombre = $request->input("Nombre");
        $usuarios->Apellidos = $request->input("Apellidos");
        $usuarios->Tipo_de_identificacion = $request->input("Tipo_de_identificacion");
        $usuarios->Numero_identificacion = $request->input("Numero_identificacion");
        $usuarios->Telefono = $request->input("Telefono");
        $usuarios->Profesion = $request->input("Profesion");
        $usuarios->Email = $request->input("Email");
        $usuarios->Asunto = $request->input("Asunto");
        $usuarios->Descripcion = $request->input("Descripcion");

        //guardar datos solicitud
        $usuarios->save();

        $message = ["message" => "Resgistro completado..."];
        return response()->json($message, Response::HTTP_CREATED);
        // return response()->json($message,Response::201);
    }

    //visualizar todas las solicitudes hechas del formulario
    public function read(Request $request)
    {
        $usuarios = new Contacto();
        $data = $usuarios->all();
        return  response()->json($data, 200);
    }


    public function update(Request $request)
    {
        $idsolicitudes = $request->query("id");
        $usuario = new Contacto();
        $SolicitudParticular = $usuario->find($idsolicitudes);

        $SolicitudParticular->Nombre = $request->input("Nombre");
        $SolicitudParticular->Apellidos = $request->input("Apellidos");
        $SolicitudParticular->Tipo_de_identificacion = $request->input("Tipo_de_identificacion");
        $SolicitudParticular->Numero_identificacion = $request->input("Numero_identificacion");
        $SolicitudParticular->Telefono = $request->input("Telefono");
        $SolicitudParticular->Profesion = $request->input("Profesion");
        $SolicitudParticular->Email = $request->input("Email");
        $SolicitudParticular->Asunto = $request->input("Asunto");
        $SolicitudParticular->Descripcion = $request->input("Descripcion");

        $SolicitudParticular->save();
        $message = ["message" => "Actualización completada...", "id" => $request->query("id"), "solicitudParticular" => $SolicitudParticular->Asunto];

        return $message;
    }

    public function delete(Request $request)
    {

        $idSolicitud = $request->query("id");
        $Solicitud = new Contacto();
        $SolicitudParticular = $Solicitud->find($idSolicitud);
        $SolicitudParticular->delete();

        $message = [
            "message" => "Eliminación completada...",
            "idSolicitud" => $request->query("id"),
        ];
        return $message;
    }
}
