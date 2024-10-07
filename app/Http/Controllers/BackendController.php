<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }

    public function user_profile(){
        return view('backend.user_profile');
    }

    public function users(){
        $users = User::orderBy('id', 'ASC')->get();
        return view('backend.users', compact('users'));
    }

    public function user_add(){
        return view('backend.user_add');
    }

    public function userAdd(Request $request){
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
            'role' => ['required']
        ]);

        $user = User::create($request->all());

        if($user){
            return back()->with(['title' => 'Done', 'message' => "User created successfully", 'type' => 'success']);
        }
        else {
            return back()->with(['title' => 'Failed', 'message' => "Unable to create the user", 'type' => 'error']);
        }
    }

    public function userDelete(Request $request){
        $user = User::find($request->id);

        if($user){
            if($user->delete()){
                return back()->with(['title' => 'Done', 'message' => "User deleted successfully", 'type' => 'success']);
            }
            else {
                return back()->with(['title' => 'Failed', 'message' => "Unable to delete the user", 'type' => 'error']);
            }
        }
        else {
            return back()->with(['title' => 'Failed', 'message' => "User doesn't exist", 'type' => 'error']);
        }
    }

    public function courses(){
        return view('backend.courses');
    }
    
    public function course_add(){
        return view('backend.course_add');
    }
    
    public function categories(){
        $categories = Category::get();
        return view('backend.categories', compact('categories'));
    }
    
    public function category_add(){
        return view('backend.category_add');
    }

    public function categoryAdd(Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::create($request->all());

        if($category){
            return back()->with(['title' => 'Done', 'message' => "Category added successfully", 'type' => 'success']);
        }
        else {
            return back()->with(['title' => 'Failed', 'message' => "Unable to add the category", 'type' => 'error']);
        }
    }

    public function categoryUpdate(Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::find($request->id);

        if($category){
            $category->name = $request->name;

            if($category->save()){
                return back()->with(['title' => 'Done', 'message' => "Category updated successfully", 'type' => 'success']);
            }
            else {
                return back()->with(['title' => 'Failed', 'message' => "Unable to update the category", 'type' => 'error']);
            }
        }
        else {
            return back()->with(['title' => 'Failed', 'message' => "Category doesn't exist", 'type' => 'error']);
        }
    }

    public function categoryDelete(Request $request){
        $category = Category::find($request->id);

        if($category){
            if($category->delete()){
                return back()->with(['title' => 'Done', 'message' => "Category deleted successfully", 'type' => 'success']);
            }
            else {
                return back()->with(['title' => 'Failed', 'message' => "Unable to delete the category", 'type' => 'error']);
            }
        }
        else {
            return back()->with(['title' => 'Failed', 'message' => "Category doesn't exist", 'type' => 'error']);
        }
    }
}
