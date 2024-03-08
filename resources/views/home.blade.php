<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-5">
        <div class="d-flex justify-content-between">
            <h4>Recommended Jobs</h4>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Salary
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                </ul>
              </div>
            <button class="btn btn-dark">view</button>
        </div>
        <div class="row mt-2 g 1">
            @foreach ($jobs as $job)
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="text-right"><small class="badge text-bg-info">{{ $job->job_type }}</small></div>
                        <div class="text-center mt-2 p-3">
                            <img src="{{Storage::url($job->profile->profile_pic)}}" width="100" class="rounded-circle" alt="">
                            <br><span class="d-black font-weight-bold">{{ $job->title }}</span>
                            <hr><span>{{ $job->profile->name }}</span>
                            <div class="d-flex flex-row align-items-center justify-content-center">
                                <small class="ml-1">{{ $job->address }}</small>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <span>${{ number_format($job->salary,2) }}</span>
                                <a href="{{route('job.show',$job->slug)}}"><button class="btn btn-sm btn-outline-dark">Apply</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .card:hover{
            background-color: #efefef
        }
    </style>
</x-app-layout>
