var array = [1,2,3,4,5];

var print3Ways = function(){
    alert("hello world");
    console.log("hello world");
    console.log("array is: " + array);
    document.write("<h1>Hello World</h1>");
}

var funWithArrays = function(){
    document.write("Array holds the values: <br>");
    for(var i =0; i<array.length; i++){
        document.write(array[i]);
    }
    document.write("<br>The Sum of the array is: " +sumArray()+"</br>");
    document.write("<br>The min value of the array is: " +minArray()+"</br>");
    document.write("<br>The max value of the array is: " +maxArray()+"</br>");

}

var sumArray = function(){
    var sum = 0;
    for(var i =0; i<array.length; i++){
        sum = sum + array[i];
    }
    return sum;
}

var minArray = function(){
   var min = array[0];
   for(var i =0; i<array.length; i++){
        if(array[i] < min)
            min = array[i];
    }
    return min;
}

var maxArray = function(){
    var max = array[0];
   for(var i =0; i<array.length; i++){
        if(array[i] > max)
            max = array[i];
    }
    return max;
}