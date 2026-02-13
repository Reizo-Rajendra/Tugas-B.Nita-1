<?php
// variabel biodata
$nama_lengkap = "Reizo Rajendra DIanta";
$nama_panggilan = "Reizo";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 15;
$bulan_lahir = 10;
$tahun_lahir = 2010;
$alamat = "Jl. Kapas Utara 2 Blok i/No 209";
$gender = "Laki-laki";
$kewarganegaraan = "Indonesia";
$no_wa = "089652171900";
$email = "reizorajendra@gmail.com";
$foto = "Foto profil.jpeg";
$motto_hidup = "Orang cerdas belajar dari kesalahan, orang hebat belajar dari kegagalan.";

// hitung umur
$tahun_sekarang = 2026;
$umur = $tahun_sekarang - $tahun_lahir;
$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;

// daftar hobi pake list 123
$hobi = [
    "Coding",
    "Editing",
    "Uploud youtube"
];

// makanan kesukaan pake list kotak
$makanan_favorit = [
    "Nasi Goreng",
    "Burger",
    "Ayam",
    "Pizza"
];

// minuman kesukaan pake list ABC
$minuman_favorit = [
    "Matcha",
    "Es Degan",
    "Kopi"
];

// skill dengan level
$skill_list = [
    ["nama_skill" => "HTML & CSS", "nilai" => 90],
    ["nama_skill" => "MySql", "nilai" => 85],
    ["nama_skill" => "PHP", "nilai" => 80],
    ["nama_skill" => "JavaScript", "nilai" => 70]
];

// riwayat sekolah
$pendidikan = [
    ["tingkat" => "SD", "nama_sekolah" => "SD Negeri MuktiHarjolorr", "tahun_mulai" => 2016, "tahun_lulus" => 2022],
    ["tingkat" => "SMP", "nama_sekolah" => "SMP Negeri 20 Semarang", "tahun_mulai" => 2022, "tahun_lulus" => 2025],
    ["tingkat" => "SMA", "nama_sekolah" => "SMK Negeri 8 Semarang", "tahun_mulai" => 2025, "tahun_lulus" => "2028"]
];

// keinginan 10 tahun kedepan
$keinginan = "Hai namaku $nama_panggilan, saat ini tahun $tahun_sekarang, aku adalah siswa SMK yang berumur $umur tahun, 10 tahun lagi di tahun $tahun_10_lagi, di umur $umur_10_lagi tahun aku adalah seorang programmer profesional. Aku ingin kerja di perusahaan IT atau menjadi Konten Kreator. Rencana yang akan aku tempuh adalah kuliah jurusan informatika, Upgrade Skill, dan ikut lomba programming.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata <?php echo $nama_panggilan; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            margin: 0;
            padding: 20px;
        }

        .wadah {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .kotak-motto {
            background-color: #2196F3;
            padding: 10px;
            overflow: hidden;
        }

        .teks-jalan {
            color: white;
            font-size: 16px;
            font-weight: bold;
            white-space: nowrap;
            animation: geser-kiri 15s linear infinite;
        }

        @keyframes geser-kiri {
            from { transform: translateX(100%); }
            to { transform: translateX(-100%); }
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

        .bagian-profil {
            margin-bottom: 30px;
        }

        .foto-profil {
            text-align: center;
            margin-bottom: 30px;
        }

        .foto-profil img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            border: 5px solid #2196F3;
            box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3);
        }

        .grid-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .kotak-info {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #e3f2fd;
            display: flex;
            gap: 12px;
            align-items: center;
            transition: all 0.3s;
        }

        .kotak-info:hover {
            border-color: #2196F3;
            box-shadow: 0 3px 10px rgba(33, 150, 243, 0.2);
        }

        .icon-info {
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e3f2fd;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .label-info {
            font-size: 11px;
            color: #666;
            display: block;
            margin-bottom: 3px;
        }

        .isi-info {
            font-weight: 600;
            color: #333;
        }

        .bagian {
            margin-bottom: 30px;
        }

        .judul-bagian {
            font-size: 20px;
            color: #2196F3;
            margin-bottom: 15px;
            border-bottom: 2px solid #2196F3;
            padding-bottom: 8px;
        }

        .kotak-keinginan {
            background-color: #2196F3;
            color: white;
            padding: 20px;
            border-radius: 8px;
            line-height: 1.6;
        }

        .list-hobi {
            list-style: decimal;
            padding-left: 30px;
        }

        .list-hobi li {
            margin: 8px 0;
            padding: 8px;
            background: #f5f5f5;
            border-radius: 3px;
        }

        .list-makanan {
            list-style: square;
            padding-left: 30px;
        }

        .list-makanan li {
            margin: 8px 0;
            padding: 8px;
            background: #fff9c4;
            border-radius: 3px;
        }

        .list-minuman {
            list-style: upper-alpha;
            padding-left: 30px;
        }

        .list-minuman li {
            margin: 8px 0;
            padding: 8px;
            background: #e1f5fe;
            border-radius: 3px;
        }

        .kotak-skill {
            background: #f5f5f5;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .nama-skill {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .bar-skill {
            background: #ddd;
            height: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        .isi-skill {
            height: 100%;
            background-color: #2196F3;
            border-radius: 10px;
            text-align: right;
            padding-right: 8px;
            color: white;
            font-size: 12px;
            line-height: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #2196F3;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        @media (max-width: 768px) {
            .grid-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="wadah">
        <!-- motto yang jalan -->
        <div class="kotak-motto">
            <div class="teks-jalan">
                ★ <?php echo $motto_hidup; ?> ★ <?php echo $motto_hidup; ?> ★ <?php echo $motto_hidup; ?> ★
            </div>
        </div>

        <!-- bagian atas -->
        <div class="bagian-atas">
            <h1>Biodata Siswa</h1>
            <p>Kelas X PPLG 1</p>
            <a href="Jadwal.php" class="tombol-link">Lihat Jadwal</a>
        </div>

        <!-- isi konten -->
        <div class="isi">
            <!-- foto dan data diri -->
            <div class="bagian-profil">
                <div class="foto-profil">
                    <img src="<?php echo $foto; ?>" alt="Foto Profil">
                    <h2 style="margin-top: 15px; color: #2196F3;"><?php echo $nama_lengkap; ?></h2>
                    <p style="color: #666; font-size: 14px;">Siswa X PPLG 1</p>
                </div>
                
                <h2 class="judul-bagian">📋 Data Pribadi</h2>
                
                <div class="grid-info">
                    <div class="kotak-info">
                        <div class="icon-info">👤</div>
                        <div>
                            <span class="label-info">Nama Panggilan</span>
                            <div class="isi-info"><?php echo $nama_panggilan; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">🕌</div>
                        <div>
                            <span class="label-info">Agama</span>
                            <div class="isi-info"><?php echo $agama; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">⚥</div>
                        <div>
                            <span class="label-info">Jenis Kelamin</span>
                            <div class="isi-info"><?php echo $gender; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">📍</div>
                        <div>
                            <span class="label-info">Tempat Lahir</span>
                            <div class="isi-info"><?php echo $tempat_lahir; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">🎂</div>
                        <div>
                            <span class="label-info">Tanggal Lahir</span>
                            <div class="isi-info"><?php echo "$tanggal_lahir-$bulan_lahir-$tahun_lahir"; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">🎯</div>
                        <div>
                            <span class="label-info">Umur</span>
                            <div class="isi-info"><?php echo $umur; ?> Tahun</div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">🇮🇩</div>
                        <div>
                            <span class="label-info">Kewarganegaraan</span>
                            <div class="isi-info"><?php echo $kewarganegaraan; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">🏠</div>
                        <div>
                            <span class="label-info">Alamat</span>
                            <div class="isi-info"><?php echo $alamat; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">📱</div>
                        <div>
                            <span class="label-info">WhatsApp</span>
                            <div class="isi-info"><?php echo $no_wa; ?></div>
                        </div>
                    </div>
                    <div class="kotak-info">
                        <div class="icon-info">✉️</div>
                        <div>
                            <span class="label-info">Email</span>
                            <div class="isi-info"><?php echo $email; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- keinginan 10 tahun -->
            <div class="bagian">
                <h2 class="judul-bagian">Keinginan 10 Tahun Lagi</h2>
                <div class="kotak-keinginan">
                    <?php echo $keinginan; ?>
                </div>
            </div>

            <!-- skill -->
            <div class="bagian">
                <h2 class="judul-bagian">Skill</h2>
                <?php foreach($skill_list as $skill): ?>
                <div class="kotak-skill">
                    <div class="nama-skill"><?php echo $skill['nama_skill']; ?></div>
                    <div class="bar-skill">
                        <div class="isi-skill" style="width: <?php echo $skill['nilai']; ?>%;">
                            <?php echo $skill['nilai']; ?>%
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- hobi -->
            <div class="bagian">
                <h2 class="judul-bagian">Hobi</h2>
                <ol class="list-hobi">
                    <?php foreach($hobi as $item_hobi): ?>
                    <li><?php echo $item_hobi; ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>

            <!-- makanan favorit -->
            <div class="bagian">
                <h2 class="judul-bagian">Makanan Favorit</h2>
                <ul class="list-makanan">
                    <?php foreach($makanan_favorit as $makanan): ?>
                    <li><?php echo $makanan; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- minuman favorit -->
            <div class="bagian">
                <h2 class="judul-bagian">Minuman Favorit</h2>
                <ul class="list-minuman">
                    <?php foreach($minuman_favorit as $minuman): ?>
                    <li><?php echo $minuman; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- riwayat pendidikan -->
            <div class="bagian">
                <h2 class="judul-bagian">Riwayat Pendidikan</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Tingkat</th>
                            <th>Nama Sekolah</th>
                            <th>Tahun Mulai</th>
                            <th>Tahun Lulus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pendidikan as $sekolah): ?>
                        <tr>
                            <td><?php echo $sekolah['tingkat']; ?></td>
                            <td><?php echo $sekolah['nama_sekolah']; ?></td>
                            <td><?php echo $sekolah['tahun_mulai']; ?></td>
                            <td><?php echo $sekolah['tahun_lulus']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>