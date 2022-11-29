<!DOCTYPE html>
<html lang="en">
 
<head>
    <script defer src="js/script.js"></script>
    <script defer src="js/filter.js"></script>
    <script defer src="js/search.js"></script>
    
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

    <script>
        function del_item(e){
            let items = []
            JSON.parse(localStorage.getItem('game_items')).map(data =>{
                if (data.id != e.parentElement.parentElement.children[0].textContent){
                    items.push(data);
                }
            });
            localStorage.setItem('game_items', JSON.stringify(items));
            window.location.reload();
        }
    </script>
</head>

<div class = "all">
    <body>
    <header>
        <div class = "slogan">
            <h6 id = "phrase"> <!--<marquee width="130%" text-align='center' >--> <img class = "white_logo" src = "images/UGAME logo (white).png" width = "100" height = "25"> Discover our latest releases.<!--</marquee>--></h6>
        </div>

        <div id = "about_contact">
                <ul id = "about_contact_txt">
                    <li><a id="about_us" href="about">ABOUT</a></li>
                    <li><a id="contact" href="contact">CONTACT</a></li>
                    <li><a id="admin" href="admin">ADMIN</a></li>
                </ul>
            </div>

        <div class = "top_section">

            <a class = "logo" href="index"> <img class = "logo" src = "images/UGAME logo.png" width = "200" height = "50"> </a>
            <input id = search type="text" placeholder="Search games..." name="search"> 
            <button id = "search_button" type="button">Go</button>


            <ul id=register_basket>
                <li><a id="sign_register" href="register"> Sign in or Register </a></li>
                <!--<li><a class="basket" id = "basket_link" href="basket"><i class="fa-solid fa-basket-shopping"></i> Basket</a></li>-->
                <button id = "basket_link" type="button">Basket</button><p id = "item_num_noti">0</p>
            </ul>
        </div>

        <div class="nav_bar">
            <nav>
                <ul id=links>
                    <li><a id="deals" href="index">HOME</a></li>
                    <li><a id="playstation" href="playstation">PLAYSTATION</a></li>
                    <li><a id="xbox" href="xbox">XBOX</a></li>
                    <li><a id="nintendo" href="nintendo">NINTENDO</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about_desc">
            <div class = "each_sect">
                <h2 class = "headings">Get to Know Us</h2>
                <p class = "paragraph">
                    We are a new-found company that priorites on selling the latest, old school, 
                    classic and the trendiest games on various platforms; founded in 2022, our team are ready to
                    bring a new experience for each customer, making it easier to purchase games.           
                </p>
            </div>

            <div class = "each_sect">
                <h2 class = "headings">Cookies</h2>
                <p class = "paragraph">
                    Our e-commerce uses cookies which are a tiny text file that a website can place on your computer when you visit it. 
                    Cookies are used to improve your experience while using the website by facilitating navigation. 
                    Cookies allow a website to customise the content you see based on your browsing choices.
                </p>
                <p class = "paragraph">  
                    No harm is brought to your computer or device when cookies are placed on your computer.
                </p>
            </div>

            <div class = "each_sect">
                <h2 class = "headings"> Shopping With Confidence </h2>
                <p class = "paragraph">
                    Feel at ease knowing that we have a team that is dedicated to ensuring that your experience is
                    is safe. With experts that have years of experience within Cybersecurity, all transactions
                    are secure and kept confidential. Our website will always be active at all times.
                </p>
            </div>
    </section>
    <div id = "cart_window">
        <div class = "cart_sect">
            <button id = "close_button">Close Basket</button>
            <h1 id = "basket_title">Your basket</h1>
            <h1 id = "total_title">Subtotal: </h1>
            <table class = "basket_table_"></table>
            <button id = "checkout_button">Checkout</button>
        </div>
    </div>
    <script src="js/script.js"></script>
</div>
<body>  
</div>
