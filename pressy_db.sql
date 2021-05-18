USE lgt1wvmddd5fu91w;

CREATE TABLE `users` (
	`id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	`username` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`role` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `posts` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`user_id` int(11) DEFAULT NULL,
	`title` varchar(255) NOT NULL,
	`slug` varchar(255) NOT NULL UNIQUE,
	`views` int(11) NOT NULL DEFAULT '0',
	`thumbnail` varchar(255) NOT NULL,
	`body` text NOT NULL,
	`published` tinyint(1) NOT NULL,
	`posted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `slug` varchar(255) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `post_category` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `post_id` int(11) DEFAULT NULL,
    `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`) VALUES
(1, 'neeooneeoon', 'duyngoc.nguyen2001@gmail.com', 'Administrator', 'neeoon');

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `thumbnail`, `body`, `published`, `posted_at`) VALUES
(1, 1, '5 Habits that can improve your life', '5-habits-that-can-improve-your-life', 0, 'banner.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et enim in erat ornare bibendum. Quisque vitae dictum neque. Integer lacus nulla, commodo at felis at, faucibus lacinia libero. Suspendisse blandit vehicula risus, ac varius felis consequat eget. Maecenas et fringilla metus. Nulla et eros varius, auctor augue nec, elementum nulla. Morbi in ante id ex finibus consequat eget eget arcu. Aliquam tincidunt justo vel nunc euismod, vel bibendum lectus scelerisque. Phasellus in dapibus mauris. Aenean ante ipsum, semper vitae euismod id, tincidunt sit amet justo. Mauris turpis orci, ornare sed ullamcorper sed, placerat quis lectus.', 1, '2021-02-03 08:58:02'),
(2, 1, 'Second post on Pressy', 'second-post-on-lifeblog', 0, 'banner.jpg', 'Nunc quis nunc ullamcorper, fringilla justo nec, accumsan nulla. Proin consequat lectus sit amet velit eleifend, nec condimentum purus fermentum. Donec eget fermentum enim, imperdiet porta turpis. Sed in venenatis nisl, sit amet posuere risus. Morbi dictum posuere posuere. Aenean ultricies in velit quis pretium. Nulla facilisis laoreet sapien sed varius. Vivamus vel lacus magna. Maecenas iaculis faucibus dolor, in vehicula risus convallis a. Donec in libero enim.', 1, '2021-02-02 14:40:14');

INSERT INTO `categories` (`id`, `name`, `slug`) VALUES
(1, 'Inspiration', 'inspiration'),
(2, 'Motivation', 'motivation'),
(3, 'Diary', 'diary');

INSERT INTO `post_category` (`id`, `post_id`, `cat_id`) VALUES
(1, 1, 1),
(2, 2, 2);