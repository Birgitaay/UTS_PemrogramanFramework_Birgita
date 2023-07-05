<!DOCTYPE html>
<html>

<head>
    <title>Home Biodata</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="/" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Master Barang</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <hr class="d-lg-none text-white-50">
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-2 col-md-auto"><a href="/" class="nav-link active">Home</a></li>
                        <li class="nav-item col-2 col-md-auto"><a href="{{route('employees.index')}}" class="nav-link">List Barang</a></li>
                    </ul>
                    <hr class="d-lg-none text-white-50">
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="text-center mt-5">My Biodata</h1>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ Vite::asset('resources/images/Foto.jpg') }}" alt="Foto Mahasiswa" class="img-fluid">
                </div>
                <div class="col-md-9 mt-5">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td>Birgita Yolanda Frisciela Ardhya Hermawan</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>1204200113</td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>Sistem Informasi</td>
                        </tr>
                        <tr>
                            <th>Semester</th>
                            <td>6</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>birgitaayfa06@gmail.com</td>
                        </tr>
                        <tr>
                            <th>No. Telepon</th>
                            <td>081222878562</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>

</html>
