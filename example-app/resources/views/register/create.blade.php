<x-layout title="My personal blog">

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-300 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <div class="mb-6">

                <form method="POST" action="/register" class="mt-10">
                    @csrf
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name"
                        required="required" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">username</label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username"
                        required="required" value="{{ old('username') }}" />
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                    <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                        required="required" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"
                        required="required" />

                    <div class="mb-6 mt-2">
                        <button type='submit'
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                    </div>
                    @if ($errors->any())
                        <ul class="text-red-500 text-xs">
                            @forelse ($errors->all() as $error)
                                <p class="text-red-500 text-xs mt-1">{{ $error }}</p>
                            @endforeach
                        </ul>
                    @endif
                </form>
            </div>
        </main>
    </section>

</x-layout>
