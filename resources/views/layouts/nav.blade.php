  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="{{ asset('/') }}" class="logo me-auto"><img
                  src="{{ asset('template') }}/assets/img/logo-jatim.png" alt="" class="img-fluid"></a>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link" href="/">Home</a></li>
                  @if ($title == 'Profile Dinas Perhubungan Provinsi Jawa Timur')

                      <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                          <ul>
                              <li><a class="nav-link scrollto " href="#visiMisi">Visi dan Misi</a></li>
                              <li><a class="nav-link scrollto " href="#tugasFungsi">Tugas dan Fungsi</a></li>
                              <li><a class="nav-link scrollto " href="#kedudukanAlamat">Kedudukan dan Alamat</a>
                              </li>
                              <li><a class="nav-link scrollto " href="#strukturOrganisasi">Struktur Organisasi</a>
                              </li>
                              <li><a class="nav-link scrollto " href="#pejabatStruktural">Penjabat Struktural</a>
                              </li>
                              <li><a class="nav-link scrollto " href="#pegawai">Pegawai</a></li>
                          </ul>
                      </li>



                  @elseif ($title == 'Dinas Perhubungan Provinsi Jawa Timur')
                      <li><a class="nav-link" href="/profile">Profil</a></li>
                      <li><a class="nav-link scrollto" href="#services">Berita</a></li>
                      <li class="dropdown"><a href="#"><span>SAKIP</span> <i class="bi bi-chevron-down"></i></a>
                          <ul>
                              <li><a class="nav-link scrollto " href="/ekstra#informasiBerkala">RENSTRA</a>
                              </li>
                              <li><a class="nav-link scrollto " href="/ekstra/IKU-2019-2024">IKU 2019-2024</a></li>
                              <li><a class="nav-link scrollto " href="/ekstra/IKU-2014-2019">IKU 2014-2019</a></li>
                              <li><a class="nav-link scrollto " href="/ekstra/LKJIP2020">LKJIP 2020</a></li>
                              <li><a class="nav-link scrollto " href="/ekstra/LKJIP2019">LKJIP 2019</a></li>

                          </ul>
                      </li>
                      <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
                          <ul>
                              <li><a class="nav-link scrollto " href="/ppid#informasiBerkala">Informasi Berkala</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#informasiSertaMerta">Informasi Serta
                                      Merta</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#informasiSetiapSaat">Informasi Setiap
                                      Saat</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#prosedurPermohonanInformasi">Prosedur
                                      Permohonan Informasi</a>
                              </li>
                              <li><a class="nav-link scrollto " href="/ppid#strukturOrganisasi">Struktur Organisasi</a>
                              </li>
                              <li><a class="nav-link scrollto " href="/ekstra">Daftar Informasi Publik</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#regulasi">Regulasi</a></li>
                              <li><a class="nav-link scrollto " href="/ekstra">Laporan Akses Informasi</a></li>
                          </ul>
                      </li>
                  @elseif ($title == 'PPID')
                      <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
                          <ul>
                              <li><a class="nav-link scrollto " href="/ppid#informasiBerkala">Informasi Berkala</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#informasiSertaMerta">Informasi Serta
                                      Merta</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#informasiSetiapSaat">Informasi Setiap
                                      Saat</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#prosedurPermohonanInformasi">Prosedur
                                      Permohonan Informasi</a>
                              </li>
                              <li><a class="nav-link scrollto " href="/ppid#strukturOrganisasi">Struktur Organisasi</a>
                              </li>
                              <li><a class="nav-link scrollto " href="/ekstra">Daftar Informasi Publik</a></li>
                              <li><a class="nav-link scrollto " href="/ppid#regulasi">Regulasi</a></li>
                              <li><a class="nav-link scrollto " href="/ekstra">Laporan Akses Informasi</a></li>
                          </ul>
                      </li>
                  @endif
                  @if (isset($admin))
                      <li><a class="nav-link scrollto fs-6 " href="{{ url('/superadmin/' . $admin) }}">Update User
                              dan
                              Pass</a>
                      </li>
                  @endif
                  @if (isset($logout))

                      <button style="margin-left: 20px" onclick="location.href='{{ url('/' . $logout) }}'"
                          type="button" class="btn btn-outline-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                  d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z">
                              </path>
                              <path fill-rule="evenodd"
                                  d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z">
                              </path>
                          </svg>
                          {{ $logout }}
                      </button>

                  @endif
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
