<table border="1">
    <tr>
        <td colspan="3" bgcolor="#228b22">Add new balance</td>
    </tr>
    <form actiom="" method="post">
    <tr>
        <td>Type description balance</td>
        <td><input type="text" name="description"></td>
        <td><input type="submit" value="ok"></td>
    </tr>
    </form>
    <tr bgcolor="#5f9ea0">
        <td>Key balance </td>
        <td>Description balance </td>
        <td>transaction</td>
    </tr>
<?php
foreach($data as $value){
    echo"<tr>";
     echo"<td>".$value[0]['guid']."</td>";
    echo"<td>".$value[0]['description']."</td>";
    echo"<td><a href='/transaction/?balance_id=".$value[0]['id']."'>transaction</a></td>";
    echo"</tr>";
}
?>
</table>