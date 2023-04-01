<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if(!empty($search)){
            $dataUser = User::where('email', 'like', '%'.$search.'%')
                ->orWhere('username', 'like', '%'.$search.'%')
                ->paginate(10)->fragment('usr');
        }else{
            $dataUser = User::latest()->paginate(10)->fragment('usr');
        }

        return view('home', [
            'users'  => $dataUser,
            'search' => $search
        ]);
    }

    public function edit(User $user): View
    {
        return view('edituser',compact('user'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'email'    => 'required',
            'username' => 'required',
            'phone'    => 'required',
        ]);
        
        $user->update($request->all());
        
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
         
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}