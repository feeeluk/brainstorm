<?php
    
    // SET PAGE SPECIFIC VARIABLES
    // ****************************************************************************************************************************************

        /* set the root folder in relation to this page (site root) */
        $path = "../";
        
            /*
                ./ = page is located in the root directory
                ../ = page is located one folder up
                ../../ = page is located two folders up, etc
            */
        
        
        // set the page title
        $subTitle = "";

    // IMPORT SITE WIDE VARIABLES & CONSTANTS
    // ****************************************************************************************************************************************

        // include - Site Details
        include($path."assets/includes/sections/site_details.php"); 

    // STANDARD LAYOUT
    // ****************************************************************************************************************************************
        
        // include - HEADER
        include($path."assets/includes/sections/header.php");

?>

<article style="margin:0px;
                padding-top: 0px;
                padding-bottom: 0px">
    
    <section style="justify-items: flex-start;
                    padding: 0px 20px 0px 20px">

        <div style="height: 100vh;
                    background-color: blue; 
                    margin:80px 0px 0px 0px;
                    padding:0px;
                    display:flex;
                    flex-direction:row;
                    flex-wrap:wrap;
                    justify-content:left;
                    align-content:center; ">   

            <div style="background-color:transparent;
                        padding:0px;
                        width:fit-content;
                        height:30%;
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        justify-content: flex-end;
                        margin-right: 5px;
                        margin-bottom: 5px;">
                
                <img src="/assets/images/services/artificial_intelligence/artificial_intelligence.jpg" alt="">
                
                <h3 style="position: absolute;
                            bottom: 0;
                            left: 0;">test</h3>

            </div>

            <div style="background-color:transparent; padding:0px; width:fit-content; height:30%;  position: relative; display: flex; flex-direction: column; justify-content: flex-end; margin-right: 5px; margin-bottom: 5px;">
                
                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/business_analysis/business_analysis.jpg" alt="">
                
                <h3 style="position: absolute; bottom: 0; left: 0;">test</h3>

            </div>

            <div style="background-color:transparent; padding:0px; width:fit-content; height:30%;  position: relative; display: flex; flex-direction: column; justify-content: flex-end; margin-right: 5px; margin-bottom: 5px;">
                
                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/data_management/data_management.jpg" alt="">
                
                <h3 style="position: absolute; bottom: 0; left: 0;">test</h3>

            </div>

            <div style="background-color:transparent; padding:0px; width:fit-content; height:30%;  position: relative; display: flex; flex-direction: column; justify-content: flex-end; margin-right: 5px; margin-bottom: 5px;">
                
                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/project_management/project_management.jpg" alt="">
                
                <h3 style="position: absolute; bottom: 0; left: 0;">test</h3>

            </div>

            <div style="background-color:transparent; padding:0px; width:fit-content; height:30%;  position: relative; display: flex; flex-direction: column; justify-content: flex-end; margin-right: 5px; margin-bottom: 5px;">
                
                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/skills_and_training/skills_and_training.jpg" alt="">
                
                <h3 style="position: absolute; bottom: 0; left: 0;">test</h3>

            </div>
            
            <div style="background-color:transparent; padding:0px; width:fit-content; height:30%;  position: relative; display: flex; flex-direction: column; justify-content: flex-end; margin-right: 5px; margin-bottom: 5px;">
                
                <img style="padding-right: 0px; padding-bottom: 0px;" src="/assets/images/services/development/development.jpg" alt="">
                
                <h3 style="position: absolute; bottom: 0; left: 0;">test</h3>

            </div>

        </div>

    </section>

</article>

</body>
</html>