<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ******************************

    // set the root folder (site root not server root) in relation to this page
    $path = "../";       
            // ./ = this page is located in the root directory
            // ../ = this page is located one folder up
            // ../../ = this page is located two folders up, etc.
    
    // every page can have a different title
    $subTitle = "Home";

    // include
    include($path."assets/includes/sections/site_details.php"); 

	// include
    include($path."assets/includes/sections/header.php");

?>

<!-- page here -->

<?php

    // include
    include($path."assets/includes/sections/footer.php");

?>