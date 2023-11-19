<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];
?>


<!DOCTYPE html>
<html>
<head>
	<title> Affichage des recettes </title>
</head>
<body>
	<?php foreach ($recipes as $row ): ?>
		<?php if ( array_key_exists('is_enabled', $row) && $row['is_enabled'] == true ): ?>
			
			<article>
				<h3><?php echo $row['title'] ?></h3>
				<div><?php echo $row['recipe'] ?></div>
				<i><?php echo $row['author'] ?></i>
			</article>
		<?php endif ?>
	<?php endforeach ?>

</body>


</html>