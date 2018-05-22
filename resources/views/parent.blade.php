<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'digital';
            src: url('digital.ttf');
            src: url(''digital.ttf'');
        }

        body {
            background-image: url("bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .navbar-default {
            background-color: rgba(214, 214, 214, 0.6);
            border: none;
            -webkit-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
        }

        form {
            background-color: rgba(214, 214, 214, 0.6);
            align: center;
            width: 40%;
            padding: 20px;
            margin-top: 120px;
            -webkit-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
        }

        img {
            background-color: rgba(214, 214, 214, 0.6);
            align: center;
            padding: 20px;
            margin-top: 40px;
            -webkit-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);

        }

        h2 {
            margin-top: 80px;
        }

        h1 {

            font-family: digital;
            font-size: 1200%;
        }

        #a {
            background-color: rgba(214, 214, 214, 0.6);
            -webkit-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
            box-shadow: 1px 2px 10px -2px rgba(0, 0, 0, 0.75);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Can I Travel?</a>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>