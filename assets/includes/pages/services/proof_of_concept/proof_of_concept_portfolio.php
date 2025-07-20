<?php

    if (str_contains($_SERVER['REQUEST_URI'],'proof_of_concept') == true)
        {
            echo "<article class='portfolio'>";
                
                echo "<h1>PORTFOLIO</h1>";
                    
                echo "<section class='summary'>";
            
                    echo "<h2>Examples of work that we have done for our clients:</h2>";

                    echo "<div>";
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
            <div>
                
                <span>
                    <img src="/assets/images/services/proof_of_concept/portfolio_treedata_v1.webp" alt="Tree Data">
                </span>

                <span>
                    <img src="/assets/images/services/proof_of_concept/portfolio_portal.webp" alt="Telesales Portal">
                </span>

                <span>
                    <img src="/assets/images/services/proof_of_concept/portfolio_points_academy.webp" alt="Points Academy Portal">
                </span>

            </div>

        </div>
    
    </section>
        
</article>