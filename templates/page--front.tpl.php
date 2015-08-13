<?
  drupal_add_css($directory . '/assets/css/areas/home.css', array('group' => CSS_DEFAULT, 'weight' => 2));
  drupal_add_js($directory . '/assets/js/areas/home.js');
  //drupal_add_js($directory . '/assets/js/areas/countdown.js');
  drupal_add_js('//cdn.jsdelivr.net/underscorejs/1.6.0/underscore-min.js', 'external');

  drupal_set_title('A decentralized exchange for everyone | B&C Exchange');
?>

<!-- Header
================================================== -->
<header>
  <div class="hero-wrapper">
    <img class="logo-main" src="/<?=$directory?>/assets/img/header-logo.svg">
    <h1>A decentralized exchange for everyone.</h1>
    <h2>Download our initial wallet client (trading is disabled)</h2>
    <div class="hero-buttons">
      <a class="btn" href="https://bitbucket.org/JordanLeePeershares/bcexchange/downloads/bcexchange-3.0.0-RC1-win-gitian.zip">Windows</a>
      <a class="btn" href="https://bitbucket.org/JordanLeePeershares/bcexchange/downloads/bcexchange-3.0.0-RC1-linux-gitian.zip">Linux</a>
      <a class="btn" href="#">OS X (coming soon)</a>
    </div>
  </div>
</header>

<!-- Page
================================================== -->
<div class="container">
  <section class="summary">
    <blockquote>
      <p>"In the end, the rise of digital currency may be a matter of evolutionary destiny. The Internet has disrupted and decentralized much of the world economy, but the centralized world of finance remains stuck in the 15th century. Digital currency can help it adapt and survive."</p>
      <footer><strong>Wall Street Journal</strong>. (2015, January 23). <em>Bitcoin and the Digital-Currency Revolution</em>. (<cite title="wsj.com"><a href="http://www.wsj.com/articles/the-revolutionary-power-of-digital-currency-1422035061" target="_blank">wsj.com</a></cite>)</footer>
    </blockquote>
  </section>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <section class="social">
        <div class="latest-tweets">
          <h2>Latest Tweets</h2>
          <div class="row">
            <?= twitter_pull_render('@BC_exchange', 'BC_exchange', 3, $themekey = NULL, $lazy_load = FALSE, $rts = TRUE) ?>
          </div>
        </div>
        <div class="social-links">
          <h2>Find Us On</h2>
          <ul class="list-inline">
            <li><a href="https://bitcointalk.org/index.php?topic=1033773.0" target="_blank"><img src="/<?=$directory?>/assets/img/icon-bitcoin.png" alt="Bitcoin"></a></li>
            <li><a href="http://twitter.com/BC_Exchange" target="_blank"><img src="/<?=$directory?>/assets/img/icon-twitter.png" alt="Twitter"></a></li>
            <li><a href="http://reddit.com/r/Cryptocurrency" target="_blank"><img src="/<?=$directory?>/assets/img/icon-reddit.png" alt="Reddit"></a></li>
          </ul>
        </div>
      </section>
      <section class="team">
        <div class="core-developers">
          <h2>Planned Supported Cryptocurrencies</h2>
          <div class="row">
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-bitcoin.svg">
              <p>Bitcoin <a href="http://www.bitcoin.org"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-nubits.png">
              <p>Nubits <a href="http://www.nubits.com"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-litecoin.jpg">
              <p>Litecoin <a href="http://www.litecoin.org"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-peercoin.png">
              <p>Peercoin <a href="http://www.peercoin.net"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-dogecoin.png">
              <p>Dogecoin <a href="http://www.dogecoin.com"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-dash.png">
              <p>DASH <a href="http://www.dashcoin.net"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-nxt.png">
              <p>NXT <a href="http://www.nxt.org"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
          </div>
        </div>
        <div class="core-developers">
          <h2>Planned Supported Cryptoequities</h2>
          <div class="row">
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-nushares.png">
              <p>Nushares <a href="https://nubits.com/nushares/introduction"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-blockshares.png">
              <p>Blockshares <a href="http://www.bcexchange.org"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
            <div class="developer col-md-3 col-sm-4 col-xs-6">
              <img class="avatar" src="/<?=$directory?>/assets/img/logo-bitshares.png">
              <p>Bitshares <a href="http://www.bitshares.org"><img src="/<?=$directory?>/assets/img/icon-link.svg"></a></p>
            </div>
          </div>
        </div>
        <div class="available-positions">
          <p>Want to help B&amp;C Exchange become the best decentralized exchange in the world?</p>
          <a href="https://bitcointalk.org/index.php?topic=1033773.0"><img src="/<?=$directory?>/assets/img/icon-rocket.svg">Come visit our project development thread and say hello.</a>
        </div>
      </section>
    </div>
  </div>
</div>

<!-- Footer
================================================== -->
<footer class="site-footer">
  &copy; B&amp;C Exchange <?=date("Y",time()); ?>  |  <a href="https://bitcointalk.org/index.php?topic=1033773.0">Contact</a>
</footer>