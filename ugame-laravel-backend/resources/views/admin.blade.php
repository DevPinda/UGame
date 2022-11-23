<!DOCTYPE html>
<html lang="en">
 
<head>
    <script defer src="js/script.js"></script>
    <script defer src="js/search.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
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
        <h6 id = "phrase"> <marquee width="100%" text-align='center' > <img class = "white_logo" src = "images/UGAME logo (white).png" width = "100" height = "25"> Discover our latest releases.</marquee></h6>
        </div>
        <div class = "top_section">
            <a class = "logo" href="index"> <img class = "logo" src = "images/UGAME logo.png" width = "200" height = "50"> </a>
            <input id = search type="text" placeholder="Search games..." name="search"> 
            <button id = "search_button" type="button">Go</button>
            <ul id=register_basket>
                <li><a id="sign_register" href="register"> <i class="fa-solid fa-user-large"></i> Sign in or Register </a></li>
                <li><a id="basket" href="basket"> <i class="fa-solid fa-basket-shopping"></i> Basket</a></li>
                @if (isset($type))
                    <li><a id="profile" href="profile"> <i class="fa-solid fa-basket-shopping"></i> Profile</a></li>
                @endif
            </ul>
        </div>
        <div class="nav_bar">
            <nav>
                <ul id=links>
                    <li><a id="playstation" href="playstation">PLAYSTATION</a></li>
                    <li><a id="xbox" href="xbox">XBOX</a></li>
                    <li><a id="nintendo" href="nintendo">NINTENDO</a></li>
                    <li><a id="deals" href="deals">DEALS</a></li>
                </ul>
            </nav>
        </div>
    </header>
    

    <div class = "game_form">
    <h1>Add Games</h1>
        <form name="add-games" action="/store" method="post" style="width:70%; margin-left:15%;">
            
            @csrf
            <label>Title</label>
            <input type='text' placeholder='Title' name='title' class='form-control'>
            <label>Platform</label>
            <input type="text" class="form-control" placeholder="Platform" name="platform">
            <label>Genre</label>
            <select class='form-control' placeholder='Genre' name='genre'>
                <option value='Action Adventure'>Action Adventure</option>
                <option value='Platformer'>Platformer</option>
                <option value='RPG'>RPG</option>
                <option value='Horror'>Horror</option>
                <option value='Shooter'>Shooter</option>
                <option value='Fighting'>Fighting</option>
                <option value='Racing'>Racing</option>
                <option value='Sport'>Sport</option>
            </select>
            <label>Publisher</label>
            <input type='text' class='form-control' placeholder='Publisher' name='publisher'>
            <label>Price: £</label>
            <input type='float' class='form-control' placeholder='Price' name='price'>
            <label>Rating</label>
            <input type='integer' class='form-control' placeholder='Rating' name='rating'>
            <label>Release Date</label>
            <input type="date" class='form-control' id="start" name="releaseDate" placeholder="2010-10-10">
            <Label>Players</label>
            <input type='integer' class='form-control' placeholder='No. Players' name='players'>
            <label>Stock</label>
            <input type='integer' class='form-control' placeholder='Stock' name='stock'>
            <input type="submit" value="Submit">
        </form>
    </div>       
</body>
</html>
