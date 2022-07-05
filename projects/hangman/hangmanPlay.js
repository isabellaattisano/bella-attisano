

var letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 
    'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

var guesses = 6;
var correctGuesses = 0;

function getWord(){
        var request = new XMLHttpRequest();
        request.open("GET", "https://random-words-api.vercel.app/word", true);
        request.onload = function(){
            var data = JSON.parse(this.response);
            words = data[0].word;
            play(words.toLowerCase())
            
        };
        request.send();
    }

    function play(str){
        var list = document.getElementById("alphabet");
         for (var i = 0; i < letters.length; i++) {
             var button = document.createElement("BUTTON");
             button.classList.add("letters");
             button.id = letters[i];
             button.innerHTML = letters[i];
             const num = i;
             button.onclick = function() {clicked(letters[num], str)};
             list.appendChild(button);
         }

         console.log(str);
         printLines(str.length, str);

     };

     function printLines(length, str){
        var list = document.getElementById("letters");
        for (var i = 0; i < length; i++) {
            var line = document.createElement("h2");
            line.classList.add("lines");
            line.classList.add("word"+str[i]);
            line.innerHTML = "_";
            list.appendChild(line);
        }
     }

     function clicked(value, str){
        document.getElementById(value).style.background = "rgb(81, 133, 81)";
        var guessedLetter = value;
        console.log(guessedLetter);

        var found = false;

        for(var i =0; i<str.length; i++){
            if(str[i].toLowerCase() == value){
                found = true;
            }
        }

        console.log(found);

        if(found==true){
            var x =  document.getElementsByClassName("word"+value); 
            console.log(x.length);
            for(var i =0; i<x.length; i++){
                document.getElementsByClassName("word"+value)[i].innerHTML = value;
            }
            correctGuesses+=x.length;
            console.log("correct " + correctGuesses);
            win(correctGuesses, str.length, str);
        }
        else{
            guesses--;
            console.log(guesses, str.length);
            draw(guesses);
            win(correctGuesses, str.length, str);
        }
     }

    function draw(guesses){
        console.log("n" + guesses);
        if(guesses == 5){
            document.getElementById("head").style.color = "#97ba97";
        }
        else if(guesses == 4){
            document.getElementById("body").style.backgroundColor = "#97ba97";
        }

        else if(guesses == 3){
            document.getElementById("arm1").style.backgroundColor = "#97ba97";
        }

        else if(guesses == 2){
            document.getElementById("arm2").style.backgroundColor = "#97ba97";
        }

        else if(guesses == 1){
            document.getElementById("leg1").style.backgroundColor = "#97ba97";
        }

        else if(guesses == 0){
            document.getElementById("leg2").style.backgroundColor = "#97ba97";
        }
    }

    function win(correct, length, str){
        if(correct >= length){
            document.getElementById("win").innerHTML = "You Win!";
            var x =  document.getElementsByClassName("letters"); 
            console.log(x.length);
            for(var i =0; i<x.length; i++){
                document.getElementsByClassName("letters")[i].onclick = {};
            }
        }

        else if(correct != length && guesses == 0){
            document.getElementById("win").innerHTML = "You Lose!<br>The word is "  + str;
            var x =  document.getElementsByClassName("letters"); 
            console.log(x.length);
            for(var i =0; i<x.length; i++){
                document.getElementsByClassName("letters")[i].onclick = {};
            }
        }
    }



