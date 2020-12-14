@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            Name
                        </div>
                        <div class="col-md-9">
                            {{ $name }}
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Email
                        </div>
                        <div class="col-md-9">
                            {{ $email }}
                        </div>

                    </div>
                    <div class="row mt-3 justify-content-center">
                        <form class="d-inline" method="POST" action="{{ route('confirm_registration', ['redirect_back' => true]) }}">
                            @csrf
    
                            <input type="hidden" name="name" value="{{ $name }}">
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="hidden" name="password" value="{{ $password }}">
                            <input type="hidden" name="password_confirmation" value="{{ $password_confirmation }}">
    
                            <button type="submit" class="ml-2 btn btn-primary">
                                {{ __('Go Back') }}
                            </button>
                        </form>

                        <form class="d-inline" method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <input type="hidden" name="name" value="{{ $name }}">
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="hidden" name="password" value="{{ $password }}">
                            <input type="hidden" name="password_confirmation" value="{{ $password_confirmation }}">
    
                            <button type="submit" class="ml-2 btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </form>

                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
