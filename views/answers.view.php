<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<style>

    #formAnsw{
    border: 1px solid whitesmoke;
    border-radius: 3%;
    margin: 10% auto;
    width: 350px; 
    text-align: center; 
    color: white;
    }

    #formAnsw p {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    }

    #formAnsw a{
    background-color:#9B68F7;
    text-decoration:none;
    color:whitesmoke;
    border-radius: 3%;
    height: 20px;
    padding: 2px 5px;
   }
   
</style>
   

<div id="formAnsw">

    <h2>Answers for Questions</h2>
    <?php foreach($answers as $answer): ?>
            <p><?= $answer->answer?>. 
            <?php if($answer->correct == 1){
                
                echo "✔️" ;
            } else {
                echo  '❌';
            } 
            ?>
            <a href="editAnswers?id=<?=$answer->id?>"> Edit</a>  
                 
    <?php endforeach ?>        
    
    </p>
</div>
    

<?php require "partials/footer.php" ?>