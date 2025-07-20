<?php

    if (str_contains($_SERVER['REQUEST_URI'],'artificial_intelligence') == true)
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
            
                        echo "<h2>ARTIFICIAL INTELLIGENCE</h2>";
        }

?> 
        
            <!-- ####################### -->
            <div>
                <span>
                    <img src="/assets/images/other/portfolio.jpg" alt="Portfolio">
                </span>

                <span>
                    <img src="/assets/images/other/portfolio.jpg" alt="Portfolio">
                </span>

                <span>
                    <img src="/assets/images/other/portfolio.jpg" alt="Portfolio">
                </span>

            </div>
            
        </div>

    </section>

</article>