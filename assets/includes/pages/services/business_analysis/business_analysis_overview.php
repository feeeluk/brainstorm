<?php

    if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == true)
        {
            echo "<article class='style_1 first_plus'>";
        }

        else {
            echo "<article class='style_1'>";
        }

?>
    
    <h1>BUSINESS ANALYSIS</h1>

    <section>

        <div>
        
            <span class="banner">

                <img src="/assets/images/services/business_analysis/sticky_notes.jpg" alt="sticky notes">
                <img src="/assets/images/services/business_analysis/whiteboard.jpg" alt="whiteboard">
                <img src="/assets/images/services/business_analysis/pen_and_paper.jpg" alt="pen and paper">
                <img src="/assets/images/services/business_analysis/flip_chart.jpg" alt="flip chart">
                <img src="/assets/images/services/business_analysis/event_storming.jpg" alt="event storming">
                <img src="/assets/images/services/business_analysis/event_storming.jpg" alt="event storming">
        
            </span>
            
            <span class="question">

                <h5>Q: What is business analysis?</h5> 

            </span>
                            
            <span class="answer">

                <p>

                    A: Business analysis is the process of identifying business needs and finding solutions to business problems. It involves understanding how organizations function, gathering and analyzing data, and recommending changes that will deliver value to stakeholders.
                
                </p>

            </span>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'business_analysis') == false)
                    {
                        echo "<a href='/pages/services/business_analysis.php'>";

                            echo "<span class='more_information'>";

                                echo "More Information";

                            echo "</span>";

                        echo "</a>";

                    }

            ?>    

        </div>

    </section>

</article>