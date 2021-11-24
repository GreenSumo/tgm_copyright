<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "tgm_copyright"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => 'Picture Copyrights and Image Sitemap',
	'description' => 'This extension will add a copyright field on every image palette and can show it below each image. All pictures with a copyright can be listed with a plugin. An Image Sitemap XML for Google of ALL used images can be generated by this extension.',
	'category' => 'plugin',
	'author' => 'Paul Beck',
	'author_email' => 'hi@toll-paul.de',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '3.0.5',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.15-10.4.99',
			'filemetadata' => '10.4.15-10.4.99',
        ],
		'conflicts' => [
        ],
		'suggests' => [
        ],
    ],
];
