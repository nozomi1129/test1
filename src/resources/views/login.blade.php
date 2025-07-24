@extends('layouts.auth')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection


@section('nav')
    <a href="/register" class="nav">register</a>
@endsection

@section('content')
<div class="content">

    <div class="content__ttl">Login</div>

    <div class="content__form">
        <form action="/login" class="login-form" method="post">
        @csrf
            <div class="form-item">
                <div class="form-item-label">メールアドレス</div>
                <input type="text" name="email" class="form-item-text" value="{{ old('email') }}" placeholder="例:test@example.com">
                <div class="form-error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-item">
                <div class="form-item-label">パスワード</div>
                <input type="password" name="password" class="form-item-text" placeholder="coachtech1106">
                <div class="form-error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-btn">
                <input type="submit" class="form-btn-login" value="ログイン"/>
            </div>
        </form>
    </div>



</div>


@endsection