@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<div class="container-fluid py-4">
    <div class="row justify-content-center mt-5">
        <div class="col-xl-12 col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-8 mt-5">
            <div class="card">
                <div class="card-header d-flex pb-0 p-3">
                    <h6 class="my-auto">Cameras</h6>
                    <div class="nav-wrapper position-relative ms-auto w-50">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="false">
                                    Lounge
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                                    Office
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="true">
                                    Attic
                                </a>
                            </li>
                            <div class="moving-tab position-absolute nav-link" style="padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(249px, 0px, 0px); width: 108px;"><a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="true">-</a></div>
                        </ul>
                    </div>
                    <div class="dropdown pt-2">
                        <a href="javascript:;" class="text-secondary ps-4" id="dropdownCam" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end me-sm-n4 px-2 py-3" aria-labelledby="dropdownCam">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Pause</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Stop</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Schedule</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remove</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-3 mt-2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade position-relative height-400 border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/smart-home-1.jpg'); background-size:cover;">
                            <div class="position-absolute d-flex top-0 w-100">
                                <p class="text-white p-3 mb-0">17.05.2021 4:34PM</p>
                                <div class="ms-auto p-3">
                                    <span class="badge badge-secondary">
                                        <i class="fas fa-dot-circle text-danger" aria-hidden="true"></i>
                                        Recording</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative height-400 border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/smart-home-2.jpg'); background-size:cover;">
                            <div class="position-absolute d-flex top-0 w-100">
                                <p class="text-white p-3 mb-0">17.05.2021 4:35PM</p>
                                <div class="ms-auto p-3">
                                    <span class="badge badge-secondary">
                                        <i class="fas fa-dot-circle text-danger" aria-hidden="true"></i>
                                        Recording</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade position-relative height-400 border-radius-lg active show" id="cam3" role="tabpanel" aria-labelledby="cam3" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/smart-home-3.jpg'); background-size:cover;">
                            <div class="position-absolute d-flex top-0 w-100">
                                <p class="text-white p-3 mb-0">17.05.2021 4:57PM</p>
                                <div class="ms-auto p-3">
                                    <span class="badge badge-secondary">
                                        <i class="fas fa-dot-circle text-danger" aria-hidden="true"></i>
                                        Recording</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection