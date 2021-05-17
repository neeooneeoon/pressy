<?php 

//Returns all published posts
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['category'] = getPostCat($post['id']); 
		array_push($final_posts, $post);
	}

	return $final_posts;
}

//Receive post_id and get post's category
function getPostCat($post_id){
	global $conn;
	$sql = "SELECT * FROM categories WHERE id=
			(SELECT cat_id FROM post_category WHERE post_id=$post_id) LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$category = mysqli_fetch_assoc($result);
	return $category;
}

//Return all posts under a same post_category
function getPublishedPostsByCategory($cat_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pc.post_id FROM post_category pc 
				WHERE pc.cat_id=$cat_id GROUP BY pc.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['category'] = getPostCat($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}

//Return category name by category id
function getCategoryNameById($id)
{
	global $conn;
	$sql = "SELECT name FROM categories WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$category = mysqli_fetch_assoc($result);
	return $category['name'];
}

//Return all categories
function getAllCategories()
{
	global $conn;
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);
	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $categories;
}

//Return a post 
function getPost($slug){
	global $conn;
	// Get single post slug
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true";
	$result = mysqli_query($conn, $sql);

	// Fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	if ($post) {
		// Get the topic to which this post belongs
		$post['category'] = getPostCat($post['id']);
	}
	return $post;
}



?>
