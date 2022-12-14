<div style="background-image: url('Fond.jpg'); position:fixed ;top:0; left:0; min-width:100%; min-height:100%">

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}" class="form-horizontal" align="center" style="margin-top:100px;">
                @csrf

                <div>
                    <x-jet-input id="name" class="form-control" style="width:25%;padding:15px 15px; margin:15px ; background-color:#fff ; border-left-width: thick; border-left-color: #03a9f4; border-top:none; border-right:none; border-bottom-none;" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-input id="email" class="form-control" style="width:25%;padding:15px 15px; margin:15px ; background-color:#fff ; border-left-width: thick; border-left-color: #03a9f4; border-top:none; border-right:none; border-bottom-none;" type="email" name="email" :value="old('email')" placeholder="Email" required />
                </div>

                <div class="mt-4">
                    <x-jet-input id="password" class="form-control" style="width:25%;padding:15px 15px; margin:15px ; background-color:#fff ; border-left-width: thick; border-left-color: #03a9f4; border-top:none; border-right:none; border-bottom-none;" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-input id="password_confirmation" class="form-control" style="width:25%;padding:15px 15px; margin:15px ; background-color:#fff ; border-left-width: thick; border-left-color: #03a9f4; border-top:none; border-right:none; border-bottom-none;" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                @endif
                <div style="display:inline-flex">
                    <div class="flex items-center justify-end mt-4" >
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:#1673FF;text-decoration:none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </div>
                <div style="padding-top:25px">
                    <x-jet-button class="ml-4" style="text-align:center; display:table-cell; vertical-align:middle; background-color:#3874B9 ; color:#fff ;padding:8px;border-radius:10px;border:none;width:20%">
                        {{ __('Register') }}
                    </x-jet-button>

                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
