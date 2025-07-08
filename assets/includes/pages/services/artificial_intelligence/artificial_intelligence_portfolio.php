<article class="portfolio">
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
        {
            echo "<h1>PORTFOLIO</h1>";
        }
        
    ?>
        
    <section>

        <div>
            
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
                    {
                        echo "<h2>ARTIFICIAL INTELLIGENCE</h2>";
                    }

            ?>

            <span>
                
                <img src="/assets/images/portfolio/snowcompare_shop_screenshot.png" alt="snowcompare shop">

            </span>
            
        </div>

    </section>

</article>