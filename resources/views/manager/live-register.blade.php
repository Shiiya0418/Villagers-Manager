<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ライブ登録</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="container mx-auto text-xl">ライブ登録登録</h1>
    <div class="flex justify-center">
        <form action="{{ route("manager.live-event.create") }}" method="POST" enctype="multipart/form-data">
            @csrf
            ライブ日     : <input type="date" name="event-date" class="form-control" value="<?php echo date('Y-m-j') ?>" ><br><br>
            ライブ名     : <input type="text" name="live-name"><br><br>
            <button class="shadow-lg shadow-black/50 rounded px-2 py-1" type="submit">登録</button>
        </form>
    </div>
</body>
</html>