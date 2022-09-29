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
            @include('admin.dashboard')
        </div>
    </div>

    @include('admin.foot')
</body>

</html>
