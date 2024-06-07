<nav class="bg-white border-gray-200 ">
    <div class="flex flex-wrap justify-end items-center mx-auto max-w-screen-xl p-4">
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            {{-- <a href="tel:5541251234" class="text-sm  text-gray-500  hover:underline">(555) 412-1234</a>
            <a href="#" class="text-sm  text-blue-600 -500 hover:underline">Login</a> --}}
            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="https://img.freepik.com/premium-vector/female-user-profile-avatar-is-woman-character-screen-saver-with-emotions_505620-617.jpg" alt="User dropdown">

            @auth
                {{Auth::user()->name}}
            @endauth

            <!-- Dropdown menu -->
            <div id="userDropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div>{{Auth::user()->name}}</div>
                    <div class="font-medium truncate">{{Auth::user()->email}}</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="/logout"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</a>
                </div>
            </div>
        </div>
    </div>
</nav>
