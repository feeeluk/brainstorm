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
        $subTitle = "Legal";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        // include - Site Details
        include($path."assets/includes/sections/site_details.php"); 

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
        
        // include - HEADER
        include($path."assets/includes/sections/header.php");

?>

<article class="first_plus">

    <h1>Legal</h1>

    <section>
     
        <div>

            <h5>Status</h5>
        
                <p>
                    Brainstorm Technical Solutions is a trading name used by Philip Henning (Philip Henning trading as Brainstorm Business Solutions).
                    <br>
                    Philip Henning is a sole trader.
                </p>

            <h5>VAT</h5>

                <p>

                </p>

            <h5>Insurance</h5>

                <p>

                </p>

            <h5>Payment Terms</h5>

                <p>

                </p>

            <h5></h5>

                <p>

                </p>

            <h5></h5>

                <p>

                </p>
        
        </div>

    </section>

</article>

<?php

    // include
    include($path."assets/includes/sections/footer.php");

?>