<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>AFL Players</title>
        <link href = {{ asset("css/app.css") }} rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="row" id="app-div">
            <div class="col-sm-6" id="afl-div">
                <img src="/images/AFL.png" id="afl-logo">
            </div>
            <div class="col-sm-6">
                <div id="app">
                    <application></application>
                </div>
            </div>
        </div>
    </body>
</html>

<script src="{{ mix('js/app.js') }}"></script>