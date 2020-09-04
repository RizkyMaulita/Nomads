@extends('layouts.app')

@section('title')
    Detail Travel
@endsection

@section('content')

<main>
    <section class="section-details-header">
    </section>
        <section class="section-details-content">
            <div class="container">

                <!-- Breadcrumbs yang menandakan sedang di halaman apa -> Paket Travel / Details -->
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <!-- Card sebelah kiri, include foto dan content. XZoom digunakan disini -->
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1> Nusa Penida </h1>
                            <p> Republic of Indonesia Raya</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ url('frontend/images/detail.png') }}" alt="" class="xzoom" id="xzoom-default" xoriginal="frontend/images/detail.png">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/detail1.png" class="">
                                        <img src="{{ url('frontend/images/detail1.png') }}" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/detail1.png">
                                    </a>
                                    <a href="frontend/images/detail2.png" class="">
                                        <img src="{{ url('frontend/images/detail2.png') }}" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/detail2.png">
                                    </a>
                                    <a href="frontend/images/detail3.png" class="">
                                        <img src="{{ url('frontend/images/detail3.png') }}" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/detail3.png">
                                    </a>
                                    <a href="frontend/images/detail4.png" class="">
                                        <img src="{{ url('frontend/images/detail4.png') }}" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/detail4.png">
                                    </a>
                                    <a href="frontend/images/detail5.png" class="">
                                        <img src="{{ url('frontend/images/detail5.png') }}" alt="" class="xzoom-gallery" width="128" xpreview="frontend/images/detail5.png">
                                    </a>
                                </div>
                            </div>
                            <h2> Wisata </h2>
                            <p>
                                Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby island of Bali.
                            </p>
                            <p>
                                Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3> Featured Event</h3>
                                        <p> Tari Kecak </p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('frontend/images/ic_language.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3> Language </h3>
                                        <p> Bahasa Indonesia </p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('frontend/images/ic_foods.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3> Foods </h3>
                                        <p> Local Foods </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card sebelah kanan -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2 class=""> Members are going </h2>
                            <div class="members my-2">
                                <img src="{{ url('frontend/images/member1.png') }}" alt="" class="member-image mr-1">
                                <img src="{{ url('frontend/images/member2.png') }}" alt="" class="member-image mr-1">
                                <img src="{{ url('frontend/images/member3.png') }}" alt="" class="member-image mr-1">
                                <img src="{{ url('frontend/images/member4.png') }}" alt="" class="member-image mr-1">
                                <img src="{{ url('frontend/images/member5.png') }}" alt="" class="member-image mr-1">
                            </div>
                            <hr>
                            <h2 class=""> Trip Information </h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">22 Aug, 2019</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">4D 3N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">$80,00 / person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }} ">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <!-- xzoom untuk buat gambar besar pada detail, dan script dibawah ini untuk memanggil xzoom -->
    <script>
        $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
        });
    </script>
@endpush
