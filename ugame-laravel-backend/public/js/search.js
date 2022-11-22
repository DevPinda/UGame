search_bar = document.getElementById("search");
search_button = document.getElementById("search_button");
search_status = document.getElementById("search_status");

search_bar.addEventListener('input', filter);

function filter(){
    const user_input = document.getElementById("search");
    const text_val = user_input.value.toLowerCase();
    const game_products = document.querySelectorAll('.game_section');

    game_products.forEach((item) =>{
        let product_text = item.textContent;
        if (product_text.toLowerCase().includes(text_val.toLowerCase())){
            item.style.display = '';
        }
        else{
            item.style.display = 'none';
        }
    })
}
