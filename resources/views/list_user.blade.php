@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="text-center" style="font-family: 'Verdana', sans-serif; color: #333;">Daftar User</h2>
        <a href="{{ route('user.create') }}" class="btn btn-pink">Tambah User</a>
    </div>

    <table class="table table-striped table-hover text-center" style="max-width: 800px; margin: 0 auto; border: 1px solid #dee2e6; border-radius: 8px; overflow: hidden;">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['nama_kelas'] }}</td>
                <td>
                    <a href="{{ route('user.show', $user['id']) }}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    body {
        background: linear-gradient(135deg, #ffafbd, #ffc3a0);
    }

    .btn-pink {
        background-color: #ff6a88;
        color: white;
        border: none;
        padding: 10px 20px; 
        font-size: 14px; 
        border-radius: 5px; 
        transition: background-color 0.3s;
    }

    .btn-pink:hover {
        background-color: #ff4d73; 
    }

    .table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th, .table td {
        border: 1px solid #dee2e6; 
        padding: 8px; 
    }

    .table th {
        background-color: #f8f9fa; 
        color: #333; 
        font-weight: bold; 
    }

    .table tr:hover {
        background-color: rgba(255, 106, 136, 0.2); 
    }
</style>
@endsection
