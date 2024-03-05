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
                        <form method="POST" action="{{ route('register') }}" class="space-y-4">
                            @csrf
                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" name="name" class="form-control" required autofocus>
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" name="email" class="form-control" required>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password">
                            </div>
                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                            </div>
                            <!-- User Type -->
                            <input type="hidden" name="user_type" value="seeker">
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('login') }}" class="text-decoration-none text-gray-600">Already registered?</a>
                                <button type="submit" class="btn btn-primary ml-4">{{ __('Register') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
