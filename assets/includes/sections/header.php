<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
        <link rel="stylesheet" href="/assets/styles/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
        
		<script defer src="/assets/scripts/script.js"></script>

		<title>
            <?php echo $subTitle; ?> | <?php echo $siteTitle; ?>
        </title>
        
	</head>
	
<body>

    <header>

            <section>
                
                <a href="/">
                    <img src="/assets/images/other/logo.png">
                </a>

            </section>

            <nav class="dropdown">

                <button>
                    <a href="/">
                        Home
                    </a>
                </button>

                <button class="dropButton">
                    <a href="#">
                        Services
                    </a>

                    <div class="dropContent">
                        <a href="/pages/services/business_analysis.php">Business analysis</a>
                        <a href="/pages/services/project_management.php">Project management</a>
                        <a href="/pages/services/software_development.php">Software Development</a>
                        <a href="/pages/services/data_management.php">Data management</a>
                        <a href="/pages/services/skills_and_training.php">Skills & training</a>
                        <a href="/pages/services/artificial_intelligence.php">Artificial Intelligence</a>
                        <a href="/pages/services/digital_media_and_marketing.php">Digital media & marketing</a>
                    </div>

                </button>
                
                <button>
                    <a href="/pages/portfolio.php">
                        Portfolio
                    </a>
                </button>

                <button>
                    <a href="/pages/case_studies.php">
                        Case Studies
                    </a>
                </button>

                <button>
                    <a href="">
                        Blog
                    </a>
                </button>

                <button>
                    <a href="/pages/contact.php">
                        Contact
                    </a>
                </button>

            </nav>

            <section></section>

    </header>