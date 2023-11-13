<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>村民登録</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="container mx-auto text-xl">村民登録</h1>
    <div class="flex justify-center">
        <form action="{{ route("villager.create") }}" method="POST" enctype="multipart/form-data">
            @csrf
            学籍番号 　   : <input type="text" name="student-number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ><br><br>
            氏名         : <input type="text" name="name"><br><br>
            何回生？　    : 
            <select name="year">
                <option disabled selected>選択してください</option>
                @for ($i = 1; $i <= 6; $i++)
                    <option value={{ $i }}>{{$i}}年</option>
                @endfor
            </select><br><br>
            ニックネーム1 : <input type="text" name="nickname1"><br><br>
            ニックネーム2 : <input type="text" name="nickname2"><br><br>
            メイン楽器   :
            <select name="main-instrument">
                <option disabled selected>選択してください</option>
                <?php
                $instruments = [
                    "vocal" => "ボーカル",
                    "guitar" => "ギター",
                    "bass" => "ベース",
                    "drums" => "ドラム",
                    "keyboard" => "キーボード",
                    "other" => "その他"
                ];
                foreach($instruments as $key => $value)
                {
                    echo "<option value=".$key."> ".$value."</option>";
                }
                ?>
            </select><br><br>
            サブ楽器     :
            <select name="sub-instrument">
                <option disabled selected>選択してください</option>
                <?php
                foreach($instruments as $key => $value)
                {
                    echo "<option value=".$key."> ".$value."</option>";
                }
                ?>
            </select><br><br>
            役職        :
            <select name="role">
                <option value="none">なし</option>
            </select>
            <br><br>
            <button class="shadow-lg shadow-black/50 rounded px-2 py-1" type="submit">登録</button>
        </form>
    </div>
</body>
</html>