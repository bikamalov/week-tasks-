<html>
<head>
<style>
    select{
        width:100%;
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
<?php
        $makers = ["Toyota","BMW","Mercedes"];
        $engine = ["Gas","Diesel","Petroleum"];
?>
<form action="task2_submit.php">
    <table border="2" style="border-collapse: collapse;">
        <tr>
            <td>Maker:</td>
            <td>
                <select name="maker" id="maker">
                    <?php 
                    foreach ($makers as $maker) {
                        ?>
                        <option value="<?= $maker ?>"><?= $maker?></option>;
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Year: </td>
            <td>
            <select name="year" id="year">
                    <?php 
                    for ($i = 2018; $i >= 1980; $i--) {
                        ?>
                        <option value="<?= $i ?>"><?= $i ?></option>;
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Model:</td>
            <td><input type="text" name="model"></td>
        </tr>
        <tr>
            <td>Engine:</td>
            <td>
                <?php 
                    foreach ($engine as $eng) {
                        ?>
                        <input type="radio" name="engine" value = "<?= $eng ?>">
                        <?=  $eng ?>
                        <?php
                    }
                ?>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" name="price"></td>
        </tr> 
        </tr>
        <tr>
            <td>Additional: </td>
            <td>
                <input type="checkbox" name="tax_payed"> tax payed <br>
                <input type="checkbox" name="technical"> technical check passed <br>
                <input type="checkbox" name="invest"> doesn't require investment <br>
            </td>
        </tr>
    </table>
    <input type="submit"/>
</form>