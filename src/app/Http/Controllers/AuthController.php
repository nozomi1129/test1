<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\Models\Contact;


class AuthController extends Controller
{

    public function admin() {
        $contacts = Contact::all();
        $categories = Category::all();
        $page = Contact::Paginate(7);
        return view('admin', compact('categories', 'contacts', 'page'));
    }

    public function register(UserRequest $request) {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return redirect('/register');
    }

    public function login(UserRequest $request) {
        return redirect('/admin');
    }

    public function search(Request $request) {
        $contact = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
        $categories = Category::all();
        return view('admin', compact('contact', 'categories'));
    }

}
