<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
        public function store(Request $request){
            $car=new Task();
            $car->car_name=$request->car_name;
            $car->car_type=$request->car_type;
            $car->price=$request->price;
            $car->top_speed=$request->top_speed;
            $car->save();
           
            return redirect()->route('car.index')->with('message','Added Successfully ! ');
    
        }
        public function index()
        {
            $data=Task::all();
            return view('car.index',compact('data'));
        }
    
    
    
    }
    
    