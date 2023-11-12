@extends('layouts.contact')

@section('title', 'Lista de produtos')

@section('content')
    <div class="flex-1 p-20 ml-52 overflow-hidden">
        <div class="max-w-2xl mx-auto">

            @if (session()->has('message'))
                <div class="bg-green-100 border mb-4 border-green-400 text-green-700 px-4 py-4 rounded relative alert">
                    <strong class="font-bold">Sucess!</strong>
                    <span class="block sm:inline">{{ session('message') }}.</span>
                    <span class="absolute top-2 right-2 cursor-pointer" onclick="closeAlert()">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 5.652a.5.5 0 0 1 0 .707l-8.001 8a.5.5 0 1 1-.707-.707l8-8a.5.5 0 0 1 .707 0zM5.653 5.652a.5.5 0 0 1 .707 0l8 8a.5.5 0 1 1-.707.707l-8-8a.5.5 0 0 1 0-.707z"/>
                        </svg>
                    </span>
                </div>
            @endif

            @foreach ($contacts as $contact)
                <div class="bg-white p-6 rounded-md shadow-md mb-6 relative">
                    <div class="flex items-center">
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold mb-2">{{ $contact->name }}</h2>
                        </div>
                        <div class="ml-4">
                            <a href="{{ route('contacts.show', $contact->id) }}" class="bg-gray-800 text-white px-4 py-2 rounded-md">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
