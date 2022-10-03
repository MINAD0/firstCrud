<?php

namespace App\Http\Controllers;
use App\Models\Stg;
use Illuminate\Http\Request;

class StgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stgs = Stg::latest()->paginate(6);
        return view('create',['stgs'=>$stgs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stgs = Stg::latest()->paginate(6);
        return view('create',['stgs'=>$stgs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stgs = new Stg();

        $stgs->cin = Request('cin');
        $stgs->nom = Request('nom');
        $stgs->prenom = Request('prenom');
        $stgs->age = Request('age');
        $stgs->speciality = Request('speciality');

        $stgs->save();
        return redirect()->route('create')
        ->with('success','stgs added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stgs = Stg::find($id);
        return view('show',['stgs'=>$stgs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $stgs = Stg::where(['id'=>Request('id')])->first();//delete()
        //dd($produit);
        return view('edit',['stgs'=>$stgs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stg $stgs)
    {
        $request->validate([
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'speciality' => 'required'
        ]);
        $stgs = Stg::where(['id'=>Request('id')])->update(
            [
                'cin' => Request('cin'),
                'nom' => Request('nom'),
                'prenom' => Request('prenom'),
                'age' => Request('age'),
                'speciality' => Request('speciality')
            ]
        );
        return redirect()->route('create')
        ->with('success','stagiaire updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $stgs = Stg::where(['id'=>Request('id')])->delete();
        return redirect()->route('create')
        ->with('success','stagiaire deleted successfully');
    }
}
