@extends('layouts.store')

@section('content')
    <ul class="m-4 flex flex-1 gap-4 justify-center">
        @foreach ($categories as $category)
            <li class="categories p-1 rounded-full p-5">
                <button class="">
                    <a href="{{route('byCategory',$category->id)}}" class="italic">#{{$category->name}}</a>
                </button>
            </li>
        @endforeach
    </ul>
    <x-product-card :products="$products"/>

    {{-- Lien de pagination --}}
    {{ $products->onEachSide(5)->links() }}
@endsection