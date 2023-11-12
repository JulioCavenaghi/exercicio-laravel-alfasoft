@extends('layouts.contact')

@section('title', 'Detalhes do Contato')

@section('content')
    <div class="flex-1 p-20 ml-52 overflow-hidden">
        <div class="max-w-2xl mx-auto">

            <div class="bg-white p-6 rounded-md shadow-md mb-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $contact->name }}</h2>
                <p><strong>Contact:</strong> {{ $contact->contact }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>


                <div class="mt-4 flex space-x-4">
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-gray-800 text-white px-4 py-2 rounded-md">Edit</a>
                    <form id="delete-form-{{ $contact->id }}" action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-md cursor-pointer" onclick="destroy({{ $contact->id }})">
                            Delete
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
