<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cetak Laporan Hasil Monitoring </title>

    <style>
        h3.nama-dinas {
            font-size: 17px;
            font-family: times new roman;
        }

        h2.main-title {
            font-size: 14px;
        }

        .preview-a4 {
            /* width: 700px;
            margin: auto; */
            background-color: white;
            max-width: 21cm;
            margin: 0 auto;
            padding: 1cm;
            box-sizing: border-box;
            line-height: 1.4;
            font-family: "times new roman";
        }

        @page {
            margin: 0.3cm;
            size: A4 portrait;
        }

        .wrapper {
            font-family: 'Times New Roman', sans-serif;
            font-size: 12pt;
        }

        .wrapper-rill {
            padding: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0px;
        }

        ol>li {
            text-align: justify;
        }

        p {
            text-align: justify-all;
            line-height: 15px;
        }

        .title {
            text-align: center;
        }

        .title-date {
            line-height: 10px;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-underline {
            text-decoration: underline;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .m-0 {
            margin: 0 !important;
        }

        .m-1 {
            margin: 10px;
        }

        .m-2 {
            margin: 10px;
        }

        .p-2 {
            padding: 20px;
        }

        .p-1 {
            padding: 10px;
        }

        .pl-1 {
            padding-left: 10px !important;
        }

        .px-1 {
            padding: 0 10px;
        }

        .mx-10 {
            margin: 0 100px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 30px !important;
        }

        .mt-3,
        .my-3 {
            margin-top: 30px !important;
        }

        .mb-1,
        .my-1 {
            margin-bottom: 10px !important;
        }

        .mt-1,
        .my-1 {
            margin-top: 10px !important;
        }

        .ml-1 {
            margin-left: 10px;
        }

        .ml-0 {
            margin: 0;
        }

        .logo {
            position: relative;
            top: 0;
            left: 0;
        }

        .table {
            width: 100%;
            margin: 10px 0;
        }

        .table td {
            padding: 1px;

        }

        .table th {
            text-align: center;
        }

        .align-center {
            text-align: center;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-top {
            vertical-align: top;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .line-height-0 {
            line-height: 0px;
        }

        .ttd {
            height: 40px;
        }

        .border {
            border: 1px solid black;
        }

        .border-bottom-dotted {
            border-bottom: 1px dotted black;
        }

        .border-bottom-double {
            border-bottom: 3px double black;
        }

        .border-y-gradasi {
            border-top: 2px solid black;
            border-bottom: 1px solid grey;
        }

        .border-bottom {
            border-bottom: 1px solid black;
        }

        .border-top {
            border-top: 1px solid black;
        }

        .border-left {
            border-left: 1px solid black;
        }

        .border-right {
            border-right: 1px solid black;
        }

        .bold {
            font-weight: bold !important;
        }

        .float-right {
            float: right;
        }

        /* .bg-white-grey {
            background-color: #eee;
        }

        .bg-grey {
            background-color: #bbb;
        } */
        td.kode-pos {
            text-align: right;
        }

        td.squarebox {
            min-width: 37px;
            border: 2px solid #000;
            text-align: center;
            line-height: normal;
            padding: 0 5px;
        }


        td.box-sq span:first-child {
            border-right: 0;
        }

        td.box-sq span {
            border: 2px solid #000;
            width: 23px;
            display: inline-block;
            min-height: 15px;
        }

        td.dotted-line {
            border-bottom: dotted 2px #000;
        }


        td.space {
            width: 18%;
        }


        .ttd-x .space-area {
            min-height: 5em;
        }


        .justify-content-right {
            display: flex;
            justify-content: right;
        }
    </style>
</head>

<body style="background-color:#cdcdcd">
    <div class="preview-a4">
        <div class="wrapper-rill">
            <div class="text-center">
                <table class="text-center" width="100%">
                    <tbody>
                        <tr>
                            <td width="15%">
                                <img src="{{ asset('images/logo-kop.png') }}" width="80"
                                    height="80" class="ml-1">
                            </td>
                            <td>
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td colspan="4" height="50px">
                                                <h2 class="main-title">PEMERINTAH PROVINSI BANTEN</h2>
                                                <h3 class="nama-dinas">DINAS KOMUNIKASI INFORMATIKA STATISTIK DAN PERSANDIAN</h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">
                                                <p>KAWASAN PUSAT PEMERINTAHAN PROVINSI BANTEN (KP3B)</p>
                                                <p>Jl. Syeh Nawawi Al-Bantani, KP3B-Curug, Kota Serang - Provinsi Banten (42171)</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>


                        </tr>
                    </tbody>
                </table>
            </div>
            <hr style="height: 1px;border-top: 4px solid black;border-bottom:1px solid black;border-left: 0;">
            <div>
                <table class="table my-1">
                    <tbody>
                        <tr>
                            <td colspan="4" align="center">
                                <p style="line-height: 1.5; font-weight: bold;">LAPORAN MONITORING DATA ASET</p>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tbody>
                                        @php
                                            $start = $_GET['tgl_monitor_start'];
                                            $end = $_GET['tgl_monitor_end'];
                                        @endphp
                                        <tr>
                                            <td>Periode</td>
                                            <td>:</td>
                                            <td>
                                                {{ date('d F Y', strtotime($start)) }} - {{ date('d F Y', strtotime($end)) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="table my-1" style="border-collapse: collapse; font-size: 10px;">
                    <thead>                        
                        <tr>
                            <th style="border: 1px solid; padding: 4px;">No. </th>
                            <th style="border: 1px solid; padding: 4px;">OPD/UPTD</th>
                            <th style="border: 1px solid; padding: 4px;">Domain</th>
                            <th style="border: 1px solid; padding: 4px;">Jenis</th>
                            <th style="border: 1px solid; padding: 4px;">Tahun</th>
                            <th style="border: 1px solid; padding: 4px;">Sumber Dana</th>
                            <th style="border: 1px solid; padding: 4px;">Lokasi Server</th>
                            <th style="border: 1px solid; padding: 4px;">Tgl Monitor</th>
                            <th style="border: 1px solid; padding: 4px;">Kondisi</th>
                            <th style="border: 1px solid; padding: 4px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($laporan as $item)
                        <tr>
                            <td style="border: 1px solid; padding: 4px; text-align: center;">{{ $no++ }}</td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->nama_uptd != null ? $item->nama_uptd : $item->nama_opd}}
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                <a href="https://{{ $item->domain }}">{{ $item->domain }}</a>
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->jenis }}
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->tahun }}
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->sumber_dana }}
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->lokasi_server }}
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->tgl_monitoring }}
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->kondisi }}
                            </td>
                            <td style="border: 1px solid; padding: 4px">
                                {{ $item->status }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="justify-content-right">
                    <div class="ttd-x">
                        <p>Operator</p>
                        <div class="space-area"></div>
                        <span>......................</span>
                        <br>
                        <span>Nama Operator</span>
                    </div>
                </div>


            </div>
        </div>
    </div>
<script>
    window.print();
</script>
</body>

</html>