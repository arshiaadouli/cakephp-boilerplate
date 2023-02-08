<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<?php
$session = $this->request->getSession();
if ($session->check('user')) {

    $user = $session->read('user')->getData();
}
?>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>

    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">




    <?= $this->Html->css(['milligram.min',  'normalize.min', 'cake', 'navbar']) ?>
    <?= $this->Html->script('bootstrap\js\bootstrap.min.js') ?>
    <?= $this->Html->script('bootstrap\js\popper.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Html->css('bootstrap.min') ?>
	<header class="header" style="margin-bottom: 20px">
		<!-- <h1 class="logo"><a href="/monomers">IUPAC</a></h1> -->
        <div class='logo' style='width:70px'>
            <?= $this->Html->image('iupac.png', ['alt' => 'CakePHP']); ?>
        </div>
      <ul class="main-nav">
          <li><a href="/monomers">Monomers</a></li>
          <li><a href="/iupac">IUPAC</a></li>
          <li><a href="/users">Users</a></li>
          <li><a href="/myguests">Guest User</a></li>
          <li><a href="/kpdata">Kp Data</a></li>
          <li><a href="/ktdata">Kt Data</a></li>
          <?php
            if(isset($user))
                echo "<li><a href='/users/logout'>Log Out</a></li>";
            else
              echo "<li><a href='/users/login'>Login</a></li>";
          ?>

      </ul>
	</header>


    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
