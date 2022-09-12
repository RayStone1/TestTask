<?php

namespace App\Controllers;

class MainController extends Controller
{
    public function index(){
        echo "index";
    }
    public function test1(){
        $arrayNumber=[
            [0,1,2,3,4,5,6,7,8,9,10]
        ];
        asort($arrayNumber);

        dd($arrayNumber);
    }
    public function test2(){
        $mysql = mysqli_connect('testtask','root','','testtask');
        $mysql->set_charset("utf8");
        $sql="SELECT * FROM `users` WHERE id =10";
        $result=$mysql->query($sql);
        dd($result->fetch_assoc());
    }
    public function test3(){
        $arrayInfo=[
            'name'=>'Ivan',
            'surname'=>'Ivanov',
            'addres'=>'Petrovsk',
            'telephone'=>'8(985)222-33-44',
        ];
        foreach ($arrayInfo as $key=>$value){
            echo "$key= $value <br>";
        }
    }
    public function test4(){
        $arrayMonth=[
            [
                1=>'Январь',
                2=>'Февраль',
                3=>'Март',
            ],
            [
                1=>'Апрель',
                2=>'Май',
                3=>'Июнь',
            ],
        ];
        foreach ($arrayMonth as $item){
            foreach ($item as $key=>$value){
                echo "$value <br>";
            }
        }
    }

    public function test5(){
        $info='{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
            ,2009,2010]}';
        $info=json_decode($info);

        foreach ($info as $key=>$value){
            foreach ($value as $year){
                echo "$year <br>";
            }
        }


    }
    public function test6(){
       echo "1.Не будет т.к в подключении допущена ошибка.Название БД должно быть в конце <br>";
       echo "2.Выведет все строчки из таблицы users <br>";
       echo "3.DELETE FROM `users` WHERE id<=5<br>";


    }
    public function show_test7(){
        include $this->template."test-7.php";


    }
    public function write(){
        $date="\n".$_POST['date'];
        file_put_contents("test.txt",$date,FILE_APPEND);
    }

}