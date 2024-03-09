<x-app-layout>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-8">
                <h3>Applied Jobs</h3>

                @foreach ($users as $user)
                    @foreach ($user->listings as $job)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $job->title }}</h5>
                                <p class="card-text">Applied: {{ $job->pivot->created_at }}</p>
                                <p class="card-text">Salary: ${{ number_format($job->salary, 2) }} per year</p>
                                <a href="{{ route('job.show', [$job->slug]) }}" class="btn btn-dark">View</a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
