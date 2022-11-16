game_collection = document.getElementsByClassName("game_collection");
game_section = document.getElementsByClassName("game_section");
atb_button = document.getElementsByClassName("atb_button");
empty_container = document.getElementById('empty_container');
product_num = document.getElementById('product_num');
price_total_display = document.getElementById('price_total');

var added_item_id = 0; 
var cart_total = 0;
var price_total_rounded = 0;

function add_to_cart (item){
    price_total_rounded = parseFloat(price_total_rounded.toFixed(2));
    added_item_id += 1;
    var all_games = document.getElementsByClassName('game_section');
    var selected_game = document.createElement('div');
    selected_game.classList.add('cart_image');
    selected_game.setAttribute('id', added_item_id);

    var game_price = document.createElement('p');
    game_price.innerText = item.children[1].innerText;
   
    var game_title = document.createElement('p');
    game_title.innerText = item.children[2].innerText;

    var delete_button = document.createElement('button');
    delete_button.innerText = 'Delete';
    delete_button.setAttribute('onclick', 'delete_game('+added_item_id+')')

    selected_game.append(game_price);
    selected_game.append(game_title);
    selected_game.append(delete_button);
    empty_container.append(selected_game)

    cart_total += 1;
    game_price = parseFloat(game_price.innerText.substring(1));
    round_game_price = parseFloat(game_price.toFixed(2));
    price_total_rounded += round_game_price;

    price_total_display.innerText = 'Price Total: ' + price_total_rounded;
    product_num.innerText = 'Items: ' + cart_total; 
}

function delete_game(item){
    price_total_rounded = parseFloat(price_total_rounded.toFixed(2));
    del_item = document.getElementById(item);
    game_price = del_item.children[0].innerText;
    game_price_convert = parseFloat(game_price.substring(1));
    round_game_price = parseFloat(game_price_convert.toFixed(2));
    cart_total -= 1;
    price_total_rounded = price_total_rounded - round_game_price;
    price_total_display.innerText = 'Price Total: ' + price_total_rounded;
    product_num.innerText = 'Items: ' + cart_total; 
    document.getElementById(item).remove();
}

//basket functionality is in development.