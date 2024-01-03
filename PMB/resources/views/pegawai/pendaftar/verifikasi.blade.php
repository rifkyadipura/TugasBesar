@extends('layouts.app_home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>
    <!-- /.container-fluid -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <!-- /.card-body -->
                <div class="card-body">
                    <h3 class="box-title"><b>Verifikasi Pendaftar</b><br></h3>
                    <hr>
                    <div class="form-group">
                        <a href="{{ route('pendaftar.index') }}"  class="btn btn-sm btn-info"><span class="fa fa-close"></span> Kembali</a>
                    </div>
                    <form action="{{ route('pendaftar.updateVerifikasi') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data->pendaftar_id }}">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input id="nama" class="form-control" placeholder="{{ $data->name }}" readonly   name="nama"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Kode must not be empty!">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="nik">Nik</label>
                                    <input id="nik" class="form-control" placeholder="{{ $data->nik }}" readonly  name="nik"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Nama must not be empty!">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" placeholder="{{ $data->email }}" readonly  name="email"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Nama must not be empty!">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="no_telp">No Telp</label>
                                    <input id="no_telp" class="form-control" placeholder="{{ $data->no_telp }}" readonly  name="no_telp"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Nama must not be empty!">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input id="jenis_kelamin" class="form-control" placeholder="{{ $data->jenis_kelamin }}" readonly   name="jenis_kelamin"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Kode must not be empty!">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="lahir">lahir</label>
                                    <input id="lahir" class="form-control" placeholder="{{ $data->lahir }}" readonly  name="lahir"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Nama must not be empty!">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="program_studi1">Program Studi </label>
                                    <input id="program_studi" class="form-control" placeholder="{{ $data->program_studi }}" readonly  name="program_studi"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Nama must not be empty!">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="jalur_masuk">Jalur Masuk</label>
                                    <input id="jalur_masuk" class="form-control" placeholder="{{ $data->jalur_masuk }}" readonly  name="jalur_masuk"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Nama must not be empty!">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan *</label>
                                    <select name="keterangan" class="form-select">
                                        <option>Pilih</option>
                                        <option {{old('keterangan',$data->keterangan)=="Diterima"? 'selected':''}}  value="Diterima">Diterima</option>
                                        <option {{old('keterangan',$data->keterangan)=="Ditolak"? 'selected':''}} value="Ditolak">Ditolak</option>
                                     </select>
                                </div>
                            </div>
                            {{-- <textarea name="keterangan" class="form-control" placeholder="Keterangan">{{ $data->keterangan }}</textarea> --}}
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">SUBMIT</button>
                        </div>
                    </form>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
