<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{asset('bootstrapp/css/bootstrap.css')}}">
  <style>
    body {
      padding-top: 56px;
    }

    @media (max-width: 767.98px) {
      body {
        padding-top: 0;
      }
    }

    .sidebar {
      position: fixed;
      top: 56px;
      bottom: 0;
      left: 0;
      z-index: 1000;
      padding: 20px;
      overflow-x: hidden;
      overflow-y: auto;
      background-color: #f8f9fa;
    }

    .main-content {
      margin-left: 220px;
      transition: margin-left 0.3s;
    }
  </style>
  <title>Tableau de Bord Patient</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand ml-auto" href="#">Votre Hôpital</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-bell"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-comments"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Utilisateur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="#">Déconnexion</a>
        </div>
      </li>
    </ul>
  </nav>

  <!-- Barre latérale -->
  <nav class="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="fas fa-tachometer-alt"></i> Tableau de Bord
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-calendar-alt"></i> Rendez-vous
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-file-medical"></i> Dossiers Médicaux
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-user"></i> Profil Patient
        </a>
      </li>
      <!-- Ajoutez d'autres liens pour d'autres fonctionnalités -->
    </ul>
  </nav>

  <!-- Contenu principal -->
  <div class="main-content">
    <div class="container-fluid">
      <h5>Tableau de Bord Patient</h5>

      <!-- Contenu spécifique au patient -->
      <div class="container">
        <!-- Section pour les rendez-vous -->
        {{-- <div class="mt-4">
          <h3>Rendez-vous</h3>
          <!-- Contenu de la section des rendez-vous -->
        </div>

        <!-- Section pour les dossiers médicaux -->
        <div class="mt-4">
          <h3>Dossiers Médicaux</h3>
          <!-- Contenu de la section des dossiers médicaux -->
        </div>

        <!-- Section pour le profil du patient -->
        <div class="mt-4">
          <h3>Profil Patient</h3>
          <!-- Contenu de la section du profil du patient -->
        </div> --}}

        <!-- Ajoutez d'autres sections pour d'autres fonctionnalités -->
      </div>
    </div>
  </div>

  <!-- Scripts JavaScript Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $("#sidebarToggle").click(function(e) {
      e.preventDefault();
      $("body").toggleClass("sidebar-collapsed");
    });
  </script>
</body>
</html>
