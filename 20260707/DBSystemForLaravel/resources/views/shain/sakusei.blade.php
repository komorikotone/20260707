<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員新規登録</title>
</head>

<body>

    <h1>社員新規登録</h1>
    <!-- 社員新規登録フォーム -->
    <form action="{{route('shain.hozon') }}" method="post">
        @csrf
        <label for="shain_mei">社員名</label>
        <input type="text" name="shain_mei" id="shain_mei" required> <br>
        <label for="mail_address">メールアドレス</label>
        <input type="email" name="mail_address" id="mail_address" required> <br>
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" required> <br>
        <label for="busho_id">部署ID</label>
        <select name="busho_id" id="busho_id" required>
            <option value="">選択してください</option>
            @foreach ($bushoList as $busho)
            <option value="{{ $busho->busho_id }}">{{ $busho->busho_mei }}</option>
            @endforeach
        </select> <br>
        <button type="submit">登録</button>
    </form>
    <p><a href="{{route('shain.index') }}">社員一覧に戻る</a></p>

</body>

</html>