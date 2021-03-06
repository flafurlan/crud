<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelMovie;
use App\Models\User;
use App\View;

class MovieController extends Controller
{
    private $objUser;
    private $objMovie;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objMovie=new ModelMovie();
    }

    public function index()
    {
        $movie=$this->objMovie->paginate(5);//quando uso paginate
        //limita a quantidade de registro que a tela mostra, se usar all mostra todos
        return view('index',compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objMovie->create([
            'titulo'=>$request->titulo,
            'ano_lancamento'=>$request->ano_lancamento,
            'tempo'=>$request->tempo,
            'id_user'=>$request->id_user
         ]);
         if($cad){
             return redirect('movies');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie=$this->objMovie->find($id);
        return view('show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie=$this->objMovie->find($id);
        $users=$this->objUser->all();
        return view('create',compact('movie','users'));
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
        $this->objMovie->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'ano_lancamento'=>$request->ano_lancamento,
            'tempo'=>$request->tempo,
            'id_user'=>$request->id_user
        ]);
        return redirect('movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objMovie->destroy($id);
        return($del)?"sim":"não";
    }
}
