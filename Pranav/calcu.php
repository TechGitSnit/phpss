<html>
<body>
 <form method='post'>
  <input type='text' name='n1'>
  <select name="opr" id="">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
    </select>
  <input type='text' name='n2'>
  <input type='submit' name='calculate'>
 </form>
</body>
</html>
<?php
if(isset($_POST['calculate']))
{
    $a=$_POST['n1'];
    $b=$_POST['n2'];
     $a = floatval($a);
     $b = floatval($b);

    $oper=$_POST['opr'];

    $res;
    switch($oper)
    {
        case '+':
            $res=$a+$b;
            echo 'sum='.$res;
            break;
        case '-':
            $res=$a-$b;
            echo 'diff='.$res;
            break;
         case '*':
            $res=$a*$b;
            echo 'mul='.$res;
            break;
          case '/':
            $res=$a/$b;
            echo 'div='.$res;
            break;

        default:
            echo "invali";

    }
}
?>