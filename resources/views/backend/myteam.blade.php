@extends('layouts.backend')
@section('title','My Group')
@push('css')
    <style>
        /*Now the CSS*/
        * {
            margin: 0;
            padding: 0;
        }
    
        .tree ul {
            padding-top: 20px;
            position: relative;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
    
        .tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
    
        /*We will use ::before and ::after to draw the connectors*/
    
        .tree li::before,
        .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #ccc;
            width: 50%;
            height: 20px;
        }
    
        .tree li::after {
            right: auto;
            left: 50%;
            border-left: 1px solid #ccc;
        }
    
        /*We need to remove left-right connectors from elements without
    any siblings*/
        .tree li:only-child::after,
        .tree li:only-child::before {
            display: none;
        }
    
        /*Remove space from the top of single children*/
        .tree li:only-child {
            padding-top: 0;
        }
    
        /*Remove left connector from first child and
    right connector from last child*/
        .tree li:first-child::before,
        .tree li:last-child::after {
            border: 0 none;
        }
    
        /*Adding back the vertical connector to the last nodes*/
        .tree li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }
    
        .tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }
    
        /*Time to add downward connectors from parents*/
        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }
    
        .tree li div {
            /* border: 1px solid #ccc; */
            /* padding: 5px 10px; */
            /* text-decoration: none; */
            /* color: #666; */
            /* font-family: arial, verdana, tahoma; */
            /* font-size: 11px; */
            /* display: inline-block; */
    
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
    
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }
    
        /*Time for some hover effects*/
        /*We will apply the hover effect the the lineage of the element also*/
        .tree li div:hover,
        .tree li div:hover+ul li div {
            /* background: #c8e4f8; */
            color: #000;
            border: 1px solid #94a0b4;
        }
    
        /*Connector styles on hover*/
        .tree li div:hover+ul li::after,
        .tree li div:hover+ul li::before,
        .tree li div:hover+ul::before,
        .tree li div:hover+ul ul::before {
            border-color: #94a0b4;
        }
    
        .btn-sm,
        .btn-group-sm>.btn {
            padding: 0.1rem 0.2rem;
        }
    
        /*Thats all. I hope you enjoyed it.
    Thanks :)*/
    </style>
    <style>
        .tooltiptext {
            visibility: visible;
            width: 200px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: auto;
            position: absolute;
            z-index: 1;
            -moz-border-radius: 5px;
            /* this works only in camino/firefox */
            -webkit-border-radius: 5px;
            /* this is just for Safari */
        }
    
        .tooltip_center {
            left: 0;
            top: 100%;
        }
    
        .tooltip_right {
            right: 50%;
            top: 100%;
        }
    
        .tooltip_left {
            left: 50%;
            top: 100%;
        }
    </style>
    
    <style>
        #page-topbar {
            position: absolute;
        }
    </style>
@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div wire:initial-data='{"id":"6A4FoWV5gNpjeWhOZYVL","name":"backend.myteam","redirectTo":false,"locale":"en","events":[],"eventQueue":[],"dispatchQueue":[],"data":{"teamMember":{"class":"App\\MemberTree","id":9227,"relations":["User","Sponsor"],"connection":"mysql"},"teamAMember":{"class":"App\\MemberTree","id":9228,"relations":["User","Sponsor"],"connection":"mysql"},"teamBMember":{"class":"App\\MemberTree","id":9229,"relations":["User","Sponsor"],"connection":"mysql"},"teamAMemberA":{"class":"App\\MemberTree","id":9230,"relations":["User","Sponsor"],"connection":"mysql"},"teamAMemberB":{"class":"App\\MemberTree","id":10257,"relations":["User","Sponsor"],"connection":"mysql"},"teamBMemberA":null,"teamBMemberB":{"class":"App\\MemberTree","id":9231,"relations":["User","Sponsor"],"connection":"mysql"},"username":null},"children":[],"checksum":"e38c178421918a0ac34c74cef1a4fbe4af8c597cf86dc6f8c29cca601a4df38f"}'
            wire:id="6A4FoWV5gNpjeWhOZYVL">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">My Group</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">My Group</li>
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
                                <div class="col-sm-4 offset-sm-4">
                                    <input type="text" class="form-control" wire:model.debounce.500ms="username"
                                        placeholder="Search username" />
                                    <span class="col-form-label username_check_status"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="tree">
                        <ul class="row">
                            <li class="col-12">
                                <div x-data="{ hover: false }"
                                    class="text-center col-6 offset-3 col-md-2 offset-md-5 border border-success">
                                    <img src="https://myglobaloneway.com/images/user.png" alt=""
                                        wire:click="getTeam(9227)"
                                        class="avatar-md mx-auto img-thumbnail rounded-circle" /><br />

                                    <button type="button" x-on:click="hover ? hover = false : hover = true"
                                        x-on:mouseover="hover = true" x-on:mouseout="hover = false"
                                        class="mt-1 mb-1 btn btn-sm btn-info">champion</button>
                                    <span x-show="hover" class="tooltiptext tooltip_center">
                                        <p>
                                            Sponsor : rangu0001<br />
                                            Carry : 210 $
                                            <br />
                                            L Sales : 2580.00 $<br />
                                            R Sales : 2370.00 $<br />
                                            Matching Income : 152 $
                                        </p>
                                    </span>
                                </div>
                                <ul class="row">
                                    <li class="col-6">
                                        <div x-data="{ hover: false }"
                                            class="text-center col-8 offset-2 col-md-3 offset-md-4 border border-success">
                                            <img src="https://myglobaloneway.com/images/user.png" alt=""
                                                wire:click="getTeam(9228)"
                                                class="avatar-md mx-auto img-thumbnail rounded-circle" /><br />
                                            <button type="button" x-on:click="hover ? hover = false : hover = true"
                                                x-on:mouseover="hover = true" x-on:mouseout="hover = false"
                                                class="mt-1 mb-1 btn btn-sm btn-info">Shemul01</button>
                                            <span x-show="hover" class="tooltiptext tooltip_left">
                                                <p>
                                                    Sponsor : rangu0001<br />
                                                    Carry : 1770 $
                                                    <br />
                                                    L Sales : 2160.00 $<br />
                                                    R Sales : 390.00 $<br />
                                                    Matching Income : 26 $
                                                </p>
                                            </span>
                                        </div>
                                        <ul class="row">
                                            <li class="col-6">
                                                <div x-data="{ hover: false }"
                                                    class="text-center col-12 col-md-6 offset-md-3 border border-success">
                                                    <img src="https://myglobaloneway.com/images/user.png" alt=""
                                                        wire:click="getTeam(9230)"
                                                        class="avatar-md mx-auto img-thumbnail rounded-circle" /><br />
                                                    <button type="button"
                                                        x-on:click="hover ? hover = false : hover = true"
                                                        x-on:mouseover="hover = true" x-on:mouseout="hover = false"
                                                        class="mt-1 mb-1 btn btn-sm btn-info">Umme</button>
                                                    <span x-show="hover" class="tooltiptext tooltip_left">
                                                        <p>
                                                            Sponsor : champion<br />
                                                            Carry : 2130 $
                                                            <br />
                                                            L Sales : 2130.00 $<br />
                                                            R Sales : 0.00 $<br />
                                                            Matching Income : 0 $
                                                        </p>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="col-6">
                                                <div x-data="{ hover: false }"
                                                    class="text-center col-12 col-md-6 offset-md-3 border border-danger">
                                                    <img src="https://myglobaloneway.com/images/user.png" alt=""
                                                        wire:click="getTeam(10257)"
                                                        class="avatar-md mx-auto img-thumbnail rounded-circle" /><br />
                                                    <button type="button"
                                                        x-on:click="hover ? hover = false : hover = true"
                                                        x-on:mouseover="hover = true" x-on:mouseout="hover = false"
                                                        class="mt-1 mb-1 btn btn-sm btn-info">Shemul03</button>
                                                    <span x-show="hover" class="tooltiptext tooltip_center">
                                                        <p>
                                                            Sponsor : Shemul01<br />
                                                            Carry : 390 $ (R) <br />
                                                            L Sales : 0.00 $<br />
                                                            R Sales : 390.00 $<br />
                                                            Matching Income : 0 $
                                                        </p>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-6">
                                        <div x-data="{ hover: false }"
                                            class="text-center col-8 offset-2 col-md-3 offset-md-4 border border-danger">
                                            <img src="https://myglobaloneway.com/images/user.png" alt=""
                                                wire:click="getTeam(9229)"
                                                class="avatar-md mx-auto img-thumbnail rounded-circle" /><br />
                                            <button type="button" x-on:click="hover ? hover = false : hover = true"
                                                x-on:mouseover="hover = true" x-on:mouseout="hover = false"
                                                class="mt-1 mb-1 btn btn-sm btn-info">shemul02</button>
                                            <span x-show="hover" class="tooltiptext tooltip_right">
                                                <p>
                                                    Sponsor : Shemul01<br />
                                                    Carry : 2370 $ (R) <br />
                                                    L Sales : 0.00 $<br />
                                                    R Sales : 2370.00 $<br />
                                                    Matching Income : 0 $
                                                </p>
                                            </span>
                                        </div>
                                        <ul class="row">
                                            <li class="col-6">
                                                <div x-data="{ hover: false }"
                                                    class="text-center col-12 col-md-6 offset-md-3 border">
                                                    <img src="https://myglobaloneway.com/images/user.png" alt=""
                                                        wire:click="getTeam()"
                                                        class="avatar-md mx-auto img-thumbnail rounded-circle" /><br />
                                                    <a href="https://myglobaloneway.com/register/shemul02/l"
                                                        class="mt-1 mb-1 btn btn-sm btn-primary">Register</a>
                                                </div>
                                            </li>
                                            <li class="col-6">
                                                <div x-data="{ hover: false }"
                                                    class="text-center col-12 col-md-6 offset-md-3 border border-danger">
                                                    <img src="https://myglobaloneway.com/images/user.png" alt=""
                                                        wire:click="getTeam(9231)"
                                                        class="avatar-md mx-auto img-thumbnail rounded-circle" /><br />
                                                    <button type="button"
                                                        x-on:click="hover ? hover = false : hover = true"
                                                        x-on:mouseover="hover = true" x-on:mouseout="hover = false"
                                                        class="mt-1 mb-1 btn btn-sm btn-info">Shipon</button>
                                                    <span x-show="hover" class="tooltiptext tooltip_right">
                                                        <p>
                                                            Sponsor : champion<br />
                                                            Carry : 2370 $ (R) <br />
                                                            L Sales : 0.00 $<br />
                                                            R Sales : 2370.00 $<br />
                                                            Matching Income : 0 $
                                                        </p>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-danger back_button mt-2" type="button"
                            wire:click="getTeam(7975)">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page-content -->
</div>
@endsection