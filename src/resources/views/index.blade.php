@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="content">

    <div class="content__ttl">Contact</div>

    <form class="content__form" action ="/confirm" name="contact" method="post">
    @csrf
        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">お名前</span>
                <span class="form-label-required">※</span>
            </div>
            <div class="form-text">
                <div class="flex-form">
                    <input type="text" name="first_name" class="form-item-input" value="{{ old('first_name') }}" placeholder="例:山田"/>
                    <span class="empty"></span>
                    <input type="text" name="last_name" class="form-item-input" value="{{ old('last_name') }}" placeholder="例:太郎"/>
                </div>
                <div class="form-error">
                    @error('first_name')
                        {{ $message }}
                    @enderror
                    @error('last_name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">性別</span>
                <span class="form-label-required">※</span>
            </div>
            <div class="form-radio">
                <label class="radio-item">
                    <input type="radio" name="gender" class="form-item-gender" value="男性" checked>男性
                </label>
                <label class="radio-item">
                    <input type="radio" name="gender" class="form-item-gender" value="女性">女性
                </label>
                <label class="radio-item">
                    <input type="radio" name="gender" class="form-item-gender" value="その他">その他
                </label>
                <div class="form-error">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">メールアドレス</span>
                <span class="form-label-required">※</span>
            </div>
            <div class="form-text">
                <input type="text" name="email" class="form-item-input" value="{{ old('email') }}" placeholder="例:test@example.com"/>
                <div class="form-error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">電話番号</span>
                <span class="form-label-required">※</span>
            </div>
            <div class="form-text">
                <!-- <div class="flex-form"> -->
                    <input type="text" name="tel" class="form-item-input-tel" placeholder="例:080-1234-5678"/>
                    <!-- <span class="empty">-</span>
                    <input type="text" name="tel2" class="form-item-input-tel" placeholder="1234"/>
                    <span class="empty">-</span>
                    <input type="text" name="tel3" class="form-item-input-tel" placeholder="5678"/> -->
                <!-- </div> -->
                <div class="form-error">
                    @error('tel')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">住所</span>
                <span class="form-label-required">※</span>
            </div>
            <div class="form-text">
                <input type="text" name="address" class="form-item-input" value="{{ old('address') }}" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3"/>
                <div class="form-error">
                    @error('address')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">建物名</span>
            </div>
            <div class="form-text">
                <input type="text" name="building" class="form-item-input" value="{{ old('building') }}" placeholder="例:千駄ヶ谷マンション101"/>
            </div>
        </div>

        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">お問い合わせの種類</span>
                <span class="form-label-required">※</span>
            </div>
            <div class="form-text">
                <select class="form-item-cat" name="category_id">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['content'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
                <div class="form-error">
                    @error('content')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-item">
            <div class="form-item-label">
                <span class="form-label">お問い合わせ内容</span>
                <span class="form-label-required">※</span>
            </div>
            <div class="form-text">
                <textarea name="detail" rows="5" class="form-item-input" value="{{ old('detail') }}" placeholder="お問合せの内容をご記載ください"></textarea>
                <div class="form-error">
                    @error('detail')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-btn">
            <input type="submit" class="form-btn-confirm" value="確認画面"/>
        </div>

        </div>

</div>


@endsection