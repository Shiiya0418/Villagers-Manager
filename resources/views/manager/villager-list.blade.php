<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>村民一覧表</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="container mx-auto text-xl">村民一覧表</h1>
    <h2 class="text-xl">{{ $year }}年</h2>
    <a href={{ route('villager.show') }} class="px-2 bg-blue-500 text-white rounded hover:bg-blue-600">村民登録</a>
    <div>
    @for ($i = 1; $i <= 6; $i++)
    <a href="/villager-list/{{ $i }}" class="px-2 bg-blue-500 text-white rounded hover:bg-blue-600">{{$i}}年</a>
    @endfor
    </div>
    <div>
        <table class="table-auto">
            <tr>
                <th class="border px-4 py-2">学籍番号</th>
                <th class="border px-4 py-2">氏名</th>
                <th class="border px-4 py-2">ニックネーム</th>
                <th class="border px-4 py-2">楽器</th>
                <th class="border px-4 py-2">役職</th>
            </tr>
            @foreach($members as $member)
            <tr>
                <td class="border px-4 py-2">{{ $member->student_number }}</td>
                <td class="border px-4 py-2">{{ $member->name }}</td>
                <td class="border px-4 py-2">{{ $member->nickname1 }}</td>
                <td class="border px-4 py-2">{{ $member->main_instrument }}</td>
                <td class="border px-4 py-2">{{ $member->role }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>