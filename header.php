<?php 
$url = $_SERVER['REQUEST_URI'];
$url = explode('/',$url);
// print_r($url)
?>
<ul class="nav">
			<li <?php if($url[3] == 'index.php'){ echo "class='active'"; } ?> ><a href="index.php">Home</a></li>	
			<li <?php if($url[3] == 'registration.php'){ echo "class='active'"; } ?>><a href="registration.php">Donor Registration</a></li>            
			<li <?php if($url[3] == 'requests.php'){ echo "class='active'"; } ?>><a href="requests.php">send Request</a></li>
            <li <?php if($url[3] == 'viewrequest.php'){ echo "class='active'"; } ?>><a href="viewrequest.php">View Request</a></li>
            <li <?php if($url[3] == 'camps.php'){ echo "class='active'"; } ?>><a href="camps.php">Camps</a></li>
            <li <?php if($url[3] == 'login.php'){ echo "class='active'"; } ?>><a href="login.php">log In</a></li>
            <li <?php if($url[3] == 'search.php'){ echo "class='active'"; } ?>><a href="search.php">Search</a></li>
            <li <?php if($url[3] == 'contact.php'){ echo "class='active'"; } ?>><a href="contact.php">Contact Us</a></li>
           	<li <?php if($url[3] == 'aboutus.php'){ echo "class='active'"; } ?>><a href="aboutus.php">About</a></li>
            </ul>