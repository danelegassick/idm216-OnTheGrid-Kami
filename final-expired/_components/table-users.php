<?php
if (!isset($users)) {
    echo '$users variable is not defined. Please check the code.';
}
?>
<table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name
      </th>
      <th scope="col">Email</th>
      <th scope="col">
        <span>Edit</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($user = mysqli_fetch_array($users)) {
    echo "
          <tr>
            <td>{$user['id']}</td>
            <td>{$user['first_name']} {$user['last_name']}</td>
            <td>{$user['email']}</td>
            <td>
              <a href='{$site_url}/admin/users/edit.php?id={$user['id']}' >Edit</a>
              <a href='{$site_url}/admin/users/delete.php?id={$user['id']}' >Delete</a>
            </td>
          </tr>";
}
?>
  </tbody>
</table>