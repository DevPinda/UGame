
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

    <form
    class = "checkout_form">
        <h2 id = "checkout_title">Checkout</h2>
        <input class = "input_fields_checkout" type="text" placeholder=Name name='first_name'>
        <br>
        <input class = "input_fields_checkout" type="text" placeholder="example@gmail.com" name="email">
        <br>
        <input class = "input_fields_checkout" type="text" placeholder="Post Code" name="postcode">
        <br>
        <select type="button" id = "delivery_choice" name = 'deliveryDate'>
            <option id = "delivery_choice" disabled selected>Delivery Choice</option>
            <option id = "delivery_choice">Next Day Delivery (5.99)</option>
            <option id = "delivery_choice">Express Delivery (2.99)</option>
            <option id = "delivery_choice">Standard Delivery (Free)</option>
        </select><br>
        <input class = "input_fields_checkout" type="text" placeholder="Phone Number" name="phoneNumber">
        <br>
        <input class = "input_fields_checkout" type="text" placeholder="Address" name="homeAddress">
        <br>
        <br>
        <button type="Submit" name="Submit" class="btn btn-outline-primary" > Proceed to checkout</button>
    </form>

    <div class ="checkout_basket"
    ></div>

    <?php
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn,$sql);
        $resultCheck= mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row =mysqli_fetch_assoc($result)){
                echo $row["user_uid"] . "<br>";
            }
        }

    ?>

 

    <script src="js/script.js"></script>
</div>
<body>  
</div>