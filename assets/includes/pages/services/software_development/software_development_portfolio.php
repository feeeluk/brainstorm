<article class="portfolio">
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1>PORTFOLIO</h1>";
            }

    ?> 

    <section>            
        
        <div>
                    
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
                    {
                        echo "<h2>SOFTWARE DEVELOPMENT</h2>";
                    }

            ?>  

            <span>

                <img src="/assets/images/services/software_development/screenshot_philhenning.png" alt="phil henning">

                <img src="/assets/images/services/software_development/screenshot_quiz.png" alt="quiz">

                <img src="/assets/images/services/software_development/screenshot_snowcompare.png" alt="snow compare">

                <img src="/assets/images/services/software_development/screenshot_snowcompare_shop.png" alt="snowcompare shop">
                                         
            
            </span>

        </div>
    
    </section>
        
</article>