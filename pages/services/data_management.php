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
        $subTitle = "Data Management";

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
        include($path."assets/includes/pages/services/data_management/data_management_overview.php");

        // include - BENEFITS
        include($path."assets/includes/pages/services/data_management/data_management_benefits.php");

        // include - CASE STUDIES
        include($path."assets/includes/pages/services/data_management/data_management_case_studies.php");

        // include - PRICES
        include($path."assets/includes/pages/services/data_management/data_management_prices.php");

        // include - NEXT STEPS
        include($path."assets/includes/pages/services/data_management/data_management_next_steps.php");
        
        // include - PORTFOLIO
        include($path."assets/includes/pages/services/data_management/data_management_portfolio.php");

    ?>

<?php

    // include - FOOTER
    include($path."assets/includes/sections/footer.php");
        
?>