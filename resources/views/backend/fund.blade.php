@extends('layouts.backend')
@section('title','Add Fund List')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data='{"id":"SnWq5TesZrdk3VsasVcX","name":"backend.add-fund","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":{"payment_method":null,"from_account":null,"to_account":null,"fund_txn_pin":null,"fund_amount":null,"username":null,"transfer_amount":null,"transfer_txn_pin":null,"username_name":null,"available_balance":"0.00"},"children":[],"checksum":"31295bd04db204e5e2a340727dbb34610ffd0ba1d475a0a8abc2f2cc753b470a"}'
            wire:id="SnWq5TesZrdk3VsasVcX">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Add Fund List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Add Fund List</li>
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
                            <button class="btn btn-primary mb-2 float-right newTopup"><i class="fa fa-plus"></i> Add New
                                Fund</button>
                            <button class="btn btn-info mb-2 mr-2 float-right topupTransfer"><i class="fa fa-plus"></i>
                                Fund Transfer</button>
                            <div wire:ignore class="dt-responsive table-responsive">
                                <table id="TopupTable" class="table table-striped table-bordered nowrap text-center">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore.self class="modal fade" id="topupTransferModal" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Fund Transfer</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                    class="fa fa-remove"></span></button>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="fundTransfer">
                                <div class="form-group">
                                    <label class="col-form-label">Available Transfer Balance : 0.00 $</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Transfer Username :</label>
                                    <div class="col-sm-8">
                                        <input type="text" wire:model.lazy="username" placeholder="Transfer Username"
                                            class="form-control" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Transfer Amount :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model.lazy="transfer_amount"
                                            placeholder="Fund Transfer Amount" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Transaction Pin :</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" wire:model.lazy="transfer_txn_pin"
                                            placeholder="Enter Transaction Pin" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default waves-effect"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light"
                                        wire:loading.attr="disabled">Transfer Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore.self class="modal fade" id="TopupModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form wire:submit.prevent="addFundRequest">
                            <div class="modal-header">
                                <h4 class="modal-title">Add New Fund</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Payment Method :</label>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                wire:model.lazy="payment_method" value="Bitcoin" />
                                            <label class="form-check-label" for="exampleRadios1"> <i
                                                    class="fab fa-bitcoin" aria-hidden="true"></i> Bitcoin </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Receiver Address :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model.lazy="to_account"
                                            id="copy_link" readonly placeholder="From  Account ID" />
                                        <button type="button" class="btn btn-success copyButton">copy</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Sender Address :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model.lazy="from_account"
                                            placeholder="Sender  address" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Amount :(Amount In USD)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" wire:model.lazy="fund_amount"
                                            placeholder="Add Fund Amount" />
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Transaction Pin :</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" wire:model.lazy="fund_txn_pin"
                                            placeholder="Enter Transaction Pin" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light"
                                    wire:loading.attr="disabled">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function () {

		$(document).on('click','.copyButton',function(){
            var copyText = document.getElementById("copy_link");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            $(this).text('Copied');
        });

        var dataTable = $('#TopupTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'https://myglobaloneway.com/data/user-topup',
            columns: [{
                    title: 'SL',
                    data: 'id',
                    name: 'id'
                },
                {
                    title: 'Fund Flow',
                    data: 'flow',
                    name: 'flow'
                },
                {
                    title: 'Fund Amount',
                    data: 'amount',
                    name: 'amount'
                },
                {
                    title: 'Perpose',
                    data: 'topup_details',
                    name: 'topup_details'
                },
                {
                    title: 'Method',
                    data: 'payment_method',
                    name: 'payment_method'
                },
                {
                    title: 'Account No',
                    data: 'from_account',
                    name: 'from_account'
                },
                {
                    title: 'Transaction Date',
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    title: 'Note',
                    data: 'note',
                    name: 'note'
                },
                {
                    title: 'Status',
                    data: 'status',
                    name: 'status'
                },
            ]
        });

        window.livewire.on('success', message => {
            $('#TopupModal').modal('hide');
            $('#topupTransferModal').modal('hide');
            dataTable.draw(true);
        });

    });

    $(document).on("click", '.newTopup', function () {
        $("#TopupModal").modal('toggle');
    });

    $(document).on("click", '.topupTransfer', function () {
        $("#topupTransferModal").modal('toggle');
    });

</script>
@endpush