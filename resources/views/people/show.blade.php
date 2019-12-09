@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

            <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                People: {{ $person->name }}
            </div>

            <div class="w-full p-6">
                Relationships:<br><br>
                @foreach ($relationships as $relationship)
                &bull; {{ $relationship->name }} @todo figure out how to show HOW they are related<br>
                @endforeach
                <br><br>

                Siblings:<br><br>
                @foreach ($siblings as $sibling)
                &bull; {{ $sibling->name }} @todo figure out how to show HOW they are related<br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection