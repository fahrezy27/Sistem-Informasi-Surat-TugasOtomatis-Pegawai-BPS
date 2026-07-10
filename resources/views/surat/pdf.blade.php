<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat {{ $surat->nomor_surat }}</title>

    <style>
        body {
            font-family: "Times New Roman", serif;
            font-size: 12pt;
            line-height: 1.6;
        }

        .judul {
            text-align: center;
            font-weight: bold;
            font-size: 14pt;
            text-transform: uppercase;
        }

        .nomor {
            text-align: center;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 4px 0;
            vertical-align: top;
        }
    </style>
</head>
<body>

    <div class="judul">SURAT TUGAS</div>
    <div class="nomor">
        Nomor: {{ $surat->nomor_surat }}
    </div>

    <table>
        <tr>
            <td width="25%">Kepada</td>
            <td width="5%">:</td>
            <td>{{ $surat->pegawai->nama ?? '-' }}</td>
        </tr>

        <tr>
            <td>Untuk</td>
            <td>:</td>
            <td>
                {{ $surat->kegiatan->nama_kegiatan ?? '-' }} <br>
                pada tanggal
                <strong>
                    {{ \Carbon\Carbon::parse($surat->tanggal_mulai)->translatedFormat('d F Y') }}
                </strong>
                sampai
                <strong>
                    {{ \Carbon\Carbon::parse($surat->tanggal_selesai)->translatedFormat('d F Y') }}
                </strong>
            </td>
        </tr>
    </table>

    <br><br><br>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td>
                {{ \Carbon\Carbon::parse($surat->tanggal_surat)->translatedFormat('d F Y') }}
                <br><br><br><br>
                <strong>KEPALA</strong>
            </td>
        </tr>
    </table>

</body>
</html>
