@extends('layout.app')

@section('title','Hostels')

@section('content')
<div class="container">
    <div class="row">
        @for ($i = 0; $i < 6; $i++)
            @include('inc.hostel-card')
        @endfor
    </div>
</div>
@endsection
