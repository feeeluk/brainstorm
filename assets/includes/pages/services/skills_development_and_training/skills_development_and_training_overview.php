<?php

    if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == true)
        {
            echo "<article class='overview first_plus'>";
        }

        else {
            echo "<article class='overview'>";
        }

?>
    
    <h1>SKILLS DEVELOPMENT & TRAINING</h1>

    <section>

        <div>

            <span class="banner">

                <img src="/assets/images/services/skills_development_and_training/overview_skills_development_and_training.webp" alt="Skills development & training">

            </span>

            <span>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                
            </span>

            <?php

                if (str_contains($_SERVER['REQUEST_URI'],'skills_development_and_training') == false)
                    {
                        echo "<a href='/pages/services/skills_development_and_training.php'>";

                            echo "<span class='more_information'>";

                                echo "More Information";

                            echo "</span>";

                        echo "</a>";

                    }

            ?>
            
        </div>

    </section>

</article>