<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Visualast</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>
    <nav style="background-color: rgba(192, 203, 186, 0.96)" class="navbar">
        <div style="margin-left: 2%;margin-right: 5%;" class="container-fluid">
            <div class="navbar-header">
                    <img style="width:7pc;" src="{!! URL::to('/images/VisualastPNG.png') !!}" />
            </div>
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}"> <span class="glyphicon glyphicon-log-in"></span> Login</a>
                    <a href="{{ url('/register') }}"><span class="glyphicon glyphicon-log-in"></span> Register</a>
                </div>
                @endif

                
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <h1 class="text-center">Visualast your resume in one click!</h1>
            <h3 class="text-center">Create your infographic resume for free</h3><br>
            <h4 class="text-center">Space for social logins</h4>
        </div>
        <div style="margin-bottom: 2%" class="row">
            <div class="col-sm-offset-2 col-sm-2">
                <img style="width:7pc;" src="{!! URL::to('/images/VisualastPNG.png') !!}" />
            </div>
            <div class="col-sm-2">
                <img style="width:7pc;" src="{!! URL::to('/images/VisualastPNG.png') !!}" />
            </div>
            <div class="col-sm-2">
                <img style="width:7pc;" src="{!! URL::to('/images/VisualastPNG.png') !!}" />
            </div>
            <div class="col-sm-2">
                <img style="width:7pc;" src="{!! URL::to('/images/VisualastPNG.png') !!}" />
            </div>
        </div>
        <div style="background-color: lightgray" class="row">
            <h1 class="text-center">FEATURES</h1>
            <div style="margin-bottom: 2%;" class="row">
                <div class="col-sm-offset-2 col-sm-3">
                    <img style="width:7pc;" src="{!! URL::to('/images/Visualast.jpg') !!}" />
                </div>
                <div class="col-sm-3">
                    <img style="width:7pc;" src="{!! URL::to('/images/Visualast.jpg') !!}" />
                </div>
                <div class="col-sm-3">
                    <img style="width:7pc;" src="{!! URL::to('/images/Visualast.jpg') !!}" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-3">
                    <img style="width:7pc;" src="{!! URL::to('/images/Visualast.jpg') !!}" />
                </div>
                <div class="col-sm-3">
                    <img style="width:7pc;" src="{!! URL::to('/images/Visualast.jpg') !!}" />
                </div>
                <div class="col-sm-3">
                    <img style="width:7pc;" src="{!! URL::to('/images/Visualast.jpg') !!}" />
                </div>
            </div>
        </div>
        <div style="background-color: cornflowerblue" class="row">
            <div class="col-sm-offset-2 col-sm-5">
                <h3>With over 500,000 infographics created, Vizualize.me is the #1 infographics maker for resumes.</h3>
            </div>
            <div class="col-sm-4">
                <h1>button and video frame here</h1>
            </div>
        </div>
        <footer style="background-color: black" class="footer">
            <div class="container">
                <img class="center-block" style="width:7pc;" src="{!! URL::to('/images/VisualastPNG.png') !!}" />
                <div style="color: whitesmoke" class="text-center">
                    <span>Home</span>
                    <span>About</span>
                    <span>Terms</span>
                    <span>Contact</span>
                    <span>Twitter</span>
                    <span>Facebook</span>
                </div>
            </div>
        </footer>
    </div>
    </body>
</html>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help