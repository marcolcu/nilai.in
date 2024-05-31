<!-- resources/views/components/sidebar.blade.php -->
<div class="h-screen flex flex-col bg-gray-800 text-white w-64">
    <div class="flex items-center justify-center h-20 bg-gray-900">
        <h1 class="text-3xl font-semibold">MyApp</h1>
    </div>
    <nav class="flex-1 p-4">
        <a href="{{ url('/dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
            Dashboard
        </a>
        <a href="{{ url('/profile') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
            Profile
        </a>
        <a href="{{ url('/settings') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
            Settings
        </a>
        <a href="{{ url('/logout') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
            Logout
        </a>
    </nav>
</div>