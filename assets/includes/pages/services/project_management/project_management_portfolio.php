<?php

    if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
        {
            echo "<article class='portfolio'>";
                
                echo "<h1>PORTFOLIO</h1>";
                    
                echo "<section class='summary'>";
            
                    echo "<h2>Examples of work that we have done for our clients:</h2>";
        }

    elseif (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
        {         
            echo "<article class='portfolio'>";
            
                echo "<section>";

                    echo "<div>";
            
                        echo "<h2>PROJECT MANAGEMENT</h2>";
        }

?> 
        
            <!-- ####################### -->
            <span>

                <img src="/assets/images/other/portfolio.jpg" alt="Portfolio">
            
            </span>
            
        </div>
        
    </section>
        
</article>