<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>村民一覧表</title>
</head>
<body>
    <h1>村民一覧表</h1>
    <h2>{{ $year }}</h2>
    <div>
        <table border="1">
            <tr>
                <th>学籍番号</th>
                <th>氏名</th>
                <th>ニックネーム</th>
                <th>楽器</th>
                <th>役職</th>
            </tr>
            @foreach($members as $member)
            <tr>
                <td>{{ $member->student_number }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->nickname1 }}</td>
                <td>{{ $member->main_instrument }}</td>
                <td>{{ $member->role }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>