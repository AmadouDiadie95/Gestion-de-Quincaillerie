<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Quincaillerie</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="/Gestion-de-Quincaillerie/public">Gestion de Quincaillerie</a>
                    </div>
                    <div class="toggler">
                        <a href="/Gestion-de-Quincaillerie/public/" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="/Gestion-de-Quincaillerie/public/" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Accueil</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-grid-1x2-fill"></i>
                            <span>Categories</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="/Gestion-de-Quincaillerie/public/ajouter-categorie">Ajouter</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/Gestion-de-Quincaillerie/public/liste-categorie">Liste</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Articles</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="/Gestion-de-Quincaillerie/public/ajouter-article">Ajouter</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/Gestion-de-Quincaillerie/public/liste-article">Liste</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Fournisseurs</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="/Gestion-de-Quincaillerie/public/ajouter-fournisseur">Ajouter</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/Gestion-de-Quincaillerie/public/liste-fournisseur">Liste</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">Ventes &amp; Caisses</li>

                    <li class="sidebar-item  ">
                        <a href="/Gestion-de-Quincaillerie/public/etat-caisse" class='sidebar-link'>
                            <i class="bi bi-cash"></i>
                            <span>Etat de la Caisse</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="/Gestion-de-Quincaillerie/public/liste-vente" class='sidebar-link'>
                            <i class="bi bi-bar-chart-fill"></i>
                            <span>Liste des Ventes</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Options</li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="auth-login.html">Login</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="auth-register.html">Mon Compte</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="auth-forgot-password.html">logout</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main" class='layout-navbar'>
        <header class='mb-3'>
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
                    <a href="#" class="burger-btn d-block">
                        <i class="bi bi-justify fs-3"></i>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        </ul>
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <h6 class="mb-0 text-gray-600">Amadou Diadie</h6>
                                        <p class="mb-0 text-sm text-gray-600">Administrateur</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="assets/images/faces/1.jpg">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <h6 class="dropdown-header">Amadou Diadie Coulibaly</h6>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> Mon Compte </a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div id="main-content">
