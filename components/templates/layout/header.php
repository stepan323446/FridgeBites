<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_title_website($title) ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo ASSETS_PATH . '/favicon.png' ?>">

    <meta name="description" content="<?php echo $description ?>">

    <!-- Meta tags -->
    <meta name="robots" content="nofollow, noindex">

    <?php foreach($meta_tags as $tag): ?>
    <meta name="<?php echo $tag[0] ?>" content="<?php echo $tag[1] ?>">
    <?php endforeach; ?>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <!-- Google fonts/ -->

    <!-- Font Awesome -->
    <link href="<?php echo ASSETS_PATH . '/fontawesome-free-6.6.0-web/css/fontawesome.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo ASSETS_PATH . '/fontawesome-free-6.6.0-web/css/brands.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo ASSETS_PATH . '/fontawesome-free-6.6.0-web/css/solid.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo ASSETS_PATH . '/fontawesome-free-6.6.0-web/css/regular.min.css' ?>" rel="stylesheet" />
    <!-- Font Awesome/ -->

    <!-- Other Libraries -->
    <link rel="stylesheet" href="<?php echo ASSETS_PATH . '/swiper/swiper-bundle.min.css' ?>">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH . '/toastify/toastify.min.css' ?>">
    <!-- Other Libraries/ -->

    <link rel="stylesheet" href="<?php echo ASSETS_PATH . '/css/reset.css' ?>">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH . '/css/style.css' ?>">
</head>
<body class="<?php echo $body_class ?>">
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <a href="<?php the_permalink("index:home")?>">
                        <img src="<?php echo ASSETS_PATH . '/images/fridgeLogo.png'?>" alt="fridgeBitesLogo" class="logo-img">
                    </a>
                </div>
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="<?php the_permalink("index:home")?>" class="nav-link">HOME</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">RECIPES</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">FAVORITES</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">MEAL A DAY</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">SUBMIT RECIPE</a></li>
                    </ul>
                </nav>
                <div class="search-and-login">
                    placeholder
                </div>
            </div>
        </div>
    </header>
   