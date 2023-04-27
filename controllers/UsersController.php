<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{
    public function showOneUser()
    {
        check_auth();

        $id = $_GET['id'];
        // contact db and get a user
        $user = App::get('database')->selectOne('users',$id);

        return view('user',compact('user'));
    }

    public function showEditUserPage()
    {
        check_auth();

        $id = $_GET['id'];
        $user = App::get('database')->selectOne('users',$id);

        if(!$user || $user->email === 'admin@admin.com'){
            return redirect('/users');
        }
        return view('userEdit',compact('user'));
    }

    public function showUsers()
    {
        check_auth();

        $users = App::get('database')->selectAll('users');

        return view('allUsers',compact('users'));
    }


    public function delete()
    {
        check_auth();

        $id = $_GET['id']; // todo what is the param is not submitted, or its wrong type

        $user = App::get('database')->selectOneByField('users',['id'=>$id]);
        if(!$user || $user->email === 'admin@admin.com'){
            return redirect('/users');
        }

        App::get('database')->delete('users',$id);

        redirect("/users");
    }

    public function update()
    {
        check_auth();

        $id = $_POST['id'];

        $data = [
            'id'=>$id,
            'name'=>$_POST['name'],
            'email'=>$_POST['email']
        ];

        $user = App::get('database')->selectOneByField('users', ['id'=>$id]);
        if(!$user || $user->email === 'admin@admin.com'){
            return redirect('/users');
        }

        App::get('database')->update('users',$data);

        return redirect('/users');
    }

    //insertUser
    public function insert()
    {
        check_auth();

        if(empty($_POST['password']) || strlen($_POST['password']) < 5){
            return redirect('users');
        }
        $pass = trim($_POST['password']);
        $hash = hash('sha256',$pass);

        // name validation
        if(!isset($_POST['name'])){
            return redirect('users');
        }

        $name = trim($_POST['name']);

        if(strlen($name) < 3){
            return redirect('users');
        }

        // email validation and sanitization
        if(!isset($_POST['email'])){
            return redirect('users');
        }

        $email = trim($_POST['email']);

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return redirect('users');
        }

        // data to submit
        $data = [
            'name'=>$name,
            'email'=>$email,
            'password'=>$hash
        ];

        App::get('database')->insert('users',$data);

        redirect('users');
    }

    

    

    
    

    

   

    
}