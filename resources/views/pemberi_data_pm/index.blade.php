@extends('adminlte::page')
@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-black" href="{{ url('/home') }}" style="">Home</a></li>
            <li class="breadcrumb-item"><a class="text-black" href="{{ url('/home') }}" style="">Dashboard Aplikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="text-gray" href="{{ url('/data_pm') }}">Dashboard Aplikasi</a></li>
        </ol>
    </nav>
    <h5 class="text-white font-weight-bold mt-2">HALAMAN DATA PEMBERI PM</h5>
    <small>Halaman ini merupakan halaman yang digunakan untuk melakukan management Data PM.</small>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-sm btn-light mb-2 rounded-0" data-toggle="modal"
                    data-target="#modal-add">
                    <i class="fas fa-plus"></i> Tambah Data Data PM </button>
                <div class="card card-tabs" style="background-color: #00923f">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-black" id="custom-tabs-one-home-tab" data-toggle="pill"
                                    href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                    aria-selected="true" style="">Data Data PM Aktif</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                    aria-selected="false">Data Data PM Pasif</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body" style="background-color: #24448c">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">
                                <table id="tbaktif" class="table table-sm table-striped table-condensed table-bordered">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <td>Aksi</td>
                                            <td>#</td>
                                            <td>No. KTP</td>
                                            <td>No. KK</td>
                                            <td>Nama Penerima PM</td>
                                            <td>Alamat Penerima PM</td>
                                            <td>Desa</td>
                                            <td>Kelurahan</td>
                                            <td>Kecamatan</td>
                                            <td>Alasan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtPemberi_DataPM_Aktif as $ga)
                                            <tr>
                                                <td class="text-center">
                                                    <button id="btnEdit{{ $ga->id }}" type="button"
                                                        class="btn btn-sm btn-outline-success rounded-0" data-toggle="modal"
                                                        data-target="#modal-edit{{ $ga->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button id="btnPasif{{ $ga->id }}" type="button"
                                                        class="btn btn-sm btn-outline-danger rounded-0"
                                                        data-toggle="modal" data-target="#modal-pasif{{ $ga->id }}"
                                                        title="Pasif">
                                                        <i class="fas fa-minus-circle"></i>
                                                    </button>
                                                </td>
                                                <th class="text-center text-white">{{ $ga->id }}</th>
                                                <td class="text-white" style="text-align: justify;">{{ number_format($ga->no_ktp, 0, '', '') }}</td>
                                                <td class="text-white" style="text-align: justify;">{{ number_format($ga->no_kk, 0, '', '') }}</td>
                                                <td class="text-white">{{ $ga->nama_pm }}</td>
                                                <td class="text-white">{{ $ga->alamat_pm }}</td>
                                                <td class="text-white">{{ $ga->desa }}</td>
                                                <td class="text-white">{{ $ga->kelurahan }}</td>
                                                <td class="text-white">{{ $ga->kecamatan }}</td>
                                                <td class="text-white">{{ $ga->alasan }}</td>
                                            </tr>
                                            <div class="modal fade" id="modal-pasif{{ $ga->id }}">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h4 class="modal-title">PASIF</h4>
                                                            <button type="button" class="close text-white"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <form id="pasif{{ $ga->id }}"
                                                                action="{{ url('data_pm') }}" method="post"> @csrf
                                                                @method('DELETE') <label>Apakah Data ini ingin
                                                                    dipasifkan?</label>
                                                                <input type="hidden" name="id"
                                                                    value="{{ $ga->id }}">
                                                                <input type="hidden" name="aksi" value="pasif">
                                                                <button class="btn btn-sm btn-danger"
                                                                    type="submit">Yes</button>
                                                                <button class="btn btn-sm btn-primary" data-dismiss="modal"
                                                                    aria-label="Close">No</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- edit data --}}
                                            <div class="modal fade" id="modal-edit{{ $ga->id }}">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-white" style="background-color: #24448c">
                                                            <h4 class="modal-title">Edit Data PM</h4>
                                                            <button type="button" class="close text-white"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="Edit{{ $ga->id }}" class="row g-3" action="{{ url('/data_pm') }}/{{ $ga->id }}" method="POST"> @csrf @method('PUT')
                                                                <div class="col-12">
                                                                    <label for="no_ktp"
                                                                        class="form-label @error('no_ktp') text-danger @enderror">No. KTP</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('no_ktp') text-danger @enderror"
                                                                        id="no_ktp" name="no_ktp"
                                                                        value="{{ $ga->no_ktp }}"> @error('no_ktp')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="no_kk"
                                                                        class="form-label @error('no_kk') text-danger @enderror">No. KK</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('no_kk') text-danger @enderror"
                                                                        id="no_kk" name="no_kk"
                                                                        value="{{ $ga->no_kk }}"> @error('no_kk')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="nama_pm"
                                                                        class="form-label @error('nama_pm') text-danger @enderror">Nama PM</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('nama_pm') text-danger @enderror"
                                                                        id="nama_pm" name="nama_pm"
                                                                        value="{{ $ga->nama_pm }}"> @error('nama_pm')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="alamat_pm"
                                                                        class="form-label @error('alamat_pm') text-danger @enderror">Alamat PM</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('alamat_pm') text-danger @enderror"
                                                                        id="alamat_pm" name="alamat_pm"
                                                                        value="{{ $ga->alamat_pm }}"> @error('alamat_pm')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="desa"
                                                                        class="form-label @error('desa') text-danger @enderror">Desa</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('desa') text-danger @enderror"
                                                                        id="desa" name="desa"
                                                                        value="{{ $ga->desa }}"> @error('desa')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="kelurahan"
                                                                        class="form-label @error('kelurahan') text-danger @enderror">Kelurahan</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('kelurahan') text-danger @enderror"
                                                                        id="kelurahan" name="kelurahan"
                                                                        value="{{ $ga->kelurahan }}"> @error('kelurahan')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="kecamatan"
                                                                        class="form-label @error('kecamatan') text-danger @enderror">Kecamatan</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm @error('kecamatan') is-invalid @enderror"
                                                                        id="kecamatan" name="kecamatan"
                                                                        value="{{ $ga->kecamatan }}"> @error('kecamatan')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="alasan"
                                                                        class="form-label @error('alasan') text-danger @enderror">Alasan</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('alasan') text-danger @enderror"
                                                                        id="alasan" name="alasan"
                                                                        value="{{ $ga->alasan }}"> @error('alasan')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12 text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-primary mt-3">Save</button>
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-danger mt-3 text-white"
                                                                        data-dismiss="modal"> Cancel </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end edit data --}}
                                        @endforeach
                                </table>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-one-profile-tab">
                                <table id="tbpasif" class="table table-sm table-striped table-condensed table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <td>Aksi</td>
                                            <td>#</td>
                                            <td>No. KTP</td>
                                            <td>No. KK</td>
                                            <td>Nama Penerima PM</td>
                                            <td>Alamat Penerima PM</td>
                                            <td>Desa</td>
                                            <td>Kelurahan</td>
                                            <td>Kecamatan</td>
                                            <td>Alasan</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtPemberi_DataPM_Pasif as $ga)
                                            <tr>
                                                <td class="text-center">
                                                    <button id="btnRestore{{ $ga->id }}" type="button"
                                                        class="btn btn-sm btn-outline-warning rounded-0"
                                                        data-toggle="modal"
                                                        data-target="#modal-restore{{ $ga->id }}" title="Restore">
                                                        <i class="fas fa-undo-alt"></i>
                                                    </button>
                                                    <button id="btnRestore{{ $ga->id }}" type="button"
                                                        class="btn btn-sm btn-outline-danger rounded-0"
                                                        data-toggle="modal"
                                                        data-target="#modal-delete{{ $ga->id }}" title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                                <th class="text-center text-white">{{ $ga->id }}</th>
                                                <td class="text-white" style="text-align: justify;">{{ number_format($ga->no_ktp, 0, '', '') }}</td>
                                                <td class="text-white" style="text-align: justify;">{{ number_format($ga->no_kk, 0, '', '') }}</td>
                                                <td class="text-white">{{ $ga->nama_pm }}</td>
                                                <td class="text-white">{{ $ga->alamat_pm }}</td>
                                                <td class="text-white">{{ $ga->desa }}</td>
                                                <td class="text-white">{{ $ga->kelurahan }}</td>
                                                <td class="text-white">{{ $ga->kecamatan }}</td>
                                                <td class="text-white">{{ $ga->alasan }}</td>
                                            </tr>
                                            {{-- delete --}}
                                            <div class="modal fade" id="modal-delete{{ $ga->id }}">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h4 class="modal-title">DELETE</h4>
                                                            <button type="button" class="close text-white"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <form id="delete{{ $ga->id }}"
                                                                action="{{ url('data_pm') }}" method="post"> @csrf
                                                                @method('DELETE') <label>Apakah Data ini ingin
                                                                    dihapuskan?</label>
                                                                <input type="hidden" name="id"
                                                                    value="{{ $ga->id }}">
                                                                <input type="hidden" name="aksi" value="delete">
                                                                <div class="col-12 w-100">
                                                                    <button class="btn btn-sm btn-danger"
                                                                        type="submit">Yes</button>
                                                                    <button class="btn btn-sm btn-primary"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">No</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end delete --}}
                                            {{-- restore --}}
                                            <div class="modal fade" id="modal-restore{{ $ga->id }}">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning text-white">
                                                            <h4 class="modal-title">RESTORE</h4>
                                                            <button type="button" class="close text-white"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <form id="restore{{ $ga->id }}"
                                                                action="{{ url('data_pm') }}" method="post"> @csrf
                                                                @method('DELETE') <label>Apakah Data ini ingin
                                                                    direstore?</label>
                                                                <input type="hidden" name="id"
                                                                    value="{{ $ga->id }}">
                                                                <input type="hidden" name="aksi" value="restore">
                                                                <div class="col-12 w-100">
                                                                    <button class="btn btn-sm btn-danger"
                                                                        type="submit">Yes</button>
                                                                    <button class="btn btn-sm btn-primary"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">No</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end restore --}}
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- add data --}}
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header text-white" style="background-color: #24448c">
                        <h4 class="modal-title">Tambah Data PM</h4>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 text-blue-800" action="{{ url('data_pm') }}" method="post"> @csrf @method('POST')
                            <div class="col-12">
                                <label for="no_ktp"
                                    class="form-label @error('no_ktp') text-danger @enderror">No. KTP</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('no_ktp') text-danger @enderror"
                                    id="no_ktp" name="no_ktp" value="{{ old('no_ktp') }}"> @error('no_ktp')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="no_kk"
                                    class="form-label @error('no_kk') text-danger @enderror">No. KK</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('no_kk') text-danger @enderror"
                                    id="no_kk" name="no_kk" value="{{ old('no_kk') }}"> @error('no_kk')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="nama_pm" class="form-label @error('nama_pm') text-danger @enderror">Nama PM</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('nama_pm') text-danger @enderror"
                                    id="nama_pm" name="nama_pm" value="{{ old('nama_pm') }}"> @error('nama_pm')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="alamat_pm" class="form-label @error('alamat_pm') text-danger @enderror">Alamat PM</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('alamat_pm') text-danger @enderror"
                                    id="alamat_pm" name="alamat_pm" value="{{ old('alamat_pm') }}"> @error('alamat_pm')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="desa" class="form-label @error('desa') text-danger @enderror">Desa</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('desa') text-danger @enderror"
                                    id="desa" name="desa" value="{{ old('desa') }}"> @error('desa')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="kelurahan" class="form-label @error('kelurahan') text-danger @enderror">Kelurahan</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('kelurahan') text-danger @enderror"
                                    id="kelurahan" name="kelurahan" value="{{ old('kelurahan') }}"> @error('kelurahan')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="kecamatan" class="form-label @error('kecamatan') text-danger @enderror">Kecamatan</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('kecamatan') is-invalid @enderror"
                                    id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}"> @error('kecamatan')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="alasan"
                                    class="form-label @error('alasan') text-danger @enderror">Alasan</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('alasan') text-danger @enderror"
                                    id="alasan" name="alasan" value="{{ old('alasan') }}"> @error('alasan')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary mt-3">Save</button>
                                <button type="reset" class="btn btn-danger mt-3" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end add data --}}
    @endsection

    @section('plugins.Datatables', true)
    @section('plugins.Sweetalert2', true)

    @section('js')
        <script>
            $(function() {
                $("#tbaktif").DataTable({
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#tbaktif_wrapper .col-md-6:eq(0)');

                $("#tbpasif").DataTable({
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#tbpasif_wrapper .col-md-6:eq(0)');
            });

            @if (session('pesansukses'))
                var notif = @json(session()->pull('pesansukses'));
                Swal.fire({
                    title: 'Sukses!',
                    text: notif,
                    icon: 'success',
                    confirmButtonText: 'Oke'
                })
            @endif
            @if (session('pesangagal'))
                var notif = @json(session()->pull('pesangagal'));
                Swal.fire({
                    title: 'Failed!',
                    text: notif,
                    icon: 'error',
                    confirmButtonText: 'Oke'
                })
            @endif
        </script>
    @endsection

    @section('css')
        <style>
            table tbody td {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 11pt;
                color: #f4b404;
            }
        </style>
    @endsection
