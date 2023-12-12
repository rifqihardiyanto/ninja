<!doctype html>
<html lang="en">

<head>
    <title>Ninja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <style>
        .alert {
            padding: 20px;
            background-color: #1df500;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            @if (session()->has('success'))
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif

            <header>
                <h1>HAI , SEMANGAT CLOSING YAA. 😍</h1>
            </header>

            <main>
                <p>Berikut ketentuan cek Covered area di web Nashir tercinta.. <br>Setelah masukin nama kecamatan akan ada 3
                    keterangan <br>

                    1. Masukan kecamatan untuk melihat ekspedisi rekomendasi🤭 <br>
                    2. Jika Alamat tidak tercover ninja, bisa menggunakan ekspedisi rekomendasi🤩.</p>
                <p>Terdapat beberapa kondisi yaitu 4pl, Terkendala, area tidak tercover dan Bisa Pengiriman Menggunakan
                    Ninja</p>

                <form action="{{ url('cari') }}" method="GET">
                    <div class="search-container">
                        <div class="search-box">
                            <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                            <input type="text" required name="cari" value="{{ old('cari') }}" class="input-search"
                                placeholder="Cari Kecamatan">
                        </div>
                    </div>
                </form>

                <div class="content">

                    <div class="container">

                        @if (!$datas->isEmpty())
                        <div class="table-responsive">

                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>

                                        <th scope="col">No</th>
                                        <th scope="col">Kecamatan</th>
                                        <th scope="col">Kabupaten</th>
                                        <th scope="col">Provinsi</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr scope="row">
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $data->kecamatan }}</td>
                                            <td>{{ $data->kabupaten }}</td>
                                            <td>{{ $data->provinsi }}</td>
                                            <td>{{ $data->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <h5 class="message">Bisa Pengiriman Menggunakan Ninja</h5>
                        @endif

                    </div>

                </div>

            </main>
        </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/main2.js') }}"></script>
    <script src="https://kit.fontawesome.com/751a13804c.js" crossorigin="anonymous"></script>

</body>

</html>
