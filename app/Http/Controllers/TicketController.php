<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('product', compact('tickets'));
    }

    public function dashboard()
    {
        $tickets = Ticket::all();
        return view('dashboard', compact('tickets'));
    }
    public function store(Request $request)
{
    Ticket::create([
        'nama_event' => $request->nama_event,
        'harga' => $request->harga,
        'stok' => $request->stok
    ]);

    return redirect('/dashboard');
}

    public function destroy($id)
    {
        Ticket::destroy($id);
        return redirect('/dashboard');
    }
}
