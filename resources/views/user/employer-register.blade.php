<x-guest-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Looking for an employee?</h1>
                <h3>Please create an account</h3>
                <img src="{{ asset('/image/register.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Employer Registration</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="space-y-4">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required
                                    autocomplete="new-password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>
                            <input type="hidden" name="user_type" value="employer">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('login') }}" class="text-decoration-none">Already registered?</a>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
