<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <x-auth-card>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf
                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" name="email" class="form-control" required autofocus>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                        </div>
                        <!-- Remember Me Checkbox -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                            <label class="form-check-label" for="remember_me">
                                {{ __('Remember me') }}
                            </label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                            @endif
                            <button type="submit" class="btn btn-danger">{{ __('Log in') }}</button>
                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>
    </div>
</x-guest-layout>
