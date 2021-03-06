<?php require('inc/functions.php'); ?>


<!-- Barre de navigation -->
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
          <a class="navbar-brand" href="../index.php">
            <img
              src="img/logo_ecoit.png"
              alt="Logo Ecoit"
              width="30"
              height="24"
              class="d-inline-block align-text-top"
            />
            <img
              id="ecoit"
              src="img/name-ecoit.png"
              alt="Ecoit"
              width="60"
              height="48"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse"
            id="navbarNav"
          >
            <div class="col-8">
                <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formation.php">Formations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="postule.php">Devenir formateur(trice)</a>
              </li>
            </ul>
            </div>
            
           <div class="col-4">
               <a href="connexion_user.php" class="btn btn-outline-success me-2">Se connecter</a>
                <a href="register.php" class="btn btn-success">S'inscrire</a>
                <a href="connexion_admin.php" class="btn btn-success">Espace Admin</a>
 
           </div>
          </div>
        </div>
      </nav>