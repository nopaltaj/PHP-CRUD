<style>
    .tambah{
    font-size: 11px !important;
}



.atas{
    margin-top: 40px;
}

.tombol-tambah{
    
    margin-top: 40px;
    float: right !important;
}

.border-1{
    border:  2px solid #000 !important;
    text-align: center;
    background-color: aqua !important;
}

.hilang{
    border: transparent;
    padding-top: 0;
}

.border-2{
    border-top: 2px solid #000 !important;
    text-align: center;
    padding: 0;
    

}
.judul{
    float: left;
    
}
body{
    box-sizing: border-box;
}


.edit{
    margin:  0 600px;
    padding: 600px 0;
}
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
</head>

<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Data Siswa</span>
      </a>

      <ul class="nav nav-pills align-items-center">
        <li class="nav-item"><a class="btn btn-primary active tambah " href="/myshop/create.php" role="button">+ Tambah Siswa</a></li>
       
      </ul>
    </header>
  </div>
    <div class="container my-5">
        
        
    

        
       
        <div class="container">
            <div class="card hilang">

                <div class="card-body hilang">

                    <br>
                    <table class="table border-2">
                        <thead>
                            <tr>

                                <th class="border-1">Name</th>
                                <th class="border-1">Email</th>
                                <th class="border-1">Phone</th>
                                <th class="border-1">Addres</th>
                                <th class="border-1">Created At</th>
                                <th class="border-1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "myshop";

                            // Create connection
                            $connection = new mysqli($servername, $username, $password, $database);

                            // Check connection
                            if ($connection->connect_error) {
                                die("Connection failed: " . $connection->connect_error);
                            }

                            // read all row from database table 
                            $sql = "SELECT * FROM clients";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            // Read data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "
                   <tr>
                 
                   <td>$row[name]</td>
                   <td>$row[email]</td>
                   <td>$row[phone]</td>
                   <td>$row[address]</td>
                   <td>$row[created_at]</td>
                   <td>
                       <a class='btn btn-primary btn-sm' href='/myshop/edit.php?id=$row[id]'>Edit</a>
                       <a class='btn btn-danger btn-sm' href='/myshop/delete.php?id=$row[id]'>Delete</a>
                   </td>
               </tr>
                   ";
                            }


                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</body>

</html>