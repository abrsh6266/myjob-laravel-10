<x-admin-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1>Your Jobs</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Your Jobs
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created on</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Created on</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($jobs as $job)
                                
                            @endforeach
                            <tr>
                                <td>{{$job->title}}</td>
                                <td>{{$job->created_at->format('Y-m-d')}}</td>
                                <td><button class="btn btn-danger">Edit</button></td>
                                <td>Delete</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
