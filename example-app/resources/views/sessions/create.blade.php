<x-layout title="My personal blog">

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-300 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Login</h1>
            <div class="mb-6">
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                <form method="POST" action="/sessions" class="mt-2">
                    @csrf
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                    <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                        required="required" value="{{ old('email') }}" />

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"
                        required="required" />

                    <div class="mb-6 mt-2">
                        <button type='submit'
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                    </div>

                </form>
            </div>
        </main>
    </section>

</x-layout>
