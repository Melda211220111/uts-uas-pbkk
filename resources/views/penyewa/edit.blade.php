@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Edit Penyewa</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('penyewa.update', $penyewa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $penyewa->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required>{{ $penyewa->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <textarea name="telepon" class="form-control" required>{{ $penyewa->telepon }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
