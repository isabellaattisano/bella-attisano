var updateChecking = function(){
    checkingId = document.getElementById("checkingBalance");
    console.log(checkingId);
    var cBalance = checkingId.innerHTML;
    console.log(cBalance);
    cBalance = parseInt(cBalance, 10);
    cBalance += 100;
    checkingId.innerHTML = cBalance;
}

var updateSavings = function(){
    savingsId = document.getElementById("savingsBalance");
    var sBalance = savingsId.innerHTML;
    sBalance = parseInt(sBalance, 10);
    if(sBalance == 0){
        document.getElementById("bankAccountTitle").innerHTML = "Bank Account";
    }
    sBalance+=100;
    savingsId.innerHTML = sBalance;
}

var emptySavings = function(){
    document.getElementById("savingsBalance").innerHTML = 0;

    document.getElementById("bankAccountTitle").innerHTML = "Alert: Savings Empty";

}