<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    /**
     * Display main dashboard.
     *
     * @return Response | string
     */
    public function index()
    {
        $auth = Auth::user();
        return view('dashboard.index' , compact(['auth']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response|View
     */
    public function create()
    {
        return view('dashboard.register');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing Users.
     *
     * @param  int  $id
     * @return Response | View
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','id')->toArray();
        array_unshift($roles , 'انتخاب کنید');
        return view('dashboard.edituser',compact(['user','roles']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required',],
            'email' => ['required', 'email'],
            'role' => ['required'],
            'avatar' => ['mimes:jpg,png', 'max:1024']
        ],[
            'name.required' => 'فیلد نام ضروری است.',
            'email.required' => 'فیلد ایمیل ضروری است.',
            'email.email' => 'ایمیل معتبر نیست.',
            'role.mimes' => 'فرمت فایل ارسالی صحیح نیست.',
            'role.max' => 'حجم فایل ارسالی بیشتر از حجم مجاز است.'
        ]);

        $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->password != null){
                $user->password = Hash::make($request->password);
            }
            if( !in_array($request->role, $user->roles()->pluck('id')->toArray()) && ($request->role != 0)){
                $user->roles()->attach($request->role);
            }
            if($file = $request->file('avatar')){
                $name = $file->getClientOriginalName();
                $difname = time() . "-". $name ;
                $mime = $file->getMimeType();
                $file->Move('avatars', $difname);

                $upload = new Avatar();
                $upload->name = $name;
                $upload->mimetype = $mime;
                $upload->path = '/avatars/' . $difname;
                $upload->user_id = $user->id;
                $upload->save();
                $user->avatar_id = $upload->id;

            }
            $user->save();
            return redirect(route('dashboard.showUsers'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Routing\Redirector|RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect(route('dashboard.showUsers'));
    }

    /**
     * Show Users List.
     *
     * @return View
     */
    public function users()
    {
        $auth = Auth::user();
        $users = User::all();
        return view('dashboard.users', compact(['users','auth']));
    }
}
