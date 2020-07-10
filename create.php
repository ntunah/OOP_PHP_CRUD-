
<?php 

/**
  * Use an HTML form to create a new entry in the
  * users table.
  *
  */
	require "classes.php";
	$obj = new Create;

 ?>

 <?php require "templates/header.php"; ?>



<!-- Forms 6 -->
    <section class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-8 col-xl-6">
            <div class="row">
              <div class="col text-center">
                <h1>Add a user</h1>
              </div>
            </div>
            <div class="row">
              <div class="col">
                 <?php if (isset($_POST['submit']) && $obj->storeUsers()) { ?>
                      <p> >>> <?php echo $_POST['firstname']; ?> successfully added.</p>
                  <?php } ?>
              </div>
            </div>
            <form method="post">
                          <div class="row align-items-center">
              <div class="col mt-4">
                  <input type="text" name="firstname" id="firstname" class="form-control" required maxlength="20" placeholder="First Name">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col mt-4">
                  <input type="text" name="lastname" id="lastname" class="form-control"  required maxlength="20" placeholder="Last Name">
              </div>
            </div>
            <div class="row align-items-center mt-4">
              <div class="col">
                  
                  <input type="email" name="email" id="email" class="form-control" required maxlength="40" placeholder="Email">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col mt-4">
                
                  <input type="number" name="age" id="age" class="form-control" required maxlength="2" placeholder="Age">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col mt-4">
                  
                  <input type="text" name="location" id="location" class="form-control" required maxlength="30" placeholder="Location">
              </div>
            </div>

            <div class="row justify-content-start mt-4">
              <div class="col">
                <button class="btn btn-primary mt-4" name="submit">Add</button>
              </div>
            </div>

            </form>
          </div>
        </div>
      </div>
    </section>

<?php require "templates/footer.php"; ?>