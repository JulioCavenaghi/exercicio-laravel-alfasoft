@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-4 mb-4 rounded relative alert pr-10">
        <strong class="font-bold">Erro!</strong>
        @foreach ($errors->all() as $error)
            <span class="block sm:inline">{{ $error }}</span>
        @endforeach
        <span class="absolute top-2 right-0 cursor-pointer mr-4" onclick="closeAlert()">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Fechar</title>
                <path d="M14.348 5.652a.5.5 0 0 1 0 .707l-8.001 8a.5.5 0 1 1-.707-.707l8-8a.5.5 0 0 1 .707 0zM5.653 5.652a.5.5 0 0 1 .707 0l8 8a.5.5 0 1 1-.707.707l-8-8a.5.5 0 0 1 0-.707z"/>
            </svg>
        </span>
    </div>
@endif
