@extends('layout.app')

@section('title','Apply')

@section('content')

    <div class="container">
        <div class="row">
            <form action="" method="post" class="col s12">
                @csrf
                <h4>Application</h4>

                <div class="card">
                    <div class="row card-content">
                        <span class="card-title">Request Information</span>
                        <div class="section">
                            <a href="#modal1" class="btn-flat teal-text waves-effect waves-grey modal-trigger">Click to create a request</a>
                        </div>

                         <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <div class="row">
                                    <h5>Select a room</h5>
                                    <div class="input-field col s12 m7 l8 ">
                                        <select>
                                            <option value="" disabled selected>Choose your hostel</option>
                                            <option value="m">GETFund hostel (fiapre, Sunyani - B/A)</option>
                                            <option value="f">Teddy's hostel (Berlin, Sunyani - B/A)</option>
                                        </select>
                                        <label>Hostel</label>
                                    </div>
                                    <div class="input-field col s12 m5 l4 ">
                                        <select>
                                            <option value="" disabled selected>Choose your gender</option>

                                            <option value="a">All</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                        <label>Gender</label>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="centered bordered">
                                        <thead>
                                        <tr>
                                            <th>N0 Per Room </th>
                                            <th>N0 Of Slots</th>
                                            <th>Cost Per Slot</th>
                                            <th>Choice</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @for ($i = 0; $i < 4; $i++)
                                            <tr>
                                                <td> 4 </td>
                                                <td><i class="fas fa-user"></i> 5</td>
                                                <td>₵ 500.0</td>
                                                <td>
                                                    <p class="center-align">
                                                        <label >
                                                            <input class="with-gap" name="group3" type="radio" checked />
                                                            <span></span>
                                                        </label>
                                                    </p>
                                                </td>
                                            </tr>

                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Done</a>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="table-responsive">
                                <table class="centered bordered">
                                    <thead>
                                    <tr>
                                        <th>N0 Per Room </th>
                                        <th>N0 Of Slots</th>
                                        <th>Cost Per Slot</th>
                                        <th>Choice</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td> 4 </td>
                                            <td><i class="fas fa-user"></i> 5</td>
                                            <td>₵ 500.0</td>
                                            <td>
                                                <p class="center-align">
                                                    <label >
                                                        <input class="with-gap" name="group3" type="radio" checked />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="section">
                            <span class="card-title">Personal Information</span>

                            <div class="col s12 m7 l8 input-field">
                                <input type="text" class="validate" id="item1" placeholder="eg. Angel Collins">
                                <label for="item1">Full Name</label>
                            </div>
                            <div class="input-field col s12 m5 l4 ">
                                <select>
                                    <option value="" disabled selected>Choose your gender</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                                <label>Gender</label>
                            </div>
                            <div class="col s12 m7 l7 input-field">
                                <input type="email" class="validate" id="item2" placeholder="eg. someone@example.com">
                                <label for="item2">Email</label>
                            </div>
                            <div class="col s12 m5 l5 input-field">
                                <input type="tel" class="validate" id="item3" placeholder="eg. 0XXXXXXXXX">
                                <label for="item3">Contact</label>
                            </div>
                            <div class="col s12 input-field">
                                <input type="text" class="validate" id="item4" placeholder="eg. University of Energy and Natural Resources">
                                <label for="item4">Current Institution</label>
                            </div>
                            <div class="center-align">
                                <button class="btn btn-large waves-effect waves-light disabled" type="submit" name="action">Submit Application</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
