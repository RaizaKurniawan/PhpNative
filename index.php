<?php
include "viewuserdata.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = "createuser.php"> Create Data User </a>

    <table border = "2">
        <thead>
        <tr> 
            <th>No ID</th>
            <th>User ID</th>
            <th>Is Active</th>
            <th>Is Update</th>
            <th>Opsi</th>
        </tr>
        </thead>

        <tbody>
            <?php $no = 1; foreach($execute as $data) { ?>
            <tr> 
                <td><?php echo $no++ ;?> </td>
                <td><?php echo $data['f_user_ID'] ;?> </td>
                <td><?php if($data['f_isActive'] == 0) { echo "Active"; } else { echo "Not Active";}?> </td>
                <td><?php echo $data ['f_date_update'];?> </td>
                <td><a href = "#">Edit</a> <a href = "#"> Delete </a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>    
</body>
</html>


?>