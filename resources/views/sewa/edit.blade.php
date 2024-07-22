@extends('template.app')
@section('content')
<div class="container">
    <h1>Edit Sewa</h1>
    <form action="{{ route('sewa.update', $sewa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="penyewa_id">Penyewa</label>
            <select name="penyewa_id" class="form-control">
                @foreach($penyewa as $penyewa)
                <option value="{{ $penyewa->id }}" {{ $penyewa->id == $sewa->penyewa_id ? 'selected' : '' }}>
                    {{ $penyewa->nama }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kendaraan_id">Kendaraan</label>
            <select name="kendaraan_id" class="form-control">
                @foreach($kendaraan as $kendaraan)
                <option value="{{ $kendaraan->id }}" {{ $kendaraan->id == $sewa->kendaraan_id ? 'selected' : '' }}>
                    {{ $kendaraan->merk }} {{ $kendaraan->model }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_sewa">Tanggal Sewa</label>
            <input type="date" name="tanggal_sewa" class="form-control" value="{{ $sewa->tanggal_sewa }}">
        </div>
        <div class="form-group">
            <label for="tanggal_kembali">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" value="{{ $sewa->tanggal_kembali }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
