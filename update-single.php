<?php
/**
  * Use an HTML form to edit an entry in the
  * users table.
  *
  */
    require "classes.php";
    $obj = new Update;

    list($statement , $user) = $obj->updateSingle();

?>

<?php require "templates/header.php"; ?>





 <section class="fdb-block">
    <div class="container">
        <div class="row justify-content-center">
          	<div class="col-12 col-md-8 col-lg-8 col-xl-6">
          		<div class="row">
    				<div class="col text-center">
        				<h2>Edit a user</h2>
        				<?php if (isset($_POST['submit']) && $statement) : ?>
  							<p><?php echo escape($_POST['firstname']); ?> successfully updated.</p>
						<?php endif; ?>
    				</div>
				</div>
				<form method="post">
   					<?php foreach ($user as $key => $value) : ?>
      					<div class="row align-items-center">
          					 <div class="col mt-4">
      							<input type="text" class="form-control" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo escape($value);  ?>" <?php echo ($key === 'id' ? 'readonly' : null); ?>>
      					 	</div>
            			</div>
    				<?php endforeach; ?>
    				<input type="submit" name="submit" value="Submit" class="btn btn-primary mt-4">
				</form>
			</div>
		</div>
	</div>
</section>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>