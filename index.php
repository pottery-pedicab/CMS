<!-- index.php -->

<?php

require_once 'User.php';
require_once 'Article.php';
require_once 'Comment.php';

// Create users
$user1 = new User(1, 'Alice');
$user2 = new User(2, 'Bob');

// Create articles
$article1 = new Article(101, 'Introduction to PHP', 'PHP is a server-side scripting language.', $user1);
$article2 = new Article(102, 'PHP Advanced Topics', 'Exploring advanced features of PHP.', $user2);

// Create comments
$comment1 = new Comment(1001, 'Great article!', $user1);
$comment2 = new Comment(1002, 'I learned a lot.', $user2);

// Display information
echo "User Information:\n";
$user1->displayInfo();
echo "\n";
$user2->displayInfo();

echo "\nArticle Information:\n";
$article1->displayInfo();
echo "\n";
$article2->displayInfo();

echo "\nComment Information:\n";
$comment1->displayInfo();
echo "\n";
$comment2->displayInfo();
