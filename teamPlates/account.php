<?php
$bill=0;
foreach($data['transactions'] as $value){
    $bill+=$value['price'];
}
    echo '<br><b>Name:</b>'.$data['user_name'];
    echo '<br><b>Account status:</b>'.$bill;
?>
<table border="1">
    <tr><td colspan="3" bgcolor="#228b22">Add new account</td></tr>
    <form actiom="" method="post">
        <tr>
            <td>Type description account</td>
            <td><input type="text" name="new_account"></td>
            <td><input type="submit" value="ok"></td>
        </tr>
        <tr><td colspan="3" bgcolor="#228b22">All account</td></tr>
        <tr><td colspan="2">Guid</td><td>Name</td></tr>
            <?php
            foreach($data['accounts'] as $value) {
                echo "<tr><td colspan='2'>" .$value['guid']."</td>";
                echo "<td>" .$value['description']."</td></tr>";
            }
            ?>

    </form>
</table>
<table>
<tr bgcolor="#5f9ea0">
    <td>Name transactions</td><td>Name account</td><td>Key account</td><td>Name category</td><td>Price</td><td>Created at</td>
</tr>
    <form method="post" action="">
        <tr><td>Name transaction: <input type="text" name="transaction[name]"><td>
            <td>Select account<select  name="transaction[account_id]" class="form-control">
                    <?php
                    foreach ($data['accounts']as $value){
                        echo "<option value=$value[id]>".$value['description']."</option>";
                    }
                    ?>
                </select></td>
        <td>Select category <select  name="transaction[category_id]" class="form-control">
                    <?php
                    foreach ($data['category'] as $value){
                        echo "<option value=$value[id]>".$value['name']."</option>";
                    }
                    ?>
                </select></td>
       <td>Price: <input type="text" name="transaction[price]"></td>
        <td align="center"> <input type="submit" value="Add new transaction"></td></tr>
    </form>
<?php
foreach($data['transactions'] as $value){
    if(!in_array(null,$value)) {
        echo "<tr>";
        echo "<td>" . $value['tr_name'] . "</td>";
        echo "<td>" . $value['description'] . "</td>";
        echo "<td>" . $value['guid'] . "</td>";
        echo "<td>" . $value['name'] . "</td>";
        echo "<td>" . $value['price'] . "</td>";
        echo "<td>" . $value['created_at'] . "</td>";
        echo "</tr>";
    }
}
?>

</table>

