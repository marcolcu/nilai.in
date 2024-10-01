@extends('app')

@section('content')
    <div class="mb-10 flex justify-start items-center">
        <h1 class="font-bold text-2xl">Ujian</h1>
    </div>

    <!-- Centered Loading Spinner -->
    <div id="loading" class="flex items-center justify-center min-h-screen">
        <div role="status">
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                 viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                    fill="currentColor" />
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="currentFill" />
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div id="main" class="hidden">
        <div id="cards-container" class="mb-5 flex flex-wrap justify-between items-start gap-2">
            <!-- Kartu template untuk penggandaan akan dibuat secara dinamis -->
        </div>
    </div>


    <style>
        .card {
            flex: 1 1 calc(33.333% - 1rem);
            /* Mengatur kartu untuk memiliki lebar yang sama dalam flex container */
            min-height: 150px;
            /* Tetapkan tinggi minimum untuk kartu */
        }

        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 1rem);
                /* Lebar 50% saat dalam tampilan mobile */
            }
        }

        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%;
                /* Lebar 100% saat dalam tampilan sangat kecil */
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            let id = @json(auth()->user()->IDKelas);

            apiMapel(id);

            function apiMapel(id) {
                $.ajax({
                    url: "/api/ujianMapel",
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        let data = response['ujians: '];

                        $('#mapel-loader').hide();

                        if (data.length > 0) {
                            $('#cards-container').empty(); // Kosongkan kontainer kartu

                            data.forEach((item, index) => {
                                // Potong deskripsi menjadi maksimal 40 karakter
                                let deskripsi = item.deskripsi;
                                if (deskripsi.length > 40) {
                                    deskripsi = deskripsi.substring(0, 36) + '...';
                                }

                                // Buat elemen kartu baru
                                let card = `
                                <div class="card p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                                    <a id="mapel-card-${index}" href="/s/ujian/${ item.id }" class="block h-full">
                                        <h5 id="judul-mapel-${index}" class="mb-2 text-2xl font-bold tracking-tight text-gray-900">${item.nama}</h5>
                                        <p id="desc-mapel-${index}" class="font-normal text-gray-700">${item.deskripsi}</p>
                                        <p id="mapel-${index}" class="font-normal text-gray-700">${item.mapel}</p>
                                    </a>
                                </div>
                            `;
                                // Tambahkan kartu ke dalam kontainer
                                $('#cards-container').append(card);
                            });
                            $('#loading').hide();
                            $('#main').show();
                        } else {
                            $('#cards-container').html('<p>Tidak ada mata pelajaran ditemukan.</p>');
                        }
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            }
        });
    </script>
@endsection
