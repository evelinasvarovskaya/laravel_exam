@extends('layouts.layout')
@section('content')

    <form method="post" action="/thingupdate/{{$things->id}}"> 
        @csrf

        <h1>Изменить вещь</h1>
        <div>
            <label for="name">Название</label><br>
            <input type="text" name="name" id="name" placeholder="Введите название" value="{{$things->name}}"><br><br><br>
            <label for="description">Описание</label><br>
            <input type="text" name="description" id="description" value="{{$things->description}}"><br><br><br>
            <label for="wrnt">Срок годности до</label><br>
            <input type="text" name="wrnt" id="wrnt" value="{{$things->wrnt}}"><br><br><br>
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection