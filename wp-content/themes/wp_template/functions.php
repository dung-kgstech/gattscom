<?php
// Hỗ trợ ảnh đại diện (Post Thumbnails)
add_theme_support('post-thumbnails');

// Vô hiệu hóa tự động thêm thẻ <p> và <br> trong Page
function disable_page_wpautop()
{
	if (is_page()) {
		remove_filter('the_content', 'wpautop');
	}
}
add_action('wp', 'disable_page_wpautop');

// Thiết kế phân trang cho Category Archive (Hiện 1 bài mỗi trang)
function change_pre_get_posts($query)
{
	if (!is_admin() && $query->is_main_query()) {
		if (is_category()) {
			$query->set('posts_per_page', 1);
		}
	}
}
add_action('pre_get_posts', 'change_pre_get_posts');

// Shortcode tạo Breadcrumbs (Thanh điều hướng)
function my_breadcrumbs()
{
	// Cần gọi biến toàn cục $post để lấy thông tin bài viết hiện tại
	global $post;

	ob_start();

	echo '<a href="' . home_url('/') . '">ホーム</a>';

	if (is_page() && $post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		foreach ($ancestors as $ancestor_id) {
			echo '<span> 〉 </span>';
			echo '<a href="' . get_permalink($ancestor_id) . '">' . get_the_title($ancestor_id) . '</a>';
		}
	}

	echo '<span> 〉 </span>';
	echo '<span>' . get_the_title() . '</span>';

	return ob_get_clean();
}
add_shortcode('my_breadcrumbs', 'my_breadcrumbs');

// Tự động cập nhật CSS bằng filemtime (Cache Busting)
function my_theme_enqueue_styles()
{
	$css_path = get_template_directory() . '/style.css';
	$css_uri  = get_template_directory_uri() . '/style.css';

	// Kiểm tra file tồn tại để tránh lỗi hệ thống
	$version = file_exists($css_path) ? filemtime($css_path) : '1.0.0';

	wp_enqueue_style(
		'my-main-style',
		$css_uri,
		array(),
		$version
	);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Bảo mật: Ẩn thông tin phiên bản WordPress
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');
