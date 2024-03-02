@extends('app')
@section('sidebar')
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        {{-- Icon --}}
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path
                                d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                id="path-1"></path>
                            <path
                                d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                id="path-3"></path>
                            <path
                                d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                id="path-4"></path>
                            <path
                                d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                id="path-5"></path>
                        </defs>
                        <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                <g id="Icon" transform="translate(27.000000, 15.000000)">
                                    <g id="Mask" transform="translate(0.000000, 8.000000)">
                                        <mask id="mask-2" fill="white">
                                            <use xlink:href="#path-1"></use>
                                        </mask>
                                        <use fill="#696cff" xlink:href="#path-1"></use>
                                        <g id="Path-3" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-3"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                        </g>
                                        <g id="Path-4" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-4"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                        </g>
                                    </g>
                                    <g id="Triangle"
                                        transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                        <use fill="#696cff" xlink:href="#path-5"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bold ms-2">Digital Scale</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>
        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboards">Dashboard</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('/') }}" class="menu-link">
                            <div data-i18n="Analytics">Analytics</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-receipt"></i>
                    <div data-i18n="Process">Process</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('/proses/scan') }}" class="menu-link">
                            <div data-i18n="Scan">Scan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/proses/manual') }}" class="menu-link">
                            <div data-i18n="Manual Input">Manual Input</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="{{ url('/verification') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-select-multiple"></i>
                    <div data-i18n="Verification">Verification</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('/approve') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-task"></i>
                    <div data-i18n="Approve">Approve</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('/recap') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Recap">Recap</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Data Master</span>
            </li>
            <!-- User -->
            <li class="menu-item active">
                <a href="{{ url('/user') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Users">Users</div>
                </a>
            </li>
        </ul>
    </aside>
@endsection
@section('navbar')
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 px-0 me-sm-6">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Users</li>
                    </ol>
                </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('../assets/img/avatars/1.png') }}" alt
                                class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('../assets/img/avatars/1.png') }}" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-medium d-block">{{ Auth::user()->nama }}</span>
                                        <small class="text-muted">{{ Auth::user()->role }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('logout') }}">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-md-2 ">
                        <h4 class="card-title">Table Users</h4>
                    </div>
                    <div class="col-md-3 offset-md-5">
                        <div class="input-group mb-3 border rounded-2">
                            <span class="input-group-text border-none text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control border-none" id="searchInput_semua"
                                placeholder="Cari ...">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary me-2 text-white w-100" data-bs-toggle="modal"
                            data-bs-target="#modalAdd">
                            <span class="tf-icons bx bx-user-plus me-2"></span> Add User
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body" style="min-height: 450px;">
                <div class="table-responsive text-nowrap px-4" style="max-height: 470px; overflow-y: auto;">
                    <table class="table">
                        <thead class="sticky-top bg-white z-index-1">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>USERNAME</th>
                                <th>ROLE</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <p class="fw-light">{{ $user->id_user }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-light">{{ $user->nama }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-light">{{ $user->username }}</p>
                                    </td>
                                    <td>
                                        @if ($user->role === 'Admin')
                                            <p>
                                                <span class="badge bg-label-primary">Admin</span>
                                            </p>
                                        @elseif($user->role === 'Petugas')
                                            <p>
                                                <span class="badge bg-label-success">Petugas</span>
                                            </p>
                                        @elseif($user->role === 'Koordinator')
                                            <p>
                                                <span class="badge bg-label-danger">Koordinator</span>
                                            </p>
                                        @elseif($user->role === 'Supervisor')
                                            <p>
                                                <span class="badge bg-label-warning">Supervisor</span>
                                            </p>
                                        @elseif($user->role === 'Owner')
                                            <p>
                                                <span class="badge bg-label-info">Owner</span>
                                            </p>
                                        @else
                                        @endif
                                    </td>
                                    <td>
                                        <a class="dropdown-item text-primary"
                                            href="{{ url('user/edit/' . $user->id_user) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    </td>
                                    <td>
                                        <a type="submit" class="dropdown-item text-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalDelete{{ $user->id_user }}">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAdd" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold mb-0" id="exampleModalLabel2">Add User Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/user/register') }}" method="POST">
                    @csrf
                    <div class="modal-body mt-0 pt-0">
                        <hr class="fw-light">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameSmall" class="form-label">Name<span class="text-danger ms-1">*</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label class="form-label" for="username">Username<span class="text-danger ms-1">*</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Enter Username" required>
                            </div>
                            <div class="col mb-3">
                                <label for="role" class="form-label">Role<span class="text-danger ms-1">*</label>
                                <select class="form-select" id="role" name="role" required>
                                    <option value="null" selected>None</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Petugas">Petugas</option>
                                    <option value="Koordinator">Koordinator</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Owner">Owner</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="password" class="form-label">Password<span class="text-danger ms-1">*</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="password_confirmation" class="form-label">Password Confirmation<span
                                        class="text-danger ms-1">*</label>
                                <input type="password" class="form-control" name="konfirmasi_password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Add Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($users as $user)
        <div class="modal fade" id="modalDelete{{ $user->id_user }}"
            aria-labelledby="modalToggleLabel{{ $user->id_user }}" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24"
                            style="fill: rgba(255, 62, 29, 1);transform: ;msFilter:;">
                            <path
                                d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z">
                            </path>
                            <path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path>
                        </svg>
                        <h3 class="mt-3">Are you serious about deleting the {{ $user->nama }} account ?</h3>
                    </div>
                    <div class="modal-footer row">
                        <div class="col">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                        <div class="col">
                            <form action="{{ url('/user/delete/' . $user->id_user) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger w-100" href="">
                                    <i class="bx bx-trash me-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
