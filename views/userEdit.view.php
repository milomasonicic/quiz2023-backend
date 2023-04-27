<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<style>

  #editView{
    border:1px solid whitesmoke;
    color: whitesmoke;
    width:700px;
    height: 200px;
    margin: 50px auto;
    text-align:center;
  } 

  #editView button {
    background-color:#9B68F7;
    border:none;
    padding: 5px 8px;
    color: whitesmoke;
    text-decoration: none;
  }

</style>

<div id="editView">
<h1>Edit one user</h1>
<form action="/users/edit" method="post">
    <input type="number" name="id" value="<?= $user->id ?>" hidden>
    <input type="text" name="name" value="<?= $user->name ?>">
    <input type="text" name="email" value="<?= $user->email ?>">
    <button type="submit">Update</button>
</form>
</div>
<?php require "partials/footer.php" ?>
