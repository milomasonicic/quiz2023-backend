<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<style>
#formEdit {
    border: 1px solid whitesmoke;
    border-radius: 3%;
    margin: 10% auto;
    width: 320px; 
    text-align: center; 
}

#formEdit h1  { 
        color: white;
    }

#formEdit input {
        margin: 10px auto;
        padding: 10px 15px;   
    }

    #formEdit button {
        background-color:#9B68F7;
        border:none;
        padding: 5px 8px;  
    }
</style>


<form action="/updateQuestion" method="post" id="formEdit">
    <h1>Edit one question</h1>
    <input type="number" name="id" value="<?= $questions->id ?>" hidden>
    <input type="text" name="questions_text" value="<?= $questions->questions_text ?>">
    <button type="submit">Update</button>
</form>

<?php require "partials/footer.php" ?>