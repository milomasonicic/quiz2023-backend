<?php require "partials/head.php" ?>

<style>
    #logBtn{
        background-color: #9B68F7;
        padding: 5px 28px;
        color: whitesmoke;
        border-radius: 5%;
        text-decoration: none;
        font-size: 17px;
        margin-top: 10px;
    }

    #registerLink {
        padding: 4px 10px;
        color: whitesmoke;
        border-radius: 5%;
        font-size: 15px;
        margin-top: 10px;
    }

    #form {
        margin: 10% auto;
        width: 320px; 
        text-align: center; 
    }

    #form input {
        background-color: #111F2A;
        border: 4px solid whitesmoke;
        margin: 10px auto;
        padding: 10px 15px;   
    }

    ::placeholder { 
        color: white;
        font-style: italic;
        opacity: 0.8; 
    }

    /*#btns {
        margin: 0px auto; 
    }*/
</style>


<form action="login" method="post" id="form">
    <input type="text" name="email" placeholder="example@email.com">
    <input type="password" name="password" placeholder="password">
    <div>
        <button type="submit" id="logBtn">Login</button>
        <a href="/register" id="registerLink">Register user</a>
    </div>
</form>


<?php require "partials/footer.php" ?>
