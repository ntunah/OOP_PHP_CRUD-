<!DOCTYPE html>
<html lang="en">
<head>
<title>Simple Php App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="./css/froala_blocks.css">

<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,800" rel="stylesheet">
    
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
<!-- Main CSS -->
<link href="./assets/css/main.css" rel="stylesheet"/>
    
<!-- Animation CSS -->
<link href="./assets/css/vendor/aos.css" rel="stylesheet"/>

   <style>
      .fdb-block {
        border-bottom: 1px solid var(--light);
      }
    </style>
  </head>
  <body><style>
  #navigator {
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  #navigator .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }

  @media (max-width: 720px) {
    #navigator {
      border-bottom: 1px solid #ccc;
    }
  }

  #navigator a {
    font-size: 14px;
  }

  #navigator+section {
    padding: 250px 0;
  }

</style>
    
<body> 

    <!-- Headers 2 -->
    <header>
      <div class="container text-center">
        <nav class="navbar">
          <a class="ml-auto mr-auto" href="index.php">
            <img src="./imgs/logo.png" height="30" alt="image">
          </a>
        </nav>
      </div>
    </header>

    <!-- Headers 3 -->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-md">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav0" aria-controls="navbarNav0" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarNav0">
            <ul class="navbar-nav mr-auto ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="create.php">Add-user</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="read.php">Find-user</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="update.php">Edit-user</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="delete.php">Delete-user</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>









