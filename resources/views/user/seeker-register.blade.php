<x-guest-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Looking for a job</h1>
                <h3>Please create an account</h3>
                <img src="{{ asset('/image/register.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <x-splade-form :default="[
                            'name' => '',
                            'password' => '',
                            'email' => '',
                            'user_type' => 'seeker',
                        ]" action="{{ route('register') }}" class="space-y-4 ">
                            <x-splade-input id="name" type="text" name="name" :label="__('Name')" required
                                autofocus />
                            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
                            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required
                                autocomplete="new-password" />
                            <x-splade-input id="password_confirmation" type="password" name="password_confirmation"
                                :label="__('Confirm Password')" required />
                            <x-splade-input disabled name="user_type"/>
                            <div class="flex items-center justify-end">
                                <Link class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                                </Link>

                                <x-splade-submit class="ml-4" :label="__('Register')" />
                            </div>
                        </x-splade-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
