@extends('layouts.backend')
@section('title','One Way Level Achieve List')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div>
            <div>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">One Way Level Achieve List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0);">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">One Way Level Achieve List</li>
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <select class="form-control" id="type">
                                                        <option value="">All Level</option>
                                                        <option value="1">Level 1</option>
                                                        <option value="2">Level 2</option>
                                                        <option value="3">Level 3</option>
                                                        <option value="4">Level 4</option>
                                                        <option value="5">Level 5</option>
                                                        <option value="6">Level 6</option>
                                                        <option value="7">Level 7</option>
                                                        <option value="8">Level 8</option>
                                                        <option value="9">Level 9</option>
                                                        <option value="10">Level 10</option>
                                                        <option value="11">Level 11</option>
                                                        <option value="12">Level 12</option>
                                                        <option value="13">Level 13</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <select class="form-control" id="flow_status">
                                                        <option value="">All Status</option>
                                                        <option value="Locked">Locked</option>
                                                        <option value="Runing">Runing</option>
                                                        <option value="Paid">Complete</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div wire:ignore class="dt-responsive table-responsive">
                                            <table id="dataTable"
                                                class="table table-striped table-bordered nowrap text-center"></table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div wire:ignore.self class="modal fade" id="unlockModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Unlock Now</h4>
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
                                <label class="col-sm-4 col-form-label">Unlocked Fee : </label>
                                <div class="col-sm-8 mt-2">
                                    <h6>$</h6>
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
                            <button type="button" wire:click.prevent="levelUnlocked" wire:loading.attr="disabled"
                                wire:target="levelUnlocked"
                                class="btn btn-sm btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
    function callView(id) {
        window.livewire.find('kjGdjKDEGVDUgJd7q5oz').call('unlockView', id);
        $('#unlockModal').modal('show');
    }
    $(document).ready(function () {

        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "https://myglobaloneway.com/data/board-achieve-list",
                cache: false,
                data: function (d) {
                    d.type = $('#type').val();
                    d.status = $('#flow_status').val();
                }
            },
            columns: [{
                    title: 'ID',
                    data: 'id'
                },
                {
                    title: 'Level',
                    data: 'board_no'
                },
                {
                    title: 'Active Date',
                    data: 'is_valid'
                },
                {
                    title: 'Last Paid',
                    data: 'last_paid'
                },
                {
                    title: 'Per Day Amount',
                    data: 'amount_per_day'
                },
                {
                    title: 'Total Amount',
                    data: 'total_amount'
                },
                {
                    title: 'Total Paid',
                    data: 'total_paid'
                },
                {
                    title: 'Paid Day',
                    data: 'paid_day'
                },
                {
                    title: 'Total Day',
                    data: 'total_day'
                },
                {
                    title: 'Status',
                    data: 'action'
                },
            ]
        });

        window.livewire.on('success', message => {
            dataTable.draw(true);
            $('#unlockModal').modal('hide');
        });

        $(document).on('change', '#type', function () {
            dataTable.draw(true);
        });

        $(document).on('change', '#flow_status', function () {
            dataTable.draw(true);
        });
    });

</script>
@endpush