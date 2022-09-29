<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        @include('user.navbar')
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <main>

        <body>
            <div class="container py-4">
                <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                    @foreach ($photo as $photos)
                    <h1>{{$photos->title}}</h1>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{$photos->photo}}" class="d-block w-100"
                                alt="Wild Landscape" />
                        </div>
                    </div>
                    @endforeach
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade"
                        data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade"
                        data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </body>
    </main>
    <!--Footer-->
    <footer class="bg-light text-lg-start fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">SANTANU SAIKIA</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
