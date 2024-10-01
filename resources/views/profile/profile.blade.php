@extends('app')

@section('content')
    <div class="mb-10 flex justify-start items-center">
        <h1 class="font-bold text-2xl">Profile</h1>
    </div>

    <!-- Loading animation -->
    <div id="loading-spinner" role="status"
         class="fixed inset-0 flex justify-center items-center bg-white bg-opacity-90 z-50">
        <svg aria-hidden="true"
             class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
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

    <div id="succes-alert"
         class="hidden p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50"
         role="alert">
        <span class="font-medium">Success alert!</span> Profile updated successfully.
    </div>

    <div id="danger-alert" class="hidden p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
        <span class="font-medium">Danger alert!</span> Failed to update profile.
    </div>

    <div id="password-alert" class="hidden p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
        <span class="font-medium">Danger alert!</span> Passwords do not match.
    </div>

    <!-- Profile form -->
    <div id="profile-container" style="display: none;"> <!-- Initially hidden -->
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
                <input type="text" id="first_name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                       placeholder="John" required/>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
                <input type="text" id="last_name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                       placeholder="Doe" required/>
            </div>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
            <input type="email" id="email"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="john.doe@company.com" required/>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input type="password" id="password"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="•••••••••"/>
        </div>
        <div class="mb-6">
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
            <input type="password" id="confirm_password"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="•••••••••"/>
        </div>
        <button id="submit-btn"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Submit
        </button>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            let id = @json(auth()->user()->id);
            let peran = @json(auth()->user()->peran);

            $('#loading-spinner').show();
            $('#profile-container').hide();

            apiUser(id);

            function apiUser(id) {
                $.ajax({
                    url: "/api/users/read/" + id,
                    type: "GET",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
                        let data = response['user: '];

                        $('#first_name').val(data.nama.split(' ')[0]);
                        $('#last_name').val(data.nama.split(' ')[1] || '');
                        $('#email').val(data.email);

                        $('#loading-spinner').hide();
                        $('#profile-container').show();
                    },
                    error: function (errors) {
                        console.error(errors);
                        alert('Failed to load profile');
                    }
                });
            }

            $('#submit-btn').click(function () {
                let firstName = $('#first_name').val();
                let lastName = $('#last_name').val();
                let email = $('#email').val();
                let password = $('#password').val();
                let confirmPassword = $('#confirm_password').val();

                if (password && password !== confirmPassword) {
                    $('#password-alert').show();
                    setTimeout(function() {
                        $('#password-alert').hide();
                    }, 3000);
                    return;
                }

                $.ajax({
                    url: "/api/users/update/" + id,
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    data: JSON.stringify({
                        nama: firstName + ' ' + lastName,
                        email: email,
                        peran: peran,
                        password: password ? password : null,
                    }),
                    success: function (response) {
                        $('#succes-alert').show();
                        apiUser(id);
                        $('#password').val("");
                        $('#confirm_password').val("");
                        setTimeout(function () {
                            $('#succes-alert').hide();
                        }, 3000);
                    },
                    error: function (errors) {
                        console.error(errors);
                        $('#danger-alert').show();
                        setTimeout(function () {
                            $('#danger-alert').hide();
                        }, 3000);
                    }
                });
            });
        });
    </script>
@endsection
