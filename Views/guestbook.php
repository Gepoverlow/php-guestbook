<?php require 'includes/header.php'; ?>

<main class="container-fluid">

<h1>You are now at guestbook</h1>
<a href="index.php?page=home">Go to Home</a>

<form action="" method="post">
    <button class="btn btn-success" name="write-post" style="margin-top:1em;">Write a message!</button>
</form>

<?php 

if($formWasRequested){

  require 'message-form.php';

}

?>

<div class="card-deck">

<?php foreach($postsArray as $key => $value): ?>

  <div class="card border-dark mb-3" style="max-width: 18rem;">
    <div class="card-header"><?= $postsArray[$key]->author; ?> said:</div>
      <div class="card-body text-dark">
      <h5 class="card-title"><?= $postsArray[$key]->title; ?></h5>
      <p class="card-text"><?= $postsArray[$key]->content; ?></p>
      <p class="card-text"><small class="text-muted">On <?= $postsArray[$key]->date; ?></small></p>
    </div>
  </div>

<?php endforeach ?>  



</div>

</main>

<?php require 'includes/footer.php'; ?>