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
    @foreach($members as $member)
        <p>{{ $member->name }}</p>
    @endforeach
    </div>
</body>
</html>