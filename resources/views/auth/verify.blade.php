@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body" dir="rtl">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('ایمیل فعال سازی برای شما ارسال شد') }}
                        </div>
                    @endif

                    {{ __('برای ارسال ایمیل فعال سازی کلیک کنید') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('ارسال ایمیل فعال سازی') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
