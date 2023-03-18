<div class="dlabnav">

        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
  
                <li class="nav-label first"> Menu principal</li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-users"></i>
                        <span class="nav-text">Etudiants</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="liste.php?id=<?php echo $userinfo['id']?>">Liste des étudiants</a></li>
                        <li><a href="http://localhost:8080/Projet/FORMULAIRE.php">Ajouter un étudiant</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fas fa-book-open"></i></i>
                        <span class="nav-text">Filières</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="listeB.php?id=<?php echo $userinfo['id']?>">Bureautique</a></li>
                        <li><a href="listeGESTION.php?id=<?php echo $userinfo['id']?>">Gestion</a></li>
                        <li><a href="listeGRAPH.php?id=<?php echo $userinfo['id']?>">Graphisme</a></li>
                        <li><a href="listeGI.php?id=<?php echo $userinfo['id']?>">Genie informatique</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fas fa-user-alt"></i></i>
                        <span class="nav-text">Administrateur</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="editerA.php?id=<?php echo $userinfo['id']?>">Editer profile</a></li>
                        <li><a href="déconnexion.php">Se deconnecter</a></li>
                    </ul>
                </li>




            </ul>
        </div>
  
    </div>