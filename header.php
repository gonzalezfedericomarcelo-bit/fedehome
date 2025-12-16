<?php
// Define las variables de SEO al inicio de cada página PHP
// Las he puesto aquí como fallback, pero deberías definirlas en index.php y prensa.php
if (!isset($pageTitle)) {
    $pageTitle = 'Federico González - Desarrollador & Escritor';
}
if (!isset($metaDescription)) {
    $metaDescription = 'Portfolio de desarrollo y universo literario de Federico González, autor de "Bajo la Sombra de un Nuevo Amanecer" y "Volveré a encontrarte...".';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.tudominio.com/">
    <meta property="og:image" content="https://www.tudominio.com/assets/img/social-share.jpg">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@700&display=swap">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preload" as="image" href="assets/img/hero.webp" type="image/webp">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!--div id="preloader">
    <div class="preloader-content">
        <img src="assets/img/preload.gif" alt="Cargando..." class="preloader-gif">
    </div>
</div-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-lg" id="mainNav">
    <div class="container">
        
        <a class="navbar-brand fw-bold" href="index.php">
            <img src="assets/img/logo.png" alt="Logo Digital Canvas" style="height: 50px;">  Fede González
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link text-accent-blue" href="./index.php#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link text-accent-orange" href="./index.php#writing">Escritura</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contenido
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./index.php#podcast">Podcast</a></li>
                        <li><a class="dropdown-item" href="./index.php#history">Historia</a></li>
                        <li><a class="dropdown-item" href="./index.php#instagram">Instagram</a></li>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link text-white" href="./index.php#about">Sobre Mí</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="./index.php#contact">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="page-content">