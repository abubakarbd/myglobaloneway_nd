@extends('layouts.app')
@push('css')
<style>
    [wire\:loading] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }
</style>
@endpush
@section('content')
<div>
    <!--============= Header Section Ends Here =============-->
    <section class="page-header single-header blog-single-header bg_img"
        data-background="{{ asset('/') }}frontend/assets/images/page-header.png">
        <div class="bottom-shape">
            <img src="{{ asset('/') }}frontend/assets/css/img/page-header.png" alt="css">
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->
    <!--============= Sign In Section Starts Here =============-->
    <div class="account-section">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Forgot Your Password</h4>

                    <form class="account-form" wire:submit.prevent="submit">

                        <div class="form-group">
                            <label for="username">Your username </label>
                            <input type="text" class="" wire:model.lazy="username" autocomplete="username" autofocus
                                placeholder="username*">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="" wire:model.lazy="email" placeholder="email*"
                                autocomplete="current-email">

                            <span class="sign-in-recovery">Try login again <a
                                    href="{{ route('login') }}">Check Here</a></span>

                        </div>

                        <div class="form-group text-center">
                            <button type="submit" wire:loading.attr="disabled" wire:target="submit"
                                class="mt-2 mb-2">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->
</div>
<!-- /main -->
@endsection