@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Informasi</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <form action="/absen" method="post">
                        {{csrf_field()}}
                        <tr>
                            <td>
                                <input type="text" class="form-control" placeholder="keterangan..." name="note">
                            </td>
                            <td>
                                <button type= "submit" class="btn btn-flat btn-primary" name="btnIn">ABSEN MASUK</button>
                            </td>
                            <td>
                                <button type= "submit" class="btn btn-flat btn-primary" name="btnOut">ABSEN KELUAR</button>
                            </td>
                        </tr>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Riwayat Absensi</div>

                <div class="card-body">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2016-01-03</td>
                                <td>02:00:00</td>
                                <td>02:00:00</td>
                                <td>Hello.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
