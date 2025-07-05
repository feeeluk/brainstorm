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
        $subTitle = "Digital Media & Marketing";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        // include - Site Details
        include($path."assets/includes/sections/site_details.php"); 

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
        
        // include - HEADER
        include($path."assets/includes/sections/header.php");

?>
    
    <article class="first_article"></article>
    
    <!-- OVERVIEW -->
    <!-- ************************************************************************************************************** -->
    <?php
        
        // include
        include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_overview.php");

    ?>

    <!-- BENEFITS -->
    <!-- ************************************************************************************************************** -->
    <?php

        // include
        include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_benefits.php");

    ?>

    <!-- CASE STUDIES -->
    <!-- ************************************************************************************************************** -->
     <article class="case_studies">
    
        <h1>CASE STUDIES</h1>

        <section class="container">

            <?php

                // include
                include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_case_studies.php");

            ?>

        </section>

    </article>

    <!-- PRICES -->
    <!-- ************************************************************************************************************** -->
    <?php

        // include
        include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_prices.php");

    ?>


    <!-- NEXT STEPS -->
    <!-- ************************************************************************************************************** -->
    <?php

        // include
        include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_next_steps.php");

    ?>

    <!-- PORTFOLIO -->
    <!-- ************************************************************************************************************** -->
     <article class="portfolio">
    
        <h1>PORTFOLIO</h1>

        <section class="container">

            <?php
                
                // include
                include($path."assets/includes/pages/services/digital_media_and_marketing/digital_media_and_marketing_portfolio.php");

            ?>

        </section>
        
    </article>

<?php

    // include
    include($path."assets/includes/sections/footer.php");
        
?>