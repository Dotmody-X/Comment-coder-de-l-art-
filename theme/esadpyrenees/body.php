<header id="header">
    <!-- Le titre du mémoire / doc écrit -->
    <h1><?= $title ?></h1>

    <!-- Le sous-titre éventuel (si pas de sous-titre, supprimer le h2) -->
    <h2><?= $subtitle ?></h2>

    <!-- le titre courant (version print) -->
    <div class="runningtitle">
        <div><?= $name ?></div>
        <div><?= $runningtitle ?></div>
    </div>

    <!-- le folio courant (version print) -->
    <div class="runningfolio">
        <span class="folio"></span>
        <!-- Logo ÉSAD Pyrénées -->
        <!-- <img src="<?= $theme_url ?>/css/Logo-75.png" alt="ESA Le 75"> -->
        <!-- Votre diplôme -->
        <span class="meta-year"><?= $year ?></span>
    </div>

    <!-- les méta-données -->
    <div class="meta">
        <div class="meta-data">
            <p>
                École supérieure <br class="breakprint">
                des arts de l'image <br class="breakprint">
                Le septantecinq<br><br class="breakprint">
                <!-- Votre pôle éventuel -->
                <?= $pole ?>
            </p>         
        </div>
        <div>
            <!-- Votre diplôme, option et mention -->
            <p>
                <?= $diploma ?> <br>
                <?= $mention ?> 
            </p>   
        </div>
        <div>
            <!-- Votre nom -->
            <div class="meta-name"><?= $name ?></div>
            <!-- l’année YYYY – YYYY  -->
            <div class="meta-year"><?= $year ?></div>
        </div>
        
    </div>

    <!-- les liens rapides: lire, imprimmer, télécharger -->
    <nav id="quicklinks">
        <a href="#nav">Lire en ligne</a>
        <!-- supprimer ce lien une fois le PDF généré : -->
        <a href="?print" title="Web to print">Imprimer</a>
        <!-- Modifier l’URL dans config.php -->
        <a href="<?= $pdf ?>">Télécharger</a>
    </nav>
</header>

<!-- la navigation (= le sommaire) -->
<nav id="nav">
    <h2>Sommaire</h2>
    <ul class="nav-ul">
        <?= $nav() ?>
    </ul>
</nav>

<main id="main">
    <!-- le contenu -->      
    <?= $html() ?>
</main>