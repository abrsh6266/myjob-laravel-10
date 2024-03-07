<x-admin-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h1>{{ $listings->title }}</h1>
            </div>
            @foreach ($listings->users as $user)
                Name: {{ $user->name }}<br>
                Email: {{ $user->email }}
                <a href="">download resume</a>
            @endforeach
        </div>
    </div>
</x-admin-layout>
