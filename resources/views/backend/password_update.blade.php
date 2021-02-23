@extends('layouts.backend')
@section('title','Password Update')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div>
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Password Update</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Password Update</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Password Update</h4>
                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="profile_information" role="tabpanel">
                                    <form wire:submit.prevent="passwordUpdate">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password">Current Password</label>
                                                    <input type="password" class="form-control"
                                                        wire:model.lazy="old_password" placeholder="Current Password" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">New Password</label>
                                                    <input type="password" class="form-control"
                                                        wire:model.lazy="password" placeholder="New Password" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Password Confirmation Password</label>
                                                    <input type="password" class="form-control"
                                                        wire:model.lazy="password_confirmation"
                                                        placeholder="Password Confirmation" />
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 text-left">
                                                <button type="submit"
                                                    class="btn btn-sm btn-primary m-b-0">Submit</button>
                                            </div>
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
@endsection
@push('js')

@endpush