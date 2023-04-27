<?php

// PagesController routes
//da vidim home stranu
$router->get('','PagesController@home');

//answer ruter
$router->get('questionAnswers','QuizController@answersPage');
$router->get('editAnswers','QuizController@ShowEditAnswerPage');
$router->post('answerUpdate','QuizController@updateAnsw');

//questionsEdit
$router->get('questionEdit','QuizController@ShowEditQuestionPage');
$router->post('/updateQuestion','QuizController@updateQuestion');
//edit pitanja


/** User routes */
$router->get('users/show','UsersController@showOneUser');
$router->get('users','UsersController@showUsers');
$router->get('users/edit','UsersController@showEditUserPage');
$router->get('delete','UsersController@delete');
$router->post('users/edit','UsersController@update');
$router->post('insert','UsersController@insert');

/** Auth routes */
$router->get('/register','AuthController@showRegisterForm');

//pokazuje mi log in page ako padne check out funkcija
$router->get('/login','AuthController@showLoginPage');
$router->get('/logout','AuthController@logout');

$router->post('register','AuthController@register');
$router->post('login','AuthController@login');

/*api*/
$router->get('api/questions',"QuizController@ccc");
$router->get('api/answers',"QuizController@getAnswersApi");
$router->get('api/answersCorrect',"QuizController@getcorrectanswers");
