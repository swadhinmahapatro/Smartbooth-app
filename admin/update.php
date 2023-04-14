<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../img/favicon.ico" rel="icon">
    <title>Smartbooth | User update</title>
    <style>
      /* @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap"); */


/* body{
 background-color:#eee;
 font-family: "Poppins", sans-serif;
 font-weight: 300;
} */

.height{
 height: 100vh;
}


.search{
position: relative;
box-shadow: 0 0 40px rgba(51, 51, 51, .1);
  
}

.search input{

 height: 60px;
 text-indent: 25px;
 border: 2px solid #d6d4d4;


}


.search input:focus{

 box-shadow: none;
 border: 2px solid blue;


}

.search .fa-search{

 position: absolute;
 top: 20px;
 left: 16px;

}

.search button{

 position: absolute;
 top: 5px;
 right: 5px;
 height: 50px;
 width: 110px;
 background: blue;

}
      </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="#">
        <img src="../img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Smartbooth
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link"  href="userAdd.php"><i class="fa-solid fa-user-plus"></i> Add Candidate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="update.php"><i class="fa-solid fa-users-gear"></i> Update Candidate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="changePass.php"><i class="fa-solid fa-gear"></i></i> Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link disabled">Disabled</a> -->
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
    
    </div>
    </nav>
    
    <div class="container">

                    <div class="row height d-flex justify-content-center align-items-center">

                      <div class="col-md-8">
                    <form action="updateSubmit.php" method="POST">
                        <div class="search">
                          <i class="fa fa-search"></i>
                          <input type="text" name="id" required class="form-control" placeholder="Enter the Smart ID Card">
                          <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                      </div>
                      
                    </div>
                </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>