<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 3/30/2019
 * Time: 11:18 AM
 */

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Nick's Site</title>
    <meta charset="UDF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta name="theme-color" content="#373737">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-4">
        <div class="container">
            <a class="navbar-brand nick-navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Nick's Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#memes">My Memes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#videos">My Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">My Posts</a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#memes">My Memes</a>
                            <a class="dropdown-item" href="#videos">My Videos</a>
                            <a class="dropdown-item" href="/posts">My Posts</a>
                        </div>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid body-inner-wrapper">
