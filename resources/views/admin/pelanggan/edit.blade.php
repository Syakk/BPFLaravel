@extends('Layout.admin.app')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Edit Data Pelanggan</h1>
            <p class="mb-0">Form untuk memperbarui data pelanggan</p>
        </div>
        <div>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{ $dataPelanggan->first_name }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{ $dataPelanggan->last_name }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" name="birthday" value="{{ $dataPelanggan->birthday }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <select class="form-select" name="gender" required>
                                <option value="Male" {{ $dataPelanggan->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $dataPelanggan->gender == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $dataPelanggan->email }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $dataPelanggan->phone }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection