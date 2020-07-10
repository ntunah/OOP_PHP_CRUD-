<?php

/**
  * Delete a user
  */
    require "classes.php";
    $obj = new Delete;

    list($result , $success) = $obj->deleteUser();

?>
<?php require "templates/header.php"; ?>


 <div class="row justify-content-center">
    <div class="col col-md-8 text-center">
      <h2>Delete users</h2>
    </div>
</div>

<?php if ($success) echo $success; ?>

<table class="table text-center mt-5 d-table ">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Address</th>
      <th>Age</th>
      <th>Location</th>
      <th>Date</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $row) : ?>
    <tr>
      <td><?php echo escape($row["id"]); ?></td>
      <td><?php echo escape($row["firstname"]); ?></td>
      <td><?php echo escape($row["lastname"]); ?></td>
      <td><?php echo escape($row["email"]); ?></td>
      <td><?php echo escape($row["age"]); ?></td>
      <td><?php echo escape($row["location"]); ?></td>
      <td><?php echo escape($row["date"]); ?> </td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php echo escape($row["id"]); ?>">Delete</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>