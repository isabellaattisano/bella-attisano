
<?php
    $values[] = array();
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        foreach($_POST as $key=>$value){

            array_push($values, $value);
        }
    }
?>

<html>	
<head >
    <link rel ="stylesheet" href ="sudokuSolver.css"/>
  </head >
  <body onload="solve()">
  <a id = "arrow" href ="../../projects.html"><h2>&#8592;</h2></a>
  <h1>Solved Sudoku</h1>
  <table>
   <td id='r11'>0</td >
	<td id='r12'>0</td >
	<td id='r13'>0</td >
	<td id='r14'>0</td >
	<td id='r15'>0</td >
	<td id='r16'>0</td >
	<td id='r17'>0</td >
	<td id='r18'>0</td >
	<td id='r19'>0</td >
    </tr >
    <tr >
	<td id='r21' >0</td >
	<td id='r22' >0</td >
	<td id='r23' >0</td >
	<td id='r24' >0</td >
	<td id='r25' >0</td >
	<td id='r26' >0</td >
	<td id='r27' >0</td >
	<td id='r28' >0</td >
	<td id='r29' >0</td >
    </tr >
    <tr >
  	<td id='r31'>0</td >
   	<td id='r32'>0</td >
   	<td id='r33'>0</td >
	<td id='r34'>0</td >
	<td id='r35'>0</td >
	<td id='r36'>0</td >
	<td id='r37'>0</td >
	<td id='r38'>0</td >
	<td id='r39'>0</td >
    </tr >
    <tr >
	<td id='r41'>0</td >
	<td id='r42'>0</td >
	<td id='r43'>0</td >
	<td id='r44'>0</td >
	<td id='r45'>0</td >
	<td id='r46'>0</td >
	<td id='r47'>0</td >
	<td id='r48'>0</td >
	<td id='r49'>0</td >
    </tr >
    <tr >
	<td id='r51'>0</td >
	<td id='r52'>0</td >
	<td id='r53'>0</td >
	<td id='r54'>0</td >
	<td id='r55'>0</td >
	<td id='r56'>0</td >
	<td id='r57'>0</td >
	<td id='r58'>0</td >
	<td id='r59'>0</td >
    </tr >
    <tr >
	<td id='r61'>0</td >
	<td id='r62'>0</td >
	<td id='r63'>0</td >
	<td id='r64'>0</td >
	<td id='r65'>0</td >
	<td id='r66'>0</td >
	<td id='r67'>0</td >
	<td id='r68'>0</td >
	<td id='r69'>0</td >
    </tr 
    <tr >
	<td id='r71'>0</td >
	<td id='r72'>0</td >
	<td id='r73'>0</td >
	<td id='r74'>0</td >
	<td id='r75'>0</td >
	<td id='r76'>0</td >
	<td id='r77'>0</td >
	<td id='r78'>0</td >
	<td id='r79'>0</td >
    </tr >
    <tr >
	<td id='r81'>0</td >
	<td id='r82'>0</td >
	<td id='r83'>0</td >
	<td id='r84'>0</td >
	<td id='r85'>0</td >
	<td id='r86'>0</td >
	<td id='r87'>0</td >
	<td id='r88'>0</td >
	<td id='r89'>0</td >
    </tr >
    <tr >
	<td id='r91' >0</td >
	<td id='r92' >0</td >
	<td id='r93' >0</td >
	<td id='r94' >0</td >
	<td id='r95' >0</td >
	<td id='r96' >0</td >
	<td id='r97' >0</td >
	<td id='r98' >0</td >
	<td id='r99' >0</td >
    </tr >
  </table >
	</form>
  </body >
</html>


<script>

    var js = <?php echo json_encode($values);?>;

    var sol = [[],[],[],[],[],[],[],[],[]];
    var count =1;

    for(var i =0; i<9; i++){
        for(var j =0; j<9; j++){
            if(count<=81)
                sol[i][j] = js[count];
            count++;
        }
	}

var solve = function() {
   var boo = recurSolv(0,0)
   if(boo == true)
        printBoard();
};

var recurSolv = function(row, col){
    console.log("row: " + row + " col: " + col);
    if(col == 9){
        row+=1;
        col = 0;
    }

    if(row > sol.length-1 || col > sol.length-1)
        return true;
    
    if(sol[row][col] != 0)
        return recurSolv(row, col+1)

    console.log("makes: " + row + " col: " + col);

    if(sol[row][col] == 0){
        for(var i = 1; i<10; i++){
            if(isValid(row, col, i) == true){
                sol[row][col] = i;
                if(recurSolv(row, col+1))
                    return true;
             }
            sol[row][col] = 0;
        }
    }

    return false;
};

function isValid(row, col, i){
    //col
    for(var j =0; j<9; j++)
        if(sol[j][col] == i)
            return false;

    //row
    for(var j =0; j<9; j++)
        if(sol[row][j] == i)
            return false;

    //box 

    var row2 = row - row%3;
    var col2 = col - col%3;

    for(var j =0; j<3; j++)
       for(var k =0; k<3; k++)
            if( sol[row2+j][col2+k] == i)
                return false;


    return true;
};var solve = function() {
   var boo = recurSolv(0,0)
   if(boo == true)
        printBoard();
};

var recurSolv = function(row, col){
    console.log("row: " + row + " col: " + col);
    if(col == 9){
        row+=1;
        col = 0;
    }

    if(row > sol.length-1 || col > sol.length-1)
        return true;
    
    if(sol[row][col] != 0)
        return recurSolv(row, col+1)

    console.log("makes: " + row + " col: " + col);

    if(sol[row][col] == 0){
        for(var i = 1; i<10; i++){
            if(isValid(row, col, i) == true){
                sol[row][col] = i;
                if(recurSolv(row, col+1))
                    return true;
             }
            sol[row][col] = 0;
        }
    }

    return false;
};

function isValid(row, col, i){
    //col
    for(var j =0; j<9; j++)
        if(sol[j][col] == i)
            return false;

    //row
    for(var j =0; j<9; j++)
        if(sol[row][j] == i)
            return false;

    //box 

    var row2 = row - row%3;
    var col2 = col - col%3;

    for(var j =0; j<3; j++)
       for(var k =0; k<3; k++)
            if( sol[row2+j][col2+k] == i)
                return false;


    return true;
};

var printBoard = function () {
    
    for(var i =1; i<=sol.length; i++){
        for(var j = 1; j<=sol[0].length; j++){
            var element = document.getElementById('r'+i+j);
            element.innerHTML = sol[i-1][j-1];
        }
    }
};

printBoard();

 </script>
