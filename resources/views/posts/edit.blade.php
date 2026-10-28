
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿編集</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 30px;
        }

        h1 {
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        input, textarea {
            display: block;
            width: 300px;
            padding: 6px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        textarea {
            height: 65px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 7px 12px;
            cursor: pointer;
        }

        a {
            display: block;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <h1>投稿編集</h1>

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}" required>

        <label for="content">内容</label>
        <textarea id="content" name="content" required>{{ $post->content }}</textarea>

        <button type="submit">更新</button>
    </form>

    <a href="/posts">← 一覧に戻る</a>
</body>
</html>

