<?php get_header(); ?>

<div class="container pt-5 pb-5">
  <?php
  if ( isset( $_REQUEST['action'] ) ) {
  ?>
  <div class="ajax-form">
    <div class="container">
      <div class=row>
        <div class="col-md-6 col-md-offset-3 form-box">
          <form action="" method="" class="ajax"
                  enctype="multipart/form-data">

            <h3>Test Form</h3><br>

            <label><b>Add Item</b></label>

            <input type="text" placeholder="Enter your to-do" name="name"
                    required class="name"><br><br>

            <label><b>Message</b></label>

            <input type="textarea" placeholder="Message" name="message"
                    required class="message">
            <hr>
            <br>

            <div id="msg"></div>

            <input type="submit" class="submitbtn" value="Submit">

            <div class="success_msg" style="display: none">Message
              Sent Successfully
            </div>

            <div class="error_msg" style="display: none">Message
              Not Sent, There is some error.
            </div>

          </form>

        </div>
        <?php
        } else {
          ?>
          <h1><?php single_cat_title(); ?></h1>
          
          <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
          
          <?php endwhile;
          endif;
          
        }
        ?>

      </div>

<?php get_footer(); ?>
