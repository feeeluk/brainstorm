<?php

    if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
        {
            echo "<article class='case_studies only'>";
        }

        else {
            echo "<article class='case_studies'>";
        }


    if (str_contains($_SERVER['REQUEST_URI'],'software_development') == true)
            {
                echo "<h1>CASE STUDIES</h1>";
            }

?> 
    
    <section>

        <?php

            if (str_contains($_SERVER['REQUEST_URI'],'case_studies') == true)
                {
                    echo "<h2>SOFTWARE DEVELOPMENT</h2>";
                }

        ?> 
        
        <h4>TEST</h4>   
            
        <div>

            <span class="left">
                
                <img src="/assets/images/portfolio/philhenning_screenshot.png" alt="phil henning">
            
            </span>

            <span class="right">

                <p>

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                </p>

            </span>

        </div>

    </section>

</article>