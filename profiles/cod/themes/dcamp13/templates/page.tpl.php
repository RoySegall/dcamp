<div id="wrapper">
  <div class="w1">
    <div id="header">
      <div class="header-holder">
        <div class="block">
          <div class="logo-holder">
            <strong class="logo"><a href="#">Drupal Camp Israel 2013</a></strong>
          </div>
          <div class="date-holder">
            <strong class="date">09 October</strong>
            <span>אוניברסיטת ת”א</span>
          </div>
        </div>
        <ul id="nav">
          <li><a href="#">מדיה</a></li>
          </li>
          <li><a href="#">טופס משוב</a></li>
          <li><a href="#">צור קשר</a></li>
          <li>
            <a href="#">קול קורא</a>
            <ul>
              <li><a href="#"> לנותני חסויות</a></li>
              <li><a href="#">למרצים </a></li>
              <li><a href="#"> לעיצוב חולצות</a></li>
            </ul>
          </li>
          <li><a href="#">הרשמה</a></li>
          <li>
            <a href="#">אודות</a>
            <ul>
              <li><a href="#"> אודות הכנס</a></li>
              <li><a href="#">אודות דרופל</a></li>
              <li><a href="#"> תוכנית הכנס</a></li>
              <li><a href="#"> כיצד להגיע</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div id="main">
      <section class="<?php print !drupal_is_front_page() ? _bootstrap_content_span($columns) : ''; ?>">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
<!--          <h1 class="page-header">--><?php //print $title; ?><!--</h1>-->
        <?php endif; ?>
        <?php print render($title_suffix); ?>
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
      <div class="container additional">
        <div class="photo-holder">
          <img src="<?php print $variables['pictures_path']; ?>/images/img-05.png" width="184" height="184" alt="image description" />
        </div>
        <div class="description">
          <h2><a href="#">הכנס בחסות</a></h2>
          <div class="logo-container">
            <a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-01.png" width="217" height="72" alt="Google" class="alignleft" /></a>
            <a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-06.png" width="241" height="48" alt="ACQUIA" class="alignright" /></a>
          </div>
          <ul class="company-list">
            <li>
              <h3>חסות זהב</h3>
              <div class="logos-holder">
                <ul>
                  <li><a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-03.png" width="238" height="82" alt="News geek" /></a></li>
                  <li><a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-04.png" width="235" height="55" alt="Incapsula" /></a></li>
                </ul>
              </div>
            </li>
            <li>
              <h3>חסות כסף</h3>
              <div class="logos-holder">
                <ul>
                  <li><a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-03.png" width="238" height="82" alt="News geek" /></a></li>
                  <li><a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-04.png" width="235" height="55" alt="Incapsula" /></a></li>
                </ul>
              </div>
            </li>
            <li>
              <h3>חסות ארד</h3>
              <div class="logos-holder">
                <ul>
                  <li><a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-03.png" width="238" height="82" alt="News geek" /></a></li>
                  <li><a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-04.png" width="235" height="55" alt="Incapsula" /></a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
  </div>
  <div id="footer">
    <div class="footer-holder">
      <div class="design">
        <strong class="title">Design by:</strong>
        <a href="#"><img src="<?php print $variables['pictures_path']; ?>/images/logo-05.png" width="96" height="49" alt="Studio Octavo" /></a><br />
      </div>
      <div class="holder">
        <p>כל הזכויות שמורות לדרופל ישראל</p>
      </div>
    </div>
  </div>
</div>
