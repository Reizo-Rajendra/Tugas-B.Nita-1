<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            margin: 0;
            padding: 20px;
        }

        .wadah {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .bagian-atas {
            background-color: #2196F3;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .bagian-atas h1 {
            margin: 0 0 10px 0;
        }

        .tombol-link {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 25px;
            background: white;
            color: #2196F3;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .isi {
            padding: 30px;
        }

        .bagian {
            margin-bottom: 40px;
        }

        .judul-bagian {
            font-size: 20px;
            color: #2196F3;
            margin-bottom: 20px;
            border-bottom: 2px solid #2196F3;
            padding-bottom: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th {
            background-color: #2196F3;
            color: white;
            padding: 10px;
            text-align: center;
            border: 1px solid #1976D2;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .kolom-hari {
            background-color: #f5f5f5;
            font-weight: bold;
            color: #2196F3;
        }

        .mapel {
            font-weight: bold;
            font-size: 14px;
        }

        .guru {
            font-size: 11px;
            color: #666;
        }

        .ruangan {
            font-size: 11px;
            color: #666;
            font-style: italic;
        }

        .tabel-piket {
            max-width: 500px;
            margin: 0 auto;
        }

        .hari-piket {
            background-color: #e3f2fd;
            font-weight: bold;
        }

        .highlight-nama {
            background-color: #fff9c4;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="wadah">
        <div class="bagian-atas">
            <h1>Jadwal Pelajaran & Piket</h1>
            <p>X PPLG 1</p>
            <a href="Biodata.php" class="tombol-link">Kembali ke Biodata</a>
        </div>

        <div class="isi">
            <!-- jadwal pelajaran -->
            <div class="bagian">
                <h2 class="judul-bagian">Jadwal Pelajaran</h2>
                <table>
                    <tr>
                        <th>HARI</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                    </tr>
                    <tr>
                        <td class="kolom-hari">SENIN</td>
                        <td colspan="2">
                            <div class="mapel">BNG</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">INF</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">KKA</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">GIM</div>
                        </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="kolom-hari">SELASA</td>
                        <td colspan="2">
                            <div class="mapel">MTK</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">SNM</div>
                        </td>
                        <td colspan="3">
                            <div class="mapel">IPAS</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">BIN</div>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="kolom-hari">RABU</td>
                        <td colspan="3">
                            <div class="mapel">PABP</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">POR</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">BJW</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">SJR</div>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="kolom-hari">KAMIS</td>
                        <td colspan="2">
                            <div class="mapel">BNG</div>
                        </td>
                        <td colspan="3">
                            <div class="mapel">PGD</div>
                        </td>
                        <td colspan="3">
                            <div class="mapel">PGD</div>
                        </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="kolom-hari">JUMAT</td>
                        <td colspan="2">
                            <div class="mapel">IPAS</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">MTK</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">PPS</div>
                        </td>
                        <td colspan="2">
                            <div class="mapel">BIN</div>
                        </td>
                        <td colspan="2"></td>
                    </tr>
                </table>
            </div>

            <!-- jadwal piket -->
            <div class="bagian">
                <h2 class="judul-bagian">Jadwal Piket Kelas</h2>
                <table class="tabel-piket">
                    <tr>
                        <th>Hari</th>
                        <th>Nama Petugas</th>
                    </tr>
                    <tr>
                        <td class="hari-piket">SENIN</td>
                        <td>
                            1. Fanezza<br>
                            2. Cahaya<br>
                            3. Aca<br>
                            4. Azka<br>
                            5. Rama<br>
                            6. Nafi'u<br>
                            7. Ridwan
                        </td>
                    </tr>
                    <tr>
                        <td class="hari-piket">SELASA</td>
                        <td>
                            1. Love<br>
                            2. Dipa<br>
                            3. Angel<br>
                            4. Galuh<br>
                            5. Teo<br>
                            6. Syaarif<br>
                            7. Zidni
                        </td>
                    </tr>
                    <tr>
                        <td class="hari-piket">RABU</td>
                        <td>
                            1. Ines<br>
                            2. Nashwa<br>
                            3. Oliv<br>
                            4. Kirey<br>
                            5. Marta<br>
                            6. Khoyru<br>
                            <span class="highlight-nama">7. Reizo</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="hari-piket">KAMIS</td>
                        <td>
                            1. Jihan<br>
                            2. Valen<br>
                            3. Jason<br>
                            4. Tata<br>
                            5. Bunga<br>
                            6. Qais<br>
                            7. Gavian
                        </td>
                    </tr>
                    <tr>
                        <td class="hari-piket">JUMAT</td>
                        <td>
                            1. Alin<br>
                            2. Ihsan<br>
                            3. Virda<br>
                            4. Windy<br>
                            5. Nove<br>
                            6. Ubay<br>
                            7. Kael<br>
                            8. Leon
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>