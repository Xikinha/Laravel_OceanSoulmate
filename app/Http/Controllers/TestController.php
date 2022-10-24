<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Answer;

class TestController extends Controller
{
    public function startTest(Request $request)
    {
        $index = 1;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'question2';

        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function createAnswers(Request $request)
    {   
        $request->validate([
            'gender' => 'required',
        ]);

        $user = DB::table('answers')->get()->where('user_id', Auth::id());

        if(count($user) > 0) {
            $answer1 = $request->input('gender');
            DB::table('answers')->where('user_id', Auth::id())->update(['answer_1' => $answer1]);
        } else {
            $answers = new Answer;
            $answers->user_id = Auth::id();
            $answers->answer_1 = $request->input('gender');
            $answers->answer_2 = "-";
            $answers->answer_3 = "-";
            $answers->answer_4 = "-";
            $answers->answer_5 = "-";
            $answers->answer_6 = "-";
            $answers->answer_7 = "-";
            $answers->answer_8 = "-";
            $answers->save();
        }

        $index = 2;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'question3';
        
        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function storeAnswer2(Request $request)
    {
        $request->validate([
            'sleep' => 'required',
        ]);

        $answer2 = $request->input('sleep');
        DB::table('answers')->where('user_id', Auth::id())->update(['answer_2' => $answer2]);

        $index = 3;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'question4';
        
        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function storeAnswer3(Request $request)
    {
        $request->validate([
            'energy' => 'required',
        ]);

        $answer3 = $request->input('energy');
        DB::table('answers')->where('user_id', Auth::id())->update(['answer_3' => $answer3]);

        $index = 4;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'question5';
        
        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function storeAnswer4(Request $request)
    {
        $request->validate([
            'lifestyle' => 'required',
        ]);

        $answer4 = $request->input('lifestyle');
        DB::table('answers')->where('user_id', Auth::id())->update(['answer_4' => $answer4]);

        $index = 5;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'question6';
        
        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function storeAnswer5(Request $request)
    {
        $request->validate([
            'diet' => 'required',
        ]);

        $answer5 = $request->input('diet');
        DB::table('answers')->where('user_id', Auth::id())->update(['answer_5' => $answer5]);

        $index = 6;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'question7';

        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function storeAnswer6(Request $request)
    {
        $request->validate([
            'relation' => 'required',
        ]);

        $answer6 = $request->input('relation');
        DB::table('answers')->where('user_id', Auth::id())->update(['answer_6' => $answer6]);

        $index = 7;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'question8';

        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function storeAnswer7(Request $request)
    {
        $request->validate([
            'distance' => 'required',
        ]);

        $answer7 = $request->input('distance');
        DB::table('answers')->where('user_id', Auth::id())->update(['answer_7' => $answer7]);

        $index = 8;
        $data = DB::table('questions')->get()->where('id', $index);
        $question = $data[$index-1]->question;
        $answers = $data[$index-1]->answers;
        $answerArray = explode(', ', $answers);
        $name = $data[$index-1]->name;
        $next = 'testResult';

        return view('./test/question', ['index' => $index, 'question' => $question, 'answers' => $answerArray, 'name' => $name, 'next' => $next]);
    }

    public function storeAnswer8(Request $request)
    {
        $request->validate([
            'temperature' => 'required',
        ]);

        $answer8 = $request->input('temperature');
        DB::table('answers')->where('user_id', Auth::id())->update(['answer_8' => $answer8]);

        $answer1 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_1');
        $answer2 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_2');
        $answer3 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_3');
        $answer4 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_4');
        $answer5 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_5');
        $answer6 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_6');
        $answer7 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_7');
        $answer8 = DB::table('answers')->get()->where('user_id', Auth::id())->pluck('answer_8');
        
        // ***
        // Here goes the code for the evaluation of user answers & determination of the ocean soulmate
        // ***

        $email = DB::table('users')->get()->where('id', Auth::id())->pluck('email');
        $name = DB::table('animals')->get()->where('name', $result)->pluck('scientific_name');
        $status = DB::table('animals')->get()->where('name', $result)->pluck('status');
        $habitat = DB::table('animals')->get()->where('name', $result)->pluck('habitat');
        $summary = DB::table('animals')->get()->where('name', $result)->pluck('summary');
        $img_link = DB::table('animals')->get()->where('name', $result)->pluck('img_link');

        return view('./test/result', ['result' => $result, 'name' => $name[0], 'status' => $status[0], 'habitat' => $habitat[0], 'summary' => $summary[0], 'img_link' => $img_link[0], 'email' => $email[0]]);
    }
}
