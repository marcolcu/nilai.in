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
                    fill="currentColor"/>
                <path
                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                    fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div id="main" class="hidden">
        <div id="soal-container" class="mb-5 flex flex-col gap-4">
            <!-- Soal akan di-generate secara dinamis -->
        </div>
        <button id="submit-jawaban" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg">Submit Jawaban</button>
    </div>

    <script>
        $(document).ready(function () {
            let currentUrl = window.location.href;
            let segments = currentUrl.split('/');
            let id = segments[segments.length - 1];
            let userId = @json(auth()->user()->id);

            function validateProgressUjian(id) {
                $.ajax({
                    url: "/api/progressujianUser",
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        const progressUjian = response['progressUjianUser: '];

                        if (progressUjian[0].id_ujian == id && progressUjian[0].id_murid == userId) {
                            alert('Anda sudah menyelesaikan ujian ini.');
                            window.history.back();
                        } else {
                            apiUjian(id);
                        }
                    },
                    error: function (errors) {
                        console.error(errors);
                        alert('Terjadi kesalahan saat memvalidasi progres ujian.');
                    }
                });
            }

            validateProgressUjian(id);

            function apiUjian(id) {
                $.ajax({
                    url: "/api/soalUjianByID/" + id,
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        let data = response['soalUjianByID: '];

                        $('#loading').hide();
                        $('#main').show();

                        if (data.length > 0) {
                            $('#soal-container').empty();

                            data.forEach((item, index) => {
                                let isEsai = !item.pilihan1 && !item.pilihan2 && !item.pilihan3 && !item.pilihan4 && !item.pilihan5;

                                if (isEsai) {
                                    let soalEsai = `
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow">
                                    <h5 class="mb-2 text-xl font-bold text-gray-900">${index + 1}. ${item.pertanyaan}</h5>
                                    <textarea name="soal_${item.id}" class="w-full p-2 border rounded-lg" rows="4" placeholder="Jawaban Anda"></textarea>
                                </div>
                            `;
                                    $('#soal-container').append(soalEsai);
                                } else {
                                    let soalPilihanGanda = `
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow">
                                    <h5 class="mb-2 text-xl font-bold text-gray-900">${index + 1}. ${item.pertanyaan}</h5>
                                    <div class="flex flex-col gap-2">
                                        ${item.pilihan1 ? `<label><input type="radio" name="soal_${item.id}" value="${item.pilihan1}"> ${item.pilihan1}</label>` : ''}
                                        ${item.pilihan2 ? `<label><input type="radio" name="soal_${item.id}" value="${item.pilihan2}"> ${item.pilihan2}</label>` : ''}
                                        ${item.pilihan3 ? `<label><input type="radio" name="soal_${item.id}" value="${item.pilihan3}"> ${item.pilihan3}</label>` : ''}
                                        ${item.pilihan4 ? `<label><input type="radio" name="soal_${item.id}" value="${item.pilihan4}"> ${item.pilihan4}</label>` : ''}
                                        ${item.pilihan5 ? `<label><input type="radio" name="soal_${item.id}" value="${item.pilihan5}"> ${item.pilihan5}</label>` : ''}
                                    </div>
                                </div>
                            `;
                                    $('#soal-container').append(soalPilihanGanda);
                                }
                            });
                        } else {
                            $('#soal-container').html('<p>Tidak ada soal ditemukan.</p>');
                        }
                    },
                    error: function (errors) {
                        console.error(errors);
                    }
                });
            }

            $('#submit-jawaban').click(function () {
                let jawaban = [];

                $('#soal-container div').each(function () {
                    let soalId = $(this).find('textarea, input[type="radio"]:checked').attr('name').split('_')[1];
                    let answer = $(this).find('textarea').val() || $(this).find('input[type="radio"]:checked').val();

                    if (answer) {
                        jawaban.push({
                            IDSoal: soalId,
                            jawaban: answer
                        });
                    }
                });

                $.ajax({
                    url: '/api/jawabans/create',
                    type: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    data: JSON.stringify({ujian_id: id, jawaban: jawaban}),
                    success: function (response) {
                        $.ajax({
                            url: '/api/progressujians/create',
                            type: 'POST',
                            contentType: 'application/json; charset=utf-8',
                            data: JSON.stringify({IDUjian: id, nilai: response.nilai, IDUser: userId, catatan: ""}),
                            success: function (response) {
                                window.location.href = "/s/ujian";
                            },
                            error: function (errors) {
                                console.error(errors);
                                alert('Terjadi kesalahan saat mengirim jawaban.');
                            }
                        });
                    },
                    error: function (errors) {
                        console.error(errors);
                        alert('Terjadi kesalahan saat mengirim jawaban.');
                    }
                });
            });
        });
    </script>
@endsection
