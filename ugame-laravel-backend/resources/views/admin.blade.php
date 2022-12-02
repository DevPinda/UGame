<!DOCTYPE html>
<html lang="en">
 
<head>
    <script defer src="js/script.js"></script>
    <script defer src="js/search.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
 
<body class = "all">
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


<div class="container">
<div class="row">
<div class='cards'>
<div class="col-lg-6">
    <div class = "card">
        <h1>List of all users</h1>
        <table>
            <tr>
                <th>User No</th>
                <th>First name</th>
                <th>Email Address</th>
            </tr>
        @foreach($userlist as $user)
            <tr>
                <td>#{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    </div>

    <div class="col-lg-6">
    <div class = "card">
        <h1>List of Currently Unfullfilled Orders</h1>
    <table>
            <tr>
                <th>Order No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Post Code</th>
            </tr>
        @foreach($orders as $order)
            <tr>
                <td>#{{$order->orderId}}</td>
                <td>{{$order->firstName}}</td>
                <td>{{$order->lastName}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->postCode}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
<div class="col-lg-3">
<div class ="card border">
        <h1>Stocked Products</h1>
    <table>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Platform</th>
            </tr>
        @foreach($products as $prd)
            <tr>
                <td>{{$prd->productsID}}</td>
                <td>{{$prd->title}}</td>
                <td>{{$prd->platform}}</td>
            </tr>
        @endforeach
        </table>
<hr class="horizontal-line">
    </div>
    </div>
<div class="col-lg-3">
    <div class ="card border">
        <h1>Stocked Xbox Products</h1>
    <table>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Platform</th>
            </tr>
        @foreach($xproducts as $prd)
            <tr>
                <td>{{$prd->productsID}}</td>
                <td>{{$prd->title}}</td>
                <td>{{$prd->platform}}</td>
            </tr>
        @endforeach
        </table>
        <hr class="horizontal-line">
    </div>
    </div>
    <div class="col-lg-3">
    <div class ="card border">
        <h1>Stocked Playstation Products</h1>
    <table>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Platform</th>
            </tr>
        @foreach($pproducts as $prd)
            <tr>
                <td>{{$prd->productsID}}</td>
                <td>{{$prd->title}}</td>
                <td>{{$prd->platform}}</td>
            </tr>
        @endforeach
        </table>
        <hr class="horizontal-line">
    </div>
    </div>
    
    <div class="col-lg-3">
    <div class ="card border">
        <h1>Stocked Nintendo Products</h1>
    <table>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Platform</th>
            </tr>
        @foreach($nproducts as $prd)
            <tr>
                <td>{{$prd->productsID}}</td>
                <td>{{$prd->title}}</td>
                <td>{{$prd->platform}}</td>
            </tr>
        @endforeach
        </table>
        <hr class="horizontal-line">
    </div>
    </div>
</div>
</div>