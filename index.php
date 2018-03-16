<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Like Projesi</title>
    <link rel="stylesheet" href="gerek/girisekrani/savas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<div id="particles-js"></div>
<body class="login">
<div class="container">
    <div class="login-container-wrapper clearfix">
        <div class="logo">
            <i class="fa fa-sign-in"></i>
        </div>
        <div class="welcome"><strong>Welcome,</strong> please login</div>

        <form class="form-horizontal login-form">
            <div class="form-group relative">
                <input id="login_username" class="form-control input-lg" type="email" placeholder="Username" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group relative password">
                <input id="login_password" class="form-control input-lg" type="password" placeholder="Password" required>
                <i class="fa fa-lock"></i>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
            </div>
            <div class="checkbox pull-left">
                <label><input type="checkbox"> Remember</label>
            </div>
            <div class="checkbox pull-right">
                <label> <a class="forget" href="" title="forget">Forgot your password</a> </label>
            </div>
        </form>
    </div>

    <h4 class="text-center">
        <a target="_blank" href="https://codepen.io/Peeyush200/pen/apwXmL">
            Check out another login form
        </a>
    </h4>
</div>

</body>
</html>

