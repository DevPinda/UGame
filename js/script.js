//stores a elements with the class name of 'game_collection' inside a list
game_collection = document.getElementsByClassName("game_collection");
//stores a elements with the class name of 'game_section' inside a list
game_section = document.getElementsByClassName("game_section");
//stores a elements with the class name of 'atb_button' inside a list
atb_button = document.getElementsByClassName("atb_button");

for (var i = 0; i < atb_button.length; i++)
    atb_button[i].addEventListener("click", () => {
        console.log("button click test");
        //basket functionality is in development.
    })