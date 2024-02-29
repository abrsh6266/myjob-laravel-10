<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Looking for a job</h1>
                <h3>Please create an account</h3>
                <img src="{{asset('/image/register.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <x-splade-form :for="$form" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>