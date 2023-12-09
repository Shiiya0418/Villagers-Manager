<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>村民登録</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        const addMember = () => {
            const memberIndex = document.querySelectorAll('.member-input').length;
            const newMemberInput = document.createElement('div');
            newMemberInput.className = 'member-input';
            newMemberInput.innerHTML = `
            名前         : <input type="text" name="members[0][name]" placeholder="氏名orあだ名"><br><br>
            何回生？　    : 
                <select name="members[0][name]">
                    <option disabled selected>選択してください</option>
                    @for ($i = 1; $i <= 6; $i++)
                        <option value={{ $i }}>{{$i}}年</option>
                    @endfor
                </select><br><br>
            パート　　    : <input type="text" name="members[0][name]" placeholder="楽器"><br><br>
            `;
            document.getElementById('band-members').appendChild(newMemberInput)
        }
    </script>
</head>
<body>
    <h1 class="container mx-auto text-xl">バンド登録</h1>
    <div class="flex justify-center">
        <form action="{{ route("band.create") }}" method="POST" enctype="multipart/form-data">
            @csrf
            バンド名      : <input type="text" name="name">
            <a href="javascript:void(0);" onclick="addMember()" class="px-2 bg-blue-500 text-white rounded hover:bg-blue-600">メンバー追加</a><br><br>
            <div id="band-members">
                <div class="member-input">
                    名前         : <input type="text" name="members[0][name]" placeholder="氏名orあだ名"><br><br>
                    何回生？　    : 
                        <select name="members[0][name]">
                            <option disabled selected>選択してください</option>
                            @for ($i = 1; $i <= 6; $i++)
                                <option value={{ $i }}>{{$i}}年</option>
                            @endfor
                        </select><br><br>
                    パート　　    : <input type="text" name="members[0][name]" placeholder="楽器"><br><br>
                </div>
            </div>
            <button class="shadow-lg shadow-black/50 rounded px-2 py-1" type="submit">登録</button>
        </form>
    </div>
</body>
</html>