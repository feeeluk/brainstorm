<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ******************************

            // set the root folder in relation to this page (site root not server root) 
            $path = "../";       
                    // ./ = this page is located in the root directory
                    // ../ = this page is located one folder up
                    // ../../ = this page is located two folders up, etc.
            
            // every page can have a different title
            $subTitle = "Portfolio";

            // include
            include($path."assets/includes/sections/site_details.php"); 

            // include
            include($path."assets/includes/sections/header.php");

?>

    <article class="first_section"></article>

    <article class="portfolio">
        
        <h1>PORTFOLIO</h1>

        <section class="container">
    
            <?php

                // include - BUSINESS ANALYSIS ************************************************************
                include($path."assets/includes/pages/services/business_analysis/business_analysis_portfolio.php");

                // include - PROJECT MANAGEMENT ************************************************************
                include($path."assets/includes/pages/services/project_management/project_management_portfolio.php");

                // include - DEVELOPMENT ************************************************************
                include($path."assets/includes/pages/services/development/development_portfolio.php");

                // include - DATA MANAGEMENT ************************************************************
                include($path."assets/includes/pages/services/data_management/data_management_portfolio.php");

                // include - SKILLS AND TRAINING ************************************************************
                include($path."assets/includes/pages/services/skills_and_training/skills_and_training_portfolio.php");

                // include - ARTIFICIAL INTELLIGENCE ************************************************************
                include($path."assets/includes/pages/services/artificial_intelligence/artificial_intelligence_portfolio.php");

                // include - DIGITAL MEDIA AND MARKETING ************************************************************
                include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_portfolio.php");
                
            ?>

        </section>

    </article>

<?php

    // include
    include($path."assets/includes/sections/footer.php");
    
?>