 
<div id="wrapper">

  <div id="header">
    <div id="logo">
      <?php print render($page['logo']); ?>
    </div>  
    <div class="nested">
      <div id="submenu">
        <?php print render($page['submenu']); ?>
      </div>
      <div id="social">
        <?php print render($page['social']); ?>
      </div>
    </div>
    <div id="mainmenu">
      <?php print render($page['mainmenu']); ?>
    </div>
    <?php if ($page['slider']):?>
      <div id="slider">
        <?php print render($page['slider']); ?>
      </div>
    <?php endif; ?>
  </div>

  <div id="page">
    <div id="ourportals">
      <?php print render($page['ourportals']); ?>
    </div>
    <div id="content">
      <div id="maincontent">
        <?php print render($page['content']); ?>
      </div>
      <?php if ($page['leftcontent']): ?>
        <div id="leftcontent">
          <?php print render($page['leftcontent']); ?>
        </div>
      <?php endif; ?>
      <?php if ($page['rightcontent']): ?>
        <div id="rightcontent">
          <?php print render($page['rightcontent']); ?>
        </div>
      <?php endif; ?>
    </div>
    <div id="bottom">
      <div id="blog">
        <?php print render($page['blog']); ?>
      </div>
      <div id="partners">
        <?php print render($page['partners']); ?>
      </div>
    </div>
    <div id="footer">
      <div class="row">
        <div class="one-three">
          <?php print render($page['foot-one-col']); ?>
        </div>
        <div class="two-three">
          <?php print render($page['foot-two-col']); ?>
        </div>
        <div class="three-three">
          <?php print render($page['foot-three-col']); ?>
        </div>
      </div>
      <div class="row">
        <?php print render($page['footer']); ?>
      </div>
    </div>
  </div>

</div>