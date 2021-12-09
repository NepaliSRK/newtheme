<?php
/**
 * Plugin Name: TBare Wodpress Plugin demo
 * Plugin URI: https://www.tbare.com
 * Description: Display content using a shortcode to insert in a page or post
 * Version: 0.1
 * Text Domain: tbare-wordpress-plugin-demo
 * Author: Utsav Adhikari
 * Author URI: https://www.tbare.com
 */

 ?>
<?php

 function tbare_wordpress_plugin_demo($atts) {
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
  jQuery(document).ready(function($){
	$("form.ajax").on("submit", function(e){
		alert("ggg");
	   e.preventDefault();
	   var that = $(this),
	   url = that.attr("action"),
	   type = that.attr("method");
	   var name = $(".name").val();
	   var message = $(".message").val();
	   $.ajax({
		  url: cpm_object.ajax_url,
		  type:"POST",
		  dataType:"type",
		  data: {
			 action:"set_form",
			 name:name,
			 message:message,
		},   success: function(response){
			$(".success_msg").css("display","block");
		 }, error: function(data){
			 $(".error_msg").css("display","block");      }

			 return false;
	   });
	$(".ajax")[0].reset();
	  });

	
	});
	</script>


	<script>
	function ajax_form_scripts() {
		$translation_array = array(
			"ajax_url" => admin_url( "admin-ajax.php" )
		);
		wp_localize_script( "main", "cpm_object", $translation_array );
	}
	}
	add_action( "wp_enqueue_scripts", "ajax_form_scripts" );

	
	</script>';

	

	 
    return $Content;
    

}

add_shortcode('tbare-plugin-demo', 'tbare_wordpress_plugin_demo');

// add_action( 'wp_ajax_set_form', 'set_form' ); 
