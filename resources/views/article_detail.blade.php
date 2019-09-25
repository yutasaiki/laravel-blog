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
        <h1>ここは記事詳細画面です。</h1>
        タイトル
        <br>
        {{$title}}
        <br>
        本文
        <br>
        {{$body}}
        <br>
        作成者
        <br>
        {{$createdBy}}
        <br>
        更新者
        <br>
        {{$updatedBy}}
    </body>
</html>
