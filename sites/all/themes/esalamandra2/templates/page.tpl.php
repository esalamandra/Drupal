<div id="headerRight">
  <?php print render($page['headerRight']) ?>
</div>
<div id="page">
  <header id="header">
    <div id="headWrapp">
      <div id="logo">
        <div class="rowMax">
          <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo">eSalamandra</a></h1>
        </div>
      </div>
      <nav id="navigation">
        <div class="rowMax">
          <?php print render($page['navigation']); ?>
        </div>
      </nav>
    </div>
    <div id="slider">
      <div class="rowMax">
        <?php print render($page['slider']); ?>
      </div>
    </div>
    <div id="sliderLinks">
      <div class="rowMax">
        <?php print render($page['sliderLinks']); ?>
      </div>
    </div>
  </header>

  <div class="pageContentWrapp">
    <?php if ($page['sidebar-right']): ?>
      <div id="pageContent">
        <?php if ($is_admin): ?>
          <?php print $messages; ?>
        <?php endif; ?>
        <?php print $breadcrumb; ?>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
    
      </div>
      <div id="sidebar-right">
        <?php print render($page['sidebar-right']); ?>
      </div>
    <?php elseif($page['content']): ?>
      <div id="pageFullContent">

        <?php print $breadcrumb ?>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
        
      </div>
    <?php endif; ?>
  </div>

  <div id="social">
    <div id="socialCont" class="rowMax">
      <div id="socialIcons">
        <?php print render($page['socialIcons']); ?>
      </div>
    </div>
  </div>

  <footer id="footer">
    <div id="footerCont" class="rowMax">
      <div id="footerInfo">
        <?php print render($page['footer']); ?>
      </div>
    </div>
  </footer>
    <div id="bottom">
      <?php print render($page['bottom']) ?>
    </div>
</div>