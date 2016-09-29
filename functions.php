<?php 
	
	function create_reading_options_page() {  
		add_menu_page('Reading', 'Reading', 'manage_options', "reading_options", 'build_reading_options_page');}

add_action('admin_menu', 'create_reading_options_page');


function build_reading_options_page(){

	//adding options and setting default values
 add_option( "book-author" ,"Who wrote the book?" ); 
 add_option( "book-title" ,"What's the book title"); 
 add_option( "book-start-date" , "Date"); 
 	?>
		<div id="theme-options-wrap">
			<div class="icon32" id="icon-tools"> <br /> </div>

		 	<h1>Reading Settings </h1>
			 <p>Provide Detail about the book you are currently reading</p>
			<form method="POST" action="">
				
				<table class="form-table">
					
						<tr>
						<th><label for="book-title">Title:</label></th>
						<td>
						<input type="text" name="book-title" 
						value="<?php print get_option("book-title"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="book-author">Author:</label></th>
						<td>
						<input type="text" name="book-author" 
						value="<?php print get_option("book-author"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="book-start-date">Started: </label></th>
						<td>
						<input type="date" name="book-start-date" 
						value="<?php print get_option("book-start-date"); ?>"
						size ="25" />
						</td>
					</tr>



				
				
				</table>
				<p>
				<input type="submit" name ="submit" value="Save Contact Info" class="button-primary"/>
				</p> 
			</form>

		</div>

 <?php 
		if (isset($_POST['submit'])) {
			
			$book_author = esc_attr($_POST["book-author"]);
			update_option("book-author", $book_author);
			$book_title = esc_attr($_POST["book-title"]);
			update_option("book-title", $book_title);
			$book_start_date = esc_attr($_POST["book-start-date"]);
			update_option("book-start-date", $book_start_date);
			
			
			?>
			<div id="message" class="updated">Settings saved</div>
			<?php 
    }

}


	function create_contact_info_options_page() {  
		add_menu_page('Contact Info', 'Contact Info', 'manage_options', "contact_info_options", 'build_contact_info_options_page');}
add_action('admin_menu', 'create_contact_info_options_page');

add_theme_support( 'post-thumbnails' );




function build_contact_info_options_page(){

	//adding options and setting default values
 add_option( "Address" ,"Paradeplatz, Zurich" ); 
 add_option( "PhoneNumber" ,"+4163090230942"); 
 add_option( "EmailAddress" , "mrdesignrobot@inf.co"); 
 add_option( "Name" , "Mr. Design Luigi"); 
 add_option( "FacebookProfile" , "Put the link to your facebook page here"); 
 add_option( "InstagramProfile" , "Put the link to your insta page here"); 
 add_option( "GithubProfile" , "Put the link to your github page here"); 


	?>
		<div id="theme-options-wrap">
			<div class="icon32" id="icon-tools"> <br /> </div>

		 	<h1>Contact Info Settings </h1>
			 <p>Provide your Personal Contact Infos</p>
			<form method="POST" action="">
				
				<table class="form-table">
					
						<tr>
						<th><label for="name">Name:</label></th>
						<td>
						<input type="text" name="name" 
						value="<?php print get_option("Name"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="address">Address:</label></th>
						<td>
						<input type="text" name="address" 
						value="<?php print get_option("Address"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="phone1">Telephone Number:</label></th>
						<td>
						<input type="text" name="phone1" 
						value="<?php print get_option("PhoneNumber"); ?>"
						size ="25" />
						</td>
					</tr>

					<tr>
						<th><label for="email">Email Address:</label></th>
						<td>
						<input type="text" name="email" 
						value="<?php print get_option("EmailAddress"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="fb">Facebook:</label></th>
						<td>
						<input type="text" name="fb" 
						value="<?php print get_option("FacebookProfile"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="insta">Instagram:</label></th>
						<td>
						<input type="text" name="insta" 
						value="<?php print get_option("InstagramProfile"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="github">Github:</label></th>
						<td>
						<input type="text" name="github" 
						value="<?php print get_option("GithubProfile"); ?>"
						size ="25" />
						</td>
					</tr>

				
				
				</table>
				<p>
				<input type="submit" name ="submit" value="Save Contact Info" class="button-primary"/>
				</p> 
			</form>

		</div>
 <?php 
		if (isset($_POST['submit'])) {
			
			$addr = esc_attr($_POST["address"]);
			update_option("Address", $addr);
			$p1 = esc_attr($_POST["phone1"]);
			update_option("PhoneNumber1", $p1);
			$email = esc_attr($_POST["email"]);
			update_option("EmailAddress", $email);
			$name = esc_attr($_POST["name"]);
			update_option("Name", $name);
			$fb = esc_attr($_POST["fb"]);
			update_option("FacebookProfile", $fb);
			$insta = esc_attr($_POST["insta"]);
			update_option("InstagramProfile", $insta);
			$github = esc_attr($_POST["github"]);
			update_option("GithubProfile", $github);
			
			?>
			<div id="message" class="updated">Settings saved</div>
			<?php 
    }

}


	function create_skills_options_page() {  
		add_menu_page('Skills Options', 'Skills Options', 'manage_options', "skills_options", 'build_skill_options_page');}
add_action('admin_menu', 'create_skills_options_page');




function build_skill_options_page(){

	//adding options and setting default values
 add_option( "html_skill" , 80); 
 add_option( "css_skill" , 70); 
 add_option( "wp_skill" , 90); 
 add_option( "js_skill" , 70); 


	?>
		<div id="theme-options-wrap">
			<div class="icon32" id="icon-tools"> <br /> </div>

		 	<h1>Skills Percentages Settings </h1>
			 <p>Provide percentages for the various skills.</p>
			<form method="POST" action="">
				
				<table class="form-table">
					<tr>
						<th><label for="html">HTML:</label></th>
						<td>
						<input type="number" name="html" min="0" max="100"
						value="<?php print get_option("html_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="css">CSS:</label></th>
						<td>
						<input type="number" name="css" min="0" max="100"
						value="<?php print get_option("css_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="js">Javascript:</label></th>
						<td>
						<input type="number" name="js" min="0" max="100"
						value="<?php print get_option("js_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="wp">Wordpress:</label></th>
						<td>
						<input type="number" name="wp" min="0" max="100"
						value="<?php print get_option("wp_skill"); ?>"
						size ="25" />
						</td>
					</tr>
				
				</table>
				<p>
				<input type="submit" name ="submit" value="Save Skills" class="button-primary"/>
				</p> 
			</form>

		</div>
 <?php 
		if (isset($_POST['submit'])) {
			
			$html = esc_attr($_POST["html"]);
			update_option("html_skill", $html);
			$css = esc_attr($_POST["css"]);
			update_option("css_skill", $css);
			$js = esc_attr($_POST["js"]);
			update_option("js_skill", $js);
			$wp = esc_attr($_POST["wp"]);
			update_option("wp_skill", $wp);
			
			?>
			<div id="message" class="updated">Settings saved</div>
			<?php 
    }

}

function my_custom_book_item() {
  $labels = array(
    'name'               => _x( 'Book Item', 'post type general name' ),
    'singular_name'      => _x( 'book', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Book' ),
    'add_new_item'       => __( 'Add New Book' ),
    'edit_item'          => __( 'Edit Book' ),
    'new_item'           => __( 'New Porfolio Item' ),
    'all_items'          => __( 'All Books' ),
    'view_item'          => __( 'View Book ' ),
    'search_items'       => __( 'Search Books' ),
    'not_found'          => __( 'No  found' ),
    'not_found_in_trash' => __( 'No Book  found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Books'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds all works that go into the portfolio section',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'editor', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'book_item', $args ); 
}
add_action( 'init', 'my_custom_book_item' );
add_theme_support('post-thumbnails', array('book_item'));


function build_taxonomies(){
	register_taxonomy(
    'book_type',
    'book',
    array(
        'hierarchical' => true,
        'label' => 'Book Type',
        'query_var' => true,
        'rewrite' => false
    )
);
}

add_action( 'init', 'build_taxonomies', 0 );


$args = array(
	'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );





add_action('wp_ajax_wordpress_query_blog', 'wordpress_query_blog_callback');
add_action('wp_ajax_nopriv_wordpress_query_blog', 'wordpress_query_blog_callback');


function wordpress_query_blog_callback(){

	$myfile = fopen("/home/edgar/phptest","w");
	$txt = "ieeee\n";
	fwrite($myfile,$txt);
	fclose($myfile);
	
	$query = new WP_Query(array('p' => $_POST['id']));
	

	//ESTO NO SE COMO PONERLO PARA QUE LO DEVUELVA
	/*$html = <<<HTML
	<article id="first" class="slideInLeft">
	<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="writer">
			<br>
			<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
	  			<h4><?php the_author(); ?></h4>
				<h5 class="blog-date">Published <?php the_time('F j,Y'); ?>.</h5>
				</div>
				<div class="intro">
					<h2><?php the_title(); ?></h2>
					<p>
 						<?php the_content(); ?>
					<p>
					<p><a href="#!" onClick="getSingleBlog(<?php the_id(); ?>)"> Read More</a></p>
					<br>
				</div>
			<?php endwhile; else: ?>
       			 <?php endif; ?>
			</article>
	HTML;	*/

	

}


 ?>