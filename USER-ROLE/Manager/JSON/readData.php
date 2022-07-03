<?php
$data = file_get_contents('../../../DATA/Data/data.json');
$data = json_decode($data, true);
foreach ($data as $row) {
    echo '<tr>
    <td>' . $row["name"] . '</td>
    <td>' . $row["email"] . '</td>
    <td>' . $row["username"] . '</td>
    </tr>';
}
