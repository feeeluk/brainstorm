<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ******************************

            // set the root folder (site root not server root) in relation to this page
            $path = "../../";       
                    // ./ = this page is located in the root directory
                    // ../ = this page is located one folder up
                    // ../../ = this page is located two folders up, etc.
            
            // every page can have a different title
            $subTitle = "Project Management";

            // include
            include($path."assets/includes/sections/site_details.php"); 

            // include
            include($path."assets/includes/sections/header.php");

?>

    <article class="first_section"></article>

    <!-- OVERVIEW -->
    <!-- ************************************************************************************************************** -->
        <?php
            
            // include
            include($path."assets/includes/pages/services/project_management/project_management_overview.php");

        ?>

    <!-- BENEFITS -->
    <!-- ************************************************************************************************************** -->
    <article class="style_4">
        
        <h1>WHAT ARE THE BENEFITS?</h1>

        <section class="container">

            <?php
                
                // include
                include($path."assets/includes/pages/services/project_management/project_management_benefits.php");

            ?>

        </section>
    
    </article>

    <!-- CASE STUDIES -->
    <!-- ************************************************************************************************************** -->
    <article class="case_studies">
    
        <h1>CASE STUDIES</h1>

        <section class="container">

            <?php

                // include
                include($path."assets/includes/pages/services/project_management/project_management_case_studies.php");

            ?>

        </section>

    </article>

    <!-- PRICING -->
    <!-- ************************************************************************************************************** -->
    <article class="style_2">
        
        <h1>PRICING</h1>

        <section class="container">

            <?php

                // include
                include($path."assets/includes/pages/services/project_management/project_management_prices.php");

            ?>

        </section>

    </article>

    <!-- NEXT STEPS -->
    <!-- ************************************************************************************************************** -->
    <article class="style_2">
        
        <h1>NEXT STEPS</h1>

        <section class="container">

            <?php

                // include
                include($path."assets/includes/pages/services/project_management/project_management_next_steps.php");

            ?>

        </section>

    </article>

    <!-- PORTFOLIO -->
    <!-- ************************************************************************************************************** -->
    <article class="portfolio">
    
        <h1>PORTFOLIO</h1>

        <section class="container">

            <?php
                
                // include
                include($path."assets/includes/pages/services/project_management/project_management_portfolio.php");

            ?>

        </section>
        
    </article>

<?php

    // include
    include($path."assets/includes/sections/footer.php");
        
?>