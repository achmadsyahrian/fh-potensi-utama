@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Sambutan Dekan - ' . env('APP_NAME'))
@section('meta_description', env('APP_NAME') .' Universitas Potensi Utama berkomitmen untuk menciptakan lingkungan belajar yang inovatif, dengan visi dan misi yang mendukung pengembangan akademis dan profesional mahasiswa')
@section('meta_keywords', 'sambutan dekan fakultas hukum','visi fhukum upu, misi fhukum potensi utama, visi misi fhukum, visi misi fhukum potensi utama')
@section('canonical', env('APP_URL').'/sambutan-dekan')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/fakultas-img/sambutan-dekan.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>{{__('partials/navbar.navbar.speach')}}</span></p>
                        <p class="post-title">{{__('home.app_name')}}</p>
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
                    <h1 class="speach-title mb-30 position-relative d-inline-block">{{ __('about/speech.title') }}</h1>
                </div>
                
                <div class="col-12 col-sm-8 col-md-5 col-lg-3 mb-5 text-center">
                    <img src="{{asset('landing/assets/img/fakultas-img/dekan-fakultas.jpg')}}" alt="Foto Dekan" class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                    <p class="font-bold">Fani Budi Kartika, S.H., M.H</p>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h5 class="mb-30">{{ __('about/speech.content.welcome_title') }}</h5>
                        @if(is_array(__('about/speech.content.paragraphs')))
                            @foreach(__('about/speech.content.paragraphs') as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        @else
                            <p>{{ __('about/speech.content.paragraphs') }}</p>
                        @endif

                    
                        <h5 class="mb-30">{{ __('about/speech.content.vision.title') }}</h5>
                        <p>{{ __('about/speech.content.vision.description') }}</p>
                    
                        <h5 class="mb-30">{{ __('about/speech.content.mission.title') }}</h5>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            @foreach(__('about/speech.content.mission.list') as $index => $mission)
                                <tr>
                                    <td style="width: 3%; vertical-align: top;">{{$index+1}}.</td>
                                    <td>{{ $mission }}</td>
                                </tr>
                            @endforeach
                        </table>
                    
                        <p>{{ __('about/speech.content.closing.content') }}</p>
                        <p>{!! __('about/speech.content.closing.footer') !!}</p>

                        <p><strong>Fani Budi Kartika, S.H., M.H</strong></p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    
@endsection
