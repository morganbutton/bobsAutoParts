<?php   
    $tireqty =$_POST['tireqty'];
    $oilqty =$_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $find = $_POST['find'];
    $totalqty = 0;
    $totalamount = 0.00;
    
    /* price doesnt change so we use constants*/
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);
    $totalqty = $tireqty + $oilqty + $sparkqty;
  
    if($totalqty == 0){
        echo '<p style="color:red">';
        echo "you did not order anything!</br>";
        echo '</p>';
    }else{
        switch($find){
            case "a": echo "<p> Regular Customer.</p></br>";
            break;
            case "b": echo "<p>Customer referred by TV advert.</p></br>";
            break;
            case "c": echo "<p>Customer referred by PhoneDirectory. </p></br>";
            break;
            case "d": echo "<p> Customer referred by Word of Mouth</p></br>";
            break;
            default:
            echo "<p>We do not know how this customer found us.</p>";
            break;
        }
        echo "<p> Your order is as follows: </p>";
        echo htmlspecialchars($tireqty).' tires</br>';
        echo htmlspecialchars($oilqty).' bottles of oil</br>';
        echo htmlspecialchars($sparkqty).' spark plugs</br>';
        echo "<p> Items Ordered: " .$totalqty."<br/>";
    $totalamount = $tireqty * TIREPRICE
                    + $oilqty * OILPRICE
                    + $sparkqty * SPARKPRICE;
    
        echo "Subtotal: $".number_format($totalamount, 2)."</p>";
        echo "<p> Order Processed at";
        echo date('H:i, jS F Y');
        echo "</p>";
    }

    
?>