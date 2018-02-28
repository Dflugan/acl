<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Chamado;
use Illuminate\Support\Facades\Gate;

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
//      $chamados = Chamado::where('user_id', '=' , $user->id)->get();
        $chamados = Chamado::all();
      return view('home', compact('chamados'));
    }

    public function detalhe($id)
    {
      try {
        $chamados = Chamado::find($id);
        //$this->authorize('ver-chamado', $chamados);// autoriza caso o chamado conter o mesmo ID do usuário
        return view('detalhe', compact('chamados'));

      } catch (\Exception $e) {

        echo "Error:" . $e->getMessage();

      }

      // $chamados = Chamado::find($id);
      // // $this->authorize('ver-chamado', $chamados);
      // // if (Gate::denies('ver-chamado', $chamados)) {
      // //   abort(403,'Não esta autorizado');
      // // }
      // if (Gate::allows('ver-chamado', $chamados)) {
      //   return view('detalhe', compact('chamados'));
      // }
      // abort(403,'Não esta autorizado');
    }
}
