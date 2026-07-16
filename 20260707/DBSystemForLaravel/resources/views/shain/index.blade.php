<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員一覧</title>
</head>

<body>
    <h1> 社員一覧</h1>
    <p><a href="{{ route('shain.sakusei') }}"></a></p>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>shain_id</th>
                <th>shain_mei</th>
                <th>mail_address</th>
                <th>password</th>
                <th>busho_id</th>
                <th>yakushoku</th>
                <th>nyusha_bi</th>
                <th>kyuyo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shainList as $shain)
            <tr>
                <td>{{ $shain->shain_id }}</td>
                <td>{{ $shain->shain_mei}}</td>
                <td>{{ $shain->mail_address }}</td>
                <td>{{ $shain->password }}</td>
                <td>{{ $shain->busho_id }}</td>
                <td>{{ $shain->yakushoku }}</td>
                <td>{{ $shain->nyusha_bi }}</td>
                <td>{{ $shain->kyuyo }}</td>
                <td>
                    <a href="{{ route('shain.edit', ['id' => $shain->shain_id]) }}">編集</a>
                    <form action="{{ route('shain.delete' ,['id' => $shain-> shain_id]) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>