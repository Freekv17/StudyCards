<x-layouts.default>
    <section class="min-h-screen flex items-center justify-center p-6">
        <div
            class="w-full max-w-5xl bg-white shadow-xl rounded-3xl p-10 grid md:grid-cols-2 gap-12 relative overflow-hidden">
            <div class="absolute inset-0 -z-10 opacity-20 blur-3xl"></div>

            <div class="space-y-8">
                <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                    Contact Us
                </h2>
                <p class="text-gray-600 text-lg">
                    We'd love to hear from you. Fill out the form and our team will get back to you quickly.
                </p>

                <div class="space-y-5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                            📧
                        </div>
                        <span class="text-gray-700 text-lg">support@example.com</span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                            📞
                        </div>
                        <span class="text-gray-700 text-lg">+31 0638016014</span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-xl">
                            📍
                        </div>
                        <span class="text-gray-700 text-lg">12 NepStraat, Breda, Netherlands</span>
                    </div>
                </div>
            </div>

            <form method="POST" action="" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="mt-2 w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-blue-600">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="mt-2 w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-blue-600">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" rows="5"
                        class="mt-2 w-full rounded-xl border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-blue-600">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-3 bg-blue-600 text-white rounded-xl text-lg font-semibold hover:bg-blue-700 active:scale-[.98] transition-all">
                    Send Message
                </button>
            </form>
        </div>
    </section>

</x-layouts.default>
