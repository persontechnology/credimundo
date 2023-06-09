<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\FormularioSolicitudCredito;
use App\Notifications\NuevoSolicitudCreditoEnLinea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class PaginaWebController extends Controller
{
    public function inicio()
    {
        //subiendo cambios
        // Artisan::call('cache:clear');
        // Artisan::call('config:clear');
        // Artisan::call('config:cache');
        // Artisan::call('storage:link');
        // Artisan::call('key:generate');
        // Artisan::call('migrate:fresh --seed');

        return view('inicio');
    }

    public function ahorros()
    {
        return view('ahorros');
    }

    public function creditos()
    {
        return view('creditos');
    }

    public function inversiones()
    {
        return view('inversiones');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
    public function contacto()
    {
        return view('contacto');
    }

    public function descargarSolicitudCredito()
    {
        return response()->download(public_path('pdf/credimundo-solicitud-de-credito.pdf'));
    }

    public function simuladorCredito()
    {
        return view('simulador-credito');
    }

    public function confirmarSolicitudCredito(Request $request)
    {
        $request->validate([
            'monto'=>'required|numeric|gte:10|lte:10000',
            'tipo'=>'required|in:15.62,20',
            'plazo'=>'required|in:6m,1y,2y,3y,4y,5y',
        ]);
        $data = array('detalle' => $request );
        return view('confirmar-solicitud-credito',$data);
    }

    public function enviarSolicitudCredito(Request $request)
    {
        $request->validate([
            'monto'=>'required|numeric|gte:10|lte:10000',
            'tipo'=>'required|in:15.62,20',
            'plazo'=>'required|in:6m,1y,2y,3y,4y,5y',
            'apellidosNombres'=>'required|string|max:255',
            'cedula'=>'required',
            'celular'=>'required',
            'correoElectronico'=>'required|string|email|max:255',
        ]);

        $user=new User();
        $user->email='david.criollo14@gmail.com';
        $user->notify(new NuevoSolicitudCreditoEnLinea($request));
        $msg='¡Gracias por solicitar un crédito en CREDIMUNDO..! <br><br> Estamos comprometidos en brindarte un servicio ágil y eficiente. Nuestro equipo de profesionales trabaja diligentemente para validar tu información en el menor tiempo posible. <br> Pronto, uno de nuestros asesores se pondrá en contacto contigo para ofrecerte la mejor solución financiera adaptada a tus necesidades. <br> <br>¡Agradecemos tu confianza en nosotros y estamos ansiosos por ayudarte a alcanzar tus metas.';
        return redirect()->route('inicio')->with('success', $msg);

    }

    public function solicitudCredito()
    {
        return view('solicitudCredito');
    }

    public function enviarFormularioCredito(Request $request)
    {
        $request->validate([
            'correoElectronico'=>'required|string|email|max:255',
        ]);

        $user=new User();
        $user->email=$request->correoElectronico;
        $user->notify(new FormularioSolicitudCredito($request));
        $msg='¡Es un placer estar en contacto contigo! <br><br> Queríamos informarte que hemos enviado el formulario de solicitud de crédito a tu dirección de correo electrónico. Por favor, revisa tu bandeja de entrada y sigue las instrucciones adjuntas para descargar el formulario. <br><br> Agradecemos tu confianza en nuestra empresa y esperamos poder ayudarte a alcanzar tus metas financieras. <br><br> ¡Estamos ansiosos por recibir tu formulario de solicitud de crédito y ofrecerte una solución adecuada a tus necesidades!';
        return redirect()->route('creditos.solicitudCredito')->with('success', $msg);
    }

    public function abrirCuenta()
    {
        return view('abrir-cuenta-linea');
    }
    
}
