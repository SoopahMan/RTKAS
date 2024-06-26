
@extends('layoutscopras.template')

@section('content')
    <!-- Source of database: https://bbbootstrap.com/snippets/team-points-table-61285186# -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h4 class="card-title card-title-dash">Kriteria</h4>
                            </div>
                            <div>
                                <a href="copras/tambah_kriteria" style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi material-symbols-outlined">library_add</i> Tambah</a>
                                <a href="copras/sunting_kriteria" style="padding:10px !important" class="btn btn-primary btn-md text-white mb-0 me-0" type="button"><i class="mdi material-symbols-outlined">edit_square</i> Sunting</a>
                                <!-- <button style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i> Add new member</button> -->
                            </div>
                        </div>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%" class="empty-cell"></th>
                                    <th>Kriteria</th>
                                    <th  style="width:10%">Tipe</th>
                                    <th  style="width:15%">Pembobotan</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($kriteria); $x++)
                                <tr>
                                    <th><b>C{{ $x+1 }}</b></th>
                                    <td>{{ $kriteria[$x] }}</td>
                                    <td>{{ $tipe[$x] }}</td>
                                    <td>{{ number_format($pembobotan[$x], 2, ',') }}</td>
                                    <td style="width: 20%;">
                                        <form method="POST" action="copras/hapus_kriteria" class="form-inline">
                                            {{ csrf_field() }}
                                            <input type="text" name="id" class="form-control form-control-sm d-none" value="{{ $x }}">
                                            <input type="text" name="kriteria" class="form-control form-control-sm d-none" value="{{ $kriteria[$x] }}">
                                            <button type="submit" class="btn btn-primary p-2">
                                                <i class="menu-icon mdi material-symbols-outlined">delete</i>
                                            </button>
                                        </form>

                                        <!-- <a href="copras/tambah_kategori" style="padding:10px !important;" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                                            <i class="menu-icon mdi material-symbols-outlined">edit_square</i>
                                        </a>  -->
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <!-- <h4>Alternatif</h4> -->
                        <div class="d-sm-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h4 class="card-title card-title-dash">Alternatif</h4>
                            </div>
                            <div>
                                <a href="copras/tambah_alt" style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi material-symbols-outlined">library_add</i> Tambah</a>
                                <a href="copras/sunting_alt" style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="menu-icon mdi material-symbols-outlined">edit_square</i> Sunting</a>
                                <!-- <button style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i> Add new member</button> -->
                            </div>
                        </div>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%" class="empty-cell"></th>
                                    <th>Alternatif</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($botRelatif1); $x++)
                                <tr>
                                    <th><b>A{{ $x+1 }}</b></th>
                                    <td>{{ $alternatif[$x] }}</td>
                                    <td style="width: 20%;">
                                        
                                        <!-- <form method="POST" action="copras/hapus_alternatif" class="form-inline">
                                            {{ csrf_field() }}
                                            <input type="text" name="id" class="form-control form-control-sm d-none" value="{{ $x }}">
                                            <input type="text" name="alternatif" class="form-control form-control-sm d-none" value="{{ $alternatif[$x] }}">
                                            <button type="submit" class="btn btn-primary p-2">
                                                <i class="menu-icon mdi material-symbols-outlined">edit_note</i> Ganti nama
                                            </button>
                                            <a href="copras/tambah_kategori" style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                                                <i class="menu-icon mdi material-symbols-outlined">delete</i>
                                            </a>
                                        </form> -->
                                    
                                        <form method="POST" action="copras/hapus_alternatif" class="form-inline">
                                            {{ csrf_field() }}
                                            <input type="text" name="id" class="form-control form-control-sm d-none" value="{{ $x }}">
                                            <input type="text" name="alternatif" class="form-control form-control-sm d-none" value="{{ $alternatif[$x] }}">
                                            <button type="submit" class="btn btn-primary p-2">
                                                <i class="menu-icon mdi material-symbols-outlined">delete</i>
                                            </button>
                                        </form>

                                        <!-- <a href="copras/tambah_kategori" style="padding:10px !important;" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                                            <i class="menu-icon mdi material-symbols-outlined">edit_square</i>
                                        </a>  -->
                                        <!-- <a href="copras/tambah_kategori" style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">
                                            <i class="menu-icon mdi material-symbols-outlined">delete</i>
                                        </a> -->
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <!-- <div class="row"> -->
            <!-- <section class="content-info"> -->
        <!-- <div class="container paddings-mini"> -->
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h4 class="card-title card-title-dash">Matriks Penilaian</h4>
                            </div>
                            <div>
                                <a href="copras/sunting_penilaian" style="padding:10px !important" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="menu-icon mdi material-symbols-outlined">edit_square</i> Sunting</a>
                            </div>
                        </div>
                        <!-- <h4>Matriks Penilaian</h4> -->
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%" class="empty-cell"></th>
                                    @for ($x = 0; $x < count($kriteria); $x++)
                                        <th>C{{ $x+1 }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($penilaian); $x++)
                                    <tr>
                                        <th><b>A{{ $x+1 }}</b></th>
                                        @for ($y = 0; $y < count($penilaian[$x]); $y++)
                                            <td>{{ number_format($penilaian[$x][$y], 1, ',') }}</td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="blue-right-border bobot">Bobot</th>
                                    @foreach ($bobot as $key => $value)
                                        <td class="highlight bobot">{{ number_format($value, 2, ',') }}</td>
                                    @endforeach
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <!-- <br><br>  -->
                        <h4 class="card-title card-title-dash">Matriks Normalisasi</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%" class="empty-cell"></th>
                                    @for ($x = 0; $x < count($kriteria); $x++)
                                        <th>C{{ $x+1 }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($normalisasi); $x++)
                                    <tr>
                                        <th><b>A{{ $x+1 }}</b></th>
                                        @for ($y = 0; $y < count($normalisasi[$x]); $y++)
                                            <td>{{ number_format($normalisasi[$x][$y], 3, ',') }}</td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <h4>Maktriks Normalisasi Terbobot</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%" class="empty-cell"></th>
                                    @for ($x = 0; $x < count($kriteria); $x++)
                                        <th>C{{ $x+1 }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @for ($x = 0; $x < count($normalBobot); $x++)
                                    <tr>
                                        <th><b>A{{ $x+1 }}</b></th>
                                        @for ($y = 0; $y < count($normalBobot[$x]); $y++)
                                            <td>{{ number_format($normalBobot[$x][$y], 3, ',') }}</td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <h4>Total Benefit and Cost</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th class="empty-cell"></th>
                                    <th style="text-align: center;">Alternatif</th>
                                    <th>Benefit</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <th><b>A{{ $index+1 }}</b></th>
                                        <td>{{ $alt }}</td>
                                        <td>{{ number_format($benefit[$index], 3, ',') }}</td>
                                        <td>{{ number_format($cost[$index], 3, ',') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="row" colspan="3">Total</th>
                                    <td class="fw-bold">{{ number_format(array_sum($cost), 2, ',') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <h4>Bobot Relatif</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th class="empty-cell"></th>
                                    <th>Alternatif</th>
                                    <th style="text-align: center;">1/S<sub>-i</sub></th>
                                    <th style="text-align: center;">S<sub>-</sub>&times;<small>&sum;</small>(1/S<sub>-i</sub>)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <th><b>A{{ $index+1 }}</b></th>
                                        <td>{{ $alt }}</td>
                                        <td style="text-align: center;">{{ number_format($botRelatif1[$index], 2, ',') }}</td>
                                        <td style="text-align: center;">{{ number_format($botRelatif2[$index], 2, ',') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="row" colspan="2">Total (<small>&sum;</small>1/S<sub>-i</sub>)</th>
                                    <td class="fw-bold">{{ number_format(array_sum($botRelatif1), 2, ',') }}</td>
                                    <td class="empty-cell"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <h4>Nilai Prioritas</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th class="empty-cell"></th>
                                    <th>Alternatif</th>
                                    <th>Priority</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <th><b>A{{ $index+1 }}</b></th>
                                        <td>{{ $alt }}</td>
                                        <td>{{ number_format($nilaiPrioritas[$index], 2, ',') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="row" colspan="2">Q<sub>max</sub></th>
                                    <td class="fw-bold">{{ number_format(max($nilaiPrioritas), 2, ',') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <h4>Indeks Performa</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th class="empty-cell"></th>
                                    <th>Alternatif</th>
                                    <th>Index</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatif as $index => $alt)
                                    <tr>
                                        <th><b>A{{ $index+1 }}</b></th>
                                        <td>{{ $alt }}</td>
                                        <td>{{ number_format($indexPerforma[$index], 2, ',') }}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin">
                <div class="card border-left-blue">
                    <div class="card-body">
                        <h4>Pemeringkatan</h4>
                        <table class="table-striped table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%">Peringkat</th>
                                    <th>Alternatif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peringkat as $rank => $index)
                                    <tr>
                                        <th>{{ $rank + 1 }}</th>
                                        <td>{{ $alternatif[$index] }} – <b>A{{ $index+1 }}</b></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- </section> -->
        <!-- </div>
        </div> -->
        </div>
    </div>
@endsection
