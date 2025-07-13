<article class="portfolio">
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'digital_media_and_marketing') == true)
            {
                echo "<h1>PORTFOLIO</h1>";
            }

    ?> 

    <section>            
        
        <div>
                    
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
                    {
                        echo "<h2>DIGITAL MEDIA & MARKETING</h2>";
                    }

            ?>

            <span>

                <img src="/assets/images/other/portfolio.jpg" alt="Portfolio">
            
            </span>
            
        </div>
                
    </section>
        
</article>
