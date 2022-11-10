//stores a elements with the class name of 'game_collection' inside a list
game_collection = document.getElementsByClassName("game_collection");
//stores a elements with the class name of 'game_section' inside a list
game_section = document.getElementsByClassName("game_section");
//stores a elements with the class name of 'atb_button' inside a list
atb_button = document.getElementsByClassName("atb_button");

//var added_item_id = 0; 

//for (var i = 0; i < atb_button.length; i++)
    //atb_button[i].addEventListener("click", () => {

    //})

var added_item_id = 0; 
function add_to_cart (item){
    added_item_id += 1;
    var all_games = document.getElementsByClassName('game_section');
    var selected_game = document.createElement('div');
    selected_game.classList.add('cart_image');
    selected_game.setAttribute('id', added_item_id);
    var game_title = document.createElement('p');
    var text = document.createTextNode("test paragraph");
    game_title.append(text);
    //game_title.setAttribute('class', 'game_name');
    selected_game.append(game_title);
    var empty_container = document.getElementById('empty_container');
    empty_container.append(selected_game)
}

//basket functionality is in development.