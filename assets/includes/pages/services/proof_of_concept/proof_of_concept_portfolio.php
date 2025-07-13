<?php

    if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
        {
            echo "<article class='portfolio first_plus'>";
        }

        else {
            echo "<article class='portfolio'>";
        }

    if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
            {
                echo "<h1>PORTFOLIO</h1>";
            }

    ?> 

    <section>            
        
        <div>
                    
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
                    {
                        echo "<h2>PROOF OF CONCEPT</h2>";
                    }

            ?>  

            <span>

                <img src="/assets/images/services/proof_of_concept/screenshot_treedata_v1.png" alt="Tree Data">
                <img src="/assets/images/services/proof_of_concept/screenshot_portal.png" alt="Telesales Portal">
                <img src="/assets/images/services/proof_of_concept/screenshot_points_academy.png" alt="Points Academy Portal">                  
            
            </span>

        </div>
    
    </section>
        
</article>