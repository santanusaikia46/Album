<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
    <header>
        @include('admin.navbar')
    </header>

    <div class="container-fluid">
        <div class="row">
            @include('admin.sidenav')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    <div class="row">
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close">x</button>
                            </div>
                        @endif
                        <h3 class="text-center fs-4 mb-5">Create Album</h3>
                    </div>
                    <div class="row">
                        <form action="{{ url('create_album') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="name">Album Title</label>
                                <input type="text" name="name" placeholder="Title of the Album"
                                    class="form-control" style="width: 50%">
                            </div>
                            <div class="form-group mb-4">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="Album Description" class="form-control" style="width: 50%; height: 10rem"></textarea>
                            </div>
                            <div class="input-group mb-4">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="coverImage">Choose cover image</label>
                                    <input type="file" class="custom-file-input" id="coverImage" name="cover_image">
                                </div>
                            </div>
                            <input type="submit"
                                style="border: none; background:rgb(43, 211, 43); border-radius: 5px; width: 80px; height: 40px"
                                value="Create">
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @include('admin.foot')
</body>

</html>
