<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Chamado;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      $chamados = Chamado::where('user_id', '=' , $user->id);
      return view('home', compact('chamados'));
    }

    public function detalhe($id)
    {
      $chamados = Chamado::find($id);
      return view('detalhe', compact('chamados'));
    }
}
