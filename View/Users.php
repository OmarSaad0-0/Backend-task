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
include  '../Helpers/Services.php';

$userController=new UsersController;

$Users=$userController->View_Users();

echo'<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Proficiency</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>';
foreach($Users as $row){
    echo'<tr>
     <td>'.$row->Id.'</td>
     <td>'.$row->Name.'</td>
     <td>'.$row->Email.'</td>
     <td>'.$row->PNumber.'</td>
     <td>'.$row->Proficiency.'</td>
     <td><button   class="btn btn-danger" ><a href="DeleteUser.php?deleteid='.$row->Id.'">Delete</button><br><button   class="btn btn-success" ><a href="UpdateUser.php?updateid='.$row->Id.'&updateName='.$row->Name.'&updateEmail='.$row->Email.'&updatePhone='.$row->PNumber.'&updateProficiency='.$row->Proficiency.'">Edit</button></a></td>
     </tr>';
}
echo'</tbody>
</table>';
