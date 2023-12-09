<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>村民一覧表</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="container mx-auto text-xl">村民トップ</h1>
    <a href={{ route('villager.show') }} class="px-2 bg-blue-500 text-white rounded hover:bg-blue-600">村民登録</a>
    <br><br>
    <div>
        <h2 class="container mx-auto text-xl">バンド登録</h2>
        <table class="table-auto">
            <tr>
                <th class="border px-4 py-2">ライブ名</th>
                <th class="border px-4 py-2">ライブ日</th>
                <th class="border px-4 py-2">バンド登録するボタン</th>
            </tr>
            @foreach ($liveEvents as $liveEvent)
            <tr>
                <th class="border px-4 py-2">{{ $liveEvent->live_name }}</th>
                <th class="border px-4 py-2">{{ $liveEvent->event_date }}</th>
                <th class="border px-4 py-2">
                    <a href={{ route('villager.band.show', ['liveEvent' => $liveEvent]) }} class="px-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        バンド登録
                    </a>
                </th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>