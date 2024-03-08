<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-5">
        <div class="d-flex justify-content-between">
            <h4>Recommended Jobs</h4>
            <button class="btn btn-dark">view</button>
        </div>
        <div class="row mt-2 g 1">
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="text-right"><small>Fulltime</small></div>
                    <div class="text-center mt-2 p-3">
                        <img src="https://placehold.co/400" width="60" class="rounded-circle" alt="">
                        <span class="d-black font-weight-bold">Software engineer</span>
                        <hr><span>Amazon</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Addis ababa, Ethiopia</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>$80,000</span>
                            <button class="btn btn-sm btn-outline-dark">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
