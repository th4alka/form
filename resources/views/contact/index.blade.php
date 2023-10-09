@extends('app')
 
@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    <table>
        <tbody>
    @csrf

    <tr>
        <td>氏名</td>
        <td>
            <span>氏</span><input type="text" name="name_last" value="{{ old('name_last') }}">
            <span>名</span><input type="text" name="name_first" value="{{ old('name_first') }}">
            @if ($errors->has('name_last'))
                <p class="error-message">氏名（氏）を入力してください</p>
            @endif
            @if ($errors->has('name_first'))
                <p class="error-message">氏名（名）を入力してください</p>
            @endif
        </td>
    </tr>
    <tr>
        <td>会社名</td>
        <td>
            <input type="text" name="company" value="{{ old('company') }}">
            @if ($errors->has('company'))
                <p class="error-message">会社名を入力してください</p>
            @endif
        </td>
    </tr>
    <tr>
        <td>メールアドレス</td>
        <td>
            <input type="text" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <p class="error-message">メールアドレスを入力してください</p>
            @endif
        </td>
    </tr>
    <tr>
        <td>電話番号</td>
        <td>
            <input type="text" name="tel" value="{{ old('tel') }}">
            @if ($errors->has('tel'))
                <p class="error-message">電話番号を入力してください</p>
            @endif
        </td>
    </tr>

    </tbody>
</table>
        <div>
            <a href="https://www.phonogram.co.jp/privacy/entry.html" target="_blank">個人情報の取り扱いについて</a>に同意の上、送信してください
            <div>
                <p>同意して送信すると、Cookieにより当社のWebサイト上における閲覧履歴と個人情報を紐付けて把握、分析する場合があります。</p>
            </div>
        </div>

        <div>
            <input type="submit" name="" id="" value="同意して確認画面へ">
        </div>
</form>
@endsection