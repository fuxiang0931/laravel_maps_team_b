@extends('layouts.default')

@section('header')
@if(isset(Auth::user()->name)==false)
<header>
    <div class="header_box">
        <a href="{{ url('/top') }}">
            <img class="logo" src="{{ asset('logo/logo.png') }}"></img>
        </a>
        <div class="header_menu"><a class="header_link" href="{{ url('/login') }}">ログイン</a></div>
        <div class="header_menu header_spe"><a class="header_link" href="{{url('/register')}}">ユーザー登録</a></div>
        <div class="header_menu header_spe"><a class="header_link" data-toggle="modal" data-target="#login_topic_popup">ルート探索</a></div>
        <div class="header_menu header_spe"><a class="header_link" href="{{ url('/mapSpotsList') }}">聖地一覧</a></div>
        <div class="header_menu header_spe"><a class="header_link" href="{{ url('/top') }}">聖地検索</a></div>
    </div>
    <div class="modal fade" id="login_topic_popup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class=“modal-title”>ログインください</h3>
                    <button class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ルート検索はログインが必要です。
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">確認</button>
                </div>
            </div>
        </div>
    </div>   
</header>
@else
<header>
    <div class="header_box">
        <a href="{{ url('/top') }}">
            <img class="logo" src="{{ asset('logo/logo.png') }}"></img>
        </a>
        <div class="header_menu"><p>ユーザー名:{!! Auth::user()->name !!}</p></div>
        <div class="header_menu header_spe"><a class="header_link" href="{{route('logout') }}">ログアウト</a></div>
        <div class="header_menu header_spe"><a class="header_link" href="{{route('like.index')}}">ルート探索</a></div>
        <div class="header_menu header_spe"><a class="header_link" href="{{url('/mapSpotsList')}}">聖地一覧</a></div>
        <div class="header_menu header_spe"><a class="header_link" href="{{url('/top')}}">聖地検索</a></div>
    </div>
</header>
@endif
@endsection