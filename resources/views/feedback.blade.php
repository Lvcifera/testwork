@extends('layouts.layout')

@section('title')
    <title>Обратная связь</title>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Отправить обращение</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('feedback.add') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Иван">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Электронная почта</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="email" aria-describedby="email" name="email" placeholder="example@mail.ru">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Номер телефона</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="phone" aria-describedby="phone" name="phone" placeholder="+7-977-412-38-80">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Текст обращения</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="exampleTextarea" rows="3" name="text" placeholder="Верните мои деньги!"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Отправить обращение</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
