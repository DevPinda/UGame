<!DOCTYPE html>
<html lang="en">
 
<head>
    <script defer src="js/script.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/40ad289a3a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>UGame?</title>
</head>
 
<body class = "all">
    <header>
        <div class = "slogan">
            <h6 id = "phrase"> <img class = "white_logo" src = "images/UGAME logo (white).png" width = "100" height = "25"> Discover our latest releases.</h6>
        </div>
        <div class = "top_section">
            <a class = "logo" href="index"> <img class = "logo" src = "images/UGAME logo.png" width = "200" height = "50"> </a>
            <input id = search type="text" placeholder="Search games..." name="search"> 
            <button id = "search_button" type="button">Go</button>
            <ul id=register_basket>
                <li><a id="sign_register" href="register"> <i class="fa-solid fa-user-large"></i> Sign in or Register </a></li>
                <li><a id="basket" href="basket"> <i class="fa-solid fa-basket-shopping"></i> Basket</a></li>
            </ul>
        </div>
        <div class="nav_bar">
            <nav>
                <ul id=links>
                    <li><a id="playstation" href="playstation">PLAYSTATION</a></li>
                    <li><a id="xbox" href="xbox">XBOX</a></li>
                    <li><a id="nintendo" href="nintendo">NINTENDO</a></li>
                    <li><a id="nintendo" href="deals">DEALS</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
<div class = "signin_form">

    <form acton="/signin/{email}" method="get">
    <h4 id = "create_account">Sign in</h4>
    <h4 id = "create_account_caption">Enter email and password.</h4>
    <div class = "group_input_fields">
        <label id = "email_label">Email</label>
        <input class = input_fields type="text" placeholder="example@gmail.com" name="email"><br>
        <label id = "password_label">Password</label>
        <input class = input_fields type="text" placeholder="password"><br>
        <button class = "input_fields" id = "signin_button" type="submit" >SIGN IN</button>
        <p id = "sign_in_question"><a id = "sign_in_question" href="register">Don't have an account? Register.</a></p>
    </div>
</form>
</div>
</html>

