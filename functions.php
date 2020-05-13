<?php

function icynets_simplic_setup() {
	load_theme_textdomain( 'icynets-simplic', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	// add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'simplic_big', 720, 360, array('center','top') ); //Post Featured
	add_image_size( 'simplic_smallfeatured', 350, 350, array('center','top') ); //featured image
	// add_image_size( 'simplic_small', 120, 120, true ); //small
	add_image_size( 'worker', 199, 202, true ); //worker
	// add_image_size( 'simplic_tiny', 80, 80, true ); //tiny

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus( array(
	// 	'primary' => esc_html__( 'Primary Menu', 'icynets-simplic' ),
	// 	'mobile-menu' => esc_html__( 'Mobile Menu', 'icynets-simplic' ),
	// ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	// add_theme_support( 'html5', array(
	// 	'search-form',
	// 	'comment-form',
	// 	'comment-list',
	// 	'gallery',
	// 	'caption',
	// ) );


	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'icynets_simplic_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
// endif; // icynets_simplic_setup
add_action( 'after_setup_theme', 'icynets_simplic_setup' );

require get_template_directory() . '/inc/template-tags.php';


function icynets_simplic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Архивы новостей', 'icynets-simplic' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<span  class="archive">',
		'after_widget'  => '</span>',
		'before_title'  => '<h3 class="archive_set">',
	    'after_title'   => '</h3>',
		
	) );
	
	//Register Header Ads-area widget
}
add_action( 'widgets_init', 'icynets_simplic_widgets_init' );

//Display header ads area
if ( ! function_exists( 'icynets_simplic_header_area' ) ) {
	function icynets_simplic_header_area() { ?>
	<div class="header-ads-area">
		<?php dynamic_sidebar( 'header-ads-area' ); ?>
	</div><!-- .header_area -->
	<?php }
}

//We create a function to handle Mobile Menu if Header Image is uploaded.
	

/*-----------------------------------------------------------------------------------*/
/*  Custom Excerpts.
/*-----------------------------------------------------------------------------------*/
function icynets_simplic_new_excerpt_more ($more){
	return '...';
}
add_filter('excerpt_more','icynets_simplic_new_excerpt_more');

function icynets_simplic_custom_excerpt_length ($lenth){
	return 18; // Excerpts
}
add_filter ('excerpt_length', 'icynets_simplic_custom_excerpt_length', 999);


/*-----------------------------------------------------------------------------------*/
/*  Add Post Thumbnail Support.
/*-----------------------------------------------------------------------------------*/
	function icynets_simplic_get_thumbnail_url( $size = 'featured' ) {
		global $post;
		if (has_post_thumbnail( $post->ID ) ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $size );
			return $image[0];
		}
		
		// use first attached image if no featured image was already set.
		$images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
		if (!empty($images)) {
			$image = reset($images);
			$image_data = wp_get_attachment_image_src( $image->ID, $size );
			return $image_data[0];
		}
	}
	

/*-----------------------------------------------------------------------------------*/
/*  Single Post Settings
/*-----------------------------------------------------------------------------------*/
		
//Display Post Next/Prev buttons if enabled.
if ( ! function_exists( 'icynets_simplic_next_prev_post' ) ) {
function icynets_simplic_next_prev_post() { ?>
	<div class="next_prev_post">
		<?php 
			previous_post_link( '<div class="left-previous-post float-l"><i class="fa fa-chevron-left"></i> %link</div>', __('Previous Post','icynets-simplic'));
				next_post_link( '<div class="right-next-post float-r">%link <i class="fa fa-chevron-right"></i></div>', __('Next Post','icynets-simplic') );
		 ?>
	</div><!-- .next_prev_post -->
<?php }                 
}

//Display Author box if enabled.
if ( ! function_exists( 'icynets_simplic_author_box' ) ) {
	function icynets_simplic_author_box() { ?>
		<div class="postauthor">
			<h4><?php _e('About The Author', 'icynets-simplic'); ?></h4>
			<div class="author-box">
				<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '150' );  } ?>
				<div class="author-box-content">
					<div class="vcard clearfix">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="nofollow" class="fn"><i class="fa fa-user"></i><?php the_author_meta( 'display_name' ); ?></a>
					</div>
					<p><?php the_author_meta('description') ?></p>
					
				</div>
			</div>
		</div>	
<?php }                 
}
/*
* Print Powered by WordPress and Theme by
*/
if (!function_exists ('icynets_simplic_copyright')){
	function icynets_simplic_copyright(){
	?>
	<div class="site-info">
	
		<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>">
		<?php printf( esc_html__( 'Proudly powered by %s', 'icynets-simplic' ), 'WordPress' ); ?></a>
		
		<span class="sep"> | </span>
		<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'icynets-simplic' ), 'Simplic', '<a href="//www.icynets.com" rel="designer">icyNETS</a>' ); ?>
	</div>
	<?php
	}
}
function annino_files() {  

  wp_enqueue_script('juery', get_template_directory_uri() . '/js/juery.js', NULL, '3.0', true);
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', NULL, '1.0', true);
    wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', NULL, '3.0', true);
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.1.1' );   
    wp_enqueue_style('annino_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'annino_files');
function my_filter_widget_archives( $arguments ) {
                $arguments['type'] = 'yearly';
                $arguments['limit'] = '5';
                return $arguments;
    };
add_filter( 'widget_archives_args', 'my_filter_widget_archives', 10, 1 );





function correct_date($cordate = ''){
if ( substr_count($cordate , '---') > 0 ){return str_replace('---', '', $cordate);}
$new_d = array(
'Январь' => ' января ',
'Февраль' => ' февраля ',
'Март' => ' марта ',
'Апрель' => ' aпреля ',
'Май' => ' мая ',
'Июнь' => ' июня ',
'Июль' => ' июля ',
'Август' => ' августа ',
'Сентябрь' => ' сентября ',
'Октябрь' => 'октября ',
'Ноябрь' => ' ноября ',
'Декабрь' => ' декабря '
);
return strtr($cordate, $new_d);
}
add_filter('the_date', 'correct_date');
add_filter('get_the_date', 'correct_date');
add_filter('the_time', 'correct_date');
add_filter('get_the_time', 'correct_date');
add_filter('get_post_time', 'correct_date');
add_filter('get_comment_date', 'correct_date');
add_filter('the_modified_time', 'correct_date');
add_filter('get_the_modified_date', 'correct_date');



function wpb_widgets_init() {

  register_sidebar( array(
    'name'          => 'Версия для слабовидящих',
    'id'            => 'custom-header-widget',
    
    'before_title'  => '<a href="#" class="chw-title bvi-link bvi-open">',
    'after_title'   => '</a>',

  ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

function contacts_widget() {

  register_sidebar( array(
    'name'          => 'Контакты библиотека Аннино',
    'id'            => 'custom-maincontact-widget',
    'before_widget' => '<div class="col-md-12">',
	'after_widget'  => '</div>',
    
   
  ) );

}
add_action( 'widgets_init', 'contacts_widget' );


function novo_contacts_widget() {
  register_sidebar( array(
    'name'          => 'Контакты библиотека Новоселье',
    'id'            => 'custom-novocontact-widget',
    'before_widget' => '<div class="col-md-12">',
	'after_widget'  => '</div>',
  ) );
}
add_action( 'widgets_init', 'novo_contacts_widget' );
function change_post_menu_label() {
    global $menu, $submenu;
    $menu[5][0] = 'Новости';
    $submenu['edit.php'][5][0] = 'Новости';
    $submenu['edit.php'][10][0] = 'Добавить новость';
    $submenu['edit.php'][16][0] = 'Новостные метки';
   
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Новости';
    $labels->singular_name = 'Новости';
    $labels->add_new = 'Добавить новость';
    $labels->add_new_item = 'Добавить новость';
    $labels->edit_item = 'Редактировать новость';
    $labels->new_item = 'Добавить новость';
    $labels->view_item = 'Посмотреть новость';
    $labels->search_items = 'Найти новость';
    $labels->not_found = 'Не найдено';
    $labels->not_found_in_trash = 'Корзина пуста';
}
add_action( 'init', 'change_post_object_label' );


/*
 * Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
 */
function rd_duplicate_post_as_draft(){
  global $wpdb;
  if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
    wp_die('No post to duplicate has been supplied!');
  }
 
  /*
   * Nonce verification
   */
  if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
    return;
 
  /*
   * get the original post id
   */
  $post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
  /*
   * and all the original post data then
   */
  $post = get_post( $post_id );
 
  /*
   * if you don't want current user to be the new post author,
   * then change next couple of lines to this: $new_post_author = $post->post_author;
   */
  $current_user = wp_get_current_user();
  $new_post_author = $current_user->ID;
 
  /*
   * if post data exists, create the post duplicate
   */
  if (isset( $post ) && $post != null) {
 
    /*
     * new post data array
     */
    $args = array(
      'comment_status' => $post->comment_status,
      'ping_status'    => $post->ping_status,
      'post_author'    => $new_post_author,
      'post_content'   => $post->post_content,
      'post_excerpt'   => $post->post_excerpt,
      'post_name'      => $post->post_name,
      'post_parent'    => $post->post_parent,
      'post_password'  => $post->post_password,
      'post_status'    => 'draft',
      'post_title'     => $post->post_title,
      'post_type'      => $post->post_type,
      'to_ping'        => $post->to_ping,
      'menu_order'     => $post->menu_order
    );
 
    /*
     * insert the post by wp_insert_post() function
     */
    $new_post_id = wp_insert_post( $args );
 
    /*
     * get all current post terms ad set them to the new post draft
     */
    $taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
    foreach ($taxonomies as $taxonomy) {
      $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
      wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
    }
 
    /*
     * duplicate all post meta just in two SQL queries
     */
    $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
    if (count($post_meta_infos)!=0) {
      $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
      foreach ($post_meta_infos as $meta_info) {
        $meta_key = $meta_info->meta_key;
        if( $meta_key == '_wp_old_slug' ) continue;
        $meta_value = addslashes($meta_info->meta_value);
        $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
      }
      $sql_query.= implode(" UNION ALL ", $sql_query_sel);
      $wpdb->query($sql_query);
    }
 
 
    /*
     * finally, redirect to the edit post screen for the new draft
     */
    wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
    exit;
  } else {
    wp_die('Post creation failed, could not find original post: ' . $post_id);
  }
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
 
/*
 * Add the duplicate link to action list for post_row_actions
 */
function rd_duplicate_post_link( $actions, $post ) {
  if (current_user_can('edit_posts')) {
    $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Копировать" rel="permalink">Копировать запись</a>';
  }
  return $actions;
}
 
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );


// длина заголовка
function title_words($count, $t) {
 $title = get_the_title();
 $words = split(' ', $title);
 if (count($words) > $count) {
 array_splice($words, $count);
 $title = implode(' ', $words);
 }
 else $t = '';
 echo $title . $t;
}