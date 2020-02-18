<?php

Namespace App\Http\Controllers;

class TestController
{
   public function jason()
   {
    $name = "Jason";
    $title = "Dev Fellow";
    $color = "red";
    $image = "two.jpg";

    return view("default", [
        'name' => $name, 
        'title' => $title,
        'color' => $color,
        'image' => $image
        ]);
    //return "hello world";
   }
    public function jason()
    {
        $name = "Jason";
        $title = "Dev Fellow";
        $color = "red";
        $image = "three.jpg";
    
    return view("default", [
            'name' => $name, 
            'title' => $title,
            'color' => $color,
            'image' => $image
        ]);
    }
    public function miles()
    {
        $name = "Miles";
        $title = "Dev Fellow";
        $color = "Pink";
        $image = "four.jpg";
    
    return view("default", [
            'name' => $name, 
            'title' => $title,
            'color' => $color,
            'image' => $image
        ]);
    }
    public function dom()
    {
        $name = "Dominique";
        $title = "Cohortie";
        $color = "Black";
        $image = "five.jpg";
    
    return view("default", [
            'name' => $name, 
            'title' => $title,
            'color' => $color,
            'image' => $image
        ]);
    }
   }