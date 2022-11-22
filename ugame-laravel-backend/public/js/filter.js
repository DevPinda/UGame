const genre_filter = document.getElementById('filter_genre');
const price_filter = document.getElementById('filter_price');
const age_filter = document.getElementById('filter_age');
const platform_filter = document.getElementById('filter_platform');
const game_products = document.querySelectorAll('.game_section');
const reset_filter_button = document.getElementById('reset_filter_button');
search_status = document.getElementById("search_status");

genre_filter.addEventListener('input', select_genre);
price_filter.addEventListener('input', select_price);
age_filter.addEventListener('input', select_age);
reset_filter_button.addEventListener('click', reset_filters)
platform_filter.addEventListener('input', select_platform);

function reset_filters(){
    location.reload()
}

function select_genre(){
    price_filter.selectedIndex = 0;
    age_filter.selectedIndex = 0;
    platform_filter.selectedIndex = 0;

    action_adventure_label = 'Action Adventure';
    platformer_label = 'Platformer';
    rpg_label = 'RPG';
    horror_label = 'Horror';
    shooter_label = 'Shooter';
    fighting_label = 'Fighting';
    racing_label = 'Racing';
    sport_label = 'Sport';
    
    if (genre_filter.selectedOptions[0].value  == '+ Action Adventure'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(action_adventure_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (genre_filter.selectedOptions[0].value  == '+ Platformer'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(platformer_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (genre_filter.selectedOptions[0].value  == '+ RPG'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(rpg_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (genre_filter.selectedOptions[0].value  == '+ Horror'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(horror_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (genre_filter.selectedOptions[0].value  == '+ Shooter'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(shooter_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (genre_filter.selectedOptions[0].value  == '+ Fighting'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(fighting_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (genre_filter.selectedOptions[0].value  == '+ Racing'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(racing_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (genre_filter.selectedOptions[0].value  == '+ Sport'){
        game_products.forEach((item) =>{
            let genre_text = item.children[3].textContent;
            if (genre_text.toLowerCase().includes(sport_label.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }
}

function select_price(){
    genre_filter.selectedIndex = 0;
    age_filter.selectedIndex = 0;
    platform_filter.selectedIndex = 0;

    if (price_filter.selectedOptions[0].value  == '£0.00 - £49.99'){
        game_products.forEach((item) =>{
            let price_text = item.children[1].textContent;
            game_price = parseFloat(price_text.substring(2));
           
            if (game_price > 0.00 && game_price < 49.99){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (price_filter.selectedOptions[0].value  == '£50.00 - £99.99'){
        game_products.forEach((item) =>{
            let price_text = item.children[1].textContent;
            game_price = parseFloat(price_text.substring(2));

            if (game_price > 50.00 && game_price < 99.99){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (price_filter.selectedOptions[0].value  == '£200.00 - £249.99'){
        game_products.forEach((item) =>{
            let price_text = item.children[1].textContent;
            game_price = parseFloat(price_text.substring(2));

            if (game_price > 200.00 && game_price < 249.99){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (price_filter.selectedOptions[0].value  == '£250.00 - £299.99'){
        game_products.forEach((item) =>{
            let price_text = item.children[1].textContent;
            game_price = parseFloat(price_text.substring(2));

            if (game_price > 250.00 && game_price < 299.99){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }
}

function select_age(){
    genre_filter.selectedIndex = 0;
    price_filter.selectedIndex = 0;
    platform_filter.selectedIndex = 0;

    age_1 = '18+';
    age_2 = '16+';
    age_3 = '12+';
    age_4 = '7+';
    age_5 = '3+';
    
    if (age_filter.selectedOptions[0].value  == 'Age 12+'){
        game_products.forEach((item) =>{
            let age_text = item.children[3].textContent;
            console.log(age_text)
            if (age_text.toLowerCase().includes(age_3.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (age_filter.selectedOptions[0].value  == 'Age 16+'){
        game_products.forEach((item) =>{
            let age_text = item.children[3].textContent;
            if (age_text.toLowerCase().includes(age_2.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (age_filter.selectedOptions[0].value  == 'Age 18+'){
        game_products.forEach((item) =>{
            let age_text = item.children[3].textContent;
            if (age_text.toLowerCase().includes(age_1.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (age_filter.selectedOptions[0].value  == 'Age 7+'){
        game_products.forEach((item) =>{
            let age_text = item.children[3].textContent;
            if (age_text.toLowerCase().includes(age_4.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (age_filter.selectedOptions[0].value  == 'Age 3+'){
        game_products.forEach((item) =>{
            let age_text = item.children[3].textContent;
            if (age_text.toLowerCase().includes(age_5.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }
}

function select_platform(){
    genre_filter.selectedIndex = 0;
    age_filter.selectedIndex = 0;
    price_filter.selectedIndex = 0;

    playstation_5 = 'PlayStation 5'
    playstation_4 = 'PlayStation 4'
    xbox_one = 'Xbox One'
    xbox_series_x = 'Xbox Series X'
    nintendo_switch = 'Nintendo Switch'
    
    if (platform_filter.selectedOptions[0].value  == 'PlayStation 5'){
        game_products.forEach((item) =>{
            let platform_text = item.children[2].textContent;
            console.log(platform_text);
            if (platform_text.toLowerCase().includes(playstation_5.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (platform_filter.selectedOptions[0].value  == 'PlayStation 4'){
        game_products.forEach((item) =>{
            let platform_text = item.children[2].textContent;
            if (platform_text.toLowerCase().includes(playstation_4.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (platform_filter.selectedOptions[0].value  == 'Xbox One'){
        game_products.forEach((item) =>{
            let platform_text = item.children[2].textContent;
            if (platform_text.toLowerCase().includes(xbox_one.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (platform_filter.selectedOptions[0].value  == 'Xbox Series X'){
        game_products.forEach((item) =>{
            let platform_text = item.children[2].textContent;
            if (platform_text.toLowerCase().includes(xbox_series_x.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }

    if (platform_filter.selectedOptions[0].value  == 'Nintendo Switch'){
        game_products.forEach((item) =>{
            let platform_text = item.children[2].textContent;
            if (platform_text.toLowerCase().includes(nintendo_switch.toLowerCase())){
                item.style.display = '';
            }
            else{
                item.style.display = 'none';
            }
        })
    }
}
    


