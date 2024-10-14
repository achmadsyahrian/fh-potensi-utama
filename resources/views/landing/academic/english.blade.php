@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Perbankan Syariah - ' . env('APP_NAME'))
@section('meta_description', 'Program Studi Perbankan Syariah - ' . env('APP_NAME'))
@section('meta_keywords', 'ps upu, perbankan syariah potensi utama, visi misi perbankan syariah upu, berita perbankan
    syariah potensi utama')
@section('canonical', env('APP_URL') . '/program-studi/perbankan-syariah')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/prodi-img/pbi-header.png') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Program Studi</span></p>
                        <p class="post-title">{{ $title }}</p>
                        {{-- <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Michael Smith</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Visi Misi & Tujuan</h1>
                        <h4 class="mb-30">Visi</h4>
                        <p>Pada tahun 2035, Menjadi Program Studi Pendidikan Bahasa Inggris yang Unggul, Profesional dan
                            Berkarakter di bidang English Language Teaching, Educational Linguistics, English for Specific
                            Purposes dan Translation dengan mengintegrasikan Teknologi Informasi dan Komunikasi.</p>

                        <h4 class="mb-30">Misi</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Menghasilkan Lulusan yang Unggul, Profesional, Berkarakter dan Bermental Wirausaha dalam
                                    bidang Pendidikan Bahasa Inggris.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Menghasilkan Karya Ilmiah di Bidang Pendidikan Bahasa Inggris yang dipublikasikan pada
                                    Tingkat Nasional dan Internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Pengembangan Perilaku Kecendekiawanan Dosen dan Mahasiswa melalui Kegiatan Pengabdian
                                    kepada Masyarakat.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Menghasilkan berbagai Kesepakatan dan Kegiatan Kerjasama di Tingkat Lokal, Nasional,
                                    Regional dan Internasional untuk Mendukung Terselenggaranya Tridharma Perguruan Tinggi.
                                </td>
                            </tr>
                        </table>

                        <h4 class="mb-30">Tujuan</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Peningkatan mutu lulusan sesuai dengan perkembangan IPTEKS dan kebutuhan stakeholders.
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Pemutakhiran kurikulum sesuai dengan perkembangan IPTEKS dan kebutuhan Stakeholders.
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Terselenggaranya Program Sertifikasi Uji Kompetensi Bahasa Inggris sebagai Kompetensi
                                    Utama dan Sertifikasi Kompetensi Pendukung yang sesuai dengan kebutuhan stakeholders dan
                                    perkembangan IPTEKS.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Terselenggaranya Program Pendidikan bermuatan SoftSkills untuk membangun karakter
                                    lulusan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">5.</td>
                                <td>Terselenggaranya Program Pelatihan Keprofesionalan Calon Guru berkelanjutan di sekolah.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">6.</td>
                                <td>Peningkatan Kualitas Dosen Tetap.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">7.</td>
                                <td>Peningkatan Jumlah Penerimaan Mahasiswa Baru Prodi Pendidikan Bahasa Inggris.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">8.</td>
                                <td>Peningkatan kuantitas dan kualitas penelitian dosen tetap.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">9.</td>
                                <td>Peningkatan publikasi karya ilmiah dosen tetap di tingkat nasional dan internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">10.</td>
                                <td>Terselenggaranya kegiatan pengabdian kepada masyarakat yang sesuai dengan bidang Pendidikan Bahasa Inggris.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">11.</td>
                                <td>Peningkatan Jalinan Kerjasama dengan Instansi di Tingkat Nasional danInternasional yang Mendukung Terselenggaranya Tridharma Perguruan Tinggi.</td>
                            </tr>
                        </table>
                    </div>

                    {{-- <div class="post-details-content mb-100">
                        <h1 class="mb-30">Kurikulum {{$title}}</h1>
                        <div class="col-12 col-lg-12">
                            <div class="accordions mb-50" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true" aria-controls="collapseOne"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Semester 1
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseOne" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">#
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan Pancasila
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Bahasa Indonesia</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar ilmu Qur'an
                                                        dan Hadits</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">3
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">4
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Fiqh Muamalah I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">5
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Bisnis</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">6
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Arabic For islamic
                                                        Economic I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">1
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">7
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Aplikasi Komputer</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Matematika Ekonomi
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        9</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">English I</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        10</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Teori dan Perilaku
                                                        Organisasi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 1</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true"
                                            aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseTwo">
                                            Semester 2
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        #</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pendidikan
                                                        Kewarganegaraan</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Filsafat Ekonomi
                                                        Islam (Maqosid)</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Etika Bisnis Islam
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Arabic for Islamic
                                                        Economic II</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Ekonomi
                                                        Islam</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Pengantar Manajemen
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Matematika Keuangan I
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Ushul Fiqh dan Qowaid
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        9</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Fiqh muamalah
                                                        kontenporer</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        10</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">English II</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 2</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true"
                                            aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseThree">
                                            Semester 3
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseThree" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        #</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Starup Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Desain Akad /
                                                        Praktisi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Dasar-Dasar Akutansi
                                                        1</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Mikro Syariah
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Perbankan Syariah
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Statistika</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Lembaga Keuangan
                                                        Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Ayat dan Hadis
                                                        Ekonomi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        9</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Matematika Keuangan
                                                        II</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 3</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true"
                                            aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseFour">
                                            Semester 4
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseFour" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        #</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Perbankan
                                                        Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Ekonomi Makro Syariah
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Dasar-dasar Akutansi
                                                        2</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Lembaga Keuangan bank
                                                        dan Non Bank Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Komunikasi Bisnis
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Praktik Akuntansi
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Syariah
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen SDI</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 4</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true"
                                            aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseFive">
                                            Semester 5
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseFive" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        #</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Analisi Pembiayaan
                                                        Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Akuntansi Manajemen
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Perpajakan</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Auditing Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Keuangan
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Metodologi Penelitian
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Aspek Hukum Perbankan
                                                        Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Bank
                                                        Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        9</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Fintech</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 5</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true"
                                            aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseSix">
                                            Semester 6
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseSix" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        #</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Pemasaran
                                                        Bank Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Penganggaran</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Keuangan
                                                        Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Investasi
                                                        Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Analisis Laporan
                                                        Keuangan</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Strategi
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah Pilihan
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah Pilihan
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        9</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah Pilihan
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 6</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true"
                                            aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseSeven">
                                            Semester 7
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseSeven" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        #</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Manajemen Resiko
                                                        Perbankan Syariah</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Sistem Informasi
                                                        Manajemen</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Kewirausahaan</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        4</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Praktek Kerja
                                                        Lapangan</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        5</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Studi Kelayakan
                                                        Bisnis</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        6</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Mini Bank Syariah
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        7</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah Peminatan
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        8</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah Peminatan
                                                    </td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 7</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">20</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel single-accordion">
                                    <h6>
                                        <a role="button" class="" aria-expanded="true"
                                            aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseEight">
                                            Semester 8
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapseEight" class="accordion-content collapse ">
                                        <table style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        #</th>
                                                    <th style="border: 1px solid #ddd; padding: 8px;">Mata Kuliah</th>
                                                    <th class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        SKS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        1</td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;">Skripsi</td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        6</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                    </td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"><span
                                                            style="font-weight: bold;">Total SKS Semester 8</span></td>
                                                    <td class="text-center" style="border: 1px solid #ddd; padding: 8px;">
                                                        <span style="font-weight: bold;">6</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <table style="width: 100%; border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th style="border: 0 solid #ddd; padding: 8px; text-align: right;">Total Seluruh
                                            SKS:</th>
                                        <th style="border: 0 solid #ddd; padding: 8px; text-align: center;">146</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div> --}}

                    {{-- Berita Prodi --}}
                    <x-academic-news :latestPosts="$latestPosts"></x-academic-news>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
