@extends('adminlte::page')
@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-black" href="{{ url('/home') }}" style="">Home</a></li>
            <li class="breadcrumb-item"><a class="text-black" href="{{ url('/home') }}" style="">Dashboard Aplikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="text-gray" href="{{ url('/ps_pm') }}">Data PS-PM</a></li>
        </ol>
    </nav>
    <h5 class="text-white font-weight-bold mt-2">HALAMAN DATA PENYALURAN SUMBANGAN PM</h5>
    <small>Halaman ini merupakan halaman yang digunakan untuk melakukan management Data Penyaluran Sumbangan Penerima Manfaat (PS-PM).</small>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-sm btn-light mb-2 rounded-0" data-toggle="modal"
                    data-target="#modal-add">
                    <i class="fas fa-plus"></i> Tambah Data Belanja </button>
                <div class="card card-orange card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                    href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                    aria-selected="true">Data PS-PM Aktif</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                                    aria-selected="false">Data PS-PM Pasif</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body" style="background-color: #98381c">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">
                                <table id="tbaktif" class="table table-sm table-striped table-condensed table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <td>Aksi</td>
                                            <td>Tgl. Penyaluran</td>
                                            <td># (Nomor PM)</td>
                                            <td>Nominal</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtPS_PM_Aktif as $ga)
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
                                                <td class="text-white">{{ $ga->tgl_penyaluran }}</td>
                                                <th class="text-white">{{ $ga->pms_id }}</th>
                                                <td class="text-white" style="text-align: right;"> Rp.
                                                    {{ number_format($ga->nominal, 0, ',', '.') }}</td>
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
                                                                action="{{ url('belanja') }}" method="post"> @csrf
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
                                                        <div class="modal-header text-white" style="background-color: #f45b2b">
                                                            <h4 class="modal-title">Edit Data Belanja</h4>
                                                            <button type="button" class="close text-white"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="Edit{{ $ga->id }}" class="row g-3"
                                                                action="{{ url('/belanja') }}/{{ $ga->id }}"
                                                                method="POST"> @csrf @method('PUT')
                                                                {{-- <div class="col-12">
                                                                    <label for="namaseri"
                                                                        class="form-label @error('namaseri') text-danger @enderror">Nomor Seri</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm @error('namaseri') is-invalid @enderror"
                                                                        id="namaseri" name="namaseri"
                                                                        value="{{ $ga->namaseri }}"> @error('namaseri')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div> --}}
                                                                <div class="col-12">
                                                                    <label for="tgl_penyaluran"
                                                                        class="form-label @error('tgl_penyaluran') text-danger @enderror">Tanggal Penyaluran</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('tgl_penyaluran') text-danger @enderror"
                                                                        id="tgl_penyaluran" name="tgl_penyaluran"
                                                                        value="{{ $ga->tgl_penyaluran }}"> @error('tgl_penyaluran')
                                                                        <span class="text-danger"
                                                                            style="font-size:9pt;">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="nominal"
                                                                        class="form-label @error('nominal') text-danger @enderror">Nominal</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm  @error('nominal') text-danger @enderror"
                                                                        id="nominal" name="nominal"
                                                                        value="{{ $ga->nominal }}"> @error('nominal')
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
                                            <td>Tgl. Penyaluran</td>
                                            <td># (Nomor PM)</td>
                                            <td>Nominal</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtPS_PM_Pasif as $ga)
                                            <tr>
                                                <td>
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
                                                <td>{{ $ga->tgl_penyaluran }}</td>
                                                <th>{{ $ga->id }}</th>
                                                <td style="text-align: right;"> Rp.
                                                    {{ number_format($ga->nominal, 0, ',', '.') }}</td>
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
                                                                action="{{ url('belanja') }}" method="post"> @csrf
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
                                                                action="{{ url('belanja') }}" method="post"> @csrf
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
                    <div class="modal-header text-white" style="background-color: #f45b2b">
                        <h4 class="modal-title">Tambah Data Belanja</h4>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="{{ url('belanja') }}" method="post"> @csrf @method('POST') <div
                                class="col-12">
                                <label for="namaseri" class="form-label @error('namaseri') text-danger @enderror">Nomor Seri</label>
                                <input type="text"
                                    class="form-control form-control-sm @error('namaseri') is-invalid @enderror"
                                    id="namaseri" name="namaseri" value="{{ old('namaseri') }}"> @error('namaseri')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="tgl_penyaluran" class="form-label @error('tgl_penyaluran') text-danger @enderror">Nama Produk</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('tgl_penyaluran') text-danger @enderror"
                                    id="tgl_penyaluran" name="tgl_penyaluran" value="{{ old('tgl_penyaluran') }}"> @error('tgl_penyaluran')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="nominal"
                                    class="form-label @error('nominal') text-danger @enderror">nominal</label>
                                <input type="text"
                                    class="form-control form-control-sm  @error('nominal') text-danger @enderror"
                                    id="nominal" name="nominal" value="{{ old('nominal') }}"> @error('nominal')
                                    <span class="text-danger" style="font-size:9pt;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary mt-3">Save</button>
                                <button type="reset" class="btn btn-danger mt-3">Cancel</button>
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
                color: dodgerblue;
            }
        </style>
    @endsection
