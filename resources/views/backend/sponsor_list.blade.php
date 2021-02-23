@extends('layouts.backend')
@section('title','Sponsor List')
@push('css')

@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data='{"id":"xs0wrNhNz3AikkhdVW81","name":"backend.sponsor-list","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":[],"children":[],"checksum":"cb35e5989067f832bb79bd898f1acc11bd1a4fe9ddb54d96fe4834bf5dabfc6f"}'
            wire:id="xs0wrNhNz3AikkhdVW81">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Sponsor List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Sponsor List</li>
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
                                <table class="table table-striped table-bordered" id="SponsoreListTable"></table>
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
    $("#SponsoreListTable").DataTable({
		processing: true,
		serverside: true,
		ajax:"https://myglobaloneway.com/data/sponsor",
		columns:[
		{title: 'Name', data : 'name'},
		{title: 'Username',data : 'username'},
		{title: 'Registration Date', data : 'created_at'},
		]
	});
</script>
@endpush