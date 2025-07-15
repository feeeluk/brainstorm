<?php

    if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
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
            
                        echo "<h2>SOFTWARE DEVELOPMENT</h2>";
        }

?> 
        
            <!-- ####################### -->
            <span>

                <img src="/assets/images/services/software_development/screenshot_philhenning.png" alt="phil henning">

                <img src="/assets/images/services/software_development/screenshot_quiz.png" alt="quiz">

                <img src="/assets/images/services/software_development/screenshot_snowcompare.png" alt="snow compare">

                <img src="/assets/images/services/software_development/screenshot_snowcompare_shop.png" alt="snowcompare shop">
                                         
            
            </span>

        </div>
    
    </section>
        
</article>