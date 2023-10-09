@extends('app')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf
    <div>
        <p>下記内容でお間違いがないか確認後、「送信する」を押してください。
        <br>内容を修正する場合は、「修正する」を押すと前画面に戻ります。</p>
    </div>
    <table>
        <tbody>

            <tr>
                <td>氏名</td>
                <td>
                    {{ $inputs['name_last'] }}
                    <input name="name_last" value="{{ $inputs['name_last'] }}" type="hidden">
                    {{ $inputs['name_first'] }}
                    <input name="name_first" value="{{ $inputs['name_first'] }}" type="hidden">
                </td>
            </tr>
            <tr>
                <td>会社名</td>
                <td>
                    {{ $inputs['company'] }}
                    <input name="company" value="{{ $inputs['company'] }}" type="hidden">
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>
                    {{ $inputs['email'] }}
                    <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                </td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td>
                    {{ $inputs['tel'] }}
                    <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">
                </td>
            </tr>

        </tbody>
    </table>

    <button type="submit" name="action" value="back">
        修正する
    </button>
    <button type="submit" name="action" value="submit">
        送信する
    </button>
</form>
@endsection