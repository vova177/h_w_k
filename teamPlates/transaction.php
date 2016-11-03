<table>
<form method="post" action="">
    <tr><td>Add new transaction: <input list="hosting-plan" type="text"  name="form[category_name]">
    <datalist id="hosting-plan">
        <?php
        foreach($arr as $value) {
            echo '<option value=' . $value['name'].'>';
        }
            ?>
    </datalist>
        </td></tr>
    <tr><td>Price: <input type="text" name="form[price]"></td></tr>
    <tr><td>Description: <input type="text" name="form[descriptions]"></td></tr>
    <tr><td align="center"> <input type="submit" value="Ok"></td></tr>
    </tr>
</form>
    <tr><td>All transaction</td></tr>
    <tr>
        <td>Account_ad</td>
        <td>Categoty_id</td>
        <td>Price</td>
        <td>Created at</td>
        <td>Descriptions</td>
    </tr>
<?php
if(empty($data)){
    echo "<tr align='canter'><td>transaction is empty</td></tr>";
}else{
    foreach($data as $value){
        echo"<tr>";
        echo "<td>".$value['account_id']."</td>";
        echo "<td>".$value[ 'category_id']."</td>";
        echo "<td>".$value['price']."</td>";
        echo "<td>".$value[ 'created_at']."</td>";
        echo "<td>".$value['descriptions']."</td>";
        echo"</tr>";
    }
}
?>
</table>
