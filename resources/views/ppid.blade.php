@extends('layouts.main')
@section('content')
    <section class="about">
        <div class="container">
            {{-- INFORMASI BERKALA --}}
            <div class="section-title pt-5" id="informasiBerkala">
                <h2>INFORMASI BERKALA</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 pt-4 content">

                    <table class="table">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <div>
                                        <div>
                                            <p style="text-align: center;"><strong>DAFTAR INFORMASI
                                                    BERKALA</strong><br><strong>DINAS PERHUBUNGAN PROVINSI JAWA
                                                    TIMUR<br></strong><strong>TAHUN 2021</strong></p>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr style="background-color: #cccccc;">
                                                        <td style="text-align: center;"><strong>No</strong></td>
                                                        <td style="text-align: center;"><strong>Jenis
                                                                Data</strong></td>
                                                        <td style="text-align: center;"><strong>Ringkasan Isi</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>1</strong></td>
                                                        <td colspan="2"><strong>Profil</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.1</td>
                                                        <td><a href="{{ url('/profile#kedudukanAlamat') }}"
                                                                aria-invalid="true">Kedudukan dan Alamat</a></td>
                                                        <td style="text-align: justify;">Kedudukan Dinas Perhubungan
                                                            Provinsi Jawa Timur tertuang dalam Peraturan Gubernur Jawa Timur
                                                            Nomor 77 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Urian
                                                            Tugas dan Fungsi serta Tata Kerja Dinas Perhubungan Provinsi
                                                            Jawa Timur.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.2</td>
                                                        <td><a href="{{ url('/profile#tugasFungsi') }}"
                                                                aria-invalid="true">Tugas pokok dan Fungsi</a></td>
                                                        <td>
                                                            <p>Tugas dan Fungsi dari Dinas Perhubungan Provinsi Jawa Timur
                                                                tertuang dalam Peraturan Gubernur Jawa Timur Nomor 77 Tahun
                                                                2016 tentang Kedudukan, Susunan Organisasi, Urian Tugas dan
                                                                Fungsi serta Tata Kerja Dinas Perhubungan Provinsi Jawa
                                                                Timur.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.3</td>
                                                        <td><a href="{{ url('/profile#visiMisi') }}"
                                                                aria-invalid="true">Visi dan Misi</a></td>
                                                        <td>Tertuang dalam Renstra Dinas Perhubungan Provinsi Jawa Timur
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.5</td>
                                                        <td><a href="{{ url('/profile#strukturOrganisasi') }}"
                                                                aria-invalid="true">Struktur Organisasi</a></td>
                                                        <td>
                                                            <p>Struktur organisasi dari Dinas Perhubungan Provinsi Jawa
                                                                Timur tertuang dalam Peraturan Gubernur Jawa Timur Nomor 77
                                                                Tahun 2016 tentang Kedudukan, Susunan Organisasi, Urian
                                                                Tugas dan Fungsi serta Tata Kerja Dinas Perhubungan Provinsi
                                                                Jawa Timur.</p>
                                                            Untuk Struktur Organisasi UPT dapat dilihat Peraturan Gubernur
                                                            Jawa Timur Nomor 109 Tahun 2016 tentang Nomenklatur, Susunan
                                                            Organisasi, Uraian Tugas dan Fungsi serta Tata Kerja Unit
                                                            Pelaksana Teknis Dinas Perhubungan Provinsi Jawa Timur.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.6</td>
                                                        <td><a href="?page=content&amp;isi=custom&amp;id=37"
                                                                aria-invalid="true">Unit Kerja</a></td>
                                                        <td>
                                                            <p>Struktur Organisasi UPT dapat dilihat Peraturan Gubernur Jawa
                                                                Timur Nomor 109 Tahun 2016 tentang Nomenklatur, Susunan
                                                                Organisasi, Uraian Tugas dan Fungsi serta Tata Kerja Unit
                                                                Pelaksana Teknis Dinas Perhubungan Provinsi Jawa Timur.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.7</td>
                                                        <td><a href="{{ url('/profile#pejabatStruktural') }}"
                                                                aria-invalid="true">Profil Pejabat</a></td>
                                                        <td>Profil singkat Jajaran Eselon II, III, dan IV berupa nama, gelar
                                                            dan jabatan.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.8</td>
                                                        <td><a href="{{ url('/profile#pegawai') }}"
                                                                aria-invalid="true">Pegawai</a></td>
                                                        <td>Jumlah Pegawai yang bekerja di Dinas Perhubungan Provinsi Jawa
                                                            Timur</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>2</strong></td>
                                                        <td><a href="?page=content&amp;isi=program&amp;id=20"
                                                                aria-invalid="true">Nama Program dan Kegiatan</a></td>
                                                        <td><strong>Nama Program dan kegiatan terdapat dalam Perjanjian
                                                                Kinerja</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>3</strong></td>
                                                        <td><a href="?page=content&amp;isi=program&amp;id=19"
                                                                aria-invalid="true"><strong>Kinerja</strong></a></td>
                                                        <td><strong>Data ini terdapat dalam LkjIP Dinas Perhubungan Prov.
                                                                Jatim</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong> 4</strong></td>
                                                        <td colspan="2"><strong>Ringkasan Laporan Keuangan</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.1</td>
                                                        <td><a href="?page=content&amp;isi=custom&amp;id=30"
                                                                aria-invalid="true">Laporan Realisasi Anggaran (LRA)</a>
                                                        </td>
                                                        <td>Merupakan Laporan Realisasi Anggaran tahun sebelumnya</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.2</td>
                                                        <td><a href="?page=content&amp;isi=custom&amp;id=29"
                                                                aria-invalid="true">Neraca</a></td>
                                                        <td>Merupakan Neraca Tahun sebelumnya</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.3</td>
                                                        <td><a href="?page=content&amp;isi=custom&amp;id=34"
                                                                aria-invalid="true">Laporan Arus Kas</a></td>
                                                        <td>Merupakan Dokumen Pelaksanaan Anggaran Dinas Perhubungan Prov.
                                                            Jatim</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.4</td>
                                                        <td><a href="?page=content&amp;isi=custom&amp;id=31"
                                                                aria-invalid="true">Daftar Aset</a></td>
                                                        <td>Merupakan daftar aset yang digunakan oleh Dinas Perhubungan
                                                            Provinsi Jawa Timur</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong> 5</strong></td>
                                                        <td><a href="?page=content&amp;isi=ekstra&amp;id=12"
                                                                aria-invalid="true"><strong>Ringkasan Laporan Akses
                                                                    Informasi Publik</strong></a></td>
                                                        <td><strong>Laporan PPID yang dibuat tiap tahunnya.</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong> 6</strong></td>
                                                        <td><a href="?page=content&amp;isi=ekstra&amp;id=16"
                                                                aria-invalid="true"><strong>Prosedur Permintaan
                                                                    Informasi</strong></a></td>
                                                        <td><strong>Merupakan tata cara memperoleh informasi sesuai dengan
                                                                SOP PPID</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong> 7</strong></td>
                                                        <td><a href="http://lpse.jatimprov.go.id/"><strong>Informasi
                                                                    Pengadaan Barang dan Jasa</strong></a></td>
                                                        <td><strong>Informasi kegiatan pengadaan barang dan jasa terdapat
                                                                dalam LPSE dan UPT Pelayanan Pengadaan Barang Jasa</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            {{-- TUGAS DAN FUNGSI --}}
            <div class="section-title pt-5" id="informasiSertaMerta">
                <h2>INFORMASI SERTA MERTA</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 content">
                    <table>
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <div>
                                        <div>
                                            <p style="text-align: center;"><strong>DAFTAR INFORMASI SERTA
                                                    MERTA</strong><br><strong>DINAS PERHUBUNGAN PROVINSI JAWA
                                                    TIMUR<br></strong><strong>TAHUN 2021<br></strong></p>
                                            <p style="text-align: justify;">Pada Dinas Perhubungan Provinsi Jawa Timur tidak
                                                terdapat informasi yang tergolong ke dalam informasi serta merta, adapun
                                                rinciannya adalah sebagai berikut :</p>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr style="background-color: #cccccc;">
                                                        <td style="text-align: center;"><strong>No</strong></td>
                                                        <td style="text-align: center;" width="500px"><strong>Jenis
                                                                Data</strong></td>
                                                        <td style="text-align: center;"><strong>Ringkasan Isi</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <p>Informasi tentang bencana alam seperti kekeringan, kebakaran
                                                                hutan karena faktor alam, hama penyakit tanaman, epidemik,
                                                                wabah, kejadian luar biasa, kejadian antariksa atau
                                                                benda-benda angkasa</p>
                                                        </td>
                                                        <td style="text-align: justify;">
                                                            <p>Informasi ini terdapat pada SKPD / Badan Lain<br>(cek <a
                                                                    href="http://bpbd.jatimprov.go.id/">Badan Penanggulangan
                                                                    Bencana Daerah</a>)</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Informasi tentang keadaan bencana non alam seperti kegagalan
                                                            industri atau teknologi, dampak industri, ledakan nuklir
                                                            pencemaran lingkungan dan kegiatan keantariksaan</td>
                                                        <td>Informasi ini terdapat pada SKPD / Badan Lain<br>(cek <a
                                                                href="http://disperindag.jatimprov.go.id/">Dinas
                                                                Perindustrian dan Perdagangan</a>)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <p>Bencana sosial seperti kerusuhan sosial, konflik sosial antar
                                                                kelompok atau antar komunitas masyarakat dan teror</p>
                                                        </td>
                                                        <td>Informasi ini terdapat pada SKPD / Badan Lain<br>(cek <a
                                                                href="http://satpolpp.jatimprov.go.id/">Satuan Polisi Pamong
                                                                Praja Prov Jatim</a> atau <a
                                                                href="http://dinsos.jatimprov.go.id/">Dinas Sosial</a>)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Informasi tentang jenis, persebaran dan daerah yang menjadi
                                                            sumber penyakit yang berpotensi menular</td>
                                                        <td>Informasi ini terdapat pada SKPD / Badan Lain<br>(cek <a
                                                                href="http://dinkes.jatimprov.go.id/">Dinas Kesehatan</a>)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <p>Informasi tentang racun pada bahan makanan yang dikonsumsi
                                                                oleh masyarakat</p>
                                                        </td>
                                                        <td>
                                                            <p>Informasi ini terdapat pada SKPD / Badan Lain<br>(cek <a
                                                                    href="http://disperindag.jatimprov.go.id/">Dinas
                                                                    Perindustrian dan Perdagangan</a>)</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>
                                                            <p>Informasi tentang rencana gangguan terhadap utilitas publik
                                                            </p>
                                                        </td>
                                                        <td>Informasi ini terdapat pada SKPD / Badan Lain<br>(cek <a
                                                                href="http://satpolpp.jatimprov.go.id/">Satuan Polisi Pamong
                                                                Praja Prov Jatim</a> atau <a
                                                                href="http://bakesbangpol.jatimprov.go.id/">Badan Kesatuan
                                                                Bangsa dan Politik</a>)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            {{-- INFORMASI SETIAP SAAT --}}
            <div class="section-title pt-5" id="informasiSetiapSaat">
                <h2>INFORMASI SETIAP SAAT</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 content">
                    <table>
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <div>
                                        <div>
                                            <p style="text-align: center;"><strong>DAFTAR INFORMASI YANG WAJIB TERSEDIA
                                                    SETIAP SAAT</strong><br><strong>DINAS PERHUBUNGAN PROVINSI JAWA
                                                    TIMUR<br></strong><strong>TAHUN 2021</strong></p>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr style="background-color: #cccccc;">
                                                        <td style="text-align: center;"><strong>No</strong></td>
                                                        <td style="text-align: center;" width="300px"><strong>Jenis
                                                                Data</strong></td>
                                                        <td style="text-align: center;"><strong>Ringkasan Isi</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a href="../?page=content&amp;isi=ekstra&amp;id=14">Daftar
                                                                Informasi Publik (DIP)</a></td>
                                                        <td style="text-align: justify;">Merupakan kumpulan Informasi Publik
                                                            yang terdapat pada Dinas Perhubungan Provinsi Jawa Timur yang
                                                            disusun dalam bentuk tabel</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td><a href="../?page=content&amp;isi=ekstra&amp;id=13">Peraturan,
                                                                Keputusan atau Kebijakan Informasi Publik</a></td>
                                                        <td>Regulasi yang mengatur tentang kebijakan informasi publik</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td><a href="../?page=content&amp;isi=ekstra&amp;id=19">Seluruh
                                                                Informasi Berkala</a></td>
                                                        <td>Informasi yang digolongkan ke dalam informasi berkala</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=2">Pedoman
                                                                Pengelolaan Informasi Publik dan Administrasinya</a></td>
                                                        <td>Keputusan Kepala Dinas Perhubungan Provinsi Jawa Timur tentang
                                                            SOP PPID</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td><a href="../?page=content&amp;isi=profil&amp;id=4">Profil
                                                                Pimpinan</a></td>
                                                        <td>Profil Pejabat Eselon II, III, dan IV berupa nama, gelar serta
                                                            jabatan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=30">Laporan
                                                                Realisasi Anggaran</a></td>
                                                        <td>Laporan Realisasi Anggaran pada tahun sebelumnya</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=28">Surat
                                                                Perjanjian dengan Pihak ke 3</a></td>
                                                        <td>Surat Perjanjian Kerja (SPK)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=28">Surat
                                                                menyurat pimpinan atau pejabat dalam rangka pelaksanaan
                                                                tugas pokok dan fungsi</a></td>
                                                        <td>Surat kepada instansi lain yang ditandatangani pejabat terkait
                                                            dengan pelaksanaan tugas pokok dan fungsi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=28">Syarat
                                                                perizinan dan dokumen pendukungnya</a></td>
                                                        <td>Persyaratan dalam pengurusan izin-izin yang dikeluarkan oleh
                                                            Dinas Perhubungan Provinsi Jawa Timur</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=31">Data
                                                                perbendaharaan inventaris (aset)</a></td>
                                                        <td>Data Rekap Aset sampai dengan tahun sebelumnya</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td><a href="../?page=content&amp;isi=program&amp;id=10">Rencana
                                                                Strategis / Rencana Kerja</a></td>
                                                        <td>Dokumen Rencana Strategis (Renstra)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=28">Agenda Kerja
                                                                Pimpinan</a></td>
                                                        <td>Data agenda kerja pimpinan SKPD</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td><a href="../?page=content&amp;isi=custom&amp;id=28">Daftar dan
                                                                hasil penelitian</a></td>
                                                        <td>Hasil Penelitian yang dilakukan oleh Dinas Perhubungan Provinsi
                                                            Jawa Timur</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            {{-- PROSEDUR PERMOHONAN INFORMASI --}}
            <div class="section-title pt-5" id="prosedurPermohonanInformasi">
                <h2>PROSEDUR PERMOHONAN INFORMASI</h2>
            </div>

            <p>
                Dalam memberikan layanan informasi kepada pemohon informasi, PPID menetapkan waktu pemberian Pelayanan
                Informasi Publik. Di Dinas Perhubungan Provinsi Jawa Timur, penyelenggaraan pelayanan informasi publik
                dilaksanakan pada hari kerja Senin sampai dengan Jumat, dengan ketentuan sebagai berikut :
            </p>
            <p>Senin – Kamis : 09.00 – 14.00 WIB</p>
            <p>Istirahat : 12.00 – 13.00 WIB</p>
            <p>Jumat : 09.00 – 11.00 WIB</p>
            <p>untuk prosedur lebih lengkap bisa dilihat pada link ini :</p>

            <p style="text-align: center;"><a title="SOP PPID"
                    href="../?page=content&amp;isi=custom&amp;id=2"><strong>KEPUTUSAN&nbsp;<br></strong><strong>KEPALA DINAS
                        PERHUBUNGAN DAN LALU LINTAS ANGKUTAN JALAN&nbsp;</strong><strong>PROVINSI JAWA
                        TIMUR&nbsp;<br></strong><strong>NOMOR :
                        188.4/155/104/2014&nbsp;<br></strong><strong>TENTANG&nbsp;</strong><strong>STANDAR PELAYANAN DAN
                        STANDAR OPERASIONAL PROSEDUR&nbsp;</strong><strong>INFORMASI PUBLIK&nbsp;<br></strong><strong>DINAS
                        PERHUBUNGAN DAN LLAJ PROVINSI JAWA TIMUR</strong></a></p>

            <p><strong>Adapun Alur Permohonan Informasi dapat dilihat pada gambar dibawah</strong>.</p>

            <div class="row">
                <div class="col-lg-12 pt-4 content">
                    <div class="container">
                        <img class="img-fluid mx-auto d-block "
                            src="{{ asset('template/assets/img/Alur-Permohonan-Informasi.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            {{-- Struktur Organisasi PPID Pembantu --}}
            <div class="section-title pt-5" id="strukturOrganisasi">
                <h2>Struktur Organisasi PPID Pembantu</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 content">
                    <h3>Dinas Perhubungan dan LLAJ Provinsi Jawa Timur</h3>
                    <p>Pada Organisasi PPID Pembantu Dinas Perhubungan dan Lalu Lintas Angkutan Jalan Provinsi Jawa Timur
                        terbagi atas Atasan PPID, Ketua, Sekretaris serta 3 Bidang sebagaimana terdapat dalam gambar berikut
                        :</p>
                    <div class="row">
                        <div class="col-lg-12 pt-4 content">
                            <div class="container">
                                <img class="img-fluid mx-auto d-block "
                                    src="{{ asset('template/assets/img/Struktur-PPID.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- REGULASI INFORMASI PUBLIK --}}
            <div class="section-title pt-5" id="regulasi">
                <h2>REGULASI INFORMASI PUBLIK</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 content">
                    <div class="container">
                        <ul style="list-style-type: circle;">
                            <li><span style="font-family: arial,helvetica,sans-serif; font-size: medium;"><a
                                        style="margin: 0px; padding: 0px; color: #4368b4; text-decoration: none;"
                                        title="UU 14 2008" href="../?page=content&amp;isi=custom&amp;id=3">UU No 14 Tahun
                                        2008<span class="Apple-converted-space">&nbsp;</span><em
                                            style="margin: 0px; padding: 0px;">( Keterbukaaan Informasi
                                            Publik)</em></a></span></li>
                            <li><span style="font-family: arial,helvetica,sans-serif; font-size: medium;"><a
                                        style="margin: 0px; padding: 0px; color: #4368b4; text-decoration: none;"
                                        href="../?page=content&amp;isi=custom&amp;id=4">Peraturan Pemerintah No 61 Tahun
                                        2010, 23 Agustus 2010<span class="Apple-converted-space">&nbsp;</span><em
                                            style="margin: 0px; padding: 0px;">(Pelaksanaan UU No. 14 Tahun
                                            2008)</em></a></span></li>
                            <li><span style="font-family: arial,helvetica,sans-serif; font-size: medium;"><a
                                        style="margin: 0px; padding: 0px; color: #4368b4; text-decoration: none;"
                                        href="../?page=content&amp;isi=custom&amp;id=5">Permendagri No. 3 Tahun 2017, 09
                                        Januari 2017 <em style="margin: 0px; padding: 0px;">(Pedoman Pengelolaan&nbsp;
                                            Pelayanan Informasi dan Dokumentasi di lingkungan Kemendagri)</em></a></span>
                            </li>
                            <li><span style="font-family: arial,helvetica,sans-serif; font-size: medium;"><a
                                        style="margin: 0px; padding: 0px; color: #4368b4; text-decoration: none;"
                                        href="../?page=content&amp;isi=custom&amp;id=6">Peraturan Komisi Informasi No. 1
                                        Tahun 2010, 30 April 2010<span class="Apple-converted-space">&nbsp;</span><em
                                            style="margin: 0px; padding: 0px;">(Standar Pelyanan Informasi
                                            Publik)</em></a></span></li>
                            <li><span style="font-family: arial,helvetica,sans-serif; font-size: medium;"><a
                                        style="margin: 0px; padding: 0px; color: #4368b4; text-decoration: none;"
                                        href="../?page=content&amp;isi=custom&amp;id=7">Peraturan Komisi Informasi No. 1
                                        Tahun 2013, 28 Maret 2013 <em style="margin: 0px; padding: 0px;">(Prosedur
                                            Penyelesaian Sengketa Informasi Publik)</em></a></span></li>
                            <li><span style="font-family: arial,helvetica,sans-serif; font-size: medium;"><a
                                        style="margin: 0px; padding: 0px; color: #4368b4; text-decoration: none;"
                                        href="../?page=content&amp;isi=custom&amp;id=8">Peraturan Gubernur Jawa Timur No. 8
                                        Tahun 2018, 21 Pebruari 2018<em style="margin: 0px; padding: 0px;"> (Pedoman
                                            Pengelolaan Pelayanan Informasi dan Dokumentasi di Lingkungan Pemeritah Provinsi
                                            Jawa Timur)</em></a></span></li>
                            <li><span style="font-family: arial,helvetica,sans-serif; font-size: medium;"><a
                                        style="margin: 0px; padding: 0px; color: #4368b4; text-decoration: none;"
                                        href="../?page=content&amp;isi=custom&amp;id=2">Keputusan Kepala Dinas Perhubungan
                                        dan LLAJ Provinsi Jawa Timur Nomor : 188.4/155/104/2014 tentang SOP Informasi Publik
                                        Dinas Perhubungan dan LLAJ Provinsi Jawa Timur</a></span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
