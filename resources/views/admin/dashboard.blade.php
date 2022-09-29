<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row mb-5">
        <h3 class="text-center fs-4">Dashboard</h3>
    </div>
    <div class="container text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Album Title</th>
                    <th>Status</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($album as $albums)
                    <tr>
                        <td>{{ $albums->name }}</td>
                        <td>{{ $albums->status }}</td>
                        <td><a href="{{url('image')}}">Add Images</a></td>
                        <td><a href="">Publish</a></td>
                        <td><a href="">Unpublish</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
