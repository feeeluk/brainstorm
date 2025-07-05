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
        $subTitle = "";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        // include - Site Details
        include($path."assets/includes/sections/site_details.php"); 

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
        
        // include - HEADER
        include($path."assets/includes/sections/header.php");

?>

<article class="about">

    <section class="left">

        <div class="left">

            <h1>ABOUT</h1>

            <p>
                SHORT VERSION = We solve business problems using technology.
            </p>

            <p>
                LONG VERSION = We offer a range of digital, technical and business services for companies and organisations that do not possess the expertise or experience themselves.
            </p>
            
            <p>
                Whether it's leveraging your existing data to drive sales, gaining a deeper understanding of your business ahead of a digital transformation, managing your complex project, turning your idea into a tangible 'proof-of-concept', or even down to training your team to use a tool in a different way — we can help you achieve your digital ambitions!
            </p>

            <p>  
                We are based in Hull (East Yorkshire) but have national scope, so wherever you are in the UK, please feel free to give us a call to discuss how we can help you.
            </p>

        </div>

    </section>

    <section class="right">

        <div class="right">

            <div class="box">

                <img src="/assets/images/services/artificial_intelligence/artificial_intelligence.jpg" alt="">
                <h3>test</h3>

            </div>

            <div class="box">

                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/business_analysis/business_analysis.jpg" alt="">
                <h3>test</h3>

            </div>

            <div class="box">

                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/data_management/data_management.jpg" alt="">
                <h3>test</h3>

            </div>

            <div class="box">

                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/project_management/project_management.jpg" alt="">
                <h3>test</h3>

            </div>

            <div class="box">

                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/skills_and_training/skills_and_training.jpg" alt="">
                <h3>test</h3>

            </div>

            <div class="box">

                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/development/development.jpg" alt="">
                <h3>test</h3>

            </div>

        </div>

    </section>

</article>

</body>
</html>