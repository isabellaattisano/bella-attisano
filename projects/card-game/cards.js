var images = ["", "bunny.jpeg", "bear.png", "kitten.jpeg", "dog.jpeg", "panda.png", "koala.jpeg"];
var click_array = [];
var count = 1, correct = 0;
function setup(){
    var board = document.getElementById("board");
    
    var array = shuffle();
    console.log("array" + array); 

         for (var i = 0; i < array.length; i++) {
             var button = document.createElement("BUTTON");
             button.classList.add("card");
             const value = array[i];
             button.id = value;
             button.value = value;
             button.onclick = function(){
             clicked(value);};
             board.appendChild(button);
         }

}

function shuffle(){
    var array = ["1a","1b","2a","2b","3a","3b","4a","4b","5a","5b","6a","6b"];
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

function clicked(value){
    var val = value[0];
    var link = "images/"+images[parseInt(val)];
    document.getElementById(value).style.backgroundImage = "url("+link+")";
    if(click_array.length == 1){
        click_array[click_array.length] = value;
        const val1 = click_array[0];
        const val2 = click_array[1];
        console.log(click_array[0], click_array[1]);
        setTimeout(function() {
            compare(val1, val2)}, 600);
        click_array = [];

    }
    else{
        click_array[click_array.length] = value;
    }
}

function compare(value1, value2){
    console.log(value1);
    console.log(value2);
    if(value1[0] == value2[0]){
        document.getElementById(value1).style.backgroundColor = "white";
        document.getElementById(value2).style.backgroundColor = "white";
        correct++;
        if(correct == 6){
            document.getElementById("win").innerHTML = "YOU WIN!";
            alert("Congrats, you win!");
            var x =  document.getElementsByClassName("card"); 
            for(var i =0; i<x.length; i++){
                document.getElementsByClassName("card")[i].onclick = {};
            }
        }
    }
    else{
        document.getElementById(value1).style.backgroundImage = "url('images/back_side.jpeg')";
        document.getElementById(value2).style.backgroundImage = "url('images/back_side.jpeg')";
        count++;
        if(count == 10){
            document.getElementById("win").innerHTML = "YOU LOSE!";
            var x =  document.getElementsByClassName("card"); 
            for(var i =0; i<x.length; i++){
                document.getElementsByClassName("card")[i].onclick = {};
            }
            alert("Sorry, you lose!");
        }
    }
}