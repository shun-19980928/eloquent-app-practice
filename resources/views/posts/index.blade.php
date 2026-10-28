
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿一覧</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 30px;
        }

        table {
            border-collapse: collapse;
            width: 650px;
            font-size: 14px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button {
            display: inline-block;
            padding: 5px 8px;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 12px;
        }

        .create {
            background-color: #007bff;
            margin-bottom: 15px;
        }

        .edit {
            background-color: #007bff;
        }

        .delete {
            background-color: #dc3545;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>投稿一覧</h1>

    <a href="/posts/create" class="button create">新規作成</a>

    <p>全{{ count($posts) }}件の投稿があります。</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>公開日時</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        {{ $post->published_at?->format('Y/m/d H:i') ?? '下書き' }}
                    </td>
                    <td>
                        <a href="/posts/{{ $post->id }}/edit" class="button edit">編集</a>

                        <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button delete">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

