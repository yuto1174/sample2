ecvghbjkl,
<!DOCTYPE html>
<html dir="ltr" lang="ja">
<meta charset="UTF-8">
<html>
<body>
  <input type="button" onclick="location.href='https://pure-lake-58882.herokuapp.com/home.php'" value="new">
  <?php
  $pg_conn = pg_connect("host=ec2-184-73-243-101.compute-1.amazonaws.com dbname=dace40ccbaitp9
user=patmewgcbrrkfq password=ca9e34b51fba3ac0467245d3e7c619ce342c414d08848cd434fcefc6907a57dd");
  
  $sql_rank = "SELECT * FROM playerinfo";
	$res_rank = pg_query($pg_conn,$sql_rank);
	var_dump($res_rank);
	$rank = pg_fetch_all($res_rank);
  print_f($rank);
  ?>
  
  </body>
</html>
