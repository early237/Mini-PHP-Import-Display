<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;

//RESOURCE CONTOLLER - Layouts database action methods for you
// CRUD - Create/Read/Update/Delete

class GuitarsController extends Controller
{

    private static function getData()
    {
        return 
        [
            ['id'=> 1, 'name'=> 'American Standard Strat', 'brand' => 'Fender'],
            ['id'=> 2, 'name'=> 'Starla S2', 'brand' => 'PRS'],
            ['id'=> 3, 'name'=> 'Explorer', 'brand' => 'Gibson'],
            ['id'=> 4, 'name'=> 'Talman', 'brand' => 'Ibanez'],
        ];

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {
        // GET

        return view('guitars.index', [
            'guitars'=> Guitar::all(),
            'userInput' =>'<script>alert("hellooo")</script>'
        ]);
    }

    /* public function index()
    {
        // GET

        return view('guitars.index', [
            'guitars'=> self::getData(),
            'userInput' =>'<script>alert("hellooo")</script>'
        ]);
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(GuitarFormRequest $request)
     {
         // POST
 
        $data = $request->validated();
 
         Guitar::create($data);
 
         return redirect()->route('guitars.index');
 
     }


     /* public function store(GuitarFormRequest $request)
    {
        // POST

       $data = $request->validated();



        $guitar = new Guitar();

        $guitar->name = $data['name'];
        $guitar->brand = $data['brand'];
        $guitar->year_made = $data['year_made'];

        $guitar->save();

        return redirect()->route('guitars.index');

    } */
    /* public function store(Request $request)
    {
        // POST

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'year_made' => ['required', 'integer'],
        ]);



        $guitar = new Guitar();

        $guitar->name = strip_tags($request->input('name'));
        $guitar->brand = strip_tags($request->input('brand'));
        $guitar->year_made = strip_tags($request->input('year_made'));

        $guitar->save();

        return redirect()->route('guitars.index');

    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function show(Guitar $guitar)
    {
        // GET
        return view('guitars.show', [
            'guitar'=> $guitar
        
        ]);
    }

    /* public function show($guitar)
    {
        // GET
        $guitars = self::getData();

        //Seaches array function (multidimentional array - array_column search using id)
        $index = array_search($guitar, array_column($guitars, 'id'));

        if($index === false)
        {
            abort(404);
        }

        return view('guitars.show', [
            'guitar'=> $guitars[$index]
        
        ]);
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        // GET
        return view('guitars.edit', [
           /*  'guitar'=> Guitar::findOrFail($guitar) */
           'guitar'=> $guitar
        
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function update(GuitarFormRequest $request, Guitar $guitar)
     {
         // POST
 
         $data = $request->validated();

         $guitar->update($data);
 
 
         return redirect()->route('guitars.show', $guitar->id);
 
     }


     /* public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        // POST

        $data = $request->validated();



       // $record = Guitar::findOrFail($guitar);

       $guitar->name = $data['name'];
       $guitar->brand = $data['brand'];
       $guitar->year_made = $data['year_made'];

        $guitar->save();

        return redirect()->route('guitars.show', $guitar->id);

    } */
    /* public function update(Request $request, Guitar $guitar)
    {
        // POST

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'year_made' => ['required', 'integer'],
        ]);



       // $record = Guitar::findOrFail($guitar);

        $guitar->name = strip_tags($request->input('name'));
        $guitar->brand = strip_tags($request->input('brand'));
        $guitar->year_made = strip_tags($request->input('year_made'));

        $guitar->save();

        return redirect()->route('guitars.show', $guitar->id);

    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE
    }
}
