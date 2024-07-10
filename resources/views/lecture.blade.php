@extends('app')

@section('content')
<div class="mb-10 flex justify-between items-center">
    <h1 class="font-bold text-2xl">Lecture List</h1>
    <button data-modal-target="lecture-modal" data-modal-toggle="lecture-modal"
        class="open-modal block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button">
        Add Lecture
    </button>
    <button data-modal-target="lecture-edit-modal" data-modal-toggle="lecture-edit-modal"
        class="hidden open-modal button-edit-open text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button">
        Edit Lecture
    </button>

    <button data-modal-target="lecture-delete-modal" data-modal-toggle="lecture-delete-modal"
        class="hidden button-delete-open text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button">
        Delete Lecture
    </button>
</div>

<div class="alert-space">

</div>


<div id="table-lecture-main" class="relative overflow-x-none shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right bg-white text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipe
                </th>
                <th scope="col" class="px-6 py-3">
                    Konten
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody id="table-body-lecture">
            <!-- table rows will be generated here -->
        </tbody>

        <tbody id="skeleton-loader-table-lecture">
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
<div id="pagination-container" class="flex flex-col items-center mt-4">
    <!-- Help text -->
    <span id="pagination-info" class="text-sm text-gray-700">
        Showing <span id="start-entry" class="font-semibold text-gray-900">1</span> to <span id="end-entry"
            class="font-semibold text-gray-900">10</span> of <span id="total-entries"
            class="font-semibold text-gray-900">100</span> Entries
    </span>
    <!-- Buttons -->
    <div class="inline-flex mt-2 xs:mt-0">
        <button id="prev-button"
            class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900"
            disabled>
            Prev
        </button>
        <button id="next-button"
            class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900">
            Next
        </button>
    </div>
</div>

<div id="lecture-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Create New Course
                </h3>
                <button type="button"
                    class="btn-close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-toggle="lecture-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5" id="addLecture">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <div class="alert-kursus hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
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
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="judul" id="judul"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900">Type</label>
                        <input type="text" name="tipe" id="tipe"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="konten" class="block mb-2 text-sm font-medium text-gray-900">Content</label>
                        <input type="text" name="konten" id="konten"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="kursus_id" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <select type="text" name="kursus_id" id="kursus_id"
                            class="form-control kursus-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                            <option selected>Select Course</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4"
                            class="form-control block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Write product description here" required></textarea>
                    </div>
                </div>
                <button
                    class="save text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add new lectuer
                </button>
            </div>
        </div>
    </div>
</div>

<div id="lecture-edit-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Edit Lecture
                </h3>
                <button type="button"
                    class="btn-close-edit text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-toggle="lecture-edit-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 relative" id="editLecture">
                <div
                    class="loading-spinner hidden absolute inset-0 flex justify-center items-center bg-white bg-opacity-75 z-10">
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
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <div class="alert-kursus hidden flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50"
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
                        <label for="judul-edit" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="judul" id="judul-edit"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tipe-edit" class="block mb-2 text-sm font-medium text-gray-900">Type</label>
                        <input type="text" name="tipe" id="tipe-edit"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="konten-edit" class="block mb-2 text-sm font-medium text-gray-900">Content</label>
                        <input type="text" name="konten" id="konten-edit"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="kursus_id-edit" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <select type="text" name="kursus_id" id="kursus_id-edit"
                            class="form-control bg-gray-50 kursus-select border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                            <option selected>Select Course</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi-edit"
                            class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea id="deskripsi-edit" name="deskripsi" rows="4"
                            class="form-control block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Write product description here" required></textarea>
                    </div>
                </div>
                <button
                    class="update text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Edit lecture
                </button>
            </div>
        </div>
    </div>
</div>

<div id="lecture-delete-modal" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                data-modal-hide="lecture-delete-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete
                    this course?</h3>
                <button data-modal-hide="lecture-delete-modal" type="button"
                    class="delete-course text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="lecture-delete-modal" type="button"
                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No,
                    cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
            var currentPage = 1;
            var entriesPerPage = 10;
            var totalEntries = 0;
            
            $('#skeleton-loader-table-lecture').show();
            $('#table-body-lecture').hide();
            $('#pagination-container').hide();

            table_lectures();
            
            $(document).on('click', '.save', function(e) {
                e.stopPropagation();
                let datas = {};
                let isValid = true;

                $('#addLecture').find('.form-control').each(function() {
                    datas[$("#" + $(this).attr('id')).attr("name")] = $("#" + $(this).attr(
                    'id')).val();
                });

                if (isValid) {
                    $('.alert-kursus').addClass('hidden');
                    $.ajax({
                        url: "/api/materis/create",
                        type: "POST",
                        data: JSON.stringify(datas),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(response) {
                            $('.btn-close').click();
                            $('#addLecture').find('.form-control').val('');
                            table_lectures();
                        },
                        error: function(errors) {
                            console.error(errors);
                        }
                    });
                } else {
                    $('.alert-kursus').removeClass('hidden');
                }
            });

            $(document).on('click', '.open-modal', function() {
                $.ajax({
                    url: "/api/kursuses",
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('.kursus-select').empty();
                        $('.kursus-select').append('<option selected>Select Course</option>');
                        
                        if (response && response["kursuses: "]) {
                            response["kursuses: "].forEach(function(kursus) {
                            $('.kursus-select').append(new Option(kursus.nama, kursus.id));
                        });
                        } else {
                            console.error("Invalid response format: ", response);
                        }
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            })

            $(document).on('click', '.update', function(e) {
                e.stopPropagation();
                let id = $(this).data('id');
                let datas = {};
                let isValid = true;

                $('#editLecture').find('.form-control').each(function() {
                    datas[$("#" + $(this).attr('id')).attr("name")] = $("#" + $(this).attr(
                    'id')).val();
                });

                if (isValid) {
                    $('.alert-kursus').addClass('hidden');
                    $.ajax({
                        url: "/api/materis/update/" + id,
                        type: "POST",
                        data: JSON.stringify(datas),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(response) {
                            $('.btn-close-edit').click();
                            $('#editLecture').find('.form-control').val('');
                            table_lectures();
                        },
                        error: function(errors) {
                            console.error(errors);
                        }
                    });
                } else {
                    $('.alert-kursus').removeClass('hidden');
                }
            });

            $('.form-control').on('input', function() {
                let isValid = true;
                $('#addLecture').find('.form-control').each(function() {
                    if (!$(this).val()) {
                        isValid = false;
                    }
                });

                if (isValid) {
                    $('.alert-kursus').addClass('hidden');
                }
            });

            $(document).on('click', '.edit-button', function() {
                const courseId = $(this).data('id');
                $('.update').data('id', courseId);
                openEditModal(courseId);
            });

            $(document).on('click', '.delete-button', function() {
                const courseId = $(this).data('id');
                $('.delete-course').data('id', courseId);
                $('.button-delete-open').click();
            });

            $(document).on('click', '.btn-close-edit', function() {
                $('#editLecture').find('.form-control').val('');
            });

            $(document).on('click', '.delete-course', function() {
                let id = $(this).data('id');
                openDeleteModal(id);
            });

            function openDeleteModal(id) {
                $.ajax({
                    url: "api/materis/delete/" + id,
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
                        $('.alert-space').append(alert);
                        table_lectures();
                        setTimeout(function() {
                            $('.alert-space').empty();
                        }, 3000);
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            }
            
            function openEditModal(id) {
                $('#editLecture').find('.form-control').prop('disabled', true);
                $('.loading-spinner').removeClass('hidden');
                $('.button-edit-open').click();

                $.ajax({
                    url: "api/materis/read/" + id,
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('#editLecture').find('.form-control').each(function() {
                            $("#" + $(this).attr('id')).val(response["Materi: "][$(this).attr("name")]);
                        });
                        $('#editLecture').find('.form-control').prop('disabled', false);
                        $('.loading-spinner').addClass('hidden');
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
            
            function table_lectures() {
                $('#table-body-lecture').empty();
                $.ajax({
                    url: "api/materis",
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        allData = response["materis: "];
                        if (allData && allData.length > 0) {
                            renderTable(currentPage);
                            updatePaginationInfo(currentPage, allData.length);
                            $('#pagination-container').show();
                        } else {
                            var row = `
                            <tr>
                                <th scope="row" colspan="6" class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap">
                                    No data found
                                </th>
                            </tr>
                            `;
                            $('#table-body-lecture').append(row);
                            $('#pagination-container').hide();
                        }
                        $('#skeleton-loader-table-lecture').hide();
                        $('#table-body-lecture').show();
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
                        $('#table-body-lecture').append(row);
                        $('#pagination-container').hide();
                        $('#skeleton-loader-table-lecture').hide();
                        $('#table-body-lecture').show();
                    }
                });
            }
            
            function renderTable(page) {
                $('#table-body-lecture').empty();
                var start = (page - 1) * entriesPerPage;
                var end = start + entriesPerPage;
                var paginatedData = allData.slice(start, end);
                
                $.each(paginatedData, function(index, item) {
                var row = `
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        ${item.id}
                    </th>
                    <td class="px-6 py-4">
                        ${item.judul}
                    </td>
                    <td class="px-6 py-4">
                        ${item.tipe}
                    </td>
                    <td class="px-6 py-4">
                        ${item.konten}
                    </td>
                    <td class="px-6 py-4">
                        ${item.deskripsi}
                    </td>
                    <td class="px-6 py-4 text-right flex">
                        <button
                            class="edit-button block me-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="button" data-id="${item.id}">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button
                            class="delete-button block me-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="button" data-id="${item.id}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
                `;
                $('#table-body-lecture').append(row);
                });
            }
            
            function updatePaginationInfo(page, totalEntries) {
                var startEntry = (page - 1) * entriesPerPage + 1;
                var endEntry = Math.min(startEntry + entriesPerPage - 1, totalEntries);
                
                $('#start-entry').text(startEntry);
                $('#end-entry').text(endEntry);
                $('#total-entries').text(totalEntries);
                
                // Enable/disable buttons
                if (page === 1) {
                    $('#prev-button').prop('disabled', true);
                } else {
                    $('#prev-button').prop('disabled', false);
                }
                
                if (endEntry >= totalEntries) {
                    $('#next-button').prop('disabled', true);
                } else {
                    $('#next-button').prop('disabled', false);
                }
            }
            
            // Event listeners for pagination buttons
            $('#prev-button').on('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    renderTable(currentPage);
                    updatePaginationInfo(currentPage, allData.length);
                }
            });
            
            $('#next-button').on('click', function() {
                if ((currentPage * entriesPerPage) < allData.length) {
                    currentPage++;
                    renderTable(currentPage);
                    updatePaginationInfo(currentPage, allData.length); 
                } 
            });
        });
</script>
@endsection