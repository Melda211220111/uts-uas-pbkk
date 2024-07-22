@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Tambah Sewa</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('sewa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="penyewa_id">Penyewa</label>
                        <select name="penyewa_id" class="form-control">
                            @foreach($penyewa as $penyewa)
                            <option value="{{ $penyewa->id }}">{{ $penyewa->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kendaraan_id">Kendaraan</label>
                        <select name="kendaraan_id" class="form-control">
                            @foreach($kendaraan as $kendaraan)
                            <option value="{{ $kendaraan->id }}">{{ $kendaraan->merk }} {{ $kendaraan->model }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_sewa">Tanggal Sewa</label>
                        <input type="date" name="tanggal_sewa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
