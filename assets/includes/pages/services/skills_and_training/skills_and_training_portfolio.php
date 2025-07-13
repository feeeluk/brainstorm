<article class="portfolio">
    
    <?php

        if (str_contains($_SERVER['REQUEST_URI'],'skills_and_training') == true)
            {
                echo "<h1>PORTFOLIO</h1>";
            }

    ?> 

    <section>            
        
        <div>
                    
            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'portfolio') == true)
                    {
                        echo "<h2>SKILLS & TRAINING</h2>";
                    }

            ?>     

            <span>

                <img src="/assets/images/other/portfolio.jpg" alt="Portfolio">

            </span>
            
        </div>   

    </section>
        
</article>