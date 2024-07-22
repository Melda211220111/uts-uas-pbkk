@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Sewa</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('sewa.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Penyewa</th>
                            <th>Kendaraan</th>
                            <th>Tanggal Sewa</th>
                            <th>Tanggal Kembali</th>
                            <th>Actions</th>
                        </tr>
                        @forelse ($sewa as $index => $sewa)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $sewa->id }}</td>
                            <td>{{ $sewa->penyewa->nama }}</td>
                            <td>{{ $sewa->kendaraan->merk }} {{ $sewa->kendaraan->model }}</td>
                            <td>{{ $sewa->tanggal_sewa }}</td>
                            <td>{{ $sewa->tanggal_kembali }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('sewa.destroy', $sewa->id) }}" method="POST">
                                    <a href="{{ route('sewa.show', $sewa->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('sewa.edit', $sewa->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kendaraan Belum Ada.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
