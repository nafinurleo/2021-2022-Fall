<html>
	<body>
		<?php
		$a=array(1,2,5,7,9,12,18);
		$l=count($a);
		for($i=0;$i<$l;$i++)
		{
		if($a[$i]%3==0){
		echo "$a[$i]<br/>";
		}
    		}
		echo "<br/>";
		?>

		<?php
		$associative_arr=array("Name"=>"Nafinur Leo","Id"=>"20-42195-1","Cgpa"=>"3.89");
		echo $associative_arr["Name"];
		echo "<br/>";
		echo $associative_arr["Id"];
		echo "<br/>";
		echo $associative_arr["Cgpa"];
		echo "<br/>";
		echo "<br/>";
		?>

		<?php
		for($k=0; $k<4; $k++){
    		for($i = 0; $i<4; $i++){
    		echo "O";
    		for($j = 0; $j<1; $j++){
        		echo "X";
        	}
    		}
        	echo "<br>";
		}
		?>
	</body>
</html>