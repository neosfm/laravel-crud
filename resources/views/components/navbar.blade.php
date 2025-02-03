<header class="bg-white w-full shadow">
    <div class="max-w-screen-xl mx-auto flex justify-between items-center p-4">
        <h1 class="text-lg font-semibold"><a href="/">Home</a></h1>
        <h1 class="text-lg font-semibold">{{ $slot }}</h1>
        <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
            <a href="/add">Add User</a>
        </button>
    </div>
</header>
