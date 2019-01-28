@extends('layout.app ')

@section('title','Katanga Hall')

@section('content')
<div class="container">
    <div class="row">
        <div class="col l6">
            <img class="responsive-img" src="{{asset("/img/hms-background.jpg")}}">
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card panel">
                <div class="card-content">
                    <span class="card-title">Room Listing</span>
                    <span class="right badge new grey darken-2" data-badge-caption=""><i class="fas fa-user"></i> 1000 Total Slots</span>
                    <div class="table-responsive">
                        <table class="centered">
                            <thead>
                            <tr>
                                <th>N0 Per Room </th>
                                <th>N0 Of Slots</th>
                                <th>Cost Per Slot</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td> 4 </td>
                                <td><i class="fas fa-user"></i> 5</td>
                                <td>₵ 500.0</td>
                                <td>
                                    <a href="" class="flat-btn teal-text waves-effect wave-light">book now</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endSection
