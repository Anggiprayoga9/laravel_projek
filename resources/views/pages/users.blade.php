@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
<div id="alert">
    @include('components.alert')
</div>
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h5 class="mb-0">Users Management</h5>
                    <a href="https://argon-dashboard-pro-laravel.creative-tim.com/user-management/new" class="btn bg-gradient-dark btn-sm float-end mb-0">Add User</a>
                </div>

                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Avatar</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Function</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar height-100 w-auto me-3">
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-xs">John Michael</h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>

                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Admin</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:;" >
                                                <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                            </a>
                                            <a href="javascript:;" class="mx-3">
                                                <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                            </a>
                                            <a href="javascript:;">
                                                <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>2023,
                        made with <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        &amp;
                        <a href="https://www.updivision.com" class="font-weight-bold" target="_blank">UPDIVISION</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.updivision.com" class="nav-link text-muted" target="_blank">UPDIVISION</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection