<?php require "partials/head.php" ?>
<!--?php require "partials/nav.php" ?-->

<style>
    #registeBtn{
        background-color: #9B68F7;
        padding: 5px 28px;
        color: whitesmoke;
        border-radius: 5%;
        text-decoration: none;
        font-size: 17px;
        margin-top: 10px;
    }

    #backBtn {
        /*border: 4px solid whitesmoke;*/
        padding: 4px 10px;
        color: whitesmoke;
        border-radius: 5%;
        font-size: 17px;
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
        padding: 10px 5px;   
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

<form action="/register" method="post" id= "form">
    <div>
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="example@email.com">
    </div>
    <div>
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repeatpassword" placeholder="Repeat password">
    </div>
    <div id = "btns">
        <button type="submit" id = "registeBtn">Register</button>
        <a href="/login" id = "backBtn" >Back</a>

    </div>
</form>


<?php require "partials/footer.php" ?>
