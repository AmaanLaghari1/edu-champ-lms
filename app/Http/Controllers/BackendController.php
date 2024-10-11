<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\TeacherDetail;
use Illuminate\Support\Facades\Storage;

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
        ]);

        if ($request->role === 'teacher') {
            $request->validate([
                'university' => ['required', 'string', 'max:255'],
                'degree' => ['required', 'string', 'max:255'],
                'city' => ['required', 'string', 'max:255'],
                'expertise' => ['required', 'string', 'max:255'],
                'about' => ['required', 'string'],
            ]);
        }

        $profilePicturePath = null;
        if($request->hasFile('profile_picture')){
            $profilePicturePath = Storage::disk('website')->put('profile_pics', $request->profile_picture);
        }

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name ." ". $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'picture' => $profilePicturePath,
            'status' => 1,
            'role' => $request->role,
        ];

        $user = User::create($data);

        if($user && $request->role === 'teacher'){
            $teacher = TeacherDetail::create([
                'user_id' => $user->id,
                'university' => $request->university,
                'degree' => $request->degree,
                'city' => $request->city,
                'expertise' => $request->expertise,
                'about' => $request->about
            ]);

            return back()->with(['title' => 'Done', 'message' => "Teacher created successfully", 'type' => 'success']);
        }

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
