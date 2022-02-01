@extends('layouts.layout')
@section('content')
    <br>
    <a href="/createplace" >Создать место</a>
    @foreach($places as $place)
    <br><br><br>
    <ul>
        <li>Название места: {{$place->name}}</li>
        <li>Описание: {{$place->description}}</li>
        <li>На починке: {{$place->repair}}</li>
        <li>В работе: {{$place->work}}</li>
        <li>Идентификатор места: {{$place->id}}</li>
    </ul>
    <br>
    <a href="/deleteplace/{{$place->id}}">Удалить место</a>
    <a href="/updateplace/{{$place->id}}">Изменить место</a>
    <br><br><br><br><br>
    @endforeach



@endsection