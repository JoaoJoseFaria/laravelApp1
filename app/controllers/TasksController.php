<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TasksController extends BaseController {

    public function home() {
        $tasks = Task::all();
        return View::make('tasks', compact('tasks'));
    }

    public function create() {
        return View::make('create');
    }

    public function edit() {
        return View::make('edit');
    }

    public function delete() {
        return View::make('delete');
    }

    public function saveCreate() {
        $input = Input::all();
        $task = new Task;
        $task->title = $input['title'];
        $task->body = $input['body'];
        $task->save();
        return Redirect::action('TasksController@home');
    }

}
