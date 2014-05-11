<div id="header">

  <div id="header_left">
    <?php print render($page['header_left']); ?>
  </div>
  
  <div id="header_social">
    <?php print render($page['header_social']); ?>
  </div>

</div>

<div id="page">


  <div id="main">

    <div id="top">
      <div id="navigation">
        <?php print render($page['navigation']); ?>
      </div>
    
    
      <div id="top_left">
        <?php print render($page['top_left']); ?>
      </div>

      <div id="top_right">
        <?php print render($page['top_right']); ?>
      </div>
    </div>

    <div id="contentwrapp">

      <div id="contentx">
        <?php print render($page['content']); ?>
      </div>
      <div id="sitebar">
        <?php print render($page['sitebar']); ?>
      </div>

    </div>
    
  </div>

  <div id="footer">
    <div id="footer_left">
      <?php print render($page['footer_left']); ?>
    </div>
    <div id="footer_center">
      <?php print render($page['footer_center']); ?>
    </div>
    <div id="footer_right">
      <?php print render($page['footer_right']); ?>
    </div>
    
  </div>

  <div id="footer_bottom">
    <?php print render($page['footer_bottom']); ?>
  </div>

</div>



<div id="bottom">

</div>