@extends('layouts.app')

@section('content')
<h1>Марки стали</h1>

<p>
    <a class="btn btn-danger" href="/">Назад</a>
    <a class="btn btn-primary" href="/steel_types/create">Создать</a>
</p>

<ul>
    @foreach($types as $type)
        <li>{{ $type->name }}</li>
    @endforeach
</ul>
@endsection