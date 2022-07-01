<?php require 'includes/header.php'; ?>

<main>

<h1>You are now at guestbook</h1>
<a href="index.php?page=home">Go to Home</a>

<form action="" method="post">
    <button name="write-post">Write a message!</button>
</form>

<section>

<?php

    foreach($postsArray as $key => $value){

      echo '<span>' . $postsArray[$key]->title . '</span> </br>';

    }

?>

</section>

</main>

<?php require 'includes/footer.php'; ?>