function setup(){
    console.log("se")
    document.getElementById("reset").onclick = function() {clear()};
}

function display(value){
    var head = document.getElementById("header");
    if(value == '+' || value == '-' || value == '/' || value == '*')
        head.innerHTML += " " + value + " ";
    else
        head.innerHTML += value;
}

function calculate(){
    var update = document.getElementById("header");
    var head = document.getElementById("header").innerHTML;
    var array = head.split(" ");
    console.log(array);

    var answer = parseFloat(array[0]);

    console.log(answer);

    for(var i = 1; i<array.length-1;i+=2){
        console.log(array[i]);
        if(array[i] == '+'){
            answer += parseFloat(array[i+1]);
            console.log("answer" + array[i]) + " " + parseInt(array[i+1]);
        }
        else if(array[i] == '-')
            answer -= parseFloat(array[i+1])
        else if(array[i] == '/')
            answer /= parseFloat(array[i+1])
        else
            answer *= parseFloat(array[i+1])
    }
    console.log(answer);
    update.innerHTML += " = " + answer;
    
    var x =  document.getElementsByTagName("BUTTON"); 
    for(var i =0; i<x.length; i++){
        document.getElementsByTagName("BUTTON")[i].onclick = {};
    }

    document.getElementById("reset").onclick = function() {clear()};
};

function clear(){
    console.log("CLEAR");
    document.getElementById("header").innerHTML = "";
    var x =  document.getElementsByTagName("BUTTON"); 
    for(var i =0; i<x.length; i++){
        const val = document.getElementsByTagName("BUTTON")[i].value;
        document.getElementsByTagName("BUTTON")[i].onclick = function() {display(val)};
    }
    document.getElementById("calculate").onclick = function() {calculate()};
    document.getElementById("reset").onclick = function() {clear()};
};