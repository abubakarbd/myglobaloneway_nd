@extends('layouts.backend')
@section('title','Home')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div>
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Home</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- start row -->
            <div class="row">
                <div class="col-md-12 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-widgets py-3">
                                <div class="text-center">
                                    <div class="">
                                        <img src="{{ asset('/') }}images/user.png" alt=""
                                            class="avatar-lg mx-auto img-thumbnail rounded-circle" />
                                        <div class="online-circle">
                                            <i class="fas fa-circle text-success"></i>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <a href="#" class="text-dark font-weight-medium font-size-16">Shimul </a>
                                        <p class="text-body mt-1 mb-1">Premium Member</p>
                                    </div>

                                    <div class="row mt-4 border border-left-0 border-right-0 p-3">
                                        <div class="col-sm-6">
                                            <h6 class="text-muted">
                                                Group A Sales
                                            </h6>
                                            <h5 class="mb-0">2580.00 $</h5>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6 class="text-muted">
                                                Group B Sales
                                            </h6>
                                            <h5 class="mb-0">2370.00 $</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-4 border border-left-0 border-right-0 p-3">
                                        <div class="col-sm-6">
                                            <h6 class="text-muted">
                                                One Way Global
                                            </h6>
                                            <h5 class="mb-0">
                                                989
                                            </h5>
                                        </div>

                                        <div class="col-sm-6">
                                            <h6 class="text-muted">
                                                One Way Status
                                            </h6>
                                            <h5 class="mb-0">
                                                Level 2
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row mt-4 border border-left-0 border-right-0 p-3">
                                        <div class="col-sm-12">
                                            <h6 class="text-muted">
                                                Next Renew Date
                                            </h6>
                                            <h5 class="mb-0">
                                                16 Feb 2021
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <br />
                            <h5 class="card-title mb-3">Personal Information</h5>
                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Email Address</p>
                                <h6 class="">us.Shemul789206@gmail.com</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Phone number</p>
                                <h6 class="">+8801908079891</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">Address</p>
                                <h6 class=""></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-9">
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <p class="mb-2">Total Income</p>
                                            <h4 class="mb-0">231.00 $</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <div class="avatar-sm mx-auto font-size-16">
                                                    <span
                                                        class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="fas fa-laugh"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <p class="mb-2">Total Fund</p>
                                            <h4 class="mb-0">0.00 $</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <a href="{{ route('Backend.Fund') }}"
                                                    class="btn btn-success btn-sm">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <p class="mb-2">Total Office Fund</p>
                                            <h4 class="mb-0">0.00 $</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <a href="{{ route('Backend.officeFund') }}"
                                                    class="btn btn-info btn-sm">+</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <p class="mb-2">Total Balance</p>
                                            <h4 class="mb-0">0 $</h4>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <a href="{{ route('Backend.Withdrow') }}"
                                                    class="btn btn-primary btn-sm">Withdraw</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#experience" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-chart-bar"></i></span>
                                <span class="d-none d-sm-block">Statistics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#revenue" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-calculator"></i></span>
                                <span class="d-none d-sm-block">One Way Active Level</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="experience" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">Sponsor Income</p>
                                                    <h4 class="mb-0">14.00 $</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">Matching Income</p>
                                                    <h4 class="mb-0">152.00 $</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">Achievement Income</p>
                                                    <h4 class="mb-0">0.00 $</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">One Way Income</p>
                                                    <h4 class="mb-0">65.00 $</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">Total Group Sales</p>
                                                    <h4 class="mb-0">4950 $</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">Carry Forword</p>
                                                    <h4 class="mb-0">
                                                        210 $ (Group A)
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">Sponsor</p>
                                                    <h4 class="mb-0">7</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <p class="mb-2">Premium Sponsor</p>
                                                    <h4 class="mb-0">5</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="revenue" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Active Lavel</th>
                                                    <th>Active Date</th>
                                                    <th>Last Paid</th>
                                                    <th>Daily Amount</th>
                                                    <th>Total Amount</th>
                                                    <th>Remain Amount</th>
                                                    <th>Remain Day</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>L1</td>
                                                    <td>
                                                        16-Dec-2020
                                                    </td>
                                                    <td>
                                                        19-Jan-2121
                                                    </td>
                                                    <td>
                                                        2.00 $
                                                    </td>
                                                    <td>
                                                        80.00 $
                                                    </td>
                                                    <td>
                                                        30 $
                                                    </td>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge badge-soft-warning font-size-12">Runing</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>L2</td>
                                                    <td>
                                                        12-Jan-2121
                                                    </td>
                                                    <td>
                                                        19-Jan-2121
                                                    </td>
                                                    <td>
                                                        3.00 $
                                                    </td>
                                                    <td>
                                                        120.00 $
                                                    </td>
                                                    <td>
                                                        105 $
                                                    </td>
                                                    <td>
                                                        29
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge badge-soft-warning font-size-12">Runing</span>
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
            </div>

            <!-- end row -->
            <div wire:ignore.self class="modal fade" id="upgradeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Upgrade Now</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Available Fund : </label>
                                <div class="col-sm-8 mt-2">
                                    <h6>0.00 $</h6>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Available Office Fund : </label>
                                <div class="col-sm-8 mt-2">
                                    <h6>0.00 $</h6>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Select Package : </label>
                                <div class="col-sm-8">
                                    <select class="form-control" wire:model.lazy="upgrade_package">
                                        <option value="">Select Package</option>
                                        <option value="1">Premium (30.00 $)</option>
                                        <option value="2">Starter (90.00 $)</option>
                                        <option value="3">Bronze (210.00 $)</option>
                                        <option value="4">Silver (450.00 $)</option>
                                        <option value="5">Gold (930.00 $)</option>
                                        <option value="6">Platinum (1890.00 $)</option>
                                        <option value="7">Diamond (3810.00 $)</option>
                                        <option value="8">Gold Plus (1500.00 $)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Transaction Pin</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" wire:model.lazy="txn_pin"
                                        placeholder="Enter Transaction Pin" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-default waves-effect"
                                data-dismiss="modal">Close</button>
                            <button type="button" wire:click.prevent="memberUpgrade" wire:target="memberUpgrade"
                                class="btn btn-sm btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="popup_notics" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Global Oneway Update Notics</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Dear user,<br />
                            Time is start at renew your id on 10th January. Please keep enough balance your id.<br />
                            Thank you.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page-content -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    2020 © Global One Way.
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
@push('js')
   <script>
        $(document).on("click", '#upgrade_now', function () {
            $("#upgradeModal").modal('toggle');
        });
    
        $(document).ready(function () {
            $('#popup_notics').modal('show');
        });
    
    </script> 
@endpush