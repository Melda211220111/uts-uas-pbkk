@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Detail Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <div>
                        <strong>ID:</strong> {{ $kwitansi->id }}
                    </div>
                    <div>
                        <strong>Nomor Kwitansi:</strong> {{ $kwitansi->nomor_kwitansi }}
                    </div>
                    <div>
                        <strong>Tanggal:</strong> {{ $kwitansi->tanggal }}
                    </div>
                    <div>
                        <strong>Jumlah:</strong> {{ $kwitansi->jumlah }}
                    </div>
                    <div>
                        <strong>Sewa ID:</strong> {{ $kwitansi->sewa_id }}
                    </div>
                </table>
                <a href="{{ route('kwitansi.index') }}" class="btn btn-secondary">OK</a>
            </div>
        </div>
    </div>
</div>
@endsection
