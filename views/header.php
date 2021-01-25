<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page; ?></title>    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">    
    <script type="text/javascript" src="js/script.js"></script>    
</head>
<body>
    <div id="container">
        <div id="main"> 

            <!-- 
            Navbar code has been sourced from
            https://getbootstrap.com/docs/4.4/components/navbar/ 
            and adapted with code sourced from
            https://www.codeply.com/go/qhaBrcWp3v        
            -->          
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?php if($page =='Home'){ echo ' active'; } ?>">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item <?php if($page =='Education'){ echo 'active'; } ?>">
                            <a class="nav-link" href="education.php">Education</a>
                        </li>                      
                    </ul>
                </div>
                <div class="mx-auto order-0">
                    <a class="navbar-brand mx-auto" href="#">Alan Arango</a>                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if($page =='Skills'){ echo 'active'; } ?>">
                            <a class="nav-link" href="skills.php">Skills</a>
                        </li>
                        <li class="nav-item <?php if($page =='Work Experience'){ echo 'active'; } ?>">
                            <a class="nav-link" href="work_experience.php">Work Experience</a>
                        </li>
                        <li class="nav-item <?php if($page =='PHP Exercise'){ echo 'active'; } ?>">
                            <a class="nav-link" href="php_exercise.php">PHP Exercise</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--End of Navbar-->