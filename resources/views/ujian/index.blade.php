@extends('layout.main')

@section('title')
    Kelola Data Ujian
@endsection

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <a href="{{ route('ujian.create') }}" class="btn btn-primary">Tambah Data</a>
    <hr>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th width="70">Nama Matakuliah</th>
                            <th width="70">Nama Dosen</th>
                            <th width="20">Jumlah Soal</th>
                            <th width="100">Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ujian as $u)
                            <tr>
                                <td>{{ $u->nama_mk }}</td>
                                <td>{{ $u->dosen }}</td>
                                <td>{{ $u->jumlah_soal }}</td>
                                <td><small>{{ $u->keterangan }}</small></td>
                                <td>
                                    <a href="{{ route('ujian.edit', [$u->id]) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('ujian.destroy', [$u->id]) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Hapus Data Ujian ?')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
