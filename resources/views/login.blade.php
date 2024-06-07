@extends('app')

@section('content')
    <div class="flex-1">
        <div class="flex justify-center items-center">
            <div class="w-full max-w-lg bg-white shadow-md rounded p-6 mb-4">
                <div class="btn-switch mx-6 m-6 flex justify-between space-x-6">
                    <div class="left flex justify-center w-1/2 border-solid border-b border-gray-700" id="loginForm">
                        <button type="button" id="loginButton" class="text-gray font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" onclick="switchActiveButton('login', 'register')">Login</button>
                    </div>
                    <div class="right flex justify-center w-1/2" id="registerForm">
                        <button type="button" id="registerButton" class="text-white w-full bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" onclick="switchActiveButton('register', 'login')">Register</button>
                    </div>
                </div>

                <form action="/login" method="POST" id="loginData">
                    {{ csrf_field() }}
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="Put your email here." name="email">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" type="password" placeholder="Put your password here." name="password">
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Sign In
                        </button>
                        <button class="inline-block align-baseline font-bold text-sm text-grey-500 hover:text-grey-800" type="button" onclick="switchActiveButton('register', 'login')">
                            Don't have account? Sign up.
                        </button>
                    </div>

                    {{-- @if ($errors->any())
                        <div>{{$errors->first()}}</div>
                    @endif --}}
                </form>
                
                <form action="/register" method="POST" id="registerData" class="hidden">
                    {{ csrf_field() }}
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="Put your email here." name="email">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" placeholder="Put your name here." name="name">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" type="password" placeholder="Put your password here." name="password">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
                                Password Confirmation
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password_confirmation" type="password" placeholder="Put your password here again." name="password_confirmation">
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Create Account
                        </button>
                        <button class="inline-block align-baseline font-bold text-sm text-grey-500 hover:text-grey-800" type="button" onclick="switchActiveButton('login', 'register')">
                            Already have an account? Sign in.
                        </button>
                    </div>
                </form>
            </div>
            

            
        </div>
    </div>

    <script>
        function switchActiveButton(activeId, inactiveId) {
            //toggle style button
            document.getElementById(activeId + "Button").classList.add('text-gray');
            document.getElementById(activeId + "Button").classList.remove('text-white');
            document.getElementById(activeId + "Button").classList.remove('bg-gray-700');
            document.getElementById(activeId + "Button").classList.remove('hover:bg-gray-800');

            document.getElementById(inactiveId + "Button").classList.remove('text-gray');
            document.getElementById(inactiveId + "Button").classList.add('text-white');
            document.getElementById(inactiveId + "Button").classList.add('w-full');
            document.getElementById(inactiveId + "Button").classList.add('bg-gray-700');
            document.getElementById(inactiveId + "Button").classList.add('hover:bg-gray-800');
            document.getElementById(inactiveId + "Button").classList.add('hover:bg-gray-800');

            
            //toggle style div
            document.getElementById(activeId + "Form").classList.add('border-solid');
            document.getElementById(activeId + "Form").classList.add('border-b');
            document.getElementById(activeId + "Form").classList.add('border-gray-700');

            document.getElementById(inactiveId + "Form").classList.remove('border-solid');
            document.getElementById(inactiveId + "Form").classList.remove('border-b');
            document.getElementById(inactiveId + "Form").classList.remove('border-gray-700');

            document.getElementById(inactiveId + "Data").classList.add('hidden');
            document.getElementById(activeId + "Data").classList.remove('hidden');
        }
    </script>

@endsection