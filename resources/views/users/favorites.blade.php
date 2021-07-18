{{-- お気に入り --}}
@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- 投稿一覧 --}}
             @include('microposts.microposts')
            
           {{--  @include('user_favorite.favorite_button') --}}
        </div>
        
    </div>
       
@endsection
