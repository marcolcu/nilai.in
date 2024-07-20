@extends('app')

@section('content')

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
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="javascript:window.history.back()"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">Materi</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Detail</span>
                </div>
            </li>
        </ol>
    </nav>
    
    <div class="my-10 flex justify-start items-start flex-col">
        <h1 id="judul-materi" class="font-bold text-2xl"></h1>
    </div>
    
    <div id="materi-container" class="mb-5 flex flex-wrap justify-start items-start gap-5">
        <div class="video-wrapper">
            <div class="video">
            </div>
        </div>
        <div class="desc">
            <p id="deskripsi-materi"></p>
        </div>
    </div>
</div>

<style>
    .video-wrapper {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        /* height: 0; Maintain aspect ratio */
        max-width: 900px;
        max-height: 400px; /* Maximum height for responsiveness */
        overflow: hidden; /* Hide any content that exceeds max-height */
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%; /* Fill the container */
        max-height: 500px !important;
    }

    @media (max-width: 1024px) {
        .video-wrapper {
            max-width: 100%;
        }
    }
</style>

<script>
    $(document).ready(function() {
        const url = new URL(window.location.href);
        const pathname = url.pathname;
        const params = url.searchParams;
        
        // Pisahkan pathname berdasarkan '/'
        const urlSegments = pathname.split('/');
        
        // Ambil ID setelah 'detail'
        const id = urlSegments[urlSegments.indexOf('detail') + 1];
        
        const tipe = params.get('tipe');

        apiMateri(id, tipe);

        function apiMateri(id, tipe) {
            $.ajax({
                url: "/api/materis/read/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    let data = response['Materi: '];

                    if (data) {
                        let judul = data.judul;
                        let deskripsi = data.deskripsi;
                        let videoUrl = data.konten; // Mengambil URL video dari respons

                        $('#judul-materi').append(judul);
                        $('#deskripsi-materi').append(deskripsi);

                        if (videoUrl) {
                            if (tipe === 'video') {
                                // Ekstrak ID video dari URL yang diberikan oleh API
                                const videoId = new URLSearchParams(new URL(videoUrl).search).get('v');
                                const embedUrl = `https://www.youtube.com/embed/${videoId}?controls=1`;

                                // Buat elemen iframe baru dengan src yang diinginkan
                                let iframe = `<iframe src="${embedUrl}" frameborder="0" allowfullscreen></iframe>`;

                                // Tambahkan iframe ke dalam kontainer
                                $('.video').html(iframe);
                            } else if (tipe === 'pdf' || tipe === 'ppt') {
                                // Ekstrak ID file dari URL Google Drive
                                const fileId = videoUrl.match(/[-\w]{25,}/);
                                if (fileId) {
                                    const embedUrl = `https://drive.google.com/file/d/${fileId[0]}/preview`;

                                    // Buat elemen iframe baru dengan src yang diinginkan
                                    let iframe = `<iframe src="${embedUrl}" style="max-height: 400px;" width="100%" allow="autoplay"></iframe>`;

                                    // Tambahkan iframe ke dalam kontainer
                                    $('.video').html(iframe);
                                }
                            }
                        }
                        $("#loading").hide();
                        $("#main").show();
                    } else {
                        $('.video').html('<p>Tidak ada materi ditemukan.</p>');
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