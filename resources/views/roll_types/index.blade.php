@extends('layouts.app')

@section('content')
<h1>Прокаты</h1>
<p>
    <a class="btn btn-danger" href="/">Назад</a>
    <a class="btn btn-primary" href="/roll_types/create">Создать</a>
</p>

<ul>
    @foreach($types as $type)
        <li>{{ $type->name }}</li>
    @endforeach
</ul>
@endsection