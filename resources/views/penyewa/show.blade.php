@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Penyewa</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ $penyewa->nama }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $penyewa->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $penyewa->telepon }}</td>
                    </tr>
                </table>
                <a href="{{ route('penyewa.index') }}" class="btn btn-secondary">OK</a>
            </div>
        </div>
    </div>
</div>
@endsection
