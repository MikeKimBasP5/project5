@extends('layouts.main')
@section('title')
    {{ __('Exercises') }}
@endsection

@section('content')
    <div class="grid md:grid-cols-3 grid-cols-1 justify-items-center w-full">
        <div></div>
        <div>
        <form method="get" class=" w-full grid grid-rows-1 place-content-center" action="{{ route('exercises.edit', ['id' => $exercise->id]) }}">

            <label for="id">id:</label>
            <p class="bg-gray-200" name="id" type="text" >{{$exercise->id}}</p>
            <label for="titleEN">TitleEN:</label>
            <p class="bg-gray-200" name="titleEN" type="text" >{{$exercise->titleEN}}</p>
            <label for="titleNL">TitleNL:</label>
            <p class="bg-gray-200" name="titleNL" type="text">{{$exercise->titleNL}}</p>
            <label for="instructionEN">InstructionEN:</label>
            <p class="bg-gray-200" name="instructionEN" type="text">{{$exercise->instructionEN}}</p>
            <label for="instructionNL">InstructionNL:</label>
            <p class="bg-gray-200" name="instructionNL" type="text">{{$exercise->instructionNL}}</p>
            <img src="{{$exercise->media}}"/>

            <br>
            <x-button class="cursor-pointer bg-green-400 place-content-center ">edit</x-button>

        </form>

<table>
    <tr>
        <th>Title EN</th>
        <th>Title NL</th>
    </tr>
        @foreach($exercises as $sexercise)
            <tr >
                <td>{{ $sexercise->titleEN }}</td>
                <td>{{ $sexercise->titleNL }}</td>
            </tr>

        @endforeach
</table>
    </div>
    </div>
@endsection
