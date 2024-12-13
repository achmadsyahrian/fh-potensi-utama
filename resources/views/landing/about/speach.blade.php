@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Sambutan Dekan - ' . env('APP_NAME'))
@section('meta_description', env('APP_NAME') .' Universitas Potensi Utama berkomitmen untuk menciptakan lingkungan belajar yang inovatif, dengan visi dan misi yang mendukung pengembangan akademis dan profesional mahasiswa')
@section('meta_keywords', 'sambutan dekan fakultas hukum','visi fhukum upu, misi fhukum potensi utama, visi misi fhukum, visi misi fhukum potensi utama')
@section('canonical', env('APP_URL').'/sambutan-dekan')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-b.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Sambutan Dekan</span></p>
                        <p class="post-title">{{env('APP_NAME')}}</p>
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
                <div class="col-12 text-center">
                    <h1 class="speach-title mb-30 position-relative d-inline-block">Kata Sambutan Dekan</h1>
                </div>
                
                <div class="col-12 col-sm-8 col-md-5 col-lg-3 mb-5 text-center">
                    <img src="{{asset('landing/assets/img/fakultas-img/dekan-fakultas.jpg')}}" alt="Foto Dekan" class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                    <p class="font-bold">Fani Budi Kartika, S.H., M.H</p>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h5 class="mb-30">Selamat datang di Fakultas Hukum Universitas Potensi Utama!</h5>
                        <p>
                            Saya merasa sangat terhormat untuk menyambut Anda di Fakultas Hukum Universitas Potensi Utama, tempat yang berkomitmen untuk memberikan pendidikan hukum berkualitas, mendalam, dan relevan dengan perkembangan zaman. Di sini, kami berusaha untuk membentuk generasi muda yang tidak hanya cakap dalam teori hukum, tetapi juga mampu menghadapi tantangan sosial, ekonomi, dan politik dalam konteks global yang terus berubah.
                        </p>
                        <p>
                            Sebagai Dekan Fakultas Hukum, saya ingin menekankan pentingnya peran kami dalam membentuk para pemimpin masa depan di bidang hukum. Kami percaya bahwa hukum adalah pilar utama dalam mewujudkan keadilan dan kesejahteraan masyarakat. Oleh karena itu, kami berupaya untuk memberikan pendidikan yang mengedepankan integritas, inovasi, dan tanggung jawab sosial, serta membekali mahasiswa dengan keterampilan praktis yang sangat dibutuhkan di dunia profesional.
                        </p>
                        <p>
                            Kami memiliki visi dan misi yang jelas untuk mencetak sarjana hukum yang kompeten, berkarakter, dan berorientasi pada kemajuan masyarakat. Kami berharap para mahasiswa yang bergabung dengan kami dapat berkembang tidak hanya dalam aspek akademis, tetapi juga dalam keterampilan sosial, kepemimpinan, dan pengabdian kepada masyarakat.
                        </p>
                        <p>
                            Dengan bangga, saya memperkenalkan visi dan misi Fakultas Hukum Universitas Potensi Utama, yang akan menjadi landasan kita bersama dalam menjalankan setiap langkah ke depan.
                        </p>

                        <h5 class="mb-30">Visi Fakultas Hukum Universitas Potensi Utama</h5>
                        <p>
                            Pada Tahun 2035 menjadi Fakultas yang Unggul dalam penguasaan dan pengembangan ilmu hukum yang berbasis Teknologi dan Informasi di tingkat Nasional dan berperan aktif di tingkat Internasional.
                        </p>

                        <h5 class="mb-30">Misi Fakultas Hukum Universitas Potensi Utama</h5>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Melaksanakan pendidikan dan pengajaran dibidang ilmu hukum yang berkualitas berbasis teknologi dan informasi di tingkat nasional dan berorientasi tingkat internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Melaksanakan penelitian dibidang ilmu hukum berbasis teknologi dan informasi yang mendapatkan rekognisi ditingkat nasional dan internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Melaksanakan kegiatan pengabdian kepada masyarakat dibidang ilmu hukum berbasis teknologi dan informasi yang bermanfaat bagi masyarakat.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Melaksanakan kerjasama dengan berbagai instansi pemerintah dan swasta tingkat Nasional dan Internasional yang mendukung tata kelola Tridharma Perguruan Tinggi bidang hukum yang berbasis teknologi dan informasi.</td>
                            </tr>
                        </table>

                        <p>
                            Kami berkomitmen untuk terus memberikan pendidikan yang sesuai dengan standar akademik tertinggi dan menyiapkan mahasiswa kami untuk menjadi pemimpin yang beretika dalam dunia hukum. Kami juga memastikan bahwa setiap mahasiswa memiliki kesempatan untuk mengembangkan diri melalui berbagai kegiatan akademik, penelitian, dan pengabdian masyarakat.
                        </p>
                        <p>
                            Di Fakultas Hukum Universitas Potensi Utama, kami percaya bahwa pendidikan hukum yang baik tidak hanya mengajarkan tentang hukum itu sendiri, tetapi juga mengajarkan tentang nilai-nilai kemanusiaan, keadilan, dan keberagaman. Kami ingin mahasiswa kami tidak hanya menjadi ahli hukum, tetapi juga agen perubahan yang membawa kebaikan bagi masyarakat.
                        </p>

                        <p>
                            Dekan Fakultas Hukum <br>
                            Universitas Potensi Utama
                        </p>

                        <p class="font-bold">Fani Budi Kartika, S.H., M.H</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    
@endsection
