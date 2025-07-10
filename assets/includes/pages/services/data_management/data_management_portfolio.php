<article class="portfolio">
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'data_management') == true)
        {
            echo "<h1>PORTFOLIO</h1>";
        }
        
    ?>
        
    <section>
        
        <div>
            
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
                    {
                        echo "<h2>DATA MANAGEMENT</h2>";
                    }

            ?>

            <span>

                <img src="/assets/images/portfolio/snowcompare_screenshot.png" alt="snow compare">
            
            </span>
            
        </div>

    </section>

</article>