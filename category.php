<?php get_header(); ?>
    <div id="main" class="row">
      <?php get_sidebar(); ?>
      <div id="content" class="col-sm-9">
        <div id="breadcrumbs">
          <span class="arrow-flag">
            <i class="fa fa-th-list"></i>  Nature
          </span>
        </div>
        <!-- breadcrumbs -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- post -->
          <div class="entry-box">
            <div class="entry-box-details">
              <a href="<?php the_permalink(); ?>" rel="bookmark">
                  <?php if(has_post_thumbnail()){ ?>
                    <img src="<?php the_post_thumbnail_url( array(226, 127) ); ?>"
                              alt="<?php the_title(); ?>" class="entry-thumb">
                  <?php } else { ?>
                    <!-- show default image -->
                  <?php } ?>
              </a>
              <div class="entry-meta">
                <?php the_time('l, F jS, Y')?> · by <a href="<?php the_author_link();?>" title="Posts by <?php the_author_link();?>" rel="author"><?php the_author();?></a>
                <span class="entry-comment">
                  <a href="#">0 <i class="fa fa-comments"></i></a>
                </span>
              </div>
              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </h2>
            </div>
          </div>

        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>



      </div>
      <!-- content -->

    </div>
    <!-- main -->

<?php get_footer(); ?>
