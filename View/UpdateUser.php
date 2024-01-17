<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="../index.html">Platform </a>
        <!-- Toggler -->
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>-->
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                

            </ul>
        </div>
    </div>
</nav>
<?php
include  '../Controller/User.php';
$userController=new UsersController;

if(isset($_GET['updateid'])){
   
?>
            <div class="container mt-5 ">

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <h2>Edit User Information Form</h2>
                    <form class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="Post" id="userForm">
                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['updateid'] ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input class="form-control" type="text" id="Name" name="Name" value=<?php echo $_GET['updateName'] ?> >
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input class="form-control" type="email" id="Email" name="Email" value=<?php echo $_GET['updateEmail'] ?> >
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input class="form-control" value=<?php echo $_GET['updatePhone'] ?> id="phone" name="phone" pattern="[0-9]{10,}"
                                >
                        </div>

                        <br>
                        <div class="mb-3">
                            <label for="proficiency" class="form-label">Proficiency:</label>
                            <input class="form-control" type="text" id="proficiency" name="proficiency"value=<?php echo $_GET['updateProficiency'] ?> >
                        </div>

                        <br>
                        <input class="btn btn-dark d-block mx-auto" type="submit" name="submit" id="submit">

                    </form>
                </div>
            </div>
        </div>
        <?php
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form submission when a POST request is received
   $id=$_POST["id"];
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["phone"];
    $proficiency = $_POST["proficiency"];
    if($userController->Update_User($id,$name,$email,$phone,$proficiency)){
         header("Location: ../View/Users.php");
    }
    else {
        echo "error";
    }
}
    

?>


