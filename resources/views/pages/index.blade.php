
@extends('layout.app')

@section('title','Home')

@section('content')

    <div class="row  grey lighten-1 greeting" >
        <div class="col s12 l5 offset-l2 container" style="height:380px;">
            <div class="section">
                <div class="left-align">
                    <h3 class="teal-text text-darken-3">Looking for campus accomodation?</h3>
                    <p class="flow-text">
                        We've got you covered. <b class="teal-text text-darken-5">HMS</b><span class="teal-text text-darken-3">.com</span>
                        here to make finding accomodation easy, fast and convenient.
                    </p>
                    <div class="search-area ">
                        <input type="text" class="search-box browser-default" placeholder="Find using name, institution or location">
                        <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <h5>Top recommended hostels for UENR students</h5>
            <div class="row main-gallery js-flickity"data-flickity-options='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>
                @for ($i = 0; $i < 6; $i++)
                    @include('inc.hostel-card')
                @endfor
            </div>
        </div>

        <div class="divider grey"></div>
        <div class="section">
            <h5>Top recommended hostels for students in sunyani</h5>
            <div class="row main-gallery js-flickity"data-flickity-options='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>
                @for ($i = 0; $i < 4; $i++)
                    @include('inc.hostel-card')
                @endfor
            </div>
        </div>

        <div class="divider grey"></div>
        <div class="section">
            <h5>Top hostel with most rooms available</h5>
            <div class="row main-gallery js-flickity"data-flickity-options='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>
                @for ($i = 0; $i < 4; $i++)
                    @include('inc.hostel-card')
                @endfor
            </div>
        </div>

        <div class="divider grey"></div>
        <div class="section">
            <h5>Top hostel with cheapest rooms</h5>
            <div class="row main-gallery js-flickity"data-flickity-options='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>
                @for ($i = 0; $i < 4; $i++)
                    @include('inc.hostel-card')
                @endfor
            </div>
        </div>

        <div class="divider grey"></div>
        <div class="section">
            <h5>Top hostel with most expensive rooms</h5>
            <div class="row main-gallery js-flickity"data-flickity-options='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>
                @for ($i = 0; $i < 4; $i++)
                    @include('inc.hostel-card')
                @endfor
            </div>
        </div>

    </div>
@endsection
