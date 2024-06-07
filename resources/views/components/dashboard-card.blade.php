<div id="skeleton-loader-dashboard-card" class="mb-5 flex justify-between items-center">
    <div class="block max-w-sm w-full p-6 bg-white border border-gray-200 rounded-lg shadow animate-pulse">
        <div class="h-6 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-300 rounded mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6"></div>
    </div>
    <div class="block max-w-sm w-full p-6 bg-white border border-gray-200 rounded-lg shadow animate-pulse">
        <div class="h-6 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-300 rounded mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6"></div>
    </div>
    <div class="block max-w-sm w-full p-6 bg-white border border-gray-200 rounded-lg shadow animate-pulse">
        <div class="h-6 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-300 rounded mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6"></div>
    </div>
    <div class="block max-w-sm w-full p-6 bg-white border border-gray-200 rounded-lg shadow animate-pulse">
        <div class="h-6 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-300 rounded mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6"></div>
    </div>
</div>


<div id="main-content-dashboard-card" class="hidden">
    <div class="mb-5 flex justify-between items-center">
        <a href="#"
            class="block max-w-sm w-full p-6 bg-orange-200 border border-gray-200 rounded-lg shadow hover:bg-orange-400 transition duration-300 ease-in-out">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">120
            </h5>
            <p class="font-normal text-gray-700">Student</p>
        </a>
        <a href="#"
            class="block max-w-sm w-full p-6 bg-yellow-200 border border-gray-200 rounded-lg shadow hover:bg-yellow-400 transition duration-300 ease-in-out">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">30
            </h5>
            <p class="font-normal text-gray-700">Teacher</p>
        </a>
        <a href="#"
            class="block max-w-sm w-full p-6 bg-blue-200 border border-gray-200 rounded-lg shadow hover:bg-blue-400 transition duration-300 ease-in-out">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">20
            </h5>
            <p class="font-normal text-gray-700">Subjects</p>
        </a>
        <a href="#"
            class="block max-w-sm w-full p-6 bg-green-200 border border-gray-200 rounded-lg shadow hover:bg-green-400 transition duration-300 ease-in-out">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">20
            </h5>
            <p class="font-normal text-gray-700">Assignments</p>
        </a>
    </div>
</div>

<script>
    $(document).ready(function() {
        setTimeout(() => {
            $('#skeleton-loader-dashboard-card').hide();
            $('#main-content-dashboard-card').show();
        }, 100);
    });
</script>
