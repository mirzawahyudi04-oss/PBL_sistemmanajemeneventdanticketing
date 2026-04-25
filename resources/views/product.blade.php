@extends('layouts.app')

@section('content')
    <h1>Daftar Tiket Event</h1>
    <p>Pilih tiket event favoritmu di sini.</p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
        @foreach($tickets as $ticket)
            <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px;">
                <h3>{{ $ticket->nama_event }}</h3>
                <p>Harga: Rp {{ number_format($ticket->harga, 0, ',', '.') }}</p>
                <p>Stok: {{ $ticket->stok }}</p>
                <button>Pesan Sekarang</button>
            </div>
        @endforeach
    </div>

    @if($tickets->isEmpty())
        <p style="text-align: center; color: gray;">Belum ada tiket tersedia.</p>
    @endif
@endsection