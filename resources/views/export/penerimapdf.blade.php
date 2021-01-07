<!DOCTYPE html>
<html>

<head>
    <title>Penerimaan PDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   
<style>
    #emp {
        border-collapse: collapse;
        width: 100%;
    }
    #emp td, #emp th {
        border: 1px solid #c7c7c7;
        padding: 8px;
    }
    #emp tr:nth-child(even) {
        background-color: #e6e6e6;
    }
    #emp th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #82bdbf;
        color: #fff;
    }

</style>
</head>
<body>
    <h1 style="text-align: center;">DATA PENERIMAAN</h1>
    <div class="container">
            <div class="table-responsive">
            <table class="table table-bordered" id="emp">
                <thead>
                <tr>
                    <th>NAMA PENERIMA</th>
                    <th>TANGGAL PENYERAHAN</th>
                    <th>SATKER</th>
                    <th>PETUGAS</th>
                    <th>LPJ BULAN</th>
                    <th>TAHUN</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($penerima as $p)
                <tr role="row">
                    <td>{{$p->nama_lengkap}}</td>
                    <td>{{date('d F Y', strtotime($p->tanggal_penyerahan))}}</td>
                    <td>{{$p->satker}}</td>
                    <td>{{$p->petugas}}</td>
                    <td>{{$p->lpj_bulan}}</td>
                    <td>{{$p->tahun}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

