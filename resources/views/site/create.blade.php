@extends('layouts.contact')

@section('title', 'Contact registration')

@section('content')
    <div class="flex-1 p-8 ml-64 overflow-hidden">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold py-12">Contact registration</h1>

            @include('includes.messageError')

            <form action="{{route('contacts.store')}}" method="POST"  class="bg-white p-4 rounded-md shadow-md mb-4">

                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Contact name:</label>
                    <input type="text" name="name" class="w-full border p-2 rounded-md" value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="contact" class="block text-gray-700 font-semibold">Contact:</label>
                    <input type="text" name="contact" class="w-full border p-2 rounded-md" value="{{ old('contact') }}">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                    <input type="text" name="email" class="w-full border p-2 rounded-md" value="{{ old('email') }}">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-md">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection


