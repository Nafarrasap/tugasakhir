<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelKontak;
use Session;
use Validator;
class Login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function cek(Request $req)
    {
        $this->validate($req,[
            'usr'=>'required',
            'psw'=>'required'
        ]);
        $proses = new modelKontak();
        $proses=modelKontak::where('email',$req->usr)->where('password',$req->psw)->first();
        if($proses){
            Session::put('id',$proses->id);
            Session::put('user',$proses->usr);
            Session::put('password',$proses->psw);
            Session::put('hak_akses',$proses->hak_akses);
            Session::put('login_status',true);
            return redirect('/barang');
        } else {

            return redirect("login")->with('alert_message', 'Username dan Password tidak cocok!');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
