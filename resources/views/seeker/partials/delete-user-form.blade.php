<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('profile.destroy') }}" class="space-y-4" onsubmit="return confirm('{{ __('Are you sure you want to delete your account?') }}')">
        @csrf
        @method('DELETE')
        <!-- Password Confirmation -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password" type="password" name="password" class="form-control" required>
        </div>
        <!-- Confirm Delete Button -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
        </div>
    </form>
</section>
