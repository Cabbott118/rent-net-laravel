@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 md:w-6/12 lg:w-4/12 bg-white p-6 rounded-lg">
        <h1 class="text-3xl text-center text-gray-600 mb-3">Sign Up</h1>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="first_name" class="sr-only">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder="First Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('first_name') border-red-500 @enderror">
                    @error('first_name')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="last_name" class="sr-only">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="Last Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('last_name') border-red-500 @enderror">
                    @error('last_name')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror">
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
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
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="" placeholder="Confirm Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror">
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-3 rounded-lg font-medium w-full">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
@endsection