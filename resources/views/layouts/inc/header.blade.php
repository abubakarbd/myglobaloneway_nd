<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">
                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div wire:ignore class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="https://myglobaloneway.com/images/user.png"
                            alt="Shimul " />
                        <span class="d-none d-xl-inline-block ml-1">Shimul </span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="{{ route('Backend.Profile') }}"><i
                                class="mdi mdi-account-tie font-size-16 align-middle mr-1"></i> Profile</a>
                        <a class="dropdown-item" href="{{ route('Backend.passwordUpdate') }}"><i
                                class="mdi mdi-lock-open font-size-16 align-middle mr-1" aria-hidden="true"></i>
                            Password Update</a>
                        <a class="dropdown-item" href="{{ route('Backend.transactionUpdate') }}">
                            <i class="mdi mdi-lock-pattern font-size-16 align-middle mr-1" aria-hidden="true"></i>

                            Transaction Update
                        </a>
                        <div class="dropdown-divider"></div>
                        <div wire:initial-data='{"id":"RoAZID2RkojlENzberqJ","name":"logout","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":[],"children":[],"checksum":"970b4ce2a6792135b2305a40e88353c263483ef1d0b0a2c5d34b41133ab52d42"}'
                            wire:id="RoAZID2RkojlENzberqJ">
                            <button class="dropdown-item text-danger" type="button" wire:click="logout"><i
                                    class="mdi mdi-power font-size-16 align-middle mr-1 text-danger"></i>
                                Logout</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('/') }}images/logo-sm.png" alt="" height="20" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('/') }}images/logo-dark.png" alt="" height="17" />
                        </span>
                    </a>

                    <a href="index" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('/') }}images/logo-sm.png" alt="" height="20" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('/') }}images/logo-light.png" alt="" height="19" />
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>