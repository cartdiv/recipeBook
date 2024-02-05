@extends('frontend.frontend_master')
@section('frontend_body')


<section class="section-12">
    <div class="ms-form-block-2 w-form">
      <form id="wf-form-Signup-Form-Two" action="{{ route('register') }}" name="wf-form-Signup-Form-Two" data-name="Signup Form Two" method="POST" data-ms-form="signup" class="ms-form-2" data-wf-page-id="65b8180002914323a3ebca6a" data-wf-element-id="6d38f3a1-eea2-5aa3-1df4-616aa9fd46d8">
        @csrf
        <h2 class="ms-form-heading-2">👋 Hello, Please Sign up </h2>
        <div><label for="Name-Two-2" class="ms-input-label-2">Name</label><input class="ms-input-2 w-input" maxlength="256" name="name" data-name="Name Two 2" placeholder="e.g. David Adeniran" type="text" id="Name-Two-2" data-ms-member="name" required="" /></div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <div><label for="Email-Two-2" class="ms-input-label-2">Email Address</label><input class="ms-input-2 w-input" maxlength="256" name="email" data-name="Email Two 2" placeholder="e.g. david@gmail.com" type="email" id="Email-Two-2" data-ms-member="email" required="" /></div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div><label for="Password-Two-2" class="ms-input-label-2">Input Password</label><input class="ms-input-2 w-input" maxlength="256" name="password" data-name="Password Two 2" placeholder="⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕" type="password" id="Password-Two-2" data-ms-member="password" required="" /></div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <div><label for="Password-Two-3" class="ms-input-label-2">Confirm Password</label><input class="ms-input-2 w-input" maxlength="256" name="password_confirmation" data-name="Password Two 2" placeholder="⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕" type="password" id="Password-Two-2" data-ms-member="password" required="" /></div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        <div class="ms-list-container"><label data-ms-member="consent" class="w-checkbox ms-checkbox-wrap ms-is-smaller">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom ms-checkbox"></div><input id="Terms-Two-2" type="checkbox" name="Terms-Two-2" data-name="Terms Two 2" required="" style="opacity:0;position:absolute;z-index:-1" /><span class="ms-checkbox-label w-form-label" for="Terms-Two-2">I agree to the <a href="#" class="ms-link-2">Terms of Use</a> &amp; <a href="#" class="ms-link-2">Privacy policy</a>.</span>
          </label><label class="w-checkbox ms-checkbox-wrap ms-is-smaller">
            <div class="w-checkbox-input w-checkbox-input--inputType-custom ms-checkbox"></div><input id="Subscribe-Two-2" type="checkbox" name="Subscribe-Two-2" data-name="Subscribe Two 2" data-ms-member="subscribe" style="opacity:0;position:absolute;z-index:-1" /><span class="ms-checkbox-label w-form-label" for="Subscribe-Two-2">Send me product updates</span>
          </label></div><input type="submit" data-wait="Please wait..." class="ms-button ms-is-form w-button" value="Submit" />
        <div>
          <div class="ms-form-divider">
            <div class="ms-form-divider-line"></div>
            <div class="ms-form-divider-text">OR</div>
            <div class="ms-form-divider-line"></div>
          </div><a data-ms-auth-provider="google" href="#" class="ms-social-button w-inline-block">
            <div class="ms-social-inner ms-is-center"><img alt="" loading="lazy" src="https://assets-global.website-files.com/65870aa8e22b9fb1eeeb61fd/65b80cadf523b362cbc0a3c9_google.svg" class="ms-social-image" />
              <div data-ms-auth-connected-text="Disconnect Google" class="ms-social-text">Continue with Google</div>
            </div>
          </a>
        </div>
        <div class="ms-space ms-is-20"></div>
        <div>Already have an account? <a href="{{route('login')}}" class="ms-link-2">Login here</a><a href="{{route('login')}}"></a></div><a href="https://docs.memberstack.com/hc/en-us/articles/7424129003547-Create-a-Signup-Form-in-Webflow" target="_blank" class="ms-button ms-is-light ms-is-small ms-is-documentation w-inline-block">
          <div class="ms-button-flex">
            <div>How This Works</div>
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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
