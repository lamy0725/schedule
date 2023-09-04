<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>schedule</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>日程表作成</h1>
            <from action='/' method='POST'>
                タイトル:<br>
                <input type='text' name='title' placeholder='タイトル'/><br>
                補足:<br>
                <textarea name="kansou" rows="10" cols="40" placeholder='期限やその他補足事項など'></textarea><br>
                候補日:<br>
                <textarea name="kansou" rows="10" cols="40" placeholder='まだわからん、工事中。'></textarea><br>
            </from>
                <a href='/table'>日程調整表作成！</a>
    </body>
</html>