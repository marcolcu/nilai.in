<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nilai.in</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 flex">
    <div class="flex-1">
        <div class="flex justify-center items-center h-screen">
            <section id="loginData">
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
                        <img class="w-11 h-6 mr-2" src="https://w7.pngwing.com/pngs/683/964/png-transparent-grading-in-education-test-computer-icons-student-score-miscellaneous-text-logo.png"
                            alt="logo">
                        Nilai.in
                    </a>
                    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                                Sign in to your account
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                                {{ csrf_field() }}
                                <div>
                                    <label for="email-login" class="block mb-2 text-sm font-medium text-gray-900">Your
                                        email</label>
                                    <input type="email" name="email" id="email-login"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="name@company.com" required="">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                    <input type="password" name="password" id="password-login" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        required="">
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                                    in</button>
                                    @if ($errors->any())
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" id="alert" role="alert">
                                        <span class="font-medium">Danger alert!</span>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if (session('success'))
                                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" id="success" role="alert">
                                        <span class="font-medium">Success alert!</span> {{ session('success') }}
                                    </div>
                                    @endif
                                <p class="text-sm font-light text-gray-500">
                                    Don’t have an account yet? <button id="login"
                                        class="font-medium text-primary-600 hover:underline">Sign
                                        up</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="hidden" id="registerData">
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
                        <img class="w-11 h-6 mr-2" src="https://w7.pngwing.com/pngs/683/964/png-transparent-grading-in-education-test-computer-icons-student-score-miscellaneous-text-logo.png"
                            alt="logo">
                        Nilai.in
                    </a>
                    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            @if ($errors->any())
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" id="alert" role="alert">
                                <span class="font-medium">Danger alert!</span>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (session('success'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" id="success" role="alert">
                                <span class="font-medium">Success alert!</span> {{ session('success') }}
                            </div>
                            @endif
                            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                                Sign in to your account
                            </h1>
                            <form class="space-y-4 md:space-y-6" id="registerForm" action="/register" method="POST">
                                {{ csrf_field() }}
                                <div>
                                    <label for="email-register" class="block mb-2 text-sm font-medium text-gray-900">Your
                                        email</label>
                                    <input type="email" name="email" id="email-register"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="name@company.com" required="">
                                </div>
                                <div>
                                    <label for="name-register" class="block mb-2 text-sm font-medium text-gray-900">Your
                                        name</label>
                                    <input type="text" name="name" id="name-register"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="John" required="">
                                </div>
                                <div>
                                    <label for="role-register" class="block mb-2 text-sm font-medium text-gray-900">Your
                                        role</label>
                                    <select name="role" id="role-register"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        >
                                        <option value="">Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="password-register"
                                        class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        required="">
                                </div>
                                <div>
                                    <label for="password_confirmation"
                                        class="block mb-2 text-sm font-medium text-gray-900">Password
                                        Confirmation</label>
                                    <input type="password" name="password_confirmation"
                                        id="password_confirmation" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        required="">
                                </div>
                                <button type="submit" id="submit"
                                    class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create
                                    Account</button>
                                <p class="text-sm font-light text-gray-500">
                                    Already have an account? <button id="register"
                                        class="font-medium text-primary-600 hover:underline">Sign
                                        in</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#register").on('click', function() {
                $("#registerData").hide();
                $("#loginData").show();
            });

            $("#login").on('click', function() {
                $("#loginData").hide();
                $("#registerData").show();
            });

            $("#submit").on('click', function(event) {
                var password = $("#password").val();
                var confirmPassword = $("#password_confirmation").val();
                console.log(password, confirmPassword);
                if (password !== confirmPassword) {
                    event.preventDefault();
                    $('#alert').show();
                } else {
                    $('#alert').hide();
                    $('#success').show();
                    $("#registerForm").submit();
                } 
            });
        });
    </script>
    <script src="{{ asset('vendor/mkocansey/bladewind/js/helpers.js') }}"></script>
</body>

</html>