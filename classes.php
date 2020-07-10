<?php

class Create{
  
  public function storeUsers(){

    if (isset($_POST['submit'])) {

      try {
        require "config.php";
        require "common.php";
        
        $connection = new PDO($dsn, $username, $password, $options);

        $new_user = array(
          "firstname" => $_POST['firstname'],
          "lastname"  => $_POST['lastname'],
          "email"     => $_POST['email'],
          "age"       => $_POST['age'],
          "location"  => $_POST['location']
        );

        $sql = sprintf(
          "INSERT INTO %s (%s) values (%s)",
          "users",
          implode(", ", array_keys($new_user)),
          ":" . implode(", :", array_keys($new_user))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
        return $statement;
      } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
      }

    }

  } // end of storeUsers function
} // end of Create class

class Read{

  public function fetchLocation(){

    if (isset($_POST['submit'])) {

      try {

        require "config.php";
        require "common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT *
        FROM users
        WHERE location = :location";

        $location = $_POST['location'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();

         return array($statement , $result);

      } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
      }
    }
  } // end of fetchLocation function
} // end of Read class

class Update{
 
  public function updateUser(){

    try {

      require "config.php";
      require "common.php";

      $connection = new PDO($dsn, $username, $password, $options);

      $sql = "SELECT * FROM users";

      $statement = $connection->prepare($sql);
      $statement->execute();

      $result = $statement->fetchAll();

      return $result;
    } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
    }
  }// end of updateUser function

  public function updateSingle(){

    require "config.php";
    require "common.php";
    if (isset($_POST['submit'])) {

      try {

        $connection = new PDO($dsn, $username, $password, $options);
        $user =[
        "id"        => $_POST['id'],
        "firstname" => $_POST['firstname'],
        "lastname"  => $_POST['lastname'],
        "email"     => $_POST['email'],
        "age"       => $_POST['age'],
        "location"  => $_POST['location'],
        "date"      => $_POST['date']
        ];

        $sql = "UPDATE users
            SET id = :id,
            firstname = :firstname,
            lastname = :lastname,
            email = :email,
            age = :age,
            location = :location,
            date = :date
            WHERE id = :id";

        $statement = $connection->prepare($sql);
        $statement->execute($user);
      } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
      }
    }

    if (isset($_GET['id'])) {

      try {

        $connection = new PDO($dsn, $username, $password, $options);
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return array($statement , $user);
      } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
      }
    } else {
      echo "Something went wrong!";
      exit;
    }
  } // end of updateSingle function

} // End of Update class


class Delete{
    public function deleteUser(){

    require "config.php"; 
    require "common.php";
      $success ="";
    if (isset($_GET["id"])) {
      try {
        $connection = new PDO($dsn, $username, $password, $options);

        $id = $_GET["id"];

        $sql = "DELETE FROM users WHERE id = :id";

        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $success = "User successfully deleted";
      } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
      }
    }

    try {
      $connection = new PDO($dsn, $username, $password, $options);

      $sql = "SELECT * FROM users";

      $statement = $connection->prepare($sql);
      $statement->execute();
    
      $result = $statement->fetchAll();
    } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
    }

    return array($result , $success);
  } // end of deleteUser function
} // end of Delete class

?>