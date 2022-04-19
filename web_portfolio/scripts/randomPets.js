var loadPetImages = function() {
    getCatImage();
    getDogImage();
}
var getDogImage = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "https://dog.ceo/api/breeds/image/random", true);
    request.onload = function(){
        var data = JSON.parse(this.response);
        console.log(data.message);
        document.getElementById("dogImg").src = data.message;
    };
    request.send();
}

var getCatImage = function() {
    var request = new XMLHttpRequest();
    request.open("GET", "https://api.thecatapi.com/v1/images/search", true);
    request.onload = function(){
        var dataArray = JSON.parse(this.response);
        document.getElementById("catImg").src = dataArray[0].url;
    };
    request.send(); 
}