@extends('layouts.main')
@section('title', 'Profil Dinas Perhubungan Provinsi Jawa Timur')
@section('content')
    <section id="profile" class="about">
        <div class="container">
            {{-- VISI DAN MISI --}}
            <div class="section-title pt-5">
                <h2>VISI DAN MISI</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3 class="text-center">Sesuai dengan arahan Gubernur, Visi - Misi Dinas Perhubungan dan seluruh OPD
                        di Jawa Timur
                        menggunakan Visi - Misi Pemerintah Provinsi Jawa Timur.
                    </h3>

                    <ul class="mt-5">
                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                        </li>
                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu
                            fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            {{-- TUGAS DAN FUNGSI --}}
            <div class="section-title pt-5">
                <h2>TUGAS DAN FUNGSI</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <p>
                        Tugas dan Fungsi dari Dinas Perhubungan Provinsi Jawa Timur tercantum dalam Peraturan Gubernur Jawa
                        Timur No 77 Tahun 2016 BAB III Pasal 4 ayat (1) dan (2). Tugas dan Fungsi tersebut antara lain :
                    </p>

                    <div class="container">
                        <h4>Tugas :</h4>

                        <p class="ms-2">
                            Dinas Perhubungan Provinsi Jawa Timur mempunyai tugas melaksanakan urusan pemerintahan yang
                            menjadi
                            kewenangan Pemerintah Provinsi di bidang perhubungan dan tugas pembantuan.
                        </p>

                        <h4>Fungsi :</h4>

                        <p>
                        <ul class="ms-2">
                            <li>A. perumusan kebijakan di bidang perhubungan;</li>
                            <li>B. pelaksanaan kebijakan di bidang perhubungan;</li>
                            <li>C. pelaksanaan evaluasi dan pelaporan di bidang perhubungan;</li>
                            <li>D. pelaksanaan administrasi Dinas di bidang perhubungan dan</li>
                            <li>E. pelaksanaan fungsi lain yang diberikan oleh Gubernur terkait dengan tugas dan fungsinya
                            </li>
                        </ul>
                        </p>
                    </div>

                </div>
            </div>

            {{-- KEDUDUKAN DAN ALAMAT --}}
            <div class="section-title pt-5">
                <h2>KEDUDUKAN DAN ALAMAT</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <div class="container">
                        <h4>Kedudukan :</h4>

                        <p class="ms-2">
                            Dinas Perhubungan merupakan unsur pelaksana otonomi daerah, dipimpin oleh seorang kepala dinas,
                            yang berada di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah.
                        </p>

                        <h4>Alamat :</h4>

                        <p class="ms-2">
                            DINAS PERHUBUNGAN PROVINSI JAWA TIMUR
                            Jl. Ahmad Yani No. 268 Tlp. (031) 8292276, 8291530, Fax. (031) 8292433
                            Jl. Jemur Andayani I Telpon (031) 8432847-8432616, Fax. (031) 8418187
                            S U R A B A Y A
                        </p>
                    </div>

                </div>
            </div>

            {{-- STRUKTUR ORGANISASI --}}
            <div class="section-title pt-5">
                <h2>STRUKTUR ORGANISASI</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <div class="container">
                        <img class="img-fluid mx-auto d-block "
                            src="{{ asset('template/assets/img/Struktur_dishub.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            {{-- PENJABAT STRUKTURAL --}}
            <div class="section-title pt-5">
                <h2>PENJABAT STRUKTURAL</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Di Lingkungan Dinas Perhubungan Provinsi Jawa Timur</h3>
                    <h3>Data Juni 2021</h3>
                    <div class="container">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"><strong>NO</strong></td>
                                    <td style="text-align: center;"><strong>NAMA</strong></td>
                                    <td style="text-align: center;"><strong>JABATAN</strong></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>1</strong></td>
                                    <td><strong>Dr. NYONO, S.T., M.T.</strong></td>
                                    <td><strong>Kepala Dishub Prov. Jatim&nbsp;</strong></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>2</strong></td>
                                    <td><strong>Ir. LUHUR PRIHADI EKA NURABDI, M.T.</strong></td>
                                    <td><strong>Sekretaris Dishub Prov. Jatim</strong></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3</td>
                                    <td>KRISTIANI ASIH PRATIWI, S.H., M.Si.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">4</td>
                                    <td>PUDJO TRISAWALIHADI, S.P., M.M.</td>
                                    <td>Kepala Sub Bagian Penyusunan Program</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5</td>
                                    <td>ERNA LUKITANINGSIH, SE, MM.</td>
                                    <td>Kepala Sub Bagian Keuangan</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>6</strong></td>
                                    <td>-</td>
                                    <td><strong>Kepala Bidang Angkutan dan Keselamatan Jalan</strong></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">7</td>
                                    <td>-</td>
                                    <td>Kepala Seksi Angkutan Jalan</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">8</td>
                                    <td>AINUR ROFIQ, S.H., M.M.</td>
                                    <td>Kepala Seksi Prsarana Angkutan Jalan&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">9</td>
                                    <td>ARJANI HIA PUTRA, ATD.</td>
                                    <td>Kepala Seksi Keselamatan Jalan</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;10</strong></td>
                                    <td>-</td>
                                    <td><strong>Kepala Bidang Lalu Lintas Jalan</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;11</td>
                                    <td>HERU SUKANDAR, S.H.</td>
                                    <td>Kepala Seksi Manajemen dan Rekayasa Lalin</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;12</td>
                                    <td>Drs. PURWANTO</td>
                                    <td>Kepala Seksi Prasarana Lalu Lintas&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;13</td>
                                    <td>AGUS SETIYONO, Ama.PKB, SH, MM</td>
                                    <td>Kepala Seksi Teknik Kendaraan</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;14</strong></td>
                                    <td><strong>SHERLITA RATNA DEWI AGUSTIN, S.Si., M.IP.</strong></td>
                                    <td><strong>Kepala Bidang Peng. Trans dan Multimoda&nbsp;</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;15</td>
                                    <td>FARID SUSANTO, A.Md.LLAJ., S.Si.T., M.T.</td>
                                    <td>Kepala Seksi Peng.Sistem dan TI Trans</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;16</td>
                                    <td>HENRY SANJAYA, SE</td>
                                    <td>Kepala Seksi Pengemb Perkeretaapian</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;17</td>
                                    <td>SUMARNI, S.T.</td>
                                    <td>Kepala Seksi Keterpaduan Multimoda</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;18</strong></td>
                                    <td><strong>SAIKUDIN, S.T., M.T.</strong></td>
                                    <td><strong>Kepala Bidang Perhubungan Laut dan LLASDP</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;19</td>
                                    <td>-</td>
                                    <td>Kepala Seksi Lalin Ang Laut &amp; Kes Pelayaran</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;20</td>
                                    <td>INDRA BACHTIYAR, S.T.</td>
                                    <td>Kepala Seksi Kepelabuhanan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;21</td>
                                    <td>R.PERI SADJARWO, A.Md, SE, MM.</td>
                                    <td>Kepala Seksi Lalu Lintas ASDP</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;22</strong></td>
                                    <td><strong>IMAM ASY`ARI, S.Si.,M.T.</strong></td>
                                    <td><strong>Kepala UPT LLAJ Surabaya</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;23</td>
                                    <td>SITI SAMSIYAH, S.H.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;24</td>
                                    <td>Dra. MURNI ASWATI, MM</td>
                                    <td>Kepala Seksi Lalu Lintas &amp; Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;25</td>
                                    <td>M. CHISJQIEL, A.MA PKB, S.T., M. PSDM</td>
                                    <td>Kepala Seksi Pengendalian &amp; Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;26</strong></td>
                                    <td><strong>AGUNG WAHONO, A.Md., S.H., M.M.</strong></td>
                                    <td><strong>Kepala UPT LLAJ Malang&nbsp;</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;27</td>
                                    <td>SRI WAHYUNI, S.AP., M.M.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;28</td>
                                    <td>WAHYUDI, AMd, SE, M.Ak</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;29</td>
                                    <td>SUPRIHADI, ST, MM.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;30</strong></td>
                                    <td><strong>IMAM CHAIRIL SALEH, ATD., S.E, M.MT.</strong></td>
                                    <td><strong>Kepala UPT LLAJ Probolinggo</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;31</td>
                                    <td>MULYONO, S.H.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;32</td>
                                    <td>M. BINSAR GARCHAH SIREGAR, S.H., M.M.</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;33</td>
                                    <td>DWI YUNAEDI WINDYARTO, S.T., M.M.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;34</strong></td>
                                    <td>-</td>
                                    <td><strong>Kepala UPT LLAJ Kediri</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;35</td>
                                    <td>RULLY ASMIJANTO, S.Sos, M.Si</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;36</td>
                                    <td>SONI RUSTANTO, ATD., M.T.</td>
                                    <td>Kepala Seksi Lalin dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;37</td>
                                    <td>EKO IRIANTO,S.Sos, MM</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;38</strong></td>
                                    <td><strong>Drs. PADELAN, M.Si</strong></td>
                                    <td><strong>Kepala UPT LLAJ Tulungagung</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;39</td>
                                    <td>SUGIHARTO, S.H.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;40</td>
                                    <td>WIJOSO, S.H., M.M.</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;41</td>
                                    <td>ZACHARIA OESMAN, ATD., M.T.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;42</strong></td>
                                    <td><strong>AGUS WIJAYA, SH, M.Hum.</strong></td>
                                    <td><strong>Kepala UPT LLAJ Jember</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;43</td>
                                    <td>-</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;44</td>
                                    <td>TEGUH BUDI HARTONO S, S.IT, M.Si</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;45</td>
                                    <td>ASTONO, SH, MM.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;46</strong></td>
                                    <td>-</td>
                                    <td><strong>Kepala UPT LLAJ Madiun</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;47</td>
                                    <td>HANDAYATI, S.H.</td>
                                    <td>Kepala Sub Bagian Tata Usaha&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;48</td>
                                    <td>IMAM FAHAMSYAH, S.T., M.T.</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;49</td>
                                    <td>HARY MURCAHYO, S.E., M.M.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;50</strong></td>
                                    <td><strong>Dra AGUS SETYAWATI, MM</strong></td>
                                    <td><strong>Kepala UPT LLAJ Banyuwangi</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;51</td>
                                    <td>SUNARYO, ST, SH, MM</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;52</td>
                                    <td>Drs. BUDI KURNIAWAN, MM.</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;53</td>
                                    <td>HADI WIYONO, S.H.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;54</strong></td>
                                    <td>-</td>
                                    <td><strong>Kepala UPT LLAJ Lamongan&nbsp;</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;55</td>
                                    <td>-</td>
                                    <td>Kepala Sub Bagian Tata Usaha&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;56</td>
                                    <td>IDHAM WAHYUDI, SH</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;57</td>
                                    <td>DARSONO, S.H.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;58</strong></td>
                                    <td><strong>A. WAHAB, S.T., M.Si.</strong></td>
                                    <td><strong>Kepala UPT LLAJ Bangkalan</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;59</td>
                                    <td>LITA NURAINI, S.H., M.M.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;60</td>
                                    <td>ZAINAL ARIFIN, A.Md.SH</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;61</td>
                                    <td>SLAMET, Ama.PKB., S.H., M.M.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;62</strong></td>
                                    <td>-</td>
                                    <td><strong>Kepala UPT LLAJ Mojokerto</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;63</td>
                                    <td>Ir. DILLAH JOEDI WAHJOENINGROESTI R., M.T.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;64</td>
                                    <td>ARDHIAN TRILAKSONO, S.T.</td>
                                    <td>Kepala Seksi Lalu Lintas dan Angkutan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;65</td>
                                    <td>YOYOK KRISTYOWAHONO, SH, MH.</td>
                                    <td>Kepala Seksi Pengendalian dan Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;66</strong></td>
                                    <td><strong>Ir.SUHARNO, MT</strong></td>
                                    <td><strong>Kepala UPT Bandar Udara&nbsp;</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;67</td>
                                    <td>HOLILI, S.H.</td>
                                    <td>Kepala Sub Bag Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;68</td>
                                    <td>PURWO CAHYO WIDHIATMOKO, S.E., M.M.</td>
                                    <td>Kepala Seksi Kemanan dan Keselamatan Penerbangan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;69</td>
                                    <td>JOKO PITOYO, ST, MT.</td>
                                    <td>Kepala Seksi Jasa Kebandar Udaraan</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;70</strong></td>
                                    <td><strong>ACHMAD FADIL, S.T., M.M.</strong></td>
                                    <td><strong>Kepala UPT Pelabungan Pengumpan Regional Lamongan<br></strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;71</td>
                                    <td>NILAMSARI CAHYANTI, S.T., M.M., M.T.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;72</td>
                                    <td>YOHANES HERI K, SE, MM.</td>
                                    <td>Kepala Seksi Teknik Kepelabuhanan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;73</td>
                                    <td>MOCHAMAD ASKUR, S.H., M.M.</td>
                                    <td>Kepala Seksi Operasional</td>
                                </tr>
                                <tr>
                                    <td><strong>&nbsp;82</strong></td>
                                    <td><strong>HARI YULIANTO, S.T., M.Si.</strong></td>
                                    <td><strong>Kepala UPT Pelabuhan Pengumpan Regional Banyuwangi</strong></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;83</td>
                                    <td>YUDHIANTO, S.H.</td>
                                    <td>Kepala Sub Bagian Tata Usaha</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;84</td>
                                    <td>SUHARYANA, S.Sos.</td>
                                    <td>Kepala Seksi Teknik Kepelabuhanan</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;85</td>
                                    <td>ABU HASAN, S.Sos, MM</td>
                                    <td>Kepala Seksi Operasional&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            {{-- PEGAWAI --}}
            <div class="section-title pt-5">
                <h2>PEGAWAI</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <div class="container">
                        <div>
                            <p style="text-align: center;"><strong>DATA JUMLAH ASN <br>(JUNI 2021)</strong></p>
                            <p style="text-align: center;"><strong>GRAFIK JUMLAH PEGAWAI BERDASARKAN PANGKAT</strong></p>
                            <p><img class="img-fluid mx-auto d-block"
                                    src="{{ asset('template/assets/img/grafik pangkat.jpg') }}" alt="" width="736"
                                    height="429"></p>
                            <p>&nbsp;</p>
                            <p style="text-align: center;"><strong>GRAFIK JUMLAH PEGAWAI BERDASARKAN UMUR</strong></p>
                            <p><img class="img-fluid mx-auto d-block"
                                    src="{{ asset('template/assets/img/grafik umur.jpg') }}" alt="" width="736"
                                    height="442"></p>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </section>
@endsection
