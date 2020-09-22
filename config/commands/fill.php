<?php
                                        /* Test data */

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' .DIRECTORY_SEPARATOR . 'DataPDO.php';

use Config\Connection;

$faker = Faker\Factory::create('fr_FR');

$db = new Connection();
$pdo = $db->getPDO();

$categories = [];
$comments = [];
$posts = [];
$users = [];

$pdo->exec('SET GLOBAL FOREIGN_KEY_CHECKS = 0');
$pdo->exec("TRUNCATE TABLE posts_categories");
$pdo->exec("TRUNCATE TABLE posts_comments");
$pdo->exec("TRUNCATE TABLE users_posts");
$pdo->exec("TRUNCATE TABLE posts");
$pdo->exec("TRUNCATE TABLE comments");
$pdo->exec("TRUNCATE TABLE categories");
$pdo->exec("TRUNCATE TABLE users");
$pdo->exec('SET GLOBAL FOREIGN_KEY_CHECKS = 1');

/* Create random users */
$usersPassword = null;

for ($i = 0; $i < 13; $i++) {
    $usersPassword = password_hash($faker->password, PASSWORD_BCRYPT);
    $pdo->exec("INSERT INTO users 
                                    SET username='{$faker->userName}', 
                                    password='{$usersPassword}', 
                                    slug='{$faker->slug}', 
                                    ft_image='image{$faker->numberBetween($min = 1, $max = 5)}.jpg', 
                                    content='{$faker->paragraphs(rand(3,15), true)}', 
                                    email='{$faker->email}', 
                                    role='Author', 
                                    created_at='{$faker->date} {$faker->time}'");
    $users[] = $pdo->lastInsertId();
}
echo 'Created Users succesfully !';

$admPassword = password_hash('Admin', PASSWORD_BCRYPT);
$pdo->exec("INSERT INTO users 
                                SET username='Ezekiel', 
                                password='{$admPassword}',
                                ft_image='image{$faker->numberBetween($min = 1, $max = 5)}.jpg', 
                                slug='ezekiel-slug', 
                                content='{$faker->paragraphs(rand(3, 15), true)}', 
                                email='nalax2@gmail.com', 
                                created_at='{$faker->date} {$faker->time}', 
                                role='Admin'
                                ");
echo 'Created Admin succesfully !';

/* Create posts */

for ($i = 0; $i < 50; $i++) {
    $pdo->exec("
                    INSERT INTO posts 
                    SET user_id = '14', 
                    title='{$faker->sentence}', 
                    slug='{$faker->slug}', 
                    ft_image='image{$faker->numberBetween($min = 1, $max = 5)}.jpg', 
                    content='{$faker->paragraphs(rand(3, 15), true)}', 
                    created_at='{$faker->date} {$faker->time}', 
                    published='1'
                    ");
    $posts[] = $pdo->lastInsertId();
}

echo 'Created Posts succesfully !';

// Create random comments
for ($i = 0; $i < 100; $i++) {
    $pdo->exec("INSERT INTO comments 
                SET title='{$faker->sentence(2)}', 
                    pseudo = '{$faker->username}',
                    email='{$faker->email}', 
                    content='{$faker->sentence(rand(5,30), true)}',
                    created_at='{$faker->date} {$faker->time}', 
                    published='1'
    ");
    $comments[] = $pdo->lastInsertId();
}
echo 'Created Comments succesfully !';

// Create random categories
for ($i = 0; $i < 5; $i++) {
    $pdo->exec("INSERT INTO categories 
                SET title='{$faker->sentence(2)}', 
                    slug='{$faker->slug}',
                    content='{$faker->paragraphs(rand(3,5), true)}',
                    ft_image='image{$faker->numberBetween($min = 1, $max = 5)}.png'
    ");
    $categories[] = $pdo->lastInsertId();
}
echo 'Created Categories succesfully !';


// Link admin with posts
foreach ($posts as $post) {
    $pdo->exec("INSERT INTO users_posts SET user_id='14', post_id='$post'");
}

echo 'Created users_posts succesfully ! ';

// Link posts with comments
foreach($posts as $post) {
    $randomComments = $faker->randomElements($comments, rand(2, 2));
    foreach ($randomComments as $comment) {
        $pdo->exec("INSERT INTO posts_comments SET post_id='$post', comment_id='$comment'");
    }
}

echo 'Created posts_comments succesfully ! ';

// Link posts with categories
foreach($posts as $post) {
    $randomCategories = $faker->randomElements($categories, rand(0, count($categories)));
    foreach ($randomCategories as $category) {
        $pdo->exec("INSERT INTO posts_categories SET post_id='$post', category_id='$category'");
    }
}

echo 'and POSTS_CATEGORIES were filled successfuly!';
