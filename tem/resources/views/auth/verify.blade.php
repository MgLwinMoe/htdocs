@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center pb-4">
                @csrf
                <div class="d-inline-block w-25 p-2">
                    <img src="/images/logo-480.png" class="w-50" alt="PLWP | Online Clinic | Logo">
                </div>
            </div>
            <div class="card p-4s">
                <div class="card-header">
                    <h3 class="text-center">{{ __('Verify Your Email Address') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <h5 class="text-center">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </h5>
                    <div class="text-center">
                        <img src="/images/email-mail-verify.png" alt="PLWP | Email Icon" class="w-25">
                    </div>
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
                <div class="card-footer">
                    <form id="logoutform" action="{{ route('logout') }}" method="POST" >
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-dark text-white px-3 py-0 float-right">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection