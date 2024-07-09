@extends('layouts.store')

@section('content')
    <ul class="m-4 flex flex-1 gap-4">
        @foreach ($categories as $category)
            <li class="bg-orange-300 p-1 rounded-full p-5">
                <a href="{{route('byCategory',$category->id)}}">{{$category->name}}</a>
            </li>
        @endforeach
    </ul>
    <x-product-card :products="$products"/>

    {{-- Lien de pagination --}}
    {{ $products->onEachSide(5)->links() }}
@endsection