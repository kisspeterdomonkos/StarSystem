<?php
    include("includes/database.php");
    include("includes/queries.php");
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naprendszer</title>
    <link rel="stylesheet" href="sources/css/bootstrap.css">
    <link rel="stylesheet" href="sources/css/mystyle.css">
</head>
<body class="bg-light">
    <header class="myheader">
        <h1 class="myh1 h1 text-center">Naprendszer</h1>
    </header>

    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
                <li class="nav-item"><a class="nav-link" href="includes/bolygok.php">Bolygók</a></li>
                <li class="nav-item"><a class="nav-link" href="includes/holdak.php">Holdak</a></li>
            </ul>
        </nav>
    </div>
    
    <h2 class="h2 text-center myh2 display-6 py-3">Naprendszer</h2>
    <div class="main">
        
        <img src="sources/img/solar-system.jpg" alt="solar-system.jpg" class="mysolarsystem img img-fluid">
        <p style="margin-left: 10px;">
            A Naprendszer a Nap gravitációja által egyben tartott bolygórendszer, része a Tejútrendszer milliárd csillagrendszerének, amely galaxisunk Orion spirálkarjának nagyjából a felénél, a galaxis közepe és pereme között is hozzávetőleg félúton helyezkedik el. A Naprendszer határa a Naptól számított 8-10 billió km (kb. 1 fényév). A tudósok csak a 20. században jöttek rá, hogy a Naprendszernek nem a Kuiper-övnél van vége, hanem az Oort-felhőnél.
            Bolygónknak, a Földnek otthont adó Naprendszerünk középpontjában a Nap található. Csillagunk gravitációs térrészén belüli objektumok és kölcsönhatások összessége jelenti a Naprendszert. Központi csillagunk hozzávetőleg 4,6 milliárd évvel ezelőtt alakult ki egy hatalmas gázfelhő gravitációs összehúzódása nyomán. Nem sokkal később, már 4,567 milliárd évvel ezelőtt a csillagkeletkezésnél visszamaradt, a Nap egyenlítői síkjában lapos korongba rendeződött anyagból, a protoplanetáris korongból kialakultak az első kisbolygók, majd bolygók. A belső Naprendszerben négy kőzetbolygó (a Merkúr, a Vénusz, a Föld és a Mars), a külső Naprendszerben négy óriásbolygó (a Jupiter, a Szaturnusz, az Uránusz és a Neptunusz) és az öt törpebolygó (Ceres, Pluto, Haumea, Makemake, Eris) alakult ki. A kőzetbolygók kérge szilikátos, a gázbolygók viszonylag kis szilárd magját hatalmas hidrogén–hélium légkör veszi körül, a törpebolygók összetétele jeges kőzet.
            A Naprendszerben a bolygókon kívül számos kisebb égitest is található. A legnagyobb számú égitest-populáció a két különálló övezetbe rendeződött aszteroidák családja. A belső aszteroidaöv a Mars és a Jupiter között, a külső, ún. Kuiper-öv pedig a Neptunusz pályáján túl helyezkedik el ellipszis alakban keringve a Nap mint gyújtópont körül. Ezekben az övekben található öt olyan objektum, amelyek egy 2006-ban bevezetett égitesttípus ma ismert első tagjai, a törpebolygók. Hat bolygónak és három törpebolygónak természetes kísérői is vannak, ezeket holdaknak nevezzük. A holdakon kívül az óriásbolygók körül gyűrűk, gyűrűrendszerek keringenek.
            A rendszerben vannak szabadon keringő testek is, ezek az üstökösök, a kentaurok és a mindenütt jelenlévő bolygóközi por. Ezek zömének keringése merőben eltér a többi testétől: vagy elnyújtott ellipszispályákon, vagy az ekliptikáétól eltérő síkban mozognak.
            A Naprendszert teljesen betölti a napszél, a csillagunkból kiinduló folyamatos részecskeáramlás, amely kölcsönhatásba lép az égitestekkel, létrehozva az űridőjárást. A napszél egyben ki is jelöli a Naprendszer határait: hatása a heliopauzáig tart, ahol más csillagok szeleinek sugárnyomása kiegyenlíti a napszél sugárnyomását. Ezt a határt tekintjük a Naprendszer határának, bár a rendszer gravitációs határa messzebbre tehető, hisz még a hozzávetőleg egy fényév távolságig terjedő Oort-felhő is ezen a határon belül van.
        </p>
    </div>

<?php
    include("includes/footer.php");
?>