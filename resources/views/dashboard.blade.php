@extends('layouts.app')

@section('content')
    <h1>Dashboard Admin</h1>

    {{-- Form Tambah Data --}}
    <form action="/product/store" method="POST" style="margin-bottom: 20px;">
        @csrf
        <input type="text" name="nama_event" placeholder="Nama Event" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <button type="submit">Tambah Tiket</button>
    </form>

    <table border="1" width="100%">
        <tr>
            <th>Nama Event</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach($tickets as $t)
        <tr>
            <td>{{ $t->nama_event }}</td>
            <td>{{ $t->harga }}</td>
            <td>
                <form action="/product/delete/{{ $t->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection