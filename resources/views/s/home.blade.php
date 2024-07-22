@extends('app')

@section('content')
<div class="mb-5 flex flex-col sm:flex-row justify-between items-center items-stretch gap-2">
    <div class="w-full">
        <a href="#"
            class="mapel-card hidden w-full p-6 bg-yellow-200 border border-gray-200 rounded-lg shadow hover:bg-yellow-400 transition duration-300 ease-in-out">
            <h5 class="mapel-length mb-2 text-2xl font-bold tracking-tight text-gray-900">
            </h5>
            <p class="font-normal text-gray-700">Mata Pelajaran</p>
        </a>
        <div id="mapel-loader"
            class="block w-full p-6 bg-white border border-gray-200 rounded-lg shadow animate-pulse">
            <div class="h-6 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-300 rounded mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6"></div>
        </div>
    </div>
    <div class="w-full">
        <a href="#"
            class="materi-card hidden w-full p-6 bg-orange-200 border border-gray-200 rounded-lg shadow hover:bg-orange-400 transition duration-300 ease-in-out">
            <h5 class="materi-length mb-2 text-2xl font-bold tracking-tight text-gray-900">
            </h5>
            <p class="font-normal text-gray-700">Materi</p>
        </a>
        <div id="materi-loader"
            class="block w-full p-6 bg-white border border-gray-200 rounded-lg shadow animate-pulse">
            <div class="h-6 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-300 rounded mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6"></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let id = @json(auth()->user()->IDKelas);

        apiMateri(id);
        apiMapel(id);

        function apiMateri(id) {
            $.ajax({
                url: "/api/kelasMateri/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    let data = response['kelasMateri: '];

                    $('.materi-length').append(data.length);

                    $('#materi-loader').hide();
                    $('.materi-card').show();
                },
                error: function(errors) {
                    console.error(errors);
                }
            });
        }

        function apiMapel(id) {
            $.ajax({
                url: "/api/kelasMapel/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    let data = response['kelasMataPelajaran: '];

                    $('.mapel-length').append(data.length);

                    $('#mapel-loader').hide();
                    $('.mapel-card').show();
                },
                error: function(errors) {
                    console.error(errors);
                }
            });
        }
    });
</script>
@endsection