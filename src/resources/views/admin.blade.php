@extends('layouts.auth')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection


@section('nav')
    <form class="form" action="/logout" method="post">
        <button class="nav__button">logout</button>
@endsection

@section('content')
<div class="content">

    <div class="content__ttl">Admin</div>

    <div class="content__search">
        <form action="/admin/search" class="search-ls" method="get">
        @csrf
            <input class="search-text" type="text" name="keyword" value="{{ old('keyword') }}" placeholder="名前やメールアドレスを入力してください">
            <select class="search-gender" name="gender">
                <option value="">性別</option>
                    @foreach ($contacts as $contact)
                        <option value="{{ $contact['gender'] }}">{{ $contact['gender'] }}</option>
                    @endforeach
            </select>
            <select class="search-cat" name="category_id">
                <option value="">お問い合わせの種類</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
            </select>
            <input class="search-date" type="date" name="date">
            <button class="search-btn" type="submit">検索</button>
        </form>
        <div class="reset">
            <a href="/admin" class="reset-btn">リセット</a>
        </div>
    </div>

    <div class="content__sub">
        <div class="export">
            <div class="export-btn">エクスポート</div>
        </div>
        <div class="page">{{ $page->links() }}</div>
    </div>

    <div class="content__ls">
        <table class="contact-ls">
            <tr class="ls-header">
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
            <tr class="ls-row">
                @foreach($contacts as $contact)
                <td>{{ $contact['first_name']}} {{ $contact['last_name'] }}</td>
                <td>{{ $contact['gender'] }}</td>
                <td>{{ $contact['email'] }}</td>
                <td>{{ $contact['category']['content'] }}</td>
                <td>{{ $contact['detail'] }}</td>
                <td>詳細</td>
                @endforeach
            </tr>
        </table>
    </div>



</div>
@endsection