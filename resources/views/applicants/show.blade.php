<x-admin-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mt-5">
                <h1>{{ $listings->title }}</h1>
            </div>
            @foreach ($listings->users as $user)
            <div class="card mt-5">
                <div class="row g-0">
                    <div class="col-auto">
                        @if ($user->profile_pic)
                        <img src="{{Storage::url($user->profile_pic)}}" alt="profile picture" class="rounded-circle" style="width:150px;">
                        @else                                                    
                        <img src="https://placehold.co/400" alt="profile picture" class="rounded-circle" style="width:150px;">                        
                        @endif
                    </div>
                    <div class="col-auto">
                        <div class="card-body">
                            <p class="fw-bold">{{$user->name}}</p>
                            <p class="card-text">{{$user->email}}</p>
                            <p class="card-text">Applied on: {{$user->pivot->created_at}}</p>
                        </div>
                    </div>
                    <div class="col-auto align-self-center">
                        <form action="#" method="post">
                            <a href="{{Storge::url($user->resume)}}" class="btn btn-primary" target="_blank">Download Resume</a>
                            <button type="submit" class="">
                                Shortlist
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-admin-layout>
