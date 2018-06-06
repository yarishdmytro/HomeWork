<?php
$books = [
	[
		'name' => 'Learning php, mysql & JavaScript',
		'author' => 'Robin Nixon',
		'price' => 30,
		'tags' => ['php', 'javascript', 'mysql']
	],
	[
		'name' => 'Php for the Web: Visual QuickStart Guide',
		'author' => 'Larry Ullman',
		'price' => 25,
		'tags' => ['php']
	],
	[
		'name' => 'pHp and MySqL for Dynamic Web Sites',
		'author' => 'Larry Ullman',
		'price' => 14.39,
		'tags' => ['php', 'mysql']
	],
	[
		'name' => 'Modern PhP: New Features and Good Practices',
		'author' => 'Josh Lockhart',
		'price' => 24,
		'tags' => ['php']
	],
	[
		'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
		'author' => 'Jon Duckett',
		'price' => 20,
		'tags' => ['javascript', 'jquery']
	],
	[
		'name' => 'Miss Peregrine\'s Home for Peculiar Children',
		'author' => 'Ransom Riggs',
		'price' => 8.18
	]
];


function filterByPhpTag($element){
	if(!array_key_exists('tags',$element)){
		return false;
	}
	return in_array('php',$element['tags']);
}

$result = array_values(array_filter($books, 'filterByPhpTag'));
var_dump($result);


?>