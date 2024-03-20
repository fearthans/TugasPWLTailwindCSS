@extends('layout.main')
@section('content')
<!-- Guest Book Section -->
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <h1>Guest Book</h1>
    </div>
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-sm font-semibold text-gray-700">Name:</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Email:</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block mb-2 text-sm font-semibold text-gray-700">Message:</label>
                        <textarea id="message" name="message" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection