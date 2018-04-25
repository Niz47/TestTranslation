<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="lang-section">
                <ul>
                    @if(\App::getLocale()=="en")
                    <li><a href="{{url('/lang/my')}}">ျမန္မာ</a></li>
                    @else
                    <li><a href="{{url('/lang/en')}}">English</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <h1>{{ trans('test.finish_topup_win') }}</h1> 
                <h3>{{ trans('test.contest_starts_march_1_come_back_soon') }}</h3>
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
