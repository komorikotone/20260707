<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員一覧</title>
</head>

<body>
    <h1> 社員一覧</h1>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>