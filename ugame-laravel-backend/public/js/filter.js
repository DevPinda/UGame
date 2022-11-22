//Genre filter is now functioninal.
//I'm working on the remaining filters:
//Price Range
//Age Rating
//Platform

const genre_filter = document.getElementById('filter_genre');
const game_products = document.querySelectorAll('.game_section');

genre_filter.addEventListener('input', select_genre);

function select_genre(){
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



