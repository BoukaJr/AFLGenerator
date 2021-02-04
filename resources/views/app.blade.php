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
            <div class="col-lg-4" id="afl-div">
                <img src="/images/AFL.png" id="afl-logo">
            </div>
            <div class="col-lg-8" id="content-div">
                <div id="app">
                    <application></application>
                </div>
                <div id="footy-label">
                    FOOTY
                </div>
            </div>
        </div>
    </body>
</html>

<script src="{{ mix('js/app.js') }}"></script>