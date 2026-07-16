<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員編集</title>
</head>
<body>
    <h1>社員編集</h1>
    <form action="{{ route('shain.update',['id'=>$shain->shain_id]) }}" method="post">
        @csrf
        @method('put')
        <label for="shain_mei">社員名:</label>
        <input type="text" id="shain_mei" name="shain_mei" value="{{ $shain->shain_mei }}" required>
        <button type="submit"> 更新</button>
        <p><a href="{{ route('shain.index') }}">社員一覧に戻る</a></p>
    </form>
</body>
</html>