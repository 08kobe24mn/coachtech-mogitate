@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/product/index.css') }}">
@endsection

@section('content')
    <header class="header">
        <h1 class="header__title">商品一覧</h1>
        <a class="button header__button" href="">+ 商品を追加</a>
    </header>
    <main class="main">
        <nav class="nav">
            <form action="" method="get" class="search-form">
                <input type="text" name="product_name" value="" class="form-input search-form__input--text" placeholder="商品名で検索">
                <button type="submit" class="button search-form__input--button">検索</button>
            </form>
            <form action="{{ route('products') }}" method="get" class="order-form">
                <p class="order-form__text">価格順で表示</p>
                <select name="sort" id="" class="form-input order-form__select" onchange="submit(this.form)">
                    <option value="desc" {{ $sort === 'desc' ? 'selected' : '' }}>高い順に表示</option>
                    <option value="asc" {{ $sort === 'asc' ? 'selected' : '' }}>低い順に表示</option>
                </select>
            </form>
        </nav>
        <div class="product">
            <div class="product__inner">
                @foreach ($products as $product)
                    <div class="product__card">
                        <div class="product__card--img">
                            <img src="{{ asset('storage/fruits-img/' . $product->image) }}" alt="{{ $product->name }}の画像">
                        </div>
                        <div class="product__card--text">
                            <p class="product__card--name">{{ $product->name }}</p>
                            <p class="product__card--price">¥{{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links('vendor.pagination.custom') }}
        </div>
    </main>
@endsection
