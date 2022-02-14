
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TipsNote : GitHub Pages Sample</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/marx/2.0.4/marx.css">
</head>
<input type="button" onclick="location.href='https://pure-lake-58882.herokuapp.com/home.php'" value="new">
<?php
  $pg_conn = pg_connect("host=ec2-184-73-243-101.compute-1.amazonaws.com dbname=dace40ccbaitp9
user=patmewgcbrrkfq password=ca9e34b51fba3ac0467245d3e7c619ce342c414d08848cd434fcefc6907a57dd");
	
	$sql_rank = "SELECT * FROM playerinfo WHERE ".'"clearState"'." ='1' ORDER BY date_time desc";
	$res_rank = pg_query($pg_conn,$sql_rank);
	//var_dump($res_rank);
	$rank = pg_fetch_all($res_rank);

    $party_str = $rank['0']['party'];
        $party_arr = explode("_", $party_str);  
        print_r($party_arr);
  ?>
</body>
</html>
