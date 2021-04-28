@extends('layout.main')

@section('title')
    Tambah Data Ujian
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 mx-auto">

                    <form action="{{ route('ujian.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_mk">Nama Mata Kuliah</label>
                            <input type="text" name="nama_mk" id="nama_mk" class="form-control"
                                placeholder="Nama Mata Kuliah">
                        </div>
                        <div class="form-group">
                            <label for="dosen">Nama Dosen</label>
                            <input type="text" name="dosen" id="dosen" class="form-control" placeholder="Nama Dosen">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_soal">Jumlah Soal</label>
                            <input type="number" name="jumlah_soal" id="jumlah_soal" class="form-control"
                                placeholder="Jumlah Soal">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="5" class="form-control"
                                placeholder="Keterangan"></textarea>
                        </div>
                        <div class="form-action">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <button type="reset" class="btn btn-warning">Reset Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
