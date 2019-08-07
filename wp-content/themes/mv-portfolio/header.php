<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio de Vento Michael, jeune Webdesigner, lancé depuis 2019 je crée toutes identitées visuelles quel que sois les difficultés.">
    <meta name="keywords" content="Portfolio,description, webdesigner, freelance, HTML, CSS, JS, Javascript,PHP">
    <meta name="author" content="Michael Vento">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="fb:page_id" content="3158" />
    <meta name="og:email" content="vento.michael0705@hotmail.com"/>
    <meta name="og:locality" content="JUPRELLE"/>
    <meta name="og:region" content="WALLONE"/>
    <meta name="og:postal-code" content="4450"/>
    <meta name="og:country-name" content="BELGIUM"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body id="haut">
    <header>
        <h1 class="hidden">Portfolio de Vento Michael</h1>
        <div>
            <nav role="navigation">
                <a href="http://hepl01.cblue.be/~user18/portfolio/#" class="fixed logo"><h2 class="hidden">Menu</h2></a>
                <a href="http://hepl01.cblue.be/~user18/portfolio/#" class="fixed logo2"></a>
              <div class="menuToggle">
                <div class="fixed">
                    <input type="checkbox" />
                    <span class="menu_left"></span>
                    <span></span>
                    <span class="menu_right"></span>
                    <ul class="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <li>
                            <ul>
                                <?php foreach(mv_getMenu('main-other') as $item): ?>
                                    <li role="menuitem" itemprop="name">
                                        <a itemprop="url" href="<?= $item->url; ?>">
                                            <?= $item->label; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
              </div>
            </nav>
        </div>
    </header>