<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <?php
    if (isset($_REQUEST['action'])) {
    $isEdit = $_REQUEST['action'] == "edit";
    if ($isEdit){
        echo "<h6>Edit Mode</h6>
<br>";
        echo '  <div class="ajax-form">
        <div class="container">
            <div class=row>
                <div class="col-md-6 col-md-offset-3 form-box">
                    <form action="" method="" class="ajax"
                          enctype="multipart/form-data">

                        <h3>To-do List</h3><br>

                        <label><b>Add Item</b></label>

                     <input type="textarea" placeholder="Enter your to-do" name="message"
                         required class="message"><br><br>

                        <label><b>Message</b></label>

                        <input type="textarea" placeholder="Message" name="message"
                               required class="message">
                        <hr>
                        <br>

                        <div id="msg"></div>

                        <input type="submit" class="submitbtn" value="Save">

                        <div class="success_msg" style="display: none">Message
                            Sent Successfully
                        </div>

                        <div class="error_msg" style="display: none">Message
                            Not Sent, There is some error.
                        </div>

                    </form>

                </div>';
    }else{

    ?>
    <div class="ajax-form">
        <div class="container">
            <div class=row>
                <div class="col-md-6 col-md-offset-3 form-box">
                    <form action="" method="" class="ajax"
                          enctype="multipart/form-data">

                        <h3>To-do List</h3><br>

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
                }
                } else {
                    ?>
                    <h1><?php single_cat_title(); ?></h1>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <h4><?php the_title(); ?></h4>
                        <br>
                        <?php the_excerpt(); ?>

                        <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>

                        <a href="https://localhost/test1/news/?action=edit& "<?php echo(get_the_ID()); ?>" class="btn btn-success">Edit</a>


                        <a href="<?php echo get_delete_post_link(get_the_ID()); ?> " class="btn btn-danger">Delete</a>
                        <br>
                        <br>
                    <?php endwhile;
                    endif;

                }
                ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
