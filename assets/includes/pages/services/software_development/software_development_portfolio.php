<?php

    if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
        {
            echo "<article class='portfolio'>";
                
                echo "<h1>PORTFOLIO</h1>";
                    
                echo "<section class='summary'>";
            
                    echo "<h2>Examples of work that we have done for our clients:</h2>";

                    echo "<div>";
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

                <img src="/assets/images/services/software_development/portfolio_philhenning.webp" alt="phil henning">

                <img src="/assets/images/services/software_development/portfolio_quiz.webp" alt="quiz">

                <img src="/assets/images/services/software_development/portfolio_snowcompare.webp" alt="snow compare">

                <img src="/assets/images/services/software_development/portfolio_snowcompare_shop.webp" alt="snowcompare shop">

                <img src="/assets/images/services/software_development/portfolio_portal.webp" alt="portal">

                <img src="/assets/images/services/software_development/portfolio_points_academy.webp" alt="points academy">

                <img src="/assets/images/services/software_development/portfolio_treedata_v1.webp" alt="snowcompare shop">
                                         
            
            </span>

        </div>
    
    </section>
        
</article>