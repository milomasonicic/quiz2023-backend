<?php

namespace App\Controllers;
use App\Core\App;

class QuizController
{
    public function ShowEditQuestionPage()
    {
        check_auth();

        $id = $_GET['id'];
        //ovjde je promjena questiona/////
        $questions = App::get('database')->selectOne('questions',$id);

        /*if(!$user || $user->email === 'admin@gmail.com'){
            return redirect('/users');
        }*/
    return view('questionEdit',compact('questions'/*kompkat je od variable koja je gore */));
    }

    public function updateQuestion()
    {
        check_auth();

        $id = $_POST['id'];

        $data = [
            'id'=>$id,
            'questions_text'=>$_POST['questions_text']
        ];

        $questions = App::get('database')->selectOneByField('questions', ['id'=>$id]);
        /*if(!$user || $user->email === 'admin@admin.com'){
            return redirect('/users');
        }*/

        App::get('database')->update('questions',$data);

        return redirect('/');
    }

    public function answersPage()
    {
        //check_auth();
        $id = $_GET["id"];
        $answers = App::get('database')->showAnswerswithQuestionId('answers',$id);
        
        return view('answers',compact('answers'));
    }

    public function editAnswer() {
        $id = $_GET['id'];

        $answers = App::get('database')->selectAnswersbyQuestionId($id);

        return view('editAnswers',compact('answers'));
    }

    public function ShowEditAnswerPage()
    {
        check_auth();

        $id = $_GET['id'];
        //ovjde je promjena questiona/////
        $answers = App::get('database')->selectOne('answers',$id);

        /*if(!$user || $user->email === 'admin@gmail.com'){
            return redirect('/users');
        }*/
    return view('editAnswers',compact('answers'/*kompkat je od variable koja je gore */));
    }

    public function updateAnsw()
    {
        //check_auth();

        $id = $_POST['id'];

        $data = [
            'id'=>$id,
            'answer'=>$_POST['answ_name'],
            'correct'=>$_POST['correct']
        ];

        //$answers = App::get('database')->selectOneByField('answers', ['id'=>$id]);
        /*if(!$user || $user->email === 'admin@admin.com'){
            return redirect('/users');
        }*/

        App::get('database')->update('answers',$data);

        return redirect('/');
    }


    public function getAnswersApi()
    {
        $answers = App::get('database')->SelectAll('answers');

        $mappedanswers = array_map(function ($answer) {
            unset($answer->correct);
            return $answer;
        }, $answers);

        echo json_encode($mappedanswers);
    }

    public function ccc()
    {
        //$id = $_GET["id"];
        $questions = App::get('database')->selectAll('questions');

        $mappedquestions = array_map(function($question){
                //unset ($answer->correct);
                return $question;
        },$questions);

        echo json_encode($mappedquestions);
    }

    /*public function   getcorrectanswers()
    {
        $answers = App::get('database')->SelectAll('answers');

        $mappedanswers = array_map(function ($answer) {
            if($answer->correct == 0) {
                unset($answer->correct);
                unset($answer->answer);
                unset($answer->question_id);
                unset($answer->id);
            };
            return $answer;
        }, $answers);

        echo json_encode($mappedanswers);
    }*/

    public function getcorrectanswers()
    {
        //check_auth();

        $id = $_GET['id'];
        // contact db and get a user
        $answer = App::get('database')->selectOne('answers',$id);
        echo json_encode($answer);
    }

   
}
