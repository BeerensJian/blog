<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <h1 class="text-center text-bold text-2xl">Hello world</h1>
        <section class="max-w-xl mx-auto bg-gray-100 p-8">
            <form action="/register" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Full Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="name" type="text" placeholder="Name" name="name"
                    >

                    @if($errors->has('name'))
                        <span class="text-xs text-red-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="username" type="text" placeholder="Username" name="username"
                    >
                    @if($errors->has('name'))
                        <span class="text-xs text-red-500">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="email" type="email" placeholder="Email" name="email"
                    >
                    @if($errors->has('email'))
                        <span class="text-xs text-red-500">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="password" type="password" placeholder="*******" name="password"
                    >
                    @if($errors->has('name'))
                        <span class="text-xs text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit">Register</button>
            </form>

        </section>
    </main>
</x-layout>
