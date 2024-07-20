@extends('app')

@section('content')
<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="/s/home" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <a href="/s/matapelajaran"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">Mata Pelajaran</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span id="this-page" class="ms-1 text-sm font-medium text-gray-500 md:ms-2"></span>
            </div>
        </li>
    </ol>
</nav>

<div class="my-10 flex justify-start items-center">
    <h1 class="font-bold text-2xl">Materi</h1>
</div>

<div id="cards-container" class="mb-5 flex flex-wrap justify-between items-start gap-2">
    <!-- Kartu template untuk penggandaan akan dibuat secara dinamis -->
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
        const urlSegments = window.location.pathname.split('/');
        const id = urlSegments[urlSegments.length - 1];

        apiMateri(id);

        function apiMateri(id) {
            $.ajax({
                url: "/api/materiMapelByID/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    let data = response['$materiMataPelajaranByID: '];

                    if (Array.isArray(data) && data.length > 0) {
                        let mapel = data[0].mapel;
    
                        $('#this-page').append(mapel);
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
                                    <a id="materi-card-${index}" href="/s/materi/detail/${ item.id }?tipe=${item.tipe}" class="block h-full">
                                        <h5 id="judul-materi-${index}" class="mb-2 text-2xl font-bold tracking-tight text-gray-900">${item.judul}</h5>
                                        <p id="desc-materi-${index}" class="font-normal text-gray-700">${deskripsi}</p>
                                    </a>
                                </div>
                            `;
                            // Tambahkan kartu ke dalam kontainer
                            $('#cards-container').append(card);
                        });
                    } else {
                        $('#cards-container').html('<p>Tidak ada materi ditemukan.</p>');
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