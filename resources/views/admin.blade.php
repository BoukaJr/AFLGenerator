<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ATG Admin Page</title>
        <link href = {{ asset("css/app.css") }} rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="row" id="app-div">
            <div class="col-lg-4" id="afl-div-admin">
                <img src="/images/AFL.png" id="afl-logo">
            </div>
            <div class="col-lg-8" id="content-div">
                <div id="app">
                    <login></login>
                </div>
                <div id="admin-label">
                    ADMIN
                </div>
            </div>
        </div>
    </body>
</html>

<script src="{{ mix('js/app.js') }}"></script>