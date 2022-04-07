@extends('layouts.admin')

@section('title')
   Detail Surat
@endsection

@section('container')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                Detail Surat
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <button class="btn btn-sm btn-light text-primary" onclick="javascript:window.history.back();">
                                <i class="me-1" data-feather="arrow-left"></i>
                                Kembali Ke Semua Surat
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-fluid px-4">
            <div class="row gx-4">
                <div class="col-lg-17">
                    <div class="card mb-4">
                        <div class="card-header">Detail Surat</div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                    <td><img src="{{ ('C:/xampp/htdocs/surat-app/itenas.png') }}" height="50px" height="70"></td>
                                        <tr>
                                        <center>
                                            <font size="4">YAYASAN PENDIDIKAN DAYANG SUMBI </th></font><BR>
                                        <tr>
                                        <center>
                                            <font size="5"> INATITUT TEKNOLOGI NASIONAL </th></b></font><BR>
                                        </tr>
                                        <tr>
                                        <center>
                                            <font size="4"> LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT </th></b></font><BR>
                                        </tr>
                                        <tr>
                                        <center>
                                            <font size="3"> Jl. PHH Mustapa 23, Bandung 40124 Indonesia, Telepon: +62-22-7272215 ext 157, Fax:022-720 2892 </th></b></font><BR>
                                        </tr>
                                        <tr>
                                        <center>
                                            <font size="3"> Web site: http://www.itenas.ac.id </th></b></font><BR>
                                        </tr>
                                            <th>Jenis Surat</th>
                                            <td>{{ $item->letter_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Surat</th>
                                            <td>{{ $item->letter_no }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Surat</th>
                                            <td>{{ $item->letter_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Diterima</th>
                                            <td>{{ $item->date_received }}</td>
                                        </tr>
                                        <tr>
                                            <th>Perihal</th>
                                            <td>{{ $item->regarding }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pengirim Surat</th>
                                            <td>{{ $item->sender->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Departemen</th>
                                            <td>{{ $item->department->name }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                File Surat - 
                            <a href="{{ route('download-surat', $item->id) }}" class="btn btn-sm btn-primary">  
                                <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Surat
                            </a>
                            </div>
                        </div>
                    </div>
                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

