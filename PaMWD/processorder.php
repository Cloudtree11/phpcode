<html>
<head>
  <title>Bob's Auto Parts - Order Reaults</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
  //echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];

  echo '<p>Your order is as follows: </p>';

  $totalqty = 0;
  $totalqty = $tireqty + $oilqty + $sparkqty;

  if($totalqty == 0) {
    echo "You didn't order anything on the previous page!<br />";
  } else {
    if($tireqty > 0)
      echo $tireqty.' tires<br />';
    if($oilqty > 0)
      echo $oilqty.' bottles of  oil<br />';
    if($sparkqty > 0)
      echo $sparkqty.' spark plugs<br />';
  }

  echo 'Item ordered: '.$totalqty.'<br />';

  

  $totalamount = 0.00;

  define('TIREPRICE', 100);
  define('OILPRICE', 10);
  define('SPARKPRICE', 4);

  $totalamount = $tireqty * TIREPRICE
               + $oilqty * OILPRICE
			   + $sparkqty * SPARKPRICE;

  echo "Subtotal: $".number_format($totalamount,2).'<br />';

  $taxrate = 0.10;
  $totalamount = $totalamount * (1 + $taxrate);
  echo "Total including tax: $".number_format($totalamount,2)."<br />";

  echo 'isset($tireqty):'.isset($tireqty).'<br />';
  echo 'isset($nothere):'.isset($nothere).'<br />';
  echo 'empty($tireqty):'.empty($tireqty).'<br />';
  echo 'empty($nothere):'.empty($nothere).'<br />';
?>
</body>
</html>
