<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class LevelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = \App\Level::all();
		return view('level/all')->withData($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = \App\Level::all();
		return view('level/add')->withData($data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$addnew = new \App\Level;
		$addnew->parent = is_null(Input::get('parent'))?0:Input::get('parent');
		$addnew->nama = Input::get('nama');
		$addnew->posisi = Input::get('posisi');
		$addnew->save();

		return redirect(url('level'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		\DB::delete('delete from levels where id = ?',[$id]);
		return redirect('level');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$level = \DB::select('select *from levels order by id desc');		
		$data = \DB::table('levels')->where('id','=',$id)->first(); //untuk mengambil data berdasarkan id

    return view('level/edit')->with('data',$data,$level);	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function view()
	{
		$data = \App\Level::all();
		return view('level.view')->withData($data);
	}

	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
