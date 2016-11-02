<table border="1">
    <tr>
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