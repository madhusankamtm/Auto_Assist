<html lang="en">
    <head>
        <title>Location Finder</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            #map{
                height: 650px;
                width: 1390px;
            }
            .navbar {

                margin-bottom: 0;
                border-radius: 0;

            }

            /* Add a gray background color and some padding to the footer */
            .footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #333;
                color: white;
                text-align: center;


                height:60px;
            }

            .carousel-inner img {
                width: 100%; /* Set width to 100% */
                margin: auto;
                min-height:200px;
            }

            /* Hide the carousel text when the screen is less than 600 pixels wide */
            @media (max-width: 600px) {
                .carousel-caption {
                    display: none; 
                }
            }
			
			#floating-panel {
				position: absolute;
    top: 10%;
    left: 50%;
    z-index: 5;
    background-color: #fff;
    padding: 5px;
    order: 1px solid #999;
    text-align: center;
    font-family: 'Roboto','sans-serif';
    line-height: 10px;
    padding-left: 10px;
    visibility: hidden;

}
        </style>
    </head>
    <body>
        
        
       <?php
	    
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "autoassit";
$locations = array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 $sql = "SELECT `garage_name`,`garage_lat`, `garage_long`, `garage_address`, `garage_city`, `garage_contact` FROM `garage_locations` WHERE `garage_open`>0";
        $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$x = 0;
    while($row = mysqli_fetch_assoc($result)) {
		$locations[$x] = $row["garage_name"]."_".$row["garage_address"];
        $x++;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 


        

        <div>
            <div class="form-group">

                <ul class="nav nav-pills nav-stacked">
                    
                    <li><a id="ambulance" href="#"><h3 align="center">View Nearest Garage</h3>  </a></li>
                    
	
				
                </ul>
            </div>
        </div>
		<div id="floating-panel"></div>
        <div id="map"></div>
        
        
        
        
        
        
        
        <?php
// define variables and set to empty values
$nameErr =  $name2Err ="";
$name = $name2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
  if (empty($_POST["name"])) {
    $nameErr = "Latitude is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    
  }
  
 
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
  if (empty($_POST["name2"])) {
    $name2Err = "Longitude is required";
  } else {
    $name2 = test_input($_POST["name2"]);
    // check if name only contains letters and whitespace
    
  }
  
 
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<form all method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Latitudes: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  longitudes: <input type="text" name="name2" value="<?php echo $name2;?>">
  <span class="error"><?php echo $name2Err;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>


        
        
        
        
        
        
        <script>
        function initMap() {
        var directionsService = new google.maps.DirectionsService;
		var distanceService = new google.maps.DistanceMatrixService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
		var index = 0;
		
        var map = new google.maps.Map
        (document.getElementById('map'), {zoom: 10,center: {lat: 6.99181, lng: 81.0524}  });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          var locations = <?php echo json_encode($locations); ?>;
		  var latlang = [];
          
		  for (i = 0; i < locations.length; i++) {
			console.log(locations[i].split("_")[1]);
			latlang[i] = locations[i].split("_")[1];
		  
			
		  }

		   calculateDistance(distanceService,latlang,index);
		   var hospital_loc = locations[index].split("_")[1];
		   calculateAndDisplayRoute(directionsService, directionsDisplay,hospital_loc)
        };
        document.getElementById('ambulance').addEventListener('click', onChangeHandler);
        
      }
      
      
      
      
      
      
      
      
      
	  
	  function calculateDistance(distanceService,latlang,index) {
        distanceService.getDistanceMatrix({
          origins:  [{lat: <?php echo $name;?>, lng: <?php echo $name2;?>}] ,
        //  destination:  {lat: 6.9707538, lng: 81.0327561},
		  destinations: latlang,
          travelMode: 'DRIVING',
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status === 'OK') {
			var outputDiv = document.getElementById('floating-panel');
			var destinationList = response.destinationAddresses;
			var results = response.rows[0].elements;
			
			var distance = 0;
			for (i = 0; i < results.length; i++) {
				
				if(i==0){
					distance = results[0].distance.value;
				}
				
				if( results[i].distance.value < distance){
					index = i ;
				}
				
			}
            outputDiv.innerHTML = 'Nearest Garage @ '+latlang[index] +
                    ': ' + results[index].distance.text + ' in ' +
                    results[index].duration.text + '<br>';
			outputDiv.style.visibility='visible'
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
      
      
      
      
      
      

      function calculateAndDisplayRoute(directionsService, directionsDisplay,hospital_loc) {
        directionsService.route({
          origin:  {lat: <?php echo $name;?>, lng: <?php echo $name2;?>} ,
        //  destination:  {lat: 6.9707538, lng: 81.0327561},
		destination:  hospital_loc,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

        </script>
        
        
        
        
        
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvCIAo8iwLLKLFp6vdZ2X5MBiDyY4LOAo&callback=initMap"
        type="text/javascript"></script>



        <br>


      
    </body>
</html>