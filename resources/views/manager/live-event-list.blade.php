<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ライブ一覧表</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="container mx-auto text-xl">ライブ一覧表</h1>
    <div>
        <table class="table-auto">
            @foreach($live_events as $live_event)
            <tr>
                <td class="border px-4 py-2">
                    <a href="/live-event-list">
                        {{ $live_event->live_name }}
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="/live-event-list" class="px-2 bg-blue-500 text-white rounded hover:bg-blue-600">新規ライブ登録</a>
    </div>
</body>
</html>