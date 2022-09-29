<main class="my-5">
    <div class="container">
        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5"><strong>Albums</strong></h4>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    @foreach ($album as $albums)
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/storage/album_covers/{{$albums->cover_image}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$albums->name}}</h5>
                            <p class="card-text">
                                {{$albums->description}}
                            </p>
                            <a href="{{ url('view') }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Section: Content-->
    </div>
</main>
