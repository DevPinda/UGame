<!DOCTYPE html>
<html lang="en">
 
<head>
    <script defer src="js/script.js"></script>
    <script defer src="js/search.js"></script>
    <script defer src="js/filter.js"></script>
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

        <div class = "whole_sect">
        <div class = "filtered_search"> 
                <div class = "filtered_search_buttons">
                    <h3 id = "filter_title">Filter</h3>
                    <hr id = "filter_line" size="3" width="90%" color="black"> 
                    <select  class = filter_buttons id = filter_genre type="button">
                        <option disabled selected>Genre</option>
                        <option>+ Action Adventure</option>
                        <option>+ Platformer</option>
                        <option>+ RPG</option>
                        <option>+ Horror</option>
                        <option>+ Shooter</option>
                        <option>+ Fighting</option>
                        <option>+ Racing</option>
                        <option>+ Sport</option>
                    </select>

                    <select  class = filter_buttons id = filter_price type="button">
                        <option disabled selected>Price Range</option>
                        <option>£0.00 - £49.99</option>
                        <option>£50.00 - £99.99</option>
                        <option>£200.00 - £249.99</option>
                        <option>£250.00 - £299.99</option>
                    </select>

                    <select  class = filter_buttons id = filter_age type="button">
                        <option disabled selected>Age Rating</option>
                        <option>Age 12+</option>
                        <option>Age 16+</option>
                        <option>Age 18+</option>
                        <option>Age 7+</option>
                        <option>Age 3+</option>
                    </select>

                    <select  class = filter_buttons id = filter_platform type="button">
                    <option disabled selected>Platform</option>
                        <option>Nintendo Switch</option>
                    </select>
                    <button id = "reset_filter_button">Clear Filters</button>
                </div>
            </div>

            <div class = "browse_games">
                <div class = "category">
                    <h6 id = "category_title"><b>Category: </b><strong>'Nintendo Games'</strong></h6>
                </div>

                <div class = "sort_by_filter">
                    <label id = "sort_by_label">Sort By</label>
                    <select name="sort_by" id="sort_by">
                        <option value="best_sellers">Best Sellers</option>
                        <option value="A-Z">Product Name A-Z</option>
                        <option value="price_lth">Price Low to High</option>
                        <option value="price_htl">Price High to Low</option>
                    </select>
                </div>

                <hr id = "line" size="3" width="90%" color="black"> 
                
                @foreach($nintendoProducts as $product)
                <div class = "game_collection">
                    <div class = "game_section">
                        <div class = "single_box">
                        </div>
                        <h4 class = "game_price"> £{{$product->price}} </h4>
                        <h6 class = "game_name"> {{$product->title}} <br> [{{$product->platform}}]</h4>
                        <p id = "game_attributes">({{$product->genre}}/{{$product->rating}}+)</p>
                        <button  class = "atb_button" type="button">Add to Basket</button>
                    </div>
                </div>
                @endforeach

            <div id = "cart_window">
                <div class = "cart_sect">
                    <h1 id = "basket_title">Your basket</h1>
                    <h1 id = "total_title">Subtotal: </h1>
                    <table class = "basket_table_"></table>
                    <button id = "checkout_button">Checkout</button>
                    <button id = "close_button">Close</button>
                </div>
            </div>
            <script src="js/script.js"></script>
        </div>
    </body>
</html>
 
