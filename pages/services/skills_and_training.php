<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ****************************************************************************************************************************************

        /* set the root folder in relation to this page (site root) */
        $path = "../../";
        
            /*
                ./ = page is located in the root directory
                ../ = page is located one folder up
                ../../ = page is located two folders up, etc
            */
        
        
        // set the page title
        $subTitle = "Skills & Training";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        // include - Site Details
        include($path."assets/includes/sections/site_details.php"); 

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
        
        // include - HEADER
        include($path."assets/includes/sections/header.php");

?>

    <?php
        
        // include - OVERVIEW
        include($path."assets/includes/pages/services/skills_and_training/skills_and_training_overview.php");
                
        // include - BENEFITS
        include($path."assets/includes/pages/services/skills_and_training/skills_and_training_benefits.php");

        // include - CASE STUDIES -
        include($path."assets/includes/pages/services/skills_and_training/skills_and_training_case_studies.php");

        // include - PRICES -
        include($path."assets/includes/pages/services/skills_and_training/skills_and_training_prices.php");

        // include - NEXT STEPS -
        include($path."assets/includes/pages/services/skills_and_training/skills_and_training_next_steps.php");
                
        // include - PORTFOLIO -
        include($path."assets/includes/pages/services/skills_and_training/skills_and_training_portfolio.php");

    ?>

<?php

    // include - 
    include($path."assets/includes/sections/footer.php");
        
?>