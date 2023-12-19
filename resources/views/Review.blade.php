@include('layouts.header')

@extends('layouts.shablon')
@section('shablon')


<h1>Форма добавления отзыва</h1>
  @if($errors->any())
      <div class="alert alert-danger">
       <ul>
           @foreach($errors->all() as $error)
               <li>{{$error}}</li>
           @endforeach
       </ul>
      </div>
  @endif
@csrf
    <form method="post" action="/review/check">
        @csrf

  <input type="email" name="email" id="email" placeholder="Введите почту" class="form-control" ><br>
        <input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control" ><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
