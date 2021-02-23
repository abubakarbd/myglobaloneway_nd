@extends('layouts.backend')
@section('title','My Group')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data="{&quot;id&quot;:&quot;OOPbIXiJvfwa1fFz5hMI&quot;,&quot;name&quot;:&quot;backend.withdrow&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;withdraw_id&quot;:null,&quot;from_id&quot;:null,&quot;withdraw_from&quot;:null,&quot;withdraw_method&quot;:null,&quot;payment_method&quot;:null,&quot;account_number&quot;:null,&quot;account_details&quot;:null,&quot;withdraw_amount&quot;:null,&quot;status&quot;:null,&quot;txn_pin&quot;:null,&quot;available_balance&quot;:0,&quot;isFundTransfer&quot;:false,&quot;username&quot;:null,&quot;username_name&quot;:null},&quot;children&quot;:[],&quot;checksum&quot;:&quot;239f626680c459a81c90169ccf6bf394d37aecd2a3c9c90718db752995d83423&quot;}"
            wire:id="OOPbIXiJvfwa1fFz5hMI">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Withdraw</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Withdraw</li>
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
                            <button class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#WithdrawModal"> <i
                                    class="fa fa-plus"></i> Withdraw</button>
                            <br />
                            <br />

                            <div class="dt-responsive table-responsive">
                                <table id="example1" class="table table-bordered table-striped nowrap text-center">
                                    <thead>
                                        <tr>
                                            <td>SL.</td>
                                            <td>Payment Method</td>
                                            <td>Account No</td>
                                            <td>Note</td>
                                            <td>Amount</td>
                                            <td>Details</td>
                                            <td>Charge</td>
                                            <td>Net Amount</td>
                                            <td>Cash Amount</td>
                                            <td>Fund Amount</td>
                                            <td>Office Fund Amount</td>
                                            <td>Txn Datetime</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="WithdrawModal" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h4>Withdrawal From</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                    class="fa fa-remove"></span></button>
                        </div>
                        <div class="modal-body">
                            <form >
                                <div class="form-group">
                                    <label class="control-label">Available Amount: 0 $</label>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Withdraw To:</label>
                                    <select class="form-control" wire:model="withdraw_method">
                                        <option value="">Select Withdrawal To</option>
                                        <option value="topup">Fund</option>
                                        <option value="cash">Cash</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Withdraw Amount:</label>
                                    <input type="text" class="form-control" wire:model.lazy="withdraw_amount">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Transaction Pin:</label>
                                    <input type="password" class="form-control" wire:model.lazy="txn_pin"
                                        placeholder="Transaction Pin" autocomplete="off">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default waves-effect"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light"
                                        wire:loading.attr="disabled" wire:target="withdrowStore">Withdraw</button>
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
    $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush