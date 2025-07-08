<?php

    if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
        {
            echo "<article class='portfolio first_plus'>";
        }

        else {
            echo "<article class='portfolio'>";
        }

    if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
        {
            echo "<h1>PORTFOLIO</h1>";
        }

    ?> 

    <section>

        <div>
    
            
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
                    {
                        echo "<h2>BUSINESS ANALYSIS</h2>";
                    }

            ?>
            
            <span>
            
                <img src="/assets/images/portfolio/snowcompare_shop_screenshot.png" alt="snowcompare shop">
                
                <img src="/assets/images/portfolio/snowcompare_shop_screenshot.png" alt="snowcompare shop">
            
            </span>
            
        </div>

    </section>
        
</article>