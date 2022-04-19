<! DOCTYPE html >
<html >	
	<link rel ="stylesheet" href ="sudoku.css"/>
	<a id = "arrow" href ="../../projects.html"><h2>&#8592;</h2></a>
	<h1>Sudoku Solver</h1>
	<div id = "Center1"><button id ="generate" onclick = "generateRandom()">Generate Random Board</button></div>
  <form method="POST" enctype="multipart/form-data" action="sudokuSolver.php">
 
  <table >
    <tr >
	<td id='r11'><input id='rr11' type="text" name="r11"/></td >
	<td id='r12'><input id='rr12' type="text" name="r12"/></td >
	<td id='r13'><input id='rr13' type="text" name="r13"/></td >
	<td id='r14'><input id='rr14' type="text" name="r14"/> </td >
	<td id='r15'><input id='rr15' type="text" name="r15"/> </td >
	<td id='r16'><input id='rr16' type="text" name="r16"/> </td >
	<td id='r17'><input id='rr17' type="text" name="r17"/> </td >
	<td id='r18'><input id='rr18' type="text" name="r18"/> </td >
	<td id='r19'><input id='rr19' type="text" name="r19"/> </td >
    </tr >
    <tr >
	<td id='r21'><input id='rr21' type="text" name="r21"/></td >
	<td id='r22'><input id='rr22' type="text" name="r22"/> </td >
	<td id='r23'><input id='rr23' type="text" name="r23"/> </td >
	<td id='r24'><input id='rr24' type="text" name="r24"/> </td >
	<td id='r25'><input id='rr25' type="text" name="r25"/> </td >
	<td id='r26'><input id='rr26' type="text" name="r26"/> </td >
	<td id='r27'><input id='rr27' type="text" name="r27"/> </td >
	<td id='r28'><input id='rr28' type="text" name="r28"/> </td >
	<td id='r29'><input id='rr29' type="text" name="r29"/> </td >
    </tr >
    <tr >
	<td id='r31'><input id='rr31' type="text" name="r31"/></td >
	<td id='r32'><input id='rr32' type="text" name="r32"/> </td >
	<td id='r33'><input id='rr33' type="text" name="r33"/> </td >
	<td id='r34'><input id='rr34' type="text" name="r34"/> </td >
	<td id='r35'><input id='rr35' type="text" name="r35"/> </td >
	<td id='r36'><input id='rr36' type="text" name="r36"/> </td >
	<td id='r37'><input id='rr37' type="text" name="r37"/> </td >
	<td id='r38'><input id='rr38' type="text" name="r38"/> </td >
	<td id='r39'><input id='rr39' type="text" name="r39"/> </td >
    </tr >
    <tr >
	<td id='r41'><input id='rr41' type="text" name="r41"/></td >
	<td id='r42'><input id='rr42' type="text" name="r42"/> </td >
	<td id='r43'><input id='rr43' type="text" name="r43"/> </td >
	<td id='r44'><input id='rr44' type="text" name="r44"/> </td >
	<td id='r45'><input id='rr45' type="text" name="r45"/> </td >
	<td id='r46'><input id='rr46' type="text" name="r46"/> </td >
	<td id='r47'><input id='rr47' type="text" name="r47"/> </td >
	<td id='r48'><input id='rr48' type="text" name="r48"/> </td >
	<td id='r49'><input id='rr49' type="text" name="r49"/> </td >
    </tr >
    <tr >
	<td id='r51'><input id='rr51' type="text" name="r51"/></td >
	<td id='r52'><input id='rr52' type="text" name="r52"/> </td >
	<td id='r53'><input id='rr53' type="text" name="r53"/> </td >
	<td id='r54'><input id='rr54' type="text" name="r54"/> </td >
	<td id='r55'><input id='rr55' type="text" name="r55"/> </td >
	<td id='r56'><input id='rr56' type="text" name="r56"/> </td >
	<td id='r57'><input id='rr57' type="text" name="r57"/> </td >
	<td id='r58'><input id='rr58' type="text" name="r58"/> </td >
	<td id='r59'><input id='rr59' type="text" name="r59"/> </td >
    </tr >
    <tr >
	<td id='r61'><input id='rr61' type="text" name="r61"/></td >
	<td id='r62'><input id='rr62' type="text" name="r62"/> </td >
	<td id='r63'><input id='rr63' type="text" name="r63"/> </td >
	<td id='r64'><input id='rr64' type="text" name="r64"/> </td >
	<td id='r65'><input id='rr65' type="text" name="r65"/> </td >
	<td id='r66'><input id='rr66' type="text" name="r66"/> </td >
	<td id='r67'><input id='rr67' type="text" name="r67"/> </td >
	<td id='r68'><input id='rr68' type="text" name="r68"/> </td >
	<td id='r69'><input id='rr69' type="text" name="r69"/> </td >
    </tr >
    <tr >
	<td id='r71'><input id='rr71' type="text" name="r71"/></td >
	<td id='r72'><input id='rr72' type="text" name="r72"/> </td >
	<td id='r73'><input id='rr73' type="text" name="r73"/> </td >
	<td id='r74'><input id='rr74' type="text" name="r74"/> </td >
	<td id='r75'><input id='rr75' type="text" name="r75"/> </td >
	<td id='r76'><input id='rr76' type="text" name="r76"/> </td >
	<td id='r77'><input id='rr77' type="text" name="r77"/> </td >
	<td id='r78'><input id='rr78' type="text" name="r78"/> </td >
	<td id='r79'><input id='rr79' type="text" name="r79"/> </td >
    </tr >
    <tr >
	<td id='r81'><input id='rr81' type="text" name="r81"/></td >
	<td id='r82'><input id='rr82' type="text" name="r82"/> </td >
	<td id='r83'><input id='rr83' type="text" name="r83"/> </td >
	<td id='r84'><input id='rr84' type="text" name="r84"/> </td >
	<td id='r85'><input id='rr85' type="text" name="r85"/> </td >
	<td id='r86'><input id='rr86' type="text" name="r86"/> </td >
	<td id='r87'><input id='rr87' type="text" name="r87"/> </td >
	<td id='r88'><input id='rr88' type="text" name="r88"/> </td >
	<td id='r89'><input id='rr89' type="text" name="r89"/> </td >
    </tr >
    <tr >
	<td id='r91'><input id='rr91' type="text" name="r91"/></td >
	<td id='r92'><input id='rr92'type="text" name="r92"/> </td >
	<td id='r93'><input id='rr93' type="text" name="r93"/> </td >
	<td id='r94'><input id='rr94' type="text" name="r94"/> </td >
	<td id='r95'><input id='rr95' type="text" name="r95"/> </td >
	<td id='r96'><input id='rr96' type="text" name="r96"/> </td >
	<td id='r97'><input id='rr97' type="text" name="r97"/> </td >
	<td id='r98'><input id='rr98' type="text" name="r98"/> </td >
	<td id='r99'><input id='rr99' type="text" name="r99"/> </td >
    </tr >
  </table >
  <div id = "center">
	  <input id ="solve" type = "submit" value= "Solve" onclick="solve()">
	  <input id ="reset" type = "reset" value= "Reset">
  <div>
  </form>

  </body >

</html>

<script>
	

	var generateRandom = function(){
		var number = Math.floor(Math.random() * 3);
	
		if(number == 0){
		var sol =
		[[0, 7, 0, 2, 3, 8, 0, 0, 0],
		[0, 0, 0, 7, 4, 0, 8, 0, 9],
		[0, 6, 8, 1, 0, 9, 0, 0, 2],
		[0, 3, 5, 4, 0, 0, 0, 0, 8],
		[6, 0, 7, 8, 0, 2, 5, 0, 1],
		[8, 0, 0, 0, 0, 5, 7, 6, 0],
		[2, 0, 0, 6, 0, 3, 1, 9, 0],
		[7, 0, 9, 0, 2, 1, 0, 0, 0],
		[0, 0, 0, 9, 7, 4, 0, 8, 0]];
	}
	else if(number == 1){
		var sol =
		[[5, 3, 0, 0, 7, 0, 0, 0, 0],
		[6, 0, 0, 1, 9, 5, 0, 0, 0],
		[0, 9, 8, 0, 0, 0, 0, 6, 0],
		[8, 0, 0, 0, 6, 0, 0, 0, 3],
		[4, 0, 0, 8, 0, 3, 0, 0, 1],
		[7, 0, 0, 0, 2, 0, 0, 0, 6],
		[0, 6, 0, 0, 0, 0, 2, 8, 0],
		[0, 0, 0, 4, 1, 9, 0, 0, 5],
		[0, 0, 0, 0, 8, 0, 0, 7, 9]];
	}

	else if(number == 2){
		var sol =
		[[3, 0, 0, 8, 0, 1, 0, 0, 2],
		[2, 0, 1, 0, 3, 0, 6, 0, 4],
		[0, 0, 0, 2, 0, 4, 0, 0, 0],
		[8, 0, 9, 0, 0, 0, 1, 0, 6],
		[0, 6, 0, 0, 0, 0, 0, 5, 0],
		[7, 0, 2, 0, 0, 0, 4, 0, 9],
		[0, 0, 0, 5, 0, 9, 0, 0, 0],
		[9, 0, 4, 0, 8, 0, 7, 0, 5],
		[6, 0, 0, 1, 0, 7, 0, 0, 3]];
	}
		
		console.log("generating random");

		for(var i =1; i<=sol.length; i++){
        for(var j = 1; j<=sol[0].length; j++){
            var element = document.getElementById('rr'+i+j).value = sol[i-1][j-1];
        }
    }
	};

</script>
