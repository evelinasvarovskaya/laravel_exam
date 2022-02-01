@extends('layouts.layout')
@section('content')
    <br>
    <a href="/creatething">Создать вещь</a>
    @foreach($things as $thing)
    <br><br><br>
    <ul>
        <!-- @if($thing->master == auth()->user()->id)
        <label>Это ваша вещь</label>
        <style>
            label{ background-color: #5CCCCC; padding-bottom: 75px; padding-left: 110px; padding-right: 110;}
        </style>
        @else
        @endif -->
        <li>Название вещи: {{$thing->name}}</li>
        <li>Описание: {{$thing->description}}</li>
        <li>Срок годности до: {{$thing->wrnt}}</li>
        <li>Идентификатор создателя: {{$thing->master}}</li>
    </ul>
    <a href="/deletething/{{$thing->id}}">Удалить вещь</a>
    <a href="/updatething/{{$thing->id}}">Изменить вещь</a>
    <br><br><br><br><br>
    @endforeach



@endsection