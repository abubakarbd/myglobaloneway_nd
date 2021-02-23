@extends('layouts.backend')
@section('title','One Way Income Report')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data='{"id":"k4wnPvdukkZyatrifNXk","name":"backend.matching-royalty-income","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":[],"children":[],"checksum":"aaf3f39f40048c42e9d39268c821cb923de9ab1f7ab790267ec1c3b4d798a8e2"}'
            wire:id="k4wnPvdukkZyatrifNXk">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">One Way Income Report</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">One Way Income Report</li>
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
                            <div wire:ignore class="table-responsive">
                                <table id="oneWayIncomeTable" class="table table-striped table-bordered text-center">
                                </table>
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
<script>
    $(document).ready(function(){

		$('#oneWayIncomeTable').DataTable({
			processing: true,
			serverSide: true,
			ajax: "https://myglobaloneway.com/data/oneway-income",
			columns: [
			{ title:'ID', data: 'id' },
			{ title:'Amount', data: 'amount'},
			{ title:'Details', data: 'details'},
			{ title:'Datetime', data: 'created_at'},
			]
		});
	});

</script>
@endpush