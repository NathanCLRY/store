@extends('layouts.store')

@section('content')
    <ul class="ml-10 bg-red-200">
        @foreach ($categories as $category)
            <li>
                <a href="{{route('byCategory',$category)}}">{{$category->name}}</a>
            </li>
        @endforeach
    </ul>
    <x-product-card :products="$products"/>
@endsection