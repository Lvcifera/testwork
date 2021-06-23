@extends('layouts.layout')

@section('title')
    <title>Мои обращения</title>
@endsection

@section('content')
    <div class="container">
            <h1 class="display-6" align="center">Мои обращения</h1>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Номер</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Электронный адрес</th>
                    <th scope="col">Номер телефона</th>
                    <th scope="col">Текст обращения</th>
                    <th scope="col">Отправлено</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feedback as $key => $item)
                    <tr class="table">
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->text }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
