@extends('layouts.backend')
@section('title','Sponsor Income Report')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data='{"id":"Y46gr4oTLT46hiMYftzd","name":"backend.sponsore-income","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":[],"children":[],"checksum":"8fff41f4e71e038d7abc63433e6fce8ad0105aac89f9600b688991183a4e938a"}'
            wire:id="Y46gr4oTLT46hiMYftzd">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Sponsor Income Report</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Sponsor Income Report</li>
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
                                <table id="sponsoreIncomeTable" class="table table-striped table-bordered text-center">
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

		$('#sponsoreIncomeTable').DataTable({
			processing: true,
			serverSide: true,
			ajax: "https://myglobaloneway.com/data/sponsor-income",
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