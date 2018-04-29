<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utility\ClientCsv;
use App\Http\Requests\ClientFormRequest;

class ClientController extends Controller
{

    private $csv;

    function __construct() {
        $csv = new ClientCsv('data', 'clients.csv');
        $this->csv = $csv;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $clients = $this->csv->all();
        $page_title = 'Index';
        return view('home', compact('page_title', 'clients'));
    }

    public function manageArray($key, $value) {
        return array_combine($key, $value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create',[
            'page_title' => 'Client Information',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientFormRequest $request)
    {
        $data = $request->except('_token');
        $this->csv->save($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
