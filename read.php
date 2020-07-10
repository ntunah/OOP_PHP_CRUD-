<?php

/**
  * Function to query information based on
  * a parameter: in this case, location.
  *
  */
    require "classes.php";
    $obj = new Read;

    list($statement , $result) = $obj->fetchLocation();

?>
<?php require "templates/header.php"; ?>


   <!-- Forms 1 -->
    <section class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">
            <h1>Find user based on location</h1>
              <form method="post">
                  <div class="input-group mt-4 mb-4">
                    <input type="text" class="form-control" placeholder="Location" id="location" name="location" >
                    <div class="input-group-append">
                       <button class="btn btn-primary" type="submit" name="submit">View Result</button>
                    </div>
                  </div>
              </form>
            <p class="h4">Find us on <a href="https://www.froala.com">Facebook</a> and <a href="https://www.froala.com">Twitter</a>.</p>
          </div>
        </div>
      </div>
    </section>

<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <div class="row justify-content-center">
          <div class="col col-md-8 text-center">
            <h1>Result</h1>
          </div>
        </div>

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
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td ><?php echo escape($row["id"]); ?></td>
<td><?php echo escape($row["firstname"]); ?></td>
<td><?php echo escape($row["lastname"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><?php echo escape($row["age"]); ?></td>
<td><?php echo escape($row["location"]); ?></td>
<td><?php echo escape($row["date"]); ?> </td>
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    <div class="row justify-content-center">
        <div class="col col-md-8 text-center">
          <p> > No results found for <?php echo escape($_POST['location']); ?>.</p>
        </div>
    </div>
  <?php }
} ?>


 

<?php require "templates/footer.php"; ?>