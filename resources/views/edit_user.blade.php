@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Edit User</h2>
    
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="p-4 rounded" style="background-color: #fce4ec;">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label text-pink">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $user->nama }}">
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label text-pink">NPM</label>
            <input type="text" name="npm" class="form-control" value="{{ $user->npm }}">
        </div>
        <div class="mb-3">
            <label for="kelas_id" class="form-label text-pink">Kelas</label>
            <select name="kelas_id" class="form-control">
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}" {{ $k->id == $user->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label text-pink">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        
        <!-- Update Button with Better Styling -->
        <button type="submit"  class="btn btn-lg btn-primary w-20 mt-4" style="background-color: #e91e63; border: none;" onclick="return confirm('Apakah Anda yakin ingin mengubah user ini?')">Update</button>
        <a href="{{ route('user.list') }}" class="btn btn-lg btn-primary w-20 mt-4" style="background-color: #e91e63; border: none;">
                Kembali
            </a>
    </form>
</div>
@endsection
