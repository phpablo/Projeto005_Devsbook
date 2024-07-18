<?php $render('header'); ?>

<?php echo 'Eu sou ' . $profissao . ' Meu nome é ' . $nome . ' e tenho ' . $idade . ' anos.' ?>

<hr>

<?php foreach ($posts as $post) : ?>
  <h3><?php echo $post['Titulo']; ?></h3>
  <p><?php echo $post['Corpo']; ?></p>
<?php endforeach; ?>