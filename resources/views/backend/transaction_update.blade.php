@extends('layouts.backend')
@section('title','Transaction Update')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data='{"id":"TVvJZCOv20ItxKLPmC2o","name":"backend.transaction","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":{"current_pin":null,"txn_pin":null,"txn_pin_confirmation":null},"children":[],"checksum":"206cf5e5278c3a99b8f81e9c25a5d7eafca89e9b5c6425e9ac60878199d53f35"}'
            wire:id="TVvJZCOv20ItxKLPmC2o">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Transaction Update</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Transaction Update</li>
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
                            <h4 class="card-title">Transaction Update</h4>
                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="profile_information" role="tabpanel">
                                    <form wire:submit.prevent="transactionPinUpdate">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstname">Current Pin</label>
                                                    <input type="password" class="form-control" id="current_pin"
                                                        name="current_pin" wire:model.lazy="current_pin"
                                                        placeholder="Current Txn Pin" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">New Pin</label>
                                                    <input type="password" class="form-control" id="txn_pin"
                                                        name="txn_pin" wire:model.lazy="txn_pin"
                                                        placeholder="New Txn Pin" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Re-New Pin</label>
                                                    <input type="password" class="form-control"
                                                        wire:model.lazy="txn_pin_confirmation"
                                                        placeholder="Txn Pin Confirmation" />
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-12 text-left">
                                                <button type="submit" wire:loading.attr="disabled"
                                                    wire:target="transactionPinUpdate"
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