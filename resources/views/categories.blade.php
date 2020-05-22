@extends('layouts.master')

@section('title', 'Все категори товаров')

@section('content')


        @foreach($categories as $category)
            <div class="panel">
                <a href="{{route('category', $category->code)}}">
                    <img style="width: 100px;" src="{{ Storage::url($category->image) }}">
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
        @endforeach

@endsection
