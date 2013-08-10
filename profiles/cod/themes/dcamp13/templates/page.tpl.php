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
          <li><a href="#">אודות</a></li>
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
    </div>
  </div>
</div>
