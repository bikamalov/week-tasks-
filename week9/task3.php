<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","check"]]];
$selected_car = NULL;
if (isset($_REQUEST["id"])) {
    $selected_car = $cars[$_REQUEST["id"]];
    if ($selected_car != NULL) print $selected_car['maker'];
}
?>
<html>
<head>
<style>
select{
  width:200px;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:3px;
}
</style>
</head>
<form action="task3.php">
<select name="id" onchange="this.parentNode.submit()">
    <option value="-1">Select car</option>
    <?php 
        for ($i = 0; $i < sizeof($cars); $i++) {?>
    <option value="<?php print $i; ?>" <?php if(isset($_REQUEST['id']) && $_REQUEST['id'] == $i) print 'selected';?>> <?php print $cars[$i]['maker'] . ' ' . $cars[$i]['model']; ?> </option>
        <?php } ?>
</select>
</form>
<form>
    <table border="2" style="border-collapse: collapse;">
        <tr>
            <td>Maker:</td>
            <td>
                <select name="maker" id="maker" value="<?php if (isset($_REQUEST["id"])) print $selected_car['maker'];?>">
                    <?php 
                    $s="selected='selected'";
                    foreach ($makers as $maker) {
                        ?>
                        <?php 
                            if ($selected_car == $maker) {
                                echo "<option value='$maker' $s>$maker</option>";       
                            }
                         ?>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Year: </td>
            <td>
            <select name="year" id="year" value="<?php if (isset($_REQUEST["id"])) print $selected_car['year']; ?>">
                    <?php 
                    for ($i = 2018; $i >= 1980; $i--) {
                        ?>
                        <?php
                           echo "<option value='$i' $s>$i</option>"
                        ?>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Model:</td>
            <td><input type="text" name="model" value="<?php if ($selected_car != NULL) print $selected_car['model']?>"></td>
        </tr>
        <tr>
            <td>Engine:</td>
            <td>
                <?php 
                    foreach ($engine as $eng) {
                        ?>
                        <input type="radio" name="engine" value = "<?= $eng ?>" <?php if ($selected_car != NULL && $eng == $selected_car['engine']) print "checked"; ?>>
                        <?=  $eng ?>
                        <?php
                    }
                ?>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" name="price" value="<?php if ($selected_car != NULL) print $selected_car['price']?>"></td>
        </tr> 
        </tr>
        <tr>
            <td>Additional: </td>
            <td>  
                <input type="checkbox" name="tax_payed" <?php if ($selected_car != null && in_array('tax', $selected_car['additional'])) print "checked"; ?>> tax payed <br>
                <input type="checkbox" name="technical" <?php if ($selected_car != null && in_array('check', $selected_car['additional'])) print "checked"; ?>> technical check passed <br>
                <input type="checkbox" name="invest" <?php if ($selected_car != null && in_array('investment', $selected_car['additional'])) print "checked"; ?>> doesn't require investment <br>
            </td>
        </tr>
    </table>
    <input type="submit"/>
</form>