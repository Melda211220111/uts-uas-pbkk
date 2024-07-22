@extends('template.app')
@section('content')
<div class="container">
    <h1>Sewa Details</h1>
    <div>
        <strong>ID:</strong> {{ $sewa->id }}
    </div>
    <div>
        <strong>Penyewa:</strong> {{ $sewa->penyewa->nama }}
    </div>
    <div>
        <strong>Kendaraan:</strong> {{ $sewa->kendaraan->merk }} {{ $sewa->kendaraan->model }}
    </div>
    <div>
        <strong>Tanggal Sewa:</strong> {{ $sewa->tanggal_sewa }}
    </div>
    <div>
        <strong>Tanggal Kembali:</strong> {{ $sewa->tanggal_kembali }}
    </div>
    <a href="{{ route('sewa.index') }}" class="btn btn-secondary">OK</a>
</div>
@endsection
