<a href="index2.php?category=sport">Sport news</a> | <a href="index2.php?category=politics">Politic news</a><br/><br/>
<a href="index2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="index2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>
<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category = "sport";
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    if (isset($_GET['format'])) {
        $format = $_GET['format'];
        print json_encode($news[$category]);
    }
    else {
        foreach($news[$category] as $new) {
            print $new . "<hr>";
        }
    }
}
?>
