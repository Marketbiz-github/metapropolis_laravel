<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function register(Event $event)
    {
        return view('event.register', compact('event'));
    }

    public function storeRegister(Request $request, Event $event)
    {
        $event->participants()->create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]); 

        return redirect()->back()->with('message', 'Berhasil melakukan pendaftaran');
    }
}
