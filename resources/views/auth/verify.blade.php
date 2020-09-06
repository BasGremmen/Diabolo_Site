@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <h1 class="card-header bg-dark-red border-yellow">Verify Your Email Address</h1>

            <div class="card-text bg-black">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        A fresh verification link has been sent to your email address.
                    </div>
                @endif

                Before proceeding, please check your email for a verification link.
                If you did not receive the email, <a href="{{ route('verification.resend') }}">click here to request another</a>.
            </div>
        </div>
    </div>
</div>
@endsection
