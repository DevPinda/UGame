window.onload = function(){
    game_collection = document.getElementsByClassName("game_collection");
    game_section = document.getElementsByClassName("game_section");
    atb_button = document.getElementsByClassName("atb_button");
    empty_container = document.getElementById('empty_container');
    product_num = document.getElementById('product_num');
    price_total_display = document.getElementById('price_total');
    basket_link = document.getElementById('basket_link');
    cart_window = document.getElementById('cart_window');
    close_button = document.getElementById('close_button');
    checkout_button = document.getElementById('checkout_button')

    var added_item_id = 0; 
    var cart_total = 0;
    var price_total_rounded = 0;
    var list_of_products = []

    basket_link.addEventListener("click", function(){
        cart_window.classList.add('active');
    })

    close_button.addEventListener("click", function(){
        cart_window.classList.remove('active');
    })

    for (let i = 0; i < atb_button.length; i++ ){
        atb_button[i].addEventListener("click", function(e){
        
            added_item_id += 1;
            console.log(added_item_id);
        
            if (typeof(Storage) !== 'undefined'){
                let game_item = {
                    id: i + 1,
                    price: e.target.parentElement.children[1].textContent,
                    title: e.target.parentElement.children[2].textContent,
                    genre_age: e.target.parentElement.children[3].textContent,
                    item_num: 1
                };
        
                if (JSON.parse(localStorage.getItem('game_items')) === null){
                    list_of_products.push(game_item);
                    localStorage.setItem("game_items",JSON.stringify(list_of_products));
                    window.location.reload();
                }else{
                    const local_items = JSON.parse(localStorage.getItem("game_items"));
                    local_items.map(data=>{
                        if (game_item.id == data.id){
                            game_item.item_num = data.item_num + 1;
                        }
                        else{
                            list_of_products.push(data);
                        }
                    });
                    list_of_products.push(game_item);
                    localStorage.setItem("game_items", JSON.stringify(list_of_products));
                    window.location.reload();
                }
            }
        })
    }

    const cart_table = cart_window.querySelector('table');
    const basket_title = document.getElementById('basket_title');
    const title_total = document.getElementById('total_title');

    const basket_noti = document.getElementById('item_num_noti');
    let item_num = 0;
    JSON.parse(localStorage.getItem("game_items")).map(data =>{
        item_num = item_num + data.item_num;
    })
    basket_noti.innerHTML = item_num;

    let price_total = 0;
    JSON.parse(localStorage.getItem("game_items")).map(data =>{
        price_total = price_total + parseFloat(data.price.substring(2));
    })

    price_total_round = price_total.toFixed(2)
    total_title.innerHTML = price_total_round;
    
    basket_title.innerHTML = 'Your basket' + ' (' + item_num + ' Items)';
    title_total.innerHTML = 'Subtotal: ' + '£' + price_total_round;
   
    let table_data = '';
    table_data += '<tr id = "top_headers"><th>Item Price</th><th>Item Title</th><th>Genre and Age</th><th>Quantity</th><tr>';
    console.log("!")
    game_item_arr = JSON.parse(localStorage.getItem("game_items"));
    console.log(game_item_arr);
    
    console.log("!")
    if (game_item_arr === null || game_item_arr.length == 0){
        table_data = 'No items in basket';
    }else{
        JSON.parse(localStorage.getItem("game_items")).map(data=>{

            table_data += '<tr id = "table_row_d"><th id = "game_id">'+data.id+'</th><th id = "disp_game_price">'+data.price+'</th><th id = "disp_title">'+data.title+
            '</th><th>'+data.genre_age+'</th><th id = "item_quantity"> Qty: '+data.item_num+'</th><th id = "remove_item_"><a id = "remove_item_" href = "#" onclick = del_item(this)>Remove</a></th><tr>'
        });
    }
    cart_table.innerHTML = table_data;
}

    function delete_game(item){
        del_item = document.getElementById(item);
        game_price = del_item.children[0].innerText;
        game_price_convert = parseFloat(game_price.substring(1));
        round_game_price = parseFloat(game_price_convert.toFixed(2));
        cart_total -= 1;
        price_total_rounded = price_total_rounded - round_game_price;
        price_total_rounded = parseFloat(price_total_rounded.toFixed(2));
        price_total_display.innerText = 'Price Total: ' + price_total_rounded;
        console.log(cart_total)
        product_num.innerText = 'Items: ' + cart_total; 
        document.getElementById(item).remove();

        console.log(cart_total);
        if (cart_total == 0){
            empty_container.style.display = 'none';
        }
    }
   

    
