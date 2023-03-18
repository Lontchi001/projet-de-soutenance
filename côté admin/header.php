
        
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
     
        <div id="main-wrapper">

        <div class="nav-header" style="background:white;">

    <a href="dashboard.php?id=<?php echo $userinfo['id']; ?>" class="brand-logo">
                  
                    <img class="logo-compact" src="images/logo-text-white.png" alt="">
                    <img  src="images/CFPC.png" style="width: 65px; margin-left: -10px; height: 50px;" alt="">
                    <h4 class="brand-title" >ESPACE ADMIN </h2> 
        
        <div>
       
        </div>
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
    </div>
<div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <a href="../Projet/Accueil.php" class="btn btn-dark">Page d'accueil du CFPC</a> 
                        </div>
  

                            <ul class="navbar-nav header-right">
                          
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <img src="images/avatar/<?php echo $userinfo['tof']; ?>" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="profil.php?id= <?php echo $userinfo['id']; ?>" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span class="ml-2">Profile </span>
                                        </a>
                                  
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>