<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update your Resume') }}
        </h2>
    </header>

    <form method="POST" action="{{ route('resume.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('PUT')
        <!-- Current Password -->
        <div class="mb-3">
            <label for="resume" class="form-label">{{ __('Upload a resume') }}</label>
            <input id="resume" name="resume" type="file" class="form-control">
        </div>
        <!-- Submit Button -->
        <div class="d-flex align-items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Upload') }}</button>
            @if (session('status') === 'resume-updated')
                <p class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
