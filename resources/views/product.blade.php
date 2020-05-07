@extends('layouts.master')

@section('title', 'Товар')

@section('content')

        <h1>{{$product}}</h1>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>71990 ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="kh6zuRdxNpfA2kOIuG5bpkTB4ABwbe2D7ox9qEDd">
        </form>

@endsection
