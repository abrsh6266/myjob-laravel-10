<x-admin-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($listings as $listing)
                
                {{$listing->title}} | {{$listing->users_count}} <br> <br> 
                @foreach ($listing->users()->get() as $applicant)
                {{$applicant->name}}<br>
                {{$applicant->emalil}}<br>
                @endforeach
            @endforeach
        </div>
    </div>
</x-admin-layout>
