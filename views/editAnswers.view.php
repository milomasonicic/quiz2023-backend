<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>


    <style>

#editAnsw{
border: 1px solid whitesmoke;
border-radius: 3%;
margin: 10% auto;
padding: 20px;
width: 500px; 
text-align: center; 
color: white;
}

#updateAnsw {
 width:300px;
 margin-right:20px;
}

#editAnsw button {
 background-color:#9B68F7;
 border:none;
 padding: 5px 8px;  

} 



</style>

<form action="answerUpdate" method="post" id="editAnsw">
    <h1> Edit Answer</h1>
    <input type="number" name="id" value="<?= $answers->id ?>" hidden>
    <input type="text" name="answ_name" value="<?= $answers->answer?>"  id="updateAnsw">
        
    <select name="correct">
        <option value="1"
            <?php if($answers->correct): ?>
                selected
            <?php endif ?>    
        >true</option>
        
        <option value="0"
            <?php if(!$answers-> correct): ?>
                selected
            <?php endif ?>    
        >false</option>

    </select>

    <button type="submit">Update</button>
</form>

<?php require "partials/footer.php" ?>