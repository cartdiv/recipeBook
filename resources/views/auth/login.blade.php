@extends('frontend.frontend_master')
@section('frontend_body')


<section>
    <div class="ms-form-block w-form">
      <form id="wf-form-Login-with-Password" action="{{ route('login') }}" name="wf-form-Login-with-Password" data-name="Login with Password" method="POST" data-ms-form="login" class="ms-form" data-wf-page-id="65b80c9799efa2c739026e07" data-wf-element-id="fcf59247-f009-f891-d3ae-987cd3fda5e6">
        @csrf
        <h2 class="ms-form-heading">Welcome! Login 🤗</h2>
        <div><label for="Email-Five-2" class="ms-input-label">Email Address</label><input class="ms-input w-input" maxlength="256" name="email" data-name="Email Five 2" placeholder="e.g. david@gmail.com" type="email" id="Email-Five-2" data-ms-member="email" required="" /></div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div><label for="Password-Five-2" class="ms-input-label ms-is-forgot-password w-clearfix">Password <a href="{{ route('password.request') }}" class="ms-link ms-is-forgot">Forgot Password</a></label><input class="ms-input w-input" maxlength="256" name="password" data-name="Password Five 2" placeholder="⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕" type="password" id="Password-Five-2" data-ms-member="password" required="" /></div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <input type="submit" data-wait="Please wait..." class="ms-button ms-is-form w-button" value="Submit" />
        <div class="text-block-17">New here? <a href="{{route('register')}}" class="ms-link">Create an account.</a><a href="{{route('register')}}"></a></div><a href="https://docs.memberstack.com/hc/en-us/articles/7785629397659-Create-a-Login-Form-in-Webflow" target="_blank" class="ms-button ms-is-light ms-is-small ms-is-documentation w-inline-block">
          <div class="ms-button-flex">
            <div class="text-block-18">How This Works</div>
            <div class="ms-button-svg w-embed"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h560v-240q0-17 11.5-28.5T800-480q17 0 28.5 11.5T840-440v240q0 33-23.5 56.5T760-120H200Zm560-584L416-360q-11 11-28 11t-28-11q-11-11-11-28t11-28l344-344H600q-17 0-28.5-11.5T560-800q0-17 11.5-28.5T600-840h240v240q0 17-11.5 28.5T800-560q-17 0-28.5-11.5T760-600v-104Z" />
              </svg></div>
          </div>
        </a>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </section>

  @endsection

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
