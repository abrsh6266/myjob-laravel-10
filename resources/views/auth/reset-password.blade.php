<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <x-auth-card>
                    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
                        @csrf
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" name="email" class="form-control" value="{{ $request->email }}" required autofocus>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control" required>
                        </div>
                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
                        </div>
                    </form>
                </x-auth-card>
            </div>
        </div>
    </div>
</x-guest-layout>
