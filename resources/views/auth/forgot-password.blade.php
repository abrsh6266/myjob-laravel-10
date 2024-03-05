<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <x-auth-card>
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" />

                    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
                        @csrf
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" class="form-control" type="email" name="email" required autofocus>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>
    </div>
</x-guest-layout>
