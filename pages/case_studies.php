<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ****************************************************************************************************************************************

        /* set the root folder in relation to this page (site root) */
        $path = "../";
        
            /*
                ./ = page is located in the root directory
                ../ = page is located one folder up
                ../../ = page is located two folders up, etc
            */
        
        
        // set the page title
        $subTitle = "Case Studies";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        // include - Site Details
        include($path."assets/includes/sections/site_details.php"); 

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
        
        // include - HEADER
        include($path."assets/includes/sections/header.php");

?>

    <article class="case_studies first_article_plus">

        <section class="container">

            <?php

                // include - PROOF OF CONCEPTS ************************************************************
                include($path."assets/includes/pages/case_studies/proof_of_concepts.php");

                // include - BUSINESS ANALYSIS ************************************************************
                include($path."assets/includes/pages/services/business_analysis/business_analysis_case_studies.php");

                // include - PROJECT MANAGEMENT ************************************************************
                // include($path."assets/includes/pages/services/project_management/project_management_case_studies.php");

                // include - DEVELOPMENT ************************************************************
                // include($path."assets/includes/pages/services/development/development_case_studies.php");

                // include - DATA MANAGEMENT ************************************************************
                // include($path."assets/includes/pages/services/data_management/data_management_case_studies.php");

                // include - SKILLS & TRAINING ************************************************************
                // include($path."assets/includes/pages/services/skills_and_training/skills_and_training_case_studies.php");

                // include - ARTIFICIAL INTELLIGENCE ************************************************************
                // include($path."assets/includes/pages/services/artificial_intelligence/artificial_intelligence_case_studies.php");

                // include - DITAL MEDIA & MARKETING ************************************************************
                // include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_case_studies.php");

            ?>

        </section>

    </article>

<?php

    // include
    include($path."assets/includes/sections/footer.php");

?>