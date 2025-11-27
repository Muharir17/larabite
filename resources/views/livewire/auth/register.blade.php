<div>
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-6 sm:p-8">
        <div class="mb-6 text-center">
            <div class="inline-flex items-center justify-center w-10 h-10 mb-3 rounded-lg bg-red-50 dark:bg-gray-700">
                <span class="text-lg font-bold text-red-600 dark:text-red-500">LB</span>
            </div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Register</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Buat akun baru untuk mengakses dashboard pajak kendaraan.</p>
        </div>

        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input id="name" type="text" name="name" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input id="email" type="email" name="email" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input id="password" type="password" name="password" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
            </div>
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
            </div>
            <button type="submit"
                class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800">
                Daftar
            </button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-600 dark:text-gray-300">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-medium text-red-600 hover:underline dark:text-red-400">Login</a>
        </p>
    </div>
</div>
