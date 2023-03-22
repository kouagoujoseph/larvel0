@extends('layout_voiture.master')
@section('content')
<div class="main-container offset-4">
   
        
            <x-slot name="logo">
                
            </x-slot>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }} " class="col-8  bg-white">
                @csrf

                <div class="mt-4">
                    <x-label for="name" class="text-black h2 col-md-2 col-form-label" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required
                        autofocus autocomplete="name" />
                </div>
                
                <div class="mt-4">
                    <x-label for="prenom" class="text-black h2 col-md-2 col-form-label" value="{{__('prenom')}}" />
                    <x-input id="prenom" class="block mt-1 w-full form-control" type="text" name="prenom" :value="old('prenom')"
                        required autocomplete="username" />
                </div>
                <div class="mt-4">
                    <x-label for="email" class="text-black h2 col-md-2 col-form-label" value="{{__('telephone')}}" />
                    <x-input id="email" class="block mt-1 w-full form-control" type="text" name="telephone" :value="old('telephone')"
                        required autocomplete="username" />
                </div>
                <div class="mt-4">
                    <x-label for="email" class="text-black h2 col-md-2 col-form-label" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                </div>
               
               
                <div class="mt-4">
                    <x-label for="password" class="text-black h2 col-md-2 col-form-label" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label class=" col-form-label" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                    of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                    Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4 bg-success">
                       <i class="bx bxs-right-arrow-circle "></i>  {{ __('Créer son compte') }}
                    </x-button>
                </div>
            </form>
     
   
</div>
@endsection