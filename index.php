<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ****************************************************************************************************************************************

        /* set the root folder in relation to this page (site root) */
        $path = "./";
        
            /*
                ./ = page is located in the root directory
                ../ = page is located one folder up
                ../../ = page is located two folders up, etc
            */
        
        
        // set the page title
        $subTitle = "Home";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        // include - Site Details
        include($path."assets/includes/sections/site_details.php"); 

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
        
        // include - HEADER
        include($path."assets/includes/sections/header.php");

    // MAIN PAGE
    // #########################################################################################################################################

        // include - ABOUT 
        include($path."assets/includes/pages/about/about.php");

        // include - BENEFITS 
        include($path."assets/includes/pages/about/benefits.php");
        
        // include - PROOF OF CONCEPT
        include($path."assets/includes/pages/services/proof_of_concept/proof_of_concept_overview.php");
        
        // include - BUSINESS ANALYSIS OVERVIEW
        include($path."assets/includes/pages/services/business_analysis/business_analysis_overview.php");
        
        // include - PROJECT MANAGEMENT OVERVIEW 
        include($path."assets/includes/pages/services/project_management/project_management_overview.php");
        
        // include - DEVELOPMENT OVERVIEW 
        include($path."assets/includes/pages/services/software_development/software_development_overview.php");

        // include - DATA MANAGEMENT OVERVIEW 
        include($path."assets/includes/pages/services/data_management/data_management_overview.php");
        
        // include - SKILLS DEVELOPMENT& TRAINING OVERVIEW 
        include($path."assets/includes/pages/services/skills_development_and_training/skills_development_and_training_overview.php");
        
        // include - ARTIFICIAL INTELLIGENCE OVERVIEW 
        include($path."assets/includes/pages/services/artificial_intelligence/artificial_intelligence_overview.php");
        
        // include - DIGITAL MEDIA & MARKETING OVERVIEW 
        include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_overview.php");

        // include - PRICES
        include($path."assets/includes/pages/prices/prices.php");

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
    
        // include - FOOTER 
        include($path."assets/includes/sections/footer.php");

?>