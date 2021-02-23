@extends('layouts.backend')
@section('title','Founder Members')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data='{"id":"FXy6OYPBtKcP3iid4O1c","name":"backend.report.founder-list","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":[],"children":[],"checksum":"c9eab30a87a65433dc3125477cc2837da00aec1ee741f11342dad826f8daa050"}'
            wire:id="FXy6OYPBtKcP3iid4O1c">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Founder Members</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Founder Members</li>
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
                                <table class="table table-striped table-bordered" id="founderListTable"></table>
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
    $("#founderListTable").DataTable({
		processing: true,
		serverside: true,
		ajax:"https://myglobaloneway.com/data/founder-list",
		columns:[
		{title: 'Founder ID', data : 'user_id'},
		{title: 'Name', data : 'name'},
		{title: 'Username',data : 'username'},
		{title: 'Registration Date', data : 'created_at'},
		]
	});
</script>
@endpush