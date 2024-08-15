@extends('app')

@section('content')

<div class="mb-4 border-b border-gray-200">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
        data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="ujian-tab" data-tabs-target="#ujian"
                type="button" role="tab" aria-controls="ujian" aria-selected="false">Ujian</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                id="soal-tab" data-tabs-target="#soal" type="button" role="tab" aria-controls="soal"
                aria-selected="false">Soal</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                id="progress-tab" data-tabs-target="#progress" type="button" role="tab" aria-controls="progress"
                aria-selected="false">Progress Ujian</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <div class="hidden p-4 rounded-lg bg-gray-50" id="ujian" role="tabpanel" aria-labelledby="ujian-tab">
        <div class="mb-10 flex justify-between items-center">
            <h1 class="font-bold text-2xl">List Ujian</h1>
            <button data-modal-target="ujian-modal" data-modal-toggle="ujian-modal"
                class="button-create-ujian flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Tambah Ujian
            </button>
            <button data-modal-target="ujian-edit-modal" data-modal-toggle="ujian-edit-modal"
                class="hidden button-edit-open text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Edit Kelas
            </button>

            <button data-modal-target="ujian-delete-modal" data-modal-toggle="ujian-delete-modal"
                class="hidden button-delete-open-ujian text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Hapus Kelas
            </button>
        </div>

        <div class="alert-space-ujian"></div>

        <div id="table-ujian-main" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right bg-white text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mata Pelajaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Ujian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KKM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody id="table-body-ujian">
                    <!-- table rows will be generated here -->
                </tbody>

                <tbody id="skeleton-loader-table-ujian">
                    <!-- Skeleton Loading Rows -->
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="pagination-container-ujian" class="flex flex-col items-center mt-4">
            <!-- Help text -->
            <span id="pagination-info-ujian" class="text-sm text-gray-700">
                Showing <span id="start-entry-ujian" class="font-semibold text-gray-900">1</span> to <span
                    id="end-entry-ujian" class="font-semibold text-gray-900">10</span> of <span id="total-entries-ujian"
                    class="font-semibold text-gray-900">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button id="prev-button-ujian"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900"
                    disabled>
                    Prev
                </button>
                <button id="next-button-ujian"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900">
                    Next
                </button>
            </div>
        </div>

        <div id="ujian-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Tambah Ujian
                        </h3>
                        <button type="button"
                            class="btn-close-ujian text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="ujian-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 relative" id="addUjian">
                        <div
                            class="loading-spinner hidden absolute inset-0 flex justify-center items-center bg-white bg-opacity-75 z-10">
                            <svg aria-hidden="true"
                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
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
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <div class="alert-kursus-ujian hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span> All form need to get filled
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                <input type="text" id="nama" name="nama"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="John" required />
                            </div>
                            <div class="col-span-2">
                                <label for="kkm" class="block mb-2 text-sm font-medium text-gray-900 ">KKM</label>
                                <input type="text" id="kkm" name="kkm"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Ujian" required />
                            </div>
                            <div class="col-span-2">
                                <label for="IDMataPelajaran" class="block mb-2 text-sm font-medium text-gray-900 ">Mata
                                    Pelajaran</label>
                                <select id="IDMataPelajaran" name="IDMataPelajaran"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi"
                                    class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                                <textarea id="deskripsi" rows="4" name="deskripsi"
                                    class="form-control block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Deskripsi Ujian"></textarea>
                            </div>
                        </div>
                        <button
                            class="save-ujian text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tambah Ujian Baru
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="ujian-edit-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Edit Ujian
                        </h3>
                        <button type="button"
                            class="btn-close-edit-ujian text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="ujian-edit-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 relative" id="editUjian">
                        <div
                            class="loading-spinner hidden absolute inset-0 flex justify-center items-center bg-white bg-opacity-75 z-10">
                            <svg aria-hidden="true"
                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
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
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <div class="alert-kursus-ujian hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span> All form need to get filled
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="edit-nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                <input type="text" id="edit-nama" name="nama"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="John" required />
                            </div>
                            <div class="col-span-2">
                                <label for="edit-kkm" class="block mb-2 text-sm font-medium text-gray-900 ">KKM</label>
                                <input type="text" id="edit-kkm" name="kkm"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Ujian" required />
                            </div>
                            <div class="col-span-2">
                                <label for="edit-IDMataPelajaran"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Mata
                                    Pelajaran</label>
                                <select id="edit-IDMataPelajaran" name="IDMataPelajaran"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="edit-deskripsi"
                                    class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                                <textarea id="edit-deskripsi" rows="4" name="deskripsi"
                                    class="form-control block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Deskripsi Ujian"></textarea>
                            </div>
                        </div>
                        <button
                            class="update-ujian text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Edit Kelas
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="ujian-delete-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="ujian-delete-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah kamu yakin ingin menghapus ujian ini?
                        </h3>
                        <button data-modal-hide="ujian-delete-modal" type="button"
                            class="delete-ujian text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="ujian-delete-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                            Jangan, batalkan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50" id="soal" role="tabpanel" aria-labelledby="soal-tab">
        <div class="mb-10 flex justify-between items-center">
            <h1 class="font-bold text-2xl">List Soal</h1>
            <button data-modal-target="soal-modal" data-modal-toggle="soal-modal"
                class="button-create-soal flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Tambah Soal
            </button>
            <button data-modal-target="soal-edit-modal" data-modal-toggle="soal-edit-modal"
                class="hidden button-edit-open text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Edit Kelas
            </button>

            <button data-modal-target="soal-delete-modal" data-modal-toggle="soal-delete-modal"
                class="hidden button-delete-open-soal text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Hapus Kelas
            </button>
        </div>

        <div class="alert-space-soal">

        </div>


        <div id="table-soal-main" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right bg-white text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pertanyaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe Pertanyaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ujian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody id="table-body-soal">
                    <!-- table rows will be generated here -->
                </tbody>

                <tbody id="skeleton-loader-table-soal">
                    <!-- Skeleton Loading Rows -->
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="pagination-container-soal" class="flex flex-col items-center mt-4">
            <!-- Help text -->
            <span id="pagination-info-soal" class="text-sm text-gray-700">
                Showing <span id="start-entry-soal" class="font-semibold text-gray-900">1</span> to <span
                    id="end-entry-soal" class="font-semibold text-gray-900">10</span> of <span id="total-entries-soal"
                    class="font-semibold text-gray-900">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button id="prev-button-soal"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900"
                    disabled>
                    Prev
                </button>
                <button id="next-button-soal"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900">
                    Next
                </button>
            </div>
        </div>

        <div id="soal-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Tambah Soal
                        </h3>
                        <button type="button"
                            class="btn-close-soal text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="soal-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 relative" id="addSoal">
                        <div
                            class="loading-spinner hidden absolute inset-0 flex justify-center items-center bg-white bg-opacity-75 z-10">
                            <svg aria-hidden="true"
                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
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
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <div class="alert-kursus-soal hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span> All form need to get filled
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 ">Tipe
                                    Soal</label>
                                <select id="tipe" name="tipe"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" selected>Pilih Tipe Soal</option>
                                    <option value="Ganda">Ganda</option>
                                    <option value="Esai">Esai</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="pertanyaan" class="block mb-2 text-sm font-medium text-gray-900 ">Pertanyaan
                                    Soal</label>
                                <textarea id="pertanyaan" rows="4" name="pertanyaan"
                                    class="form-control block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Pertanyaan" style="height: 55px;"></textarea>
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="pilihan1" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    1</label>
                                <input type="text" id="pilihan1" name="pilihan1"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="pilihan2" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    2</label>
                                <input type="text" id="pilihan2" name="pilihan2"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="pilihan3" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    3</label>
                                <input type="text" id="pilihan3" name="pilihan3"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="pilihan4" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    4</label>
                                <input type="text" id="pilihan4" name="pilihan4"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-2 pilgan hidden">
                                <label for="pilihan5" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    5</label>
                                <input type="text" id="pilihan5" name="pilihan5"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-2">
                                <label for="kunci" class="block mb-2 text-sm font-medium text-gray-900 ">Kunci
                                    Jawaban</label>
                                <input type="text" id="kunci" name="kunci"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" required />
                            </div>
                            <div class="col-span-2">
                                <label for="IDUjian" class="block mb-2 text-sm font-medium text-gray-900 ">Ujian</label>
                                <select id="IDUjian" name="IDUjian"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                        </div>
                        <button
                            class="save-soal text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tambah Soal Baru
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="soal-edit-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Edit Soal
                        </h3>
                        <button type="button"
                            class="btn-close-edit-soal text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="soal-edit-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 relative" id="editSoal">
                        <div
                            class="loading-spinner hidden absolute inset-0 flex justify-center items-center bg-white bg-opacity-75 z-10">
                            <svg aria-hidden="true"
                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
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
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <div class="alert-kursus-soal hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span> All form need to get filled
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="edit-tipe" class="block mb-2 text-sm font-medium text-gray-900 ">Tipe
                                    Soal</label>
                                <select id="edit-tipe" name="tipe"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" selected>Pilih Tipe Soal</option>
                                    <option value="Ganda">Ganda</option>
                                    <option value="Esai">Esai</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="edit-pertanyaan"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Pertanyaan
                                    Soal</label>
                                <textarea id="edit-pertanyaan" rows="4" name="pertanyaan"
                                    class="form-control block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Pertanyaan" style="height: 55px;"></textarea>
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="edit-pilihan1" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    1</label>
                                <input type="text" id="edit-pilihan1" name="pilihan1"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="edit-pilihan2" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    2</label>
                                <input type="text" id="edit-pilihan2" name="pilihan2"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="edit-pilihan3" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    3</label>
                                <input type="text" id="edit-pilihan3" name="pilihan3"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-1 pilgan hidden">
                                <label for="edit-pilihan4" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    4</label>
                                <input type="text" id="edit-pilihan4" name="pilihan4"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-2 pilgan hidden">
                                <label for="edit-pilihan5" class="block mb-2 text-sm font-medium text-gray-900 ">Pilihan
                                    5</label>
                                <input type="text" id="edit-pilihan5" name="pilihan5"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" />
                            </div>
                            <div class="col-span-2">
                                <label for="edit-kunci" class="block mb-2 text-sm font-medium text-gray-900 ">Kunci
                                    Jawaban</label>
                                <input type="text" id="edit-kunci" name="kunci"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Link Soal" required />
                            </div>
                            <div class="col-span-2">
                                <label for="edit-IDUjian"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Ujian</label>
                                <select id="edit-IDUjian" name="IDUjian"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                        </div>
                        <button
                            class="update-soal text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Edit Kelas
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="soal-delete-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="soal-delete-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah kamu yakin ingin menghapus soal ini?
                        </h3>
                        <button data-modal-hide="soal-delete-modal" type="button"
                            class="delete-soal text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="soal-delete-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                            Jangan, batalkan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50" id="progress" role="tabpanel" aria-labelledby="progress-tab">
        <div class="mb-10 flex flex-col sm:flex-row justify-between items-center gap-2">
            <h1 class="font-bold text-2xl">List Progress Ujian</h1>
            <div class="flex gap-2">
                <button data-modal-target="progress-modal" data-modal-toggle="progress-modal"
                    class="button-create-progress flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="button">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Tambah Progress Ujian
                </button>
                <button data-modal-target="progress-rapot-modal" data-modal-toggle="progress-rapot-modal"
                    class="button-download-rapot flex gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="button">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01" />
                    </svg>
                    Download Raport
                </button>
            </div>
            <button data-modal-target="progress-edit-modal" data-modal-toggle="progress-edit-modal"
                class="hidden button-edit-open text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Edit Progress Ujian
            </button>

            <button data-modal-target="progress-delete-modal" data-modal-toggle="progress-delete-modal"
                class="hidden button-delete-open-progress text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Hapus Progress Ujian
            </button>
        </div>

        <div class="alert-space-progress">

        </div>


        <div id="table-progress-main" class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right bg-white text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Ujian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Murid
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KKM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody id="table-body-progress">
                    <!-- table rows will be generated here -->
                </tbody>

                <tbody id="skeleton-loader-table-progress">
                    <!-- Skeleton Loading Rows -->
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                    <tr class="bg-white animate-pulse">
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/2 "></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="h-4 bg-gray-200 rounded w-1/4 mx-auto"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="pagination-container-progress" class="flex flex-col items-center mt-4">
            <!-- Help text -->
            <span id="pagination-info-progress" class="text-sm text-gray-700">
                Showing <span id="start-entry-progress" class="font-semibold text-gray-900">1</span> to <span
                    id="end-entry-progress" class="font-semibold text-gray-900">10</span> of <span
                    id="total-entries-progress" class="font-semibold text-gray-900">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button id="prev-button-progress"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900"
                    disabled>
                    Prev
                </button>
                <button id="next-button-progress"
                    class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900">
                    Next
                </button>
            </div>
        </div>

        <div id="progress-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Tambah Progress Ujian
                        </h3>
                        <button type="button"
                            class="btn-close-progress text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="progress-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 relative" id="addProgressUjian">
                        <div
                            class="loading-spinner hidden absolute inset-0 flex justify-center items-center bg-white bg-opacity-75 z-10">
                            <svg aria-hidden="true"
                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
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
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <div class="alert-kursus-progress hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span> All form need to get filled
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="IDUjianProgress"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Ujian</label>
                                <select id="IDUjianProgress" name="IDUjian"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="IDUser" class="block mb-2 text-sm font-medium text-gray-900 ">Murid</label>
                                <select id="IDUser" name="IDUser"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900 ">Nilai</label>
                                <input type="text" id="nilai" name="nilai"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Nilai" required />
                            </div>
                            <div class="col-span-2">
                                <label for="catatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Catatan</label>
                                <input type="text" id="catatan" name="catatan"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Catatan" required />
                            </div>
                        </div>
                        <button
                            class="save-progress text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tambah Progress Ujian Baru
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="progress-edit-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Edit Progress Ujian
                        </h3>
                        <button type="button"
                            class="btn-close-edit-progress text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="progress-edit-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 relative" id="editProgressUjian">
                        <div
                            class="loading-spinner hidden absolute inset-0 flex justify-center items-center bg-white bg-opacity-75 z-10">
                            <svg aria-hidden="true"
                                class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
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
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <div class="alert-kursus-progress hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Danger alert!</span> All form need to get filled
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="edit-IDUjianProgress"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Ujian</label>
                                <select id="edit-IDUjianProgress" name="IDUjian"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="edit-IDUser"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Murid</label>
                                <select id="edit-IDUser" name="IDUser"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="edit-nilai"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Nilai</label>
                                <input type="text" id="edit-nilai" name="nilai"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Nilai" required />
                            </div>
                            <div class="col-span-2">
                                <label for="edit-catatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Catatan</label>
                                <input type="text" id="edit-catatan" name="catatan"
                                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Catatan" required />
                            </div>
                        </div>
                        <button
                            class="update-progress text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Edit Progress Ujian
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="progress-delete-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="progress-delete-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah kamu yakin ingin menghapus progress
                            ujian ini?
                        </h3>
                        <button data-modal-hide="progress-delete-modal" type="button"
                            class="delete-progress text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="progress-delete-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                            Jangan, batalkan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="progress-rapot-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="progress-rapot-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <div class="col-span-2 mb-5">
                            <label for="rapot-IDUser" class="block mb-2 text-sm font-medium text-gray-900 ">Pilih
                                Murid</label>
                            <select id="rapot-IDUser" name="IDUser"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </select>
                        </div>
                        <button data-modal-hide="progress-rapot-modal" type="button"
                            class="rapot-generate text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya, saya yakin
                        </button>
                        <button data-modal-hide="progress-rapot-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                            Jangan, batalkan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
{{-- Ujian --}}
<script>
    $(document).ready(function() {
        var currentPage = 1;
        var entriesPerPage = 10;
        var totalEntries = 0;
        
        $('#skeleton-loader-table-ujian').show();
        $('#table-body-ujian').hide();
        $('#pagination-container-ujian').hide();

        table_ujian();

        $(document).on('click', '.save-ujian', function(e) {
            e.stopPropagation();
            let datas = {};
            let isValid = true;

            $('#addUjian').find('.form-control').each(function() {
                const inputType = $(this).attr('type');
                const inputValue = $(this).val();
                const inputName = $(this).attr('name');

                if (!inputValue) {
                    isValid = false;
                }

                datas[inputName] = inputValue;
            });

            if (isValid) {
                $('.alert-kursus-ujian').addClass('hidden');
                $.ajax({
                    url: "/api/ujians/create",
                    type: "POST",
                    data: JSON.stringify(datas),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('.btn-close-ujian').click();
                        $('#addUjian').find('.form-control').val('');
                        table_ujian();
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            } else {
                $('.alert-kursus-ujian').removeClass('hidden');
            }
        });

        $(document).on('click', '.update-ujian', function(e) {
            e.stopPropagation();
            let id = $(this).data('id');
            let datas = {};
            let isValid = true;

            $('#editUjian').find('.form-control').each(function() {
                const inputType = $(this).attr('type');
                const inputValue = $(this).val();
                const inputName = $(this).attr('name');

                if (!inputValue) {
                    isValid = false;
                }

                datas[inputName] = inputValue;
            });

            if (isValid) {
                $('.alert-kursus-ujian').addClass('hidden');
                $.ajax({
                    url: "/api/ujians/update/" + id,
                    type: "POST",
                    data: JSON.stringify(datas),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('.btn-close-edit-ujian').click();
                        $('#editUjian').find('.form-control').val('');
                        table_ujian();
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            } else {
                $('.alert-kursus-ujian').removeClass('hidden');
            }
        });

        $('.form-control').on('input', function() {
            let isValid = true;
            $('#addKelases').find('.form-control').each(function() {
                if (!$(this).val()) {
                    isValid = false;
                }
            });

            if (isValid) {
                $('.alert-kursus-ujian').addClass('hidden');
            }
        });

        $(document).on('click', '.button-create-ujian', function() {
            openCreateModalUjian();
        });

        $(document).on('click', '.edit-button-ujian', function() {
            const courseId = $(this).data('id');
            $('.update-ujian').data('id', courseId);
            openEditModalUjian(courseId);
        });

        $(document).on('click', '.delete-button-ujian', function() {
            const courseId = $(this).data('id');
            $('.delete-ujian').data('id', courseId);
            $('.button-delete-open-ujian').click();
        });

        $(document).on('click', '.btn-close-edit-ujian', function() {
            $('#editUjian').find('.form-control').val('');
        });

        $(document).on('click', '.delete-ujian', function() {
            let id = $(this).data('id');
            openDeleteModalUjian(id);
        });

        function openCreateModalUjian() {
            $('#addUjian').find('.form-control').prop('disabled', true);
            $('.loading-spinner').removeClass('hidden');
            select_api_ujian('#IDMataPelajaran', '#addUjian');
        }

        function openDeleteModalUjian(id) {
            $.ajax({
                url: "api/ujians/delete/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    var alert = `
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Success alert!</span> Successfully deleted.
                            </div>
                        </div>
                    `;
                    $('.alert-space-ujian').append(alert);
                    table_ujian();
                    setTimeout(function() {
                        $('.alert-space-ujian').empty();
                    }, 3000);
                },
                error: function(errors) {
                    console.error(errors);
                }
            });
        }
        
        function openEditModalUjian(id) {
            $('#editUjian').find('.form-control').prop('disabled', true);
            $('.loading-spinner').removeClass('hidden');
            $('.btn-close-edit-ujian').click();
            $.ajax({
                url: "api/ujians/read/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    let data = response["ujian: "].IDMataPelajaran;
                    $('#editUjian').find('.form-control').each(function() {
                        const inputName = $(this).attr('name');
                        const inputValue = response["ujian: "][inputName];
                        
                        $("#" + $(this).attr('id')).val(inputValue);
                    });

                    select_api_ujian('#edit-IDMataPelajaran', '#editUjian', data);
                },
                error: function(errors) {
                    console.error(errors);
                    $('.loading-spinner').addClass('hidden');
                }
            });
        }

        var currentPage = 1;
        var entriesPerPage = 10;
        var allData = [];
        
        function table_ujian() {
            $('#skeleton-loader-table-ujian').show();
            $('#table-body-ujian').hide();
            $('#table-body-ujian').empty();
            $.ajax({
                url: "api/ujianMapel",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    allData = response["ujians: "];
                    if (allData && allData.length > 0) {
                        allData.sort(function(a, b) {
                            return b.id - a.id;
                        });

                        renderTableUjian(currentPage);
                        updatePaginationInfoUjian(currentPage, allData.length);
                        $('#pagination-container-ujian').show();
                    } else {
                        var row = `
                        <tr>
                            <th scope="row" colspan="6" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                No data found
                            </th>
                        </tr>
                        `;
                        $('#table-body-ujian').append(row);
                        $('#pagination-container-ujian').hide();
                    }
                    $('#skeleton-loader-table-ujian').hide();
                    $('#table-body-ujian').show();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    var row = `
                    <tr>
                        <th scope="row" colspan="6" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                            Fetching data error..
                        </th>
                    </tr>
                    `;
                    $('#table-body-ujian').append(row);
                    $('#pagination-container-ujian').hide();
                    $('#skeleton-loader-table-ujian').hide();
                    $('#table-body-ujian').show();
                }
            });
        }

        function renderTableUjian(page) {
            $('#table-body-ujian').empty();
            var start = (page - 1) * entriesPerPage;
            var end = start + entriesPerPage;
            var paginatedData = allData.slice(start, end);
            paginatedData.forEach(function(item, index) {
                var row = `
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            ${start + index + 1}
                        </th>
                        <td class="px-6 py-4">
                            ${item.mapel}
                        </td>
                        <td class="px-6 py-4">
                            ${item.nama}
                        </td>
                        <td class="px-6 py-4">
                            ${item.kkm}
                        </td>
                        <td class="px-6 py-4 capitalize">
                            ${item.deskripsi}
                        </td>
                        <td class="px-6 py-4 text-right flex">
                            <button
                                class="edit-button-ujian block me-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button" data-id="${item.id}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button
                                class="delete-button-ujian block me-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button" data-id="${item.id}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
                $('#table-body-ujian').append(row);
            });
        }

        function updatePaginationInfoUjian(page, totalEntries) {
            var startEntry = (page - 1) * entriesPerPage + 1;
            var endEntry = Math.min(startEntry + entriesPerPage - 1, totalEntries);
            
            $('#start-entry-ujian').text(startEntry);
            $('#end-entry-ujian').text(endEntry);
            $('#total-entries-ujian').text(totalEntries);
            
            // Enable/disable buttons
            if (page === 1) {
                $('#prev-button-ujian').prop('disabled', true);
            } else {
                $('#prev-button-ujian').prop('disabled', false);
            }
            
            if (endEntry >= totalEntries) {
                $('#next-button-ujian').prop('disabled', true);
            } else {
                $('#next-button-ujian').prop('disabled', false);
            }
        }

        function select_api_ujian(id, place, selectedId = null) {
            $.ajax({
                url: "api/matapelajarans",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    const selectElement = $(id);
                    selectElement.empty(); // Clear existing options

                    // Add a default "Pilih Tingkat Kelas" option
                    selectElement.append('<option value="" selected>Pilih Mata Pelajaran</option>');

                    // Populate new options
                    response["matapelajarans: "].forEach(mapel => {
                        const optionText = `${mapel.nama}`;
                        const optionValue = mapel.id;
                        const option = `<option value="${optionValue}">${optionText}</option>`;
                        selectElement.append(option);
                    });

                    if (selectedId) {
                        selectElement.val(selectedId);
                    } else {
                        selectElement.val(''); // Ensure no selection is made
                    }

                    $(place).find('.form-control').prop('disabled', false);
                    $('.loading-spinner').addClass('hidden');
                },
                error: function(errors) {
                    console.error(errors);
                    $('.loading-spinner').addClass('hidden');
                }
            });
        }
        
        // Event listeners for pagination buttons
        $('#prev-button-ujian').on('click', function() {
            if (currentPage > 1) {
                currentPage--;
                renderTableUjian(currentPage);
                updatePaginationInfoUjian(currentPage, allData.length);
            }
        });
        
        $('#next-button-ujian').on('click', function() {
            if ((currentPage * entriesPerPage) < allData.length) {
                currentPage++;
                renderTableUjian(currentPage);
                updatePaginationInfoUjian(currentPage, allData.length); 
            } 
        });
    });
</script>

{{-- Soal --}}
<script>
    $(document).ready(function() {
        var currentPage = 1;
        var entriesPerPage = 10;
        var totalEntries = 0;
        
        $('#skeleton-loader-table-soal').show();
        $('#table-body-soal').hide();
        $('#pagination-container-soal').hide();

        $('#tipe').on('change', function () {
            var value = $(this).val();
            if (value === 'Ganda') {
                $('.pilgan').show();
            } else if (value === 'Esai') {
                $('.pilgan').hide();
            } else if (value === ''){
                $('.pilgan').hide();
            }
        });

        table_soal();

        $(document).on('click', '.save-soal', function(e) {
            e.stopPropagation();
            let datas = {};
            let isValid = true;

            // Get the value of the tipe select element
            const tipeValue = $('#tipe').val();

            $('#addSoal').find('.form-control').each(function() {
                let inputValue = $(this).val();
                const inputName = $(this).attr('name');

                // Convert IDUjian value to number
                if (inputName === 'IDUjian') {
                    inputValue = Number(inputValue);
                }

                // Set pilihan1 to pilihan5 to null if tipe is 'Esai'
                if (tipeValue === 'Esai' && (inputName === 'pilihan1' || inputName === 'pilihan2' || inputName === 'pilihan3' || inputName === 'pilihan4' || inputName === 'pilihan5')) {
                    inputValue = "";
                }

                // Ignore validation for pilihan1 to pilihan5
                if (inputName !== 'pilihan1' && inputName !== 'pilihan2' && inputName !== 'pilihan3' && inputName !== 'pilihan4' && inputName !== 'pilihan5') {
                    if (!inputValue && inputValue !== 0) {
                        isValid = false;
                    }
                }

                datas[inputName] = inputValue;
            });

            if (isValid) {
                $('.alert-kursus-soal').addClass('hidden');
                $.ajax({
                    url: "/api/soals/create",
                    type: "POST",
                    data: JSON.stringify(datas),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('.btn-close-soal').click();
                        $('#addSoal').find('.form-control').val('');
                        table_soal();
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            } else {
                $('.alert-kursus-soal').removeClass('hidden');
            }
        });
        
        $(document).on('click', '.update-soal', function(e) {
            e.stopPropagation();
            let id = $(this).data('id');
            let datas = {};
            let isValid = true;

            const tipeValue = $('#tipe').val();

            $('#editSoal').find('.form-control').each(function() {
                let inputValue = $(this).val();
                const inputName = $(this).attr('name');

                // Convert IDUjian value to number
                if (inputName === 'IDUjian') {
                    inputValue = Number(inputValue);
                }

                // Set pilihan1 to pilihan5 to null if tipe is 'Esai'
                if (tipeValue === 'Esai' && (inputName === 'pilihan1' || inputName === 'pilihan2' || inputName === 'pilihan3' || inputName === 'pilihan4' || inputName === 'pilihan5')) {
                    inputValue = null;
                }

                // Ignore validation for pilihan1 to pilihan5
                if (inputName !== 'pilihan1' && inputName !== 'pilihan2' && inputName !== 'pilihan3' && inputName !== 'pilihan4' && inputName !== 'pilihan5') {
                    if (!inputValue && inputValue !== 0) {
                        isValid = false;
                    }
                }

                datas[inputName] = inputValue;
            });

            if (isValid) {
                $('.alert-kursus-soal').addClass('hidden');
                $.ajax({
                    url: "/api/soals/update/" + id,
                    type: "POST",
                    data: JSON.stringify(datas),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('.btn-close-edit-soal').click();
                        $('#editSoal').find('.form-control').val('');
                        table_soal();
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            } else {
                $('.alert-kursus-soal').removeClass('hidden');
            }
        });

        $('.form-control').on('input', function() {
            let isValid = true;
            $('#addKelases').find('.form-control').each(function() {
                if (!$(this).val()) {
                    isValid = false;
                }
            });

            if (isValid) {
                $('.alert-kursus-soal').addClass('hidden');
            }
        });

        $(document).on('click', '.button-create-soal', function() {
            openCreateModalSoal();
        });

        $(document).on('click', '.edit-button-soal', function() {
            const courseId = $(this).data('id');
            $('.update-soal').data('id', courseId);
            openEditModalSoal(courseId);
        });

        $(document).on('click', '.delete-button-soal', function() {
            const courseId = $(this).data('id');
            $('.delete-soal').data('id', courseId);
            $('.button-delete-open-soal').click();
        });

        $(document).on('click', '.btn-close-edit-soal', function() {
            $('#editSoal').find('.form-control').val('');
        });

        $(document).on('click', '.delete-soal', function() {
            let id = $(this).data('id');
            openDeleteModalSoal(id);
        });

        function openCreateModalSoal() {
            $('#addSoal').find('.form-control').prop('disabled', true);
            $('.loading-spinner').removeClass('hidden');
            select_api_soal('#IDUjian', '#addSoal');
        }

        function openDeleteModalSoal(id) {
            $.ajax({
                url: "api/soals/delete/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    var alert = `
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Success alert!</span> Successfully deleted.
                            </div>
                        </div>
                    `;
                    $('.alert-space-soal').append(alert);
                    table_soal();
                    setTimeout(function() {
                        $('.alert-space-soal').empty();
                    }, 3000);
                },
                error: function(errors) {
                    console.error(errors);
                }
            });
        }
        
        function openEditModalSoal(id) {
            $('#editSoal').find('.form-control').prop('disabled', true);
            $('.loading-spinner').removeClass('hidden');
            $('.btn-close-edit-soal').click();
            $.ajax({
                url: "api/soals/read/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    let data = response["soal: "].IDUjian;
                    const tipe = response["soal: "].tipe;

                    // Show or hide pilgan elements based on tipe
                    if (tipe === "Ganda") {
                        $('#editSoal').find('.pilgan').show();
                    } else if (tipe === "Esai") {
                        $('#editSoal').find('.pilgan').hide();
                    }

                    $('#editSoal').find('.form-control').each(function() {
                        const inputName = $(this).attr('name');
                        const inputValue = response["soal: "].hasOwnProperty(inputName) ? response["soal: "][inputName] : '';

                        $(this).val(inputValue);
                    });

                    $('#editSoal').find('.form-control').prop('disabled', false);
                    $('.loading-spinner').addClass('hidden');

                    select_api_soal('#edit-IDUjian', '#editSoal', data);
                },
                error: function(errors) {
                    console.error(errors);
                    $('.loading-spinner').addClass('hidden');
                }
            });
        }

        var currentPage = 1;
        var entriesPerPage = 10;
        var allData = [];
        
        function table_soal() {
            $('#skeleton-loader-table-soal').show();
            $('#table-body-soal').hide();
            $('#table-body-soal').empty();

            $.ajax({
                url: "api/soals",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    allData = response["soals: "];
                    if (allData && allData.length > 0) {
                        $.ajax({
                            url: "api/ujians",
                            type: "GET",
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            success: function(ujianResponse) {
                                let ujianData = ujianResponse["ujians: "];
                                let ujianMap = {};
                                ujianData.forEach(function(ujian) {
                                    ujianMap[ujian.id] = {
                                        nama_ujian: ujian.nama,
                                    };
                                });
                                
                                allData.forEach(function(soal) {
                                    let ujianInfo = ujianMap[soal.IDUjian];
                                    if (ujianInfo) {
                                        soal.nama_ujian = ujianInfo.nama_ujian;
                                    }
                                });
                                
                                allData.sort(function(a, b) {
                                    return b.id - a.id;
                                });

                                renderTableSoal(currentPage); // Panggil renderTableSoal setelah semua data siap
                                updatePaginationInfoSoal(currentPage, allData.length);
                                $('#pagination-container-soal').show();
                            },
                            error: function(errors) {
                                console.error(errors);
                                $('.loading-spinner').addClass('hidden');
                            }
                        });
                    } else {
                        var row = `
                            <tr>
                                <th scope="row" colspan="6" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                    No data found
                                </th>
                            </tr>
                        `;
                        $('#table-body-soal').append(row);
                        $('#pagination-container-soal').hide();
                        $('#skeleton-loader-table-soal').hide();
                        $('#table-body-soal').show();
                    }
                    $('#skeleton-loader-table-soal').hide();
                    $('#table-body-soal').show();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    var row = `
                        <tr>
                            <th scope="row" colspan="6" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                Fetching data error..
                            </th>
                        </tr>
                    `;
                    $('#table-body-soal').append(row);
                    $('#pagination-container-soal').hide();
                    $('#skeleton-loader-table-soal').hide();
                    $('#table-body-soal').show();
                }
            });
        }

        function renderTableSoal(page) {
            $('#table-body-soal').empty();
            var start = (page - 1) * entriesPerPage;
            var end = start + entriesPerPage;
            var paginatedData = allData.slice(start, end);
            paginatedData.forEach(function(item, index) {
                var row = `
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            ${start + index + 1}
                        </th>
                        <td class="px-6 py-4">
                            ${item.pertanyaan}
                        </td>
                        <td class="px-6 py-4">
                            ${item.tipe}
                        </td>
                        <td class="px-6 py-4">
                            ${item.nama_ujian}
                        </td>
                        <td class="px-6 py-4 text-right flex">
                            <button
                                class="edit-button-soal block me-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button" data-id="${item.id}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button
                                class="delete-button-soal block me-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button" data-id="${item.id}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
                $('#table-body-soal').append(row);
            });
        }

        function updatePaginationInfoSoal(page, totalEntries) {
            var startEntry = (page - 1) * entriesPerPage + 1;
            var endEntry = Math.min(startEntry + entriesPerPage - 1, totalEntries);
            
            $('#start-entry-soal').text(startEntry);
            $('#end-entry-soal').text(endEntry);
            $('#total-entries-soal').text(totalEntries);
            
            // Enable/disable buttons
            if (page === 1) {
                $('#prev-button-soal').prop('disabled', true);
            } else {
                $('#prev-button-soal').prop('disabled', false);
            }
            
            if (endEntry >= totalEntries) {
                $('#next-button-soal').prop('disabled', true);
            } else {
                $('#next-button-soal').prop('disabled', false);
            }
        }

        function select_api_soal(id, place, selectedId = null) {
            $.ajax({
                url: "api/ujians",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    const selectElement = $(id);
                    selectElement.empty(); // Clear existing options

                    // Add a default "Pilih Tingkat Kelas" option
                    selectElement.append('<option value="" selected>Pilih Ujian</option>');

                    // Populate new options
                    response["ujians: "].forEach(mapel => {
                        const optionText = `${mapel.nama}`;
                        const optionValue = mapel.id;
                        const option = `<option value="${optionValue}">${optionText}</option>`;
                        selectElement.append(option);
                    });

                    if (selectedId) {
                        selectElement.val(selectedId);
                    } else {
                        selectElement.val(''); // Ensure no selection is made
                    }

                    $(place).find('.form-control').prop('disabled', false);
                    $('.loading-spinner').addClass('hidden');
                },
                error: function(errors) {
                    console.error(errors);
                    $('.loading-spinner').addClass('hidden');
                }
            });
        }
        
        // Event listeners for pagination buttons
        $('#prev-button-soal').on('click', function() {
            if (currentPage > 1) {
                currentPage--;
                renderTableSoal(currentPage);
                updatePaginationInfoSoal(currentPage, allData.length);
            }
        });
        
        $('#next-button-soal').on('click', function() {
            if ((currentPage * entriesPerPage) < allData.length) {
                currentPage++;
                renderTableSoal(currentPage);
                updatePaginationInfoSoal(currentPage, allData.length); 
            } 
        });
    });
</script>

{{-- Progress --}}
<script>
    $(document).ready(function() {
        var currentPage = 1;
        var entriesPerPage = 10;
        var totalEntries = 0;
        
        $('#skeleton-loader-table-progress').show();
        $('#table-body-progress').hide();
        $('#pagination-container-progress').hide();

        table_progress_ujian();

        $(document).on('click', '.save-progress', function(e) {
            e.stopPropagation();
            let datas = {};
            let isValid = true;

            $('#addProgressUjian').find('.form-control').each(function() {
                let inputValue = $(this).val();
                const inputName = $(this).attr('name');

                if (inputName === 'IDUjian' || inputName === 'IDUser') {
                    inputValue = Number(inputValue);
                }

                if (!inputValue) {
                    isValid = false;
                }

                datas[inputName] = inputValue;
            });

            if (isValid) {
                $('.alert-kursus-progress').addClass('hidden');
                $.ajax({
                    url: "/api/progressujians/create",
                    type: "POST",
                    data: JSON.stringify(datas),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('.btn-close').click();
                        $('#addProgressUjian').find('.form-control').val('');
                        table_progress_ujian();
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            } else {
                $('.alert-kursus-progress').removeClass('hidden');
            }
        });

        $(document).on('click', '.update-progress', function(e) {
            e.stopPropagation();
            let id = $(this).data('id');
            let datas = {};
            let isValid = true;

            $('#editProgressUjian').find('.form-control').each(function() {
                const inputType = $(this).attr('type');
                const inputValue = $(this).val();
                const inputName = $(this).attr('name');

                if (!inputValue) {
                    isValid = false;
                }

                datas[inputName] = inputValue;
            });

            if (isValid) {
                $('.alert-kursus-progress').addClass('hidden');
                $.ajax({
                    url: "/api/progressujians/update/" + id,
                    type: "POST",
                    data: JSON.stringify(datas),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('.btn-close-edit-progress').click();
                        $('#editProgressUjian').find('.form-control').val('');
                        table_progress_ujian();
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            } else {
                $('.alert-kursus-progress').removeClass('hidden');
            }
        });

        $('.form-control').on('input', function() {
            let isValid = true;
            $('#addKelases').find('.form-control').each(function() {
                if (!$(this).val()) {
                    isValid = false;
                }
            });

            if (isValid) {
                $('.alert-kursus-progress').addClass('hidden');
            }
        });

        $(document).on('click', '.button-create-progress', function() {
            openCreateModalProgress();
        });

        $(document).on('click', '.edit-button-progress', function() {
            const courseId = $(this).data('id');
            $('.update-progress').data('id', courseId);
            openEditModalProgress(courseId);
        });

        $(document).on('click', '.delete-button-progress', function() {
            const courseId = $(this).data('id');
            $('.delete-progress').data('id', courseId);
            $('.button-delete-open-progress').click();
        });

        $(document).on('click', '.btn-close-edit-progress', function() {
            $('#editProgressUjian').find('.form-control').val('');
        });

        $(document).on('click', '.delete-progress', function() {
            let id = $(this).data('id');
            openDeleteModalProgress(id);
        });

        $(document).on('click', '.button-download-rapot', function() {
            $.ajax({
                url: "/api/users/userNilai",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    let data = response["userNilai: "];

                    const selectElement = $('#rapot-IDUser');
                    selectElement.empty(); // Clear existing options

                    // Add a default "Pilih Tingkat Kelas" option
                    selectElement.append('<option value="" selected>Pilih Murid</option>');

                    // Populate new options
                    data.forEach(user => {
                        const optionText = `${user.nama}`;
                        const optionValue = user.id;
                        const option = `<option value="${optionValue}">${optionText}</option>`;
                        selectElement.append(option);
                    });
                },
                error: function(errors) {
                    console.error(errors);
                }
            });

            // downloadRaport();
        });

        $(document).on('click', '.rapot-generate', function() {
            let id = $('#rapot-IDUser').val();
            downloadRaport(id);
        });

        function downloadRaport(id) {
            $.ajax({
                url: "api/users/rapor/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {

                    let data = response['rapor: '];
                    console.log(data[0].nama);
                    // Proses data dan masukkan ke dalam template
                    var props = {
                        outputType: jsPDFInvoiceTemplate.OutputType.Save,
                        returnJsPDFDocObject: true,
                        fileName: "Invoice 2021",
                        orientationLandscape: false,
                        compress: true,
                        logo: {
                            src: "https://raw.githubusercontent.com/edisonneza/jspdf-invoice-template/demo/images/logo.png",
                            type: 'PNG',
                            width: 53.33,
                            height: 26.66,
                            margin: {
                                top: 0,
                                left: 0
                            }
                        },
                        business: {
                            name: "Santa Patricia",
                            address: "Duta Garden",
                            phone: "(+355) 069 11 11 111",
                            email: "email@example.com",
                            email_1: "info@example.al",
                            website: "www.example.al",
                        },
                        contact: {
                            label: "Raport untuk:",
                            name: data[0].nama,
                            email: data[0].email,
                        },
                        invoice: {
                            label: "Raport UAS SEMS 2",
                            headerBorder: false,
                            tableBodyBorder: false,
                            header: [
                                { title: "#", style: { width: 10 } },
                                { title: "Mata Pelajaran", style: { width: 30 } },
                                { title: "Ujian", style: { width: 30 } },
                                { title: "Tipe Ujian" },
                                { title: "Nilai" },
                                { title: "Catatan", style: { width: 80 } }
                            ],
                            table: data.map((item, index) => [
                                index + 1,
                                item.nama_mapel,
                                item.nama_ujian,
                                item.tipe_ujian,
                                item.nilai,
                                item.catatan
                            ]),
                            invDescLabel: "Catatan Rapot",
                            invDesc: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.",
                        },
                        footer: {
                            text: "The invoice is created on a computer and is valid without the signature and stamp.",
                        },
                        pageEnable: true,
                        pageLabel: "Page ",
                    };

                    var pdfObject = jsPDFInvoiceTemplate.default(props);
                },
                error: function(errors) {
                    console.error(errors);
                }
            });
        }

        function openCreateModalProgress() {
            $('#addProgressUjian').find('.form-control').prop('disabled', true);
            $('.loading-spinner').removeClass('hidden');
            select_api_progress('#IDUjianProgress', '#IDUser', '#addProgressUjian');
        }

        function openDeleteModalProgress(id) {
            $.ajax({
                url: "api/progressujians/delete/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    var alert = `
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Success alert!</span> Successfully deleted.
                            </div>
                        </div>
                    `;
                    $('.alert-space-progress').append(alert);
                    table_progress_ujian();
                    setTimeout(function() {
                        $('.alert-space-progress').empty();
                    }, 3000);
                },
                error: function(errors) {
                    console.error(errors);
                }
            });
        }
        
        function openEditModalProgress(id) {
            $('#editProgressUjian').find('.form-control').prop('disabled', true);
            $('.loading-spinner').removeClass('hidden');
            $('.btn-close-edit-progress').click();

            $.ajax({
                url: "api/progressujians/read/" + id,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    const progressUjian = response["progressujian: "];
                    const selectedMapelId = progressUjian.IDUjian;
                    const selectedUserId = progressUjian.IDUser;

                    // Populate input fields with existing data
                    $('#editProgressUjian').find('.form-control').each(function() {
                        const inputName = $(this).attr('name');
                        const inputValue = progressUjian[inputName];
                        $("#" + $(this).attr('id')).val(inputValue);
                    });

                    // Populate select elements
                    select_api_progress('#edit-IDUjianProgress', '#edit-IDUser', '#editProgressUjian', selectedMapelId, selectedUserId);
                },
                error: function(errors) {
                    console.error(errors);
                    $('.loading-spinner').addClass('hidden');
                }
            });
        }

        var currentPage = 1;
        var entriesPerPage = 10;
        var allData = [];
        
        function table_progress_ujian() {
            $('#skeleton-loader-table-progress').show();
            $('#table-body-progress').hide();
            $('#table-body-progress').empty();
            $.ajax({
                url: "api/progressujianUser",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response) {
                    allData = response["progressUjianUser: "];
                    if (allData && allData.length > 0) {
                        allData.sort(function(a, b) {
                            return b.id - a.id;
                        });

                        renderTableProgress(currentPage);
                        updatePaginationInfoProgress(currentPage, allData.length);
                        $('#pagination-container-progress').show();
                    } else {
                        var row = `
                        <tr>
                            <th scope="row" colspan="6" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                No data found
                            </th>
                        </tr>
                        `;
                        $('#table-body-progress').append(row);
                        $('#pagination-container-progress').hide();
                    }
                    $('#skeleton-loader-table-progress').hide();
                    $('#table-body-progress').show();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    var row = `
                    <tr>
                        <th scope="row" colspan="6" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                            Fetching data error..
                        </th>
                    </tr>
                    `;
                    $('#table-body-progress').append(row);
                    $('#pagination-container-progress').hide();
                    $('#skeleton-loader-table-progress').hide();
                    $('#table-body-progress').show();
                }
            });
        }

        function renderTableProgress(page) {
            $('#table-body-progress').empty();
            var start = (page - 1) * entriesPerPage;
            var end = start + entriesPerPage;
            var paginatedData = allData.slice(start, end);
            paginatedData.forEach(function(item, index) {
                var row = `
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            ${start + index + 1}
                        </th>
                        <td class="px-6 py-4">
                            ${item.nama_ujian}
                        </td>
                        <td class="px-6 py-4">
                            ${item.nama_murid}
                        </td>
                        <td class="px-6 py-4">
                            ${item.kkm_ujian}
                        </td>
                        <td class="px-6 py-4 capitalize">
                            ${item.nilai}
                        </td>
                        <td class="px-6 py-4 text-right flex">
                            <button
                                class="edit-button-progress block me-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button" data-id="${item.id_progressujian}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button
                                class="delete-button-progress block me-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button" data-id="${item.id_progressujian}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;
                $('#table-body-progress').append(row);
            });
        }

        function updatePaginationInfoProgress(page, totalEntries) {
            var startEntry = (page - 1) * entriesPerPage + 1;
            var endEntry = Math.min(startEntry + entriesPerPage - 1, totalEntries);
            
            $('#start-entry-progress').text(startEntry);
            $('#end-entry-progress').text(endEntry);
            $('#total-entries-progress').text(totalEntries);
            
            // Enable/disable buttons
            if (page === 1) {
                $('#prev-button-progress').prop('disabled', true);
            } else {
                $('#prev-button-progress').prop('disabled', false);
            }
            
            if (endEntry >= totalEntries) {
                $('#next-button-progress').prop('disabled', true);
            } else {
                $('#next-button-progress').prop('disabled', false);
            }
        }

        function select_api_progress(id1, id2, place, selectedId1 = null, selectedId2 = null) {
            const apiUjians = $.ajax({
                url: "api/ujians",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json"
            });

            const apiUsers = $.ajax({
                url: "api/users",
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json"
            });

            Promise.all([apiUjians, apiUsers]).then(responses => {
                const [ujiansResponse, usersResponse] = responses;

                const selectElement1 = $(id1);
                selectElement1.empty();
                selectElement1.append('<option value="" selected>Pilih Ujian</option>');

                ujiansResponse["ujians: "].forEach(ujian => {
                    const optionText = `${ujian.nama}`;
                    const optionValue = ujian.id;
                    const option = `<option value="${optionValue}">${optionText}</option>`;
                    selectElement1.append(option);
                });

                if (selectedId1) {
                    selectElement1.val(selectedId1);
                } else {
                    selectElement1.val('');
                }

                const selectElement2 = $(id2);
                selectElement2.empty();
                selectElement2.append('<option value="" selected>Pilih User</option>');

                usersResponse["users: "].forEach(user => {
                    const optionText = `${user.nama}`;
                    const optionValue = user.id;
                    const option = `<option value="${optionValue}">${optionText}</option>`;
                    selectElement2.append(option);
                });

                if (selectedId2) {
                    selectElement2.val(selectedId2);
                } else {
                    selectElement2.val('');
                }

                $(place).find('.form-control').prop('disabled', false);
                $('.loading-spinner').addClass('hidden');
            }).catch(errors => {
                console.error(errors);
                $('.loading-spinner').addClass('hidden');
            });
        }
        
        // Event listeners for pagination buttons
        $('#prev-button-progress').on('click', function() {
            if (currentPage > 1) {
                currentPage--;
                renderTableProgress(currentPage);
                updatePaginationInfoProgress(currentPage, allData.length);
            }
        });
        
        $('#next-button-progress').on('click', function() {
            if ((currentPage * entriesPerPage) < allData.length) {
                currentPage++;
                renderTableProgress(currentPage);
                updatePaginationInfoProgress(currentPage, allData.length); 
            } 
        });
    });
</script>
@endsection