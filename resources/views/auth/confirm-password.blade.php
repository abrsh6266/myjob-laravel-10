<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <x-auth-card>
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
                        @csrf
                        <!-- Password Confirmation -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">{{ __('Confirm') }}</button>
                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>
    </div>
</x-guest-layout>
