<?php

/*$my_post = array(
  'post_title'    => wp_strip_all_tags( $_POST['post_title'] ),
  'post_content'  => $_POST['post_content'],
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_category' => array( 8,39 )
);

// Insert the post into the database
wp_insert_post( $my_post );*/



function tbare_wordpress_plugin_demo( $atts ) {
  $Content = '<div class="ajax-form">
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
  required class="message"><hr><br>
  
			  <div id="msg"></div>
  
				<input type = "submit" class="submitbtn" value="Submit">
  
  <div class="success_msg" style="display: none">Message
  Sent Successfully</div>
  
					<div class="error_msg" style="display: none">Message
  Not Sent, There is some error.</div>
  
	  </form>
  
	 </div>
  
   </div>
  
  </div>
  
 <script>

	</script>


	<script>
	

	</script>';
  
  
  return $Content;
  
  
}

add_shortcode( 'tbare-plugin-demo', 'tbare_wordpress_plugin_demo' );
