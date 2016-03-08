<div id="sidebar" class="col-sm-3">
  <?php
  if ( has_nav_menu( 'sideMenu' ) ) {
      wp_nav_menu( array( 'theme_location' => 'sideMenu' ,
                          'menu_class' => 'nav',
                          'menu_id' => 'secondary-navigation',
                          'after' => '<i class="fa fa-angle-right"></i>') );
  } else {?>
    <ul id="secondary-navigation" class="nav">
      <li>
        <a href="category.html">Animation</a>
        <i class="fa fa-angle-right"></i>
      </li>
    </ul>
  <?php } ?>

  <section id="recent-posts-2" class="widget widget_recent_entries">
    <h2 class="widget-title">Recent Posts</h2>
      <ul>
          <li>
        <a href="http://localhost/index.php/2016/03/05/hello-world/">Hello world!</a>
            </li>
          <li>
        <a href="http://localhost/index.php/2015/01/30/13000-people-have-bought-our-theme/">13,000+ People Have Bought Our Theme</a>
            </li>
          <li>
        <a href="http://localhost/index.php/2015/01/26/top-search-engine-optimization-strategies-explained/">Top Search Engine Optimization Strategies!</a>
            </li>
          <li>
        <a href="http://localhost/index.php/2015/01/25/which-of-these-web-hosting-companies-would-you-choose/">Which Company Would You Choose?</a>
            </li>
          <li>
        <a href="http://localhost/index.php/2015/01/24/used-car-dealer-sales-tricks-exposed/">Used Car Dealer Sales Tricks Exposed</a>
            </li>
      </ul>
  </section>

</div>
<!-- sidebar -->
