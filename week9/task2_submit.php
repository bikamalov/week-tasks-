<?php
    print "You added new item: <strong>" . $_GET["maker"] . " " . $_GET["model"] . "</strong><br>";
    print 'produced in '.$_GET["year"]. ' (' . (2018 - $_GET["year"]) . ' years old) ' . 
    "with " . $_GET["engine"] . " engine<br>";
    print "Tax Payed: <strong>";
    if (isset($_GET["tax_payed"]))
        print "yes";
    else 
        print "no";
    print "</strong><br>Technical check passed: <strong>";
    if (isset($_GET["technical"]))
        print "yes";
    else 
        print "no";
    print "</strong><br>Doesn't require investment: <strong>";
    if (isset($_GET["invest"]))
        print "yes";
    else 
        print "no";
    print "</strong><br>$" . $_GET["price"];
?>
