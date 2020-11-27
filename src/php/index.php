<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--<link href="./styles/main.scss" rel="stylesheet" />-->
  <title>Alex Mayer</title>
</head>

<body>
  <header>
    <nav>
      <h1>Alex Mayer</h1>
      <ul id="menu">
        <li><a class="active" href="/">Start</a></li>
        <li><a href="/">Leistungen</a></li>
        <li><a href="/">Blog</a></li>
        <li><a href="/">Über Mich</a></li>
        <li><a href="/">Kontakt</a></li>
      </ul>
      <button id="menu-trigger" class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </nav>
    <section id="hero">
      <img src="<?php echo get_template_directory_uri() ?>/images/hero.jpg" alt="Design Icon" />
      <article>
        <h2><span>Glänzende Ideen für leuchtende Augen</span></h2>
        <button>Angebot einholen</button>
      </article>
    </section>
  </header>
  <main>
    <section class="maxwidthcontainer" id="services">
      <h2>Leistungen</h2>
      <ul>
        <li>
          <a href="/" class="bg-accent-bright">
            <h3>Design</h3>
            <img src="<?php echo get_template_directory_uri() ?>/images/design_icon.svg" alt="Design Icon" />
          </a>
        </li>
        <li>
          <a href="/" class="bg-accent-reg">
            <h3>Strategie</h3>
            <img src="<?php echo get_template_directory_uri() ?>/images/strategy_icon.svg" alt="Strategy Icon" />
          </a>
        </li>
        <li>
          <a href="/" class="bg-accent-dark">
            <h3>Consulting</h3>
            <img src="<?php echo get_template_directory_uri() ?>/images/consulting_icon.svg" alt="Consulting Icon" />
          </a>
        </li>
      </ul>
    </section>
    <section class="maxwidthcontainer" id="news">
      <h2>News</h2>
      <ul>
        <li>
          <a href="/">365 Postkarten</a> - Eine Liebeserklärung für jeden Tag!
          <a href="/">[mehr erfahren]</a>
        </li>
        <li>
          <a href="/">Award Nominierung</a> - Tolle News: Ich bin bei der
          Endauswahl 2020! <a href="/">[mehr erfahren]</a>
        </li>
        <li>
          <a href="/">CMYK erklärt</a> - Der neueste
          <a href="/">Blog</a>-Eintrag <a href="/">[mehr erfahren]</a>
        </li>
      </ul>
    </section>
    <section class="maxwidthcontainer" id="references">
      <h2>Referenzen</h2>
      <ul>
        <li class="tina-ubuntu">
          <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/images/img_ref2.jpg" alt="Tina Ubuntu, CEO Headless Ltd." />
          </div>
          <blockquote>
            Alex' Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20%
            in die Höhe zu treiben!
          </blockquote>
          <cite>Tina Ubuntu, <br> CEO Headless Ltd.</cite>
        </li>
        <li class="tom-herzog">
          <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/images/img_ref1.jpg" alt="Tom Herzog, Cutter's Finest" />
          </div>
          <blockquote>
            Große Webkunst - Keine Kunst mit Alex Mayer!
          </blockquote>
          <cite>Tom Herzog, <br> Cutter's Finest</cite>
          <div class="fill-item"></div>
        </li>
        <li class="mueller-ag">
          <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/images/img_ref3.jpg" alt="Vorstand Mueller AG" />
          </div>
          <blockquote>
            <span class="blockquote-content">Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen
              übertroffen.</span>
          </blockquote>
          <cite>Vorstand Müller AG<br />KR Ernst Anker, Dr. Florian Eisner</cite>
          <div class="quotation-decoration">
            <img src="<?php echo get_template_directory_uri() ?>/images/quotation_icon.svg" alt="Quotation" />
          </div>
        </li>
      </ul>
    </section>
  </main>
  <footer>
    <nav>
      <small>© Alex Mayer 2020</small>
      <ul>
        <li><a href="/">Impressum</a></li>
        <li><a href="/">Datenschutzerklärung</a></li>
      </ul>
    </nav>
    <article>
      <p>
        Demo-Wordpress-Seite im Rahmen der LV "Content Mangagement Systeme" an
        der FH Salzburg von Dennis Schöpf und Maximilian Schmitt
      </p>
      <p>Alle Inhalte frei erfunden</p>
      <p>Bildnachweis</p>
      <h5>Fotos</h5>
      <ul>
        <li>
          Herofoto Tastatur: Aman Anderson,
          http://de.freeimages.com/photo/illuminated-keyboard-124228
        </li>
        <li>
          Foto Dina Meyer by Dreifachaxel [CC BY-SA 4.0
          (https://creativecommons.org/licenses/by-sa/4.0)], from Wikimedia
          Commons
        </li>
        <li>
          Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann (Thomas
          Meyer-Hermann) [GFDL (http://www.gnu.org/ copyleft/fdl.html), CC
          BY-SA 3.0 (https://creativecommons.org/licenses/by-sa/3.0) or CC
          BY-SA 3.0 de
          (https://creativecommons.org/licenses/by-sa/3.0/de/deed.en)], via
          Wikimedia Commons https://upload.wikimedia.org/wikipedia/
          commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg
        </li>
        <li>
          Foto Vorstand Sparkasse Ülzen [[File:SKUelzen Vorstand
          2015.jpg|SKUelzen Vorstand 2015]] https://upload.
          wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg
        </li>
      </ul>
      <h4>Icons</h4>
      <p>Freepik (http://www.freepik.com) / www.flaticon.com</p>
    </article>
  </footer>
  <!--<script src="./scripts/main.js"></script>-->
</body>

</html>