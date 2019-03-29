





 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>other vehicles</title>
  <link rel="stylesheet" type="text/css" href="style/mystyle.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
 
	
	
	
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom:65px;
      border-radius: 0;
      background-color:#191970;
      
      
       
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
       
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
    
     <div class="header">
			
            
                       <ul class="givusacall">
                           <a  class="bottomlogo" href="home.php"><img src="../image/logo1.png" alt="logo"></a>
                           <li><h1>AutoAssit-Online Vehicle Solutions </h1></li>
			</ul>
			
	</div>
    <div class="jumbotron">
  <div class="container text-center">
    <h2>Service Centers for cars,vans & other vehicles </h2>      
    <p>Search your Service Center.Easily you can find. Try it...</p>
  </div>
</div>
    
    
    
 
<nav class="navbar navbar-inverse">
    
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       
        
              
				
        
    </div>
     
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="../home.php">HOME</a></li>
        
      </ul>
     
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
       
     
    </div>
    <div class="col-sm-8 text-left">
      
      
   
        
        
         <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `servicecenters_other` WHERE CONCAT(`SC_Address`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `servicecenters_other`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "autoassit");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
    $result = mysqli_query($connect, $query);  
}

?>

    
       
        
    
 
        
        <form class="navbar-form"  action="other_veicles.php" method="post" role="search" >
            <h4> You can search service centers according to the town.</h4>
            <div class="input-group add-on">
                
                <input class="form-control" type="search" size="120" name="valueToSearch" placeholder="Search by town name">
                
            
             <div class="input-group-btn">
        <button class="btn btn-default" type="submit" name="search" value="Filter"><i class="glyphicon glyphicon-search"></i></button>
        
      </div>
            
            
            </div><br><br>
            <table class="table table-hover">
                <tr>
                    <th></th>
                    <th>Service Center Name</th>
                    <th> Contact Number</th>
                     <th> Address</th>
                     
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td> <?php { echo '   <img src="data:image/jpeg;base64,'.base64_encode($row['SC_img'] ).'" height="200" width="300" class="img-thumnail" />  '; }?>  </td>
                    <td><?php echo $row['SC_Name'];?></td>
                    <td><?php echo $row['SC_TP'];?></td>
                    <td><?php echo $row['SC_Address'];?></td>
                    <td><a href=item.php?id=".$row["id"].">View More Details</td>
                   
                    
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
        
        
        
        
        
        
        
         
        
        
        
        
         
        
      
    </div>
      
      
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p></p>
      </div>
      <div class="well">
        <p></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>AUTO-ASSIST</p>
</footer>

</body>
</html>
