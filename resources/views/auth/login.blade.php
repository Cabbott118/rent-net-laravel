@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 md:w-6/12 lg:w-4/12 bg-white p-6 rounded-lg">
            <h1 class="text-3xl text-center text-gray-600 mb-3">Sign In</h1>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email Address" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" value="" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                @if (session('status'))
                    <div class="bg-red-400 p-4 rounded-lg mb-6 text-white text-center">{{ session('status') }}</div>
                @endif
                <div>
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-3 rounded-lg font-medium w-full">Sign In</button>
                </div>
            </form>
        </div>
    </div>
@endsection