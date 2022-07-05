function openNav(){
    document.getElementById("header").id = "overflowHeader";
    document.getElementById("nav").id = "overflowNav";
    document.getElementById("name").id = "overflowName";
    document.getElementById("small").id = "overflowSmall";

    document.getElementById("ul").id = "overflowUl";
    document.getElementById("closebtn").style.display = "inline";  
    document.getElementById("overflowHeader").style.animation = "open_navigator 0.7s";
    document.getElementById("person").id = "overflowperson";
    document.getElementById("plant").id = "overflowplant";
 }

 function closeNav(){
    document.getElementById("overflowHeader").id = "header";
    document.getElementById("overflowNav").id = "nav";
    document.getElementById("overflowName").id = "name";
    document.getElementById("overflowSmall").id = "small";
    document.getElementById("overflowUl").id = "ul";
    document.getElementById("overflowperson").id = "person";
    document.getElementById("overflowplant").id = "plant";
    document.getElementById("closebtn").style.display = "none";
    document.getElementById("header").style.animation= "close_navigator 0.6s";
    document.getElementById("name").style.animation= "close_navigator_text 0.5s";
    document.getElementById("nav").style.animation= "close_navigator_text 0.5s";
    document.getElementById("small").style.animation= "close_navigator_text 0.5s";
    document.getElementById("person").style.animation = "close_navigator_text 0.5s";
    document.getElementById("plant").style.animation = "close_navigator_text 0.5s";

    // document.getElementById("nav ul").style.animation= "close_navigator_text 0.8s";
    // document.getElementById("ul li").style.animation= "close_navigator_text 0.8s";
    // document.getElementById("li a").style.animation= "close_navigator_text 0.8s";


 }