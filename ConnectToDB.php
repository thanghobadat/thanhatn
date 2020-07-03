<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/trangchu.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".navbar-right .dropdown-menu", function(e){
            e.stopPropagation();
        });
    </script>
    </head>
<body>

    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
            <div class="navbar-header d-flex col">
                <a class="navbar-brand" href="#">ATN<b>Shop</b></a>  		
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Introduce</a></li>			
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Sale<b class="caret"></b></a>
                        <ul class="dropdown-menu">					
                            <li><a href="#" class="dropdown-item">Sale 10%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 20%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 30%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 50%</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active"><a href="#" class="nav-link">News</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sercive</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
                </ul>
                <form class="navbar-form form-inline">
                    <div class="input-group search-box">								
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right ml-auto">			
                    <li class="nav-item">
                        <a href="InsertData.php">Insert</a>
                    </li>
                    <li class="nav-item">
                        <a href="ConnectToDB.php">View</a>
                    </li>
            
                </ul>
            </div>
        </nav>
    
<?php
ini_set('display_errors', 1);
?>

<?php


if (empty(getenv("DATABASE_URL"))){
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
          "host=
ec2-50-17-90-177.compute-1.amazonaws.com
;port=5432;user=wxiyvdeuflqdyo;password=b2779f9f398359c018dec40967297cb7ae462bb755cbeb0581bfcfcb2a98a40d;dbname=df0ss12qe450pr
",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

$sql = "SELECT * FROM product";
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();

?>
<div id="container" text-alight="center">
<h1>Product Information</h1>    
<table class="table table-bordered table-condensed" border="1">
    
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // tạo vòng lặp 
         //while($r = mysql_fetch_array($result)){
             foreach ($resultSet as $row) {
      ?>
   
      <tr>
        <td scope="row"><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['price'] ?></td>
        
      </tr>
     
      <?php
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
