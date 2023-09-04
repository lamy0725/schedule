<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>schedule</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>調整くん</h1>
                @foreach ($schedules as $schedule)
                    <h2 class='title'>{{ $schedule->schedule_name}}</h2>
                    <div class='schedule_table'>
                @endforeach
                    <table border="2">
                    <th>候補</th> 
                @foreach ($users as $user)
                    <th class='name'><a href='/edit'>{{ $user->name}}</a></th>
                @endforeach
                <tr>
                @foreach ($schedules as $schedule)
                    <th class='candidate_day'>{{ $schedule->candidate}}</th>
                    <td>○</td>
                    <td>×</td>
                @endforeach
                    </table>
                </tr>
            </div>
                <a href='/create'>新しい日程表作成！</a>
                <a href='/'>出欠入力</a>
    </body>
</html>