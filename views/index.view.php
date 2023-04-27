<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<style>
   #mainDiv{
    border: 1px solid whitesmoke;
    border-radius: 3%;
    width:450px;
    margin: 50px auto;
    color:whitesmoke;
   }

   #mainDiv h2 {
    text-align: center;   
   }

   #mainDiv p {   
    padding:5px;
    margin-left:5px; 
   }

   #mainDiv a{
    background-color:#9B68F7;
    padding:5px;
    margin-right:8px;
    text-decoration:none;
    color:whitesmoke;
    border-radius: 3%;
    
   }

   #paragraph{
    display:flex;
    justify-content: space-between;
    align-items: center;
   } 

</style>


    <div id="mainDiv">
    <h2>Quiz Questions</h2>
    <?php foreach($questions as $question): ?>
        <div id="paragraph">
        <p><?= $question->questions_text ?></p>
        <div class="buttons">
            <a href="questionEdit?id=<?= $question->id?>"> Edit</a>
            <a href="questionAnswers?id=<?= $question->id?>">Answers</a>
        </div>
        </div>
    <?php endforeach ?>
    </div>
    
<?php require "partials/footer.php" ?>