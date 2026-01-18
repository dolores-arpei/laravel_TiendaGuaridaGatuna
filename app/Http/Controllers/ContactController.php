<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * CONTROLADOR: ContactController
     *
     * Gestiona la página de contacto de la tienda.
      */
    /**
     * INDEX: Show the contact page
     * Ruta: GET /contact
     * Vista: resources/views/contact.blade.php
     */
    public function index(): View
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission
     */
    public function send(Request $request): \Illuminate\Http\RedirectResponse
    {
        // 1. Validar los datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Por favor dinos tu nombre.',
            'email.required' => 'Necesitamos tu email para responderte.',
            'email.email' => 'El formato del email no es válido.',
            'subject.required' => 'El asunto es obligatorio.',
            'message.required' => 'El mensaje no puede estar vacío.',
        ]);

        // 2. Simular envío (Log)
        \Illuminate\Support\Facades\Log::info('Nuevo mensaje de contacto recibido:', $validated);

        // 3. Redirigir con mensaje de éxito
        return back()->with('success', '¡Gracias por contactarnos! Hemos recibido tu mensaje correctamente.');
    }
}