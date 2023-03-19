@extends('layout_voiture.master')
@section('content')
<div class="main-container offset-4">
    <x-slot name="logo">

    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="col-8  bg-white" >
        @csrf

        <div>
            <x-label for="email" class="col-md-2 col-form-label" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-label for="password" class="col-md-2 col-form-label" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
          
                <x-button class="ml- bg-success ">
                    <i class="bx bx-log-in-circle"></i>  {{ __('Se connecter') }}
                  </x-button>
           
           
        </div>
    </form>


</div>
@endsection