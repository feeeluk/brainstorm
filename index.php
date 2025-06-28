<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ******************************

    // set the root folder (site root not server root) in relation to this page
    $path = "./";       
            // ./ = this page is located in the root directory
            // ../ = this page is located one folder up
            // ../../ = this page is located two folders up, etc.
    
    // every page can have a different title
    $subTitle = "Home";

    // include - Site Details ************************************************************
    include($path."assets/includes/sections/site_details.php"); 

	// include - Header ************************************************************
    include($path."assets/includes/sections/header.php");

    // include - ABOUT ************************************************************
    include($path."assets/includes/pages/about/about.php");

    // include - BENEFITS ************************************************************
    include($path."assets/includes/pages/about/benefits.php");
    
    // include - BUSINESS ANALYSIS ************************************************************
    include($path."assets/includes/pages/services/business_analysis/business_analysis_overview.php");
    
    // include - PROJECT MANAGEMENT ************************************************************
    include($path."assets/includes/pages/services/project_management/project_management_overview.php");
    
    // include - DEVELOPMENT ************************************************************
    include($path."assets/includes/pages/services/development/development_overview.php");

    // include - DATA MANAGEMENT ************************************************************
    include($path."assets/includes/pages/services/data_management/data_management_overview.php");
    
    // include - SKILLS & TRAINING ************************************************************
    include($path."assets/includes/pages/services/skills_and_training/skills_and_training_overview.php");
    
    // include - ARTIFICIAL INTELLIGENCE ************************************************************
    include($path."assets/includes/pages/services/artificial_intelligence/artificial_intelligence_overview.php");
    
    // include - DIGITAL MEDIA & MARKETING ************************************************************
    include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_overview.php");

    // include - FOOTER ************************************************************
    include($path."assets/includes/sections/footer.php");

?>