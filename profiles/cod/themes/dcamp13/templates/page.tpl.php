<div id="wrapper">
  <div class="w1">
    <div id="header">
      <div class="header-holder">
        <div class="block">
          <div class="logo-holder">
            <strong class="logo"><a href="<?php print url(); ?>">Drupal Camp Israel 2013</a></strong>
          </div>
          <div class="date-holder">
            <strong class="date">09 October</strong>
            <span>אוניברסיטת ת”א</span>
          </div>
        </div>
        <?php print $variables['menu']; ?>
      </div>
    </div>
    <div id="main">
      <section class="<?php print !drupal_is_front_page() ? 'in-page' : ''; ?>">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <a id="main-content"></a>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($page['help'])): ?>
          <div class="well"><?php print render($page['help']); ?></div>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </section>
    </div>
  </div>
  <div id="footer">
    <div class="container-wrapper">
      <div class="container additional">
        <div class="additional-inner">
          <div class="photo-holder">
            <img src="<?php print $variables['pictures_path']; ?>/images/img-05.png" width="184" height="184" alt="image description" />
          </div>
          <div class="description">
            <h2><a href="#">שותפים</a></h2>
            <div class="logo-container">
              <a href="http://www.mit-forum.org.il/"><img src="<?php print $variables['pictures_path']; ?>/images/MIT logo_Heb.jpg" width="217" height="72" alt="Google" class="alignleft" /></a>
              <a href="http://www.hamakor.org.il/"><img src="<?php print $variables['pictures_path']; ?>/images/Hamakor_logo.png" width="241" height="48" alt="ACQUIA" class="alignright" /></a>
            </div>
            <ul class="company-list">
              <li><?php print $gold_sponsors; ?></li>
              <li><?php print $silver_sponsors; ?></li>
              <li><?php print $bronze_sponsors; ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-holder">
      <div class="design">
        <strong class="title">Design by:</strong>
        <a href="http://www.octavo.co.il/"><img src="<?php print $variables['pictures_path']; ?>/images/logo-05.png" width="96" height="49" alt="Studio Octavo" /></a><br />
        <strong class="title">Prod to production by:</strong> <a href='https://twitter.com/RoySegall'>Roy Segall</a> | <a href="http://ihelp.co.il/">Anat Kahana</a>
      </div>
      <div class="holder">
        <p>כל הזכויות שמורות ל<a href="http://drupal.org.il">דרופל ישראל</a></p>
      </div>
    </div>
  </div>
</div>
