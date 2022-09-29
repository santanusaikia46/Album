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
                        <h3 class="text-center fs-4 mb-5">Add Images to Album</h3>
                        <form action="addImage" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="album_id" value="{{ $album_id }}">
                            <div class="form-group mb-4">
                                <label for="name">Album Title</label>
                                <input type="text" name="title" placeholder="Title of the Album"
                                    class="form-control" style="width: 50%">
                            </div>
                            <div class="input-group mb-4">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo"
                                        placeholder="choose cover image">
                                </div>
                            </div>
                            <input type="submit"
                                style="border: none; background:rgb(43, 211, 43); border-radius: 5px; width: 80px; height: 40px"
                                value="Add">
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @include('admin.foot')
</body>

</html>
