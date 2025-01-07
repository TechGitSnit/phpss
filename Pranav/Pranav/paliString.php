<html>
<body>
 <form method='post'>
  <input type='text' name='value'>
  <input type='submit' name='btn'>
 </form>
</body>
</html>
<?php
	if(isset($_POST['btn']))
	{
		$a=$_POST['value'];
		$a = strtolower(str_replace(' ', '', $a));
		$rev=strrev($a);
		if($a==$rev)
		{
			echo "srtr pali";
		}
		else{
			echo "not pali";
		}
	}
?>