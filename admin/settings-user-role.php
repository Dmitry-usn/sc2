<?php 
include "../db.php";
include "./includes/header.php";

if ($_POST['user_id'] > 0)
{
    global $db;
    if (isset($_POST['status']))
        mysqli_query($db, "UPDATE `users` SET `status`='{$_POST['status']}' WHERE `id`='{$_POST['user_id']}' ");
    if (isset($_POST['role']))
        mysqli_query($db, "UPDATE `users` SET `role`='{$_POST['role']}' WHERE `id`='{$_POST['user_id']}' ");
}

$all_users = mysqli_query($db, "SELECT * FROM users");
$cnt = 0;
?>

<table class="table">
    <thead>
      <tr>
        <th>№</th>
        <th>email</th>
        <th>статус</th>
        <th>роль</th>
        <th>дата</th>
      </tr>
    </thead>
    <tbody>
      
<?php
$sql1 = "SELECT * FROM `categories` WHERE `status`='ok' and `url`='list-status.php' ";
$all_statuses = mysqli_query($db, $sql1);
$all_statuses_array = array(); 
while($status = mysqli_fetch_array($all_statuses)) {
    array_push($all_statuses_array, $status['name']);
}

$sql2 = "SELECT * FROM `categories` WHERE `status`='ok' and `url`='list-role.php' ";
$all_roles = mysqli_query($db, $sql2); 
$all_roles_array = array(); 
while($role = mysqli_fetch_array($all_roles)) {
    array_push($all_roles_array, $role['name']);
}

while($user=mysqli_fetch_assoc($all_users)) {
?>
    <tr>
        <td><?=++$cnt; ?></td>
        <td><?=$user['email']; ?></td>
        <td>
            <form method='post'>
                <input type='hidden' name='user_id' value='<?=$user['id'];?>'>
                <select name="status" onchange="this.form.submit()">
                    <?php foreach($all_statuses_array as $status ) { 
                        $selected = '';
                        if ($status == $user['status'])
                            $selected = 'selected';
                    ?>
                    <option <?=$selected; ?> ><?=$status; ?></option>
                    <?php } ?>
                </select>
            </form>
        </td>
        <td>
            <form method='post'>
                <input type='hidden' name='user_id' value='<?=$user['id'];?>'>
                <select name="role" onchange="this.form.submit()">
                    <?php foreach($all_roles_array as $role ) { 
                        $selected = '';
                        if ($role == $user['role'])
                            $selected='selected';
                    ?>
                    <option <?=$selected?> ><?=$role; ?></option>
                    <?php } ?>
                </select>
            </form>
            
        </td>
        <td><?=$user['date']; ?></td>
      </tr>
<?php } ?>

</tbody>
</table>