<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<style>

  #parView{
    border:1px solid whitesmoke;
    color: whitesmoke;
    width:700px;
    height: 200px;
    margin: 50px auto;
    text-align:center;
  } 

  #parView a {
    background-color:#9B68F7;
    border:none;
    padding: 5px 8px;
    color: whitesmoke;
    text-decoration: none;
  }

</style>

<div id = "parView">
    <h1>User view page</h1>   
    <p>This user is <?= $user->name ?></p>
    <p>Email: <?= $user->email ?></p>
    <a href="/users/edit?id=<?= $user->id?>">Edit user</a>
</div>

<?php require "partials/footer.php" ?>