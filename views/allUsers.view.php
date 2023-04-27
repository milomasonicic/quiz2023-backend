<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<style>

  #insertCont{
    border:1px solid whitesmoke;
    width:700px;
    background-color: whitesmoke;
    height: 55px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
  }

  h1 {
    color:whitesmoke;
    text-align:center;
  }

  #allUsers{
    border:1px solid whitesmoke;
    width:660px;
    padding:20px;
    margin: 0 auto;
    color:white;
    
    
  }
  #allUsers ul {
    margin: 0;
  }

  #allUsers li {
    margin: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  #parUser {
    text-align: center;
    color:whitesmoke;
  }

  #btns {
    width: 200px;
    display: flex;
    justify-content: space-between;
  }

  #btns a {
    background-color:#9B68F7;
    border:none;
    padding: 5px 8px;
    color: whitesmoke;
    text-decoration: none;  
  }


</style>

<h1>All users</h1>
<p id="parUser">
<?php
$currentUser = $_SESSION['user']; 
echo "Your email: ".$currentUser -> email;  
?>
</p>

<?php if($currentUser -> email == 'admin@admin.com'): ?> 

<form action="insert" method="post" id = "insertCont">
  
  <input type="text" name="name" > 
  <input type="email" name="email"> 
  <input type="text" name="password"> 
  <button type="submit">Insert</button>
</form>

<?php endif ?>


<ul id="allUsers">
    <?php foreach ($users as $user): ?>
      <li id="userPlusbtns">
        <div id="userHalf"> 
          <?= $user->id." - ".$user->name . " - " . $user->email ?>
        </div>
        
        <?php if($currentUser -> email == 'admin@admin.com'): ?>    
            <div id="btns">
              <a href="/users/show?id=<?= $user->id ?>">Show</a>
              <a href="/users/edit?id=<?= $user->id ?>">Edit</a>
              <a href="/delete?id=<?= $user->id ?>">Delete</a>
            </div> 
           <?php endif ?>
      </li>
    <?php endforeach ?>
</ul>

<?php require "partials/footer.php" ?>
