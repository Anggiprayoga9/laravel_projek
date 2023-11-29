@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div id="alert">
    @include('components.alert')
</div>
<div class="container-fluid py-6">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex pb-0 p-3">
                    <h6 class="my-auto">Settings</h6>
                    <div class="nav-wrapper ms-auto position-relative end-0 w-60">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist" id="tabList">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-setting" role="tab" aria-current="profile-setting">
                                    <i class="ni ni-badge text-sm me-2"></i> My Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#change-password" role="tab" aria-current="change-password">
                                    <i class="ni ni-key-25 text-sm me-2"></i> Change Password
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-3 mt-2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade position-relative height-auto border-radius-lg active show" id="profile-setting" role="tabpanel">
                            <div class="col-md-12 ">
                                <form role="form" method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header pb-0">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 text-bold text-lg">Edit Profile</p>
                                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-uppercase text-sm">User Information</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Username</label>
                                                        <input class="form-control" type="text" name="username" value="{{ old('name', auth()->user()->name) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                                        <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark">
                                            <p class="text-uppercase text-sm">Contact Information</p>
                                            <div class="row">
                                                <div class="col-md-4 col-6">
                                                    <label class="form-label" for="exampleFormControlSelect1">I'm</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option selected="true" disabled="disabled" value="">Choose</option>
                                                        <option>Female</option>
                                                        <option>Male</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    <label class="form-label">Birth Date</label>
                                                    <input class="form-control" type="date" value="" id="date-input">
                                                </div>
                                            </div>


                                            <hr class="horizontal dark">
                                            <p class="text-uppercase text-sm">About me</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="form-control-label">About me</label>
                                                        <input class="form-control" type="text" name="about" value="{{ old('about', auth()->user()->about) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative height-auto border-radius-lg" id="change-password" role="tabpanel">
                            <div class="container">
                                <div class="row justify-content-center mt-3 ">
                                    <div class="col-lg-10">
                                        <div class="card z-index-0 mb-5">
                                            <div class="card-header text-center pt-4 pb-1">
                                                <h4 class="font-weight-bolder mb-1">Reset password</h4>
                                                <p class="mb-0">You will receive an e-mail in maximum 60 seconds</p>
                                            </div>
                                            <div class="card-body">
                                                <form role="form">
                                                    <div class="mb-3">
                                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="button" class="btn bg-gradient-dark btn-lg w-100 my-4 mb-2">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-profile">
                <img src="argon/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="argon/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                    <h5>
                        {{ old('name', auth()->user()->name) }}
                        <!-- <span class="font-weight-light">, 35</span> -->
                    </h5>
                    <div class="h6 font-weight-300">
                        <i class="ni location_pin mr-2"></i>Bucharest, Romania
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="text-center mt-4">
                        <div class="h6 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>University of Computer Science
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection