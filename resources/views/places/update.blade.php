@extends('layouts.layout')
@section('content')

    <form method="post" action="/placeupdate/{{$places->id}}"> 
        @csrf

        <h1>Изменение вещи</h1>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите название" value="{{$places->name}}"><br><br><br>
            <label for="description">Описание</label><br>
            <input type="text" name="description" id="description" value="{{$places->description}}"><br><br><br>
            <label for="repair">На починке</label><br>
            <input type="boolean" name="repair" id="repair" value="{{$places->repair}}"><br><br><br>
            <label for="work">В работе</label><br>
            <input type="boolean" name="work" id="work" value="{{$places->work}}"><br><br><br>
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection