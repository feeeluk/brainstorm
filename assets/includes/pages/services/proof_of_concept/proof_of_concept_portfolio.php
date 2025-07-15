<?php

    if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
        {
            echo "<article class='portfolio'>";
                
                echo "<h1>PORTFOLIO</h1>";
                    
                echo "<section class='summary'>";
            
                    echo "<h2>Examples of work that we have done for our clients:</h2>";
        }

    elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
        {
            echo "<article class='portfolio first_plus'>";
            
                echo "<section class='summary'>";
            
                    echo "<h2>Examples of work that we have done for our clients:</h2>";
            
                echo "</section>";
            
            echo "</article>";
            
            echo "<article class='portfolio'>";
            
                echo "<section>";

                    echo "<div>";
            
                        echo "<h2>PROOF OF CONCEPT</h2>";
        }

?> 
        
            <!-- ####################### -->  
            <span>

                <img src="/assets/images/services/proof_of_concept/screenshot_treedata_v1.png" alt="Tree Data">
                <img src="/assets/images/services/proof_of_concept/screenshot_portal.png" alt="Telesales Portal">
                <img src="/assets/images/services/proof_of_concept/screenshot_points_academy.png" alt="Points Academy Portal">                  
            
            </span>

        </div>
    
    </section>
        
</article>