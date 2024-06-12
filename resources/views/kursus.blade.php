@extends('app')

@section('content')
<div class="mb-10 flex justify-between items-center">
    <h1 class="font-bold text-2xl">User List</h1>
    <button data-modal-target="kursus-modal" data-modal-toggle="kursus-modal"
        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button">
        Add Courses
    </button>
    <button data-modal-target="kursus-edit-modal" data-modal-toggle="kursus-edit-modal"
        class="hidden button-edit-open text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button">
        Edit Courses
    </button>

    <button data-modal-target="kursus-delete-modal" data-modal-toggle="kursus-delete-modal"
        class="hidden button-delete-open text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button">
        Delete Courses
    </button>
</div>

<div class="alert-space">

</div>


<div id="table-user-main" class="relative overflow-x-none    shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi
                </th>
                <th scope="col" class="px-6 py-3">
                    Jadwal Mulai
                </th>
                <th scope="col" class="px-6 py-3">
                    Jadwal Selesai
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody id="table-body-user">
            <!-- table rows will be generated here -->
        </tbody>

        <tbody id="skeleton-loader-table-user">
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

<div id="kursus-modal" tabindex="-1" aria-hidden="true"
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
                    data-modal-toggle="kursus-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5" id="addCourse">
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
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jadwalmulai" class="block mb-2 text-sm font-medium text-gray-900">Start
                            Schedule</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" name="jadwalmulai" id="jadwalmulai"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Select date" required>
                        </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jadwalselesai" class="block mb-2 text-sm font-medium text-gray-900">End
                            Schedule</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" name="jadwalselesai" id="jadwalselesai"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Select date" required>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Course
                            Description</label>
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
                    Add new course
                </button>
            </div>
        </div>
    </div>
</div>

<div id="kursus-edit-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Edit Course
                </h3>
                <button type="button"
                    class="btn-close-edit text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-toggle="kursus-edit-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5" id="editCourse">
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
                        <label for="edit-nama" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" name="nama" id="edit-nama"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="edit-jadwalmulai" class="block mb-2 text-sm font-medium text-gray-900">Start
                            Schedule</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" name="jadwalmulai" id="edit-jadwalmulai"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Select date" required>
                        </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="edit-jadwalselesai" class="block mb-2 text-sm font-medium text-gray-900">End
                            Schedule</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" name="jadwalselesai" id="edit-jadwalselesai"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Select date" required>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="edit-deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Course
                            Description</label>
                        <textarea id="edit-deskripsi" name="deskripsi" rows="4"
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
                    Add new course
                </button>
            </div>
        </div>
    </div>
</div>

<div id="kursus-delete-modal" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                data-modal-hide="kursus-delete-modal">
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
                <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete
                    this course?</h3>
                <button data-modal-hide="kursus-delete-modal" type="button"
                    class="delete-course text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="kursus-delete-modal" type="button"
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
            $('#skeleton-loader-table-user').show();
            $('#table-body-user').hide();
    
            table_courses();
    
            $(document).on('kursusAdded', function() {
                $('#table-body-user').empty();
                table_courses();
            });
            
            $(document).on('click', '.save', function(e) {
                e.stopPropagation();
                let datas = {};
                let isValid = true;

                $('#addCourse').find('.form-control').each(function() {
                    const inputType = $(this).attr('type');
                    const inputValue = $(this).val();
                    const inputName = $(this).attr('name');

                    if (!inputValue) {
                        isValid = false;
                    }

                    if (inputName === 'jadwalmulai' || inputName === 'jadwalselesai') {
                        const dateValue = moment(inputValue, 'MM/DD/YYYY').format('YYYY-MM-DD');
                        datas[inputName] = dateValue;
                    } else {
                        datas[inputName] = inputValue;
                    }
                });

                if (isValid) {
                    $('.alert-kursus').addClass('hidden');
                    $.ajax({
                        url: "/api/kursuses/create",
                        type: "POST",
                        data: JSON.stringify(datas),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(response) {
                            $('.btn-close').click();
                            $('#addCourse').find('.form-control').val('');
                            table_courses();
                        },
                        error: function(errors) {
                            console.error(errors);
                        }
                    });
                } else {
                    $('.alert-kursus').removeClass('hidden');
                }
            });

            $(document).on('click', '.update', function(e) {
                e.stopPropagation();
                let id = $(this).data('id');
                let datas = {};
                let isValid = true;

                $('#editCourse').find('.form-control').each(function() {
                    const inputType = $(this).attr('type');
                    const inputValue = $(this).val();
                    const inputName = $(this).attr('name');

                    if (!inputValue) {
                        isValid = false;
                    }

                    if (inputName === 'jadwalmulai' || inputName === 'jadwalselesai') {
                        const dateValue = moment(inputValue, 'MM/DD/YYYY').format('YYYY-MM-DD');
                        datas[inputName] = dateValue;
                    } else {
                        datas[inputName] = inputValue;
                    }
                });

                if (isValid) {
                    $('.alert-kursus').addClass('hidden');
                    $.ajax({
                        url: "/api/kursuses/update/" + id,
                        type: "POST",
                        data: JSON.stringify(datas),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(response) {
                            $('.btn-close-edit').click();
                            $('#editCourse').find('.form-control').val('');
                            table_courses();
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
                $('#addCourse').find('.form-control').each(function() {
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
                $('#editCourse').find('.form-control').val('');
            });

            $(document).on('click', '.delete-course', function() {
                let id = $(this).data('id');
                openDeleteModal(id);
            });

            function openDeleteModal(id) {
                $.ajax({
                    url: "api/kursuses/delete/" + id,
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
                        table_courses();
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
                $('.button-edit-open').click();
                $.ajax({
                    url: "api/kursuses/read/" + id,
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        $('#editCourse').find('.form-control').each(function() {
                        const inputName = $(this).attr('name');
                        const inputValue = response["Kursus: "][inputName];
                        
                        if (inputName === 'jadwalmulai' || inputName === 'jadwalselesai') {
                        const dateValue = moment(inputValue).format('MM/DD/YYYY');
                            $("#" + $(this).attr('id')).val(dateValue);
                        } else {
                            $("#" + $(this).attr('id')).val(inputValue);
                        }
                        });
                    },
                    error: function(errors) {
                        console.error(errors);
                    }
                });
            }

            function table_courses() {
                $('#table-body-user').empty();
                $.ajax({
                    url: "api/kursuses",
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(response) {
                        var kursuses = response["kursuses: "];
                        if (kursuses && kursuses.length > 0) {
                            $.each(kursuses, function(index, item) {
                                var row = `
                                    <tr>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            ${item.id}
                                        </th>
                                        <td class="px-6 py-4">
                                            ${item.nama}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${item.deskripsi}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${moment(item.jadwalmulai).format('DD-MM-YYYY')}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${moment(item.jadwalselesai).format('DD-MM-YYYY')}
                                        </td>
                                        <td class="px-6 py-4 text-right flex">
                                            <button class="edit-button block me-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                                type="button" data-id="${item.id}">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                            <button class="delete-button block me-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                                type="button" data-id="${item.id}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                            
                                        </td>
                                    </tr>
                                `;
                                if ($('#table-body-user').length > 0) {
                                    $('#table-body-user').append(row);
                                } else {
                                    console.error('Table body element not found');
                                }
                            });
                        } else {
                            console.error('No data found');
                        }
                        $('#skeleton-loader-table-user').hide();
                        $('#table-body-user').show();
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
                        if ($('#table-body-user').length > 0) {
                            $('#table-body-user').append(row);
                        } else {
                            console.error('Table body element not found');
                        }
                        $('#skeleton-loader-table-user').hide();
                        $('#table-body-user').show();
                    }
                });
            }
        });
</script>
@endsection