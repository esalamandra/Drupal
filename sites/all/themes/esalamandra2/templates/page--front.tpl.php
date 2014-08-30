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

  <div id="offer">
    <div id="offerCont" class="rowMax">
      <div id="offerService">
        <div id="serviceOne" class="serviceDefault">
          <?php if ($is_admin): ?>
            <?php print $messages; ?>
          <?php endif; ?>
          <?php print render($page['serviceOne']); ?>
        </div>
      </div>
      <div id="packets">
        <div id="packetOne" class="packetDefault">
          <?php print render($page['packetOne']); ?>
        </div>
      </div>
      <div id="content">
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
        
      </div>
    </div>
  </div>

  <div id="shopping">
    <div id="shoppingCont" class="rowMax">
      <div id="shoppingCart">
        <?php print render($page['shoppingCart']); ?>
      </div>
      <div id="shoppingSteps">
        <?php print render($page['shoppingSteps']); ?>
      </div>
    </div>
  </div>

  <div id="aboutUs">
    <div id="aboutUsCont" class="rowMax">
      <div id="aboutFirst" class="aboutDefault">
        <?php print render($page['aboutFirst']); ?>
      </div>
      <div id="aboutSecond" class="aboutDefault">
        <?php print render($page['aboutSecond']); ?>
      </div>
    </div>
  </div>

  <div id="social">
    <div id="socialCont" class="rowMax">
      <div id="socialIcons">
        <?php print render($page['socialIcons']); ?>
      </div>
    </div>
  </div>

  <div id="bottomInfo">
    <div id="bottomCont" class="rowMax">
      <div id="blog">
        <?php print render($page['blog']); ?>
      </div>
      <div id="contact">
        <?php print render($page['contact']); ?>
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