<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts-->
        <!-- フォントはどうする？-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles ※スタイルは宮本さんデザインができたら記述する -->
        <style>
        /* スタイルは宮本さんのデザイン修正ができたら実装する */
        </style>
    </head>
    <body>
        {{-- 文書構造も宮本さんのデザイン修正が終わったら実装する。それまではデータを表示させるために仮で作成 --}}
        {{-- modeで作成と編集状態を切り分けるようにする --}}
        <h1>ここは記事編集画面です。</h1>
        タイトル
        <br>
        {{$data->title}}
        <br>
        本文
        <br>
        {{$data->body}}
        <br>
        作成者
        <br>
        {{$data->created_by}}
        <br>
        更新者
        <br>
        {{$data->updated_by}}
    </body>
</html>
