@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #ffafbd, #ffc3a0);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background: linear-gradient(135deg, #ff6a88, #ff9a9e);
        border-radius: 15px 15px 0 0;
    }

    .card-header h4 {
        color: #fff;
        font-weight: 500;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    .form-control,
    .form-select {
        border-radius: 8px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #ff6a88, #ff9a9e);
        border: none;
        border-radius: 8px;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #ff9a9e, #ff6a88);
    }

    .input-group-text {
        background: linear-gradient(135deg, #ff9a9e, #ff6a88);
        color: #fff;
        border-radius: 8px 0 0 8px;
        border: none;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h4>Create User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="form-label">Nama:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                                <div class="invalid-feedback">
                                    Nama harus diisi.
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="npm" class="form-label">NPM:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                                <input type="text" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM Anda" pattern="\d{10}" required>
                                <div class="invalid-feedback">
                                    NPM harus berupa 10 digit angka.
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label">Kelas:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-door-open-fill"></i></span>
                                <select class="form-select" name="kelas_id" id="kelas_id" required>
                                    <option value="" selected disabled>Pilih kelas</option>
                                    @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Silakan pilih kelas.
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script>
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
@endsection
