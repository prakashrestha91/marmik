<?php

namespace App\Http\Controllers\Admin;

use App\Portal\Services\BatchService;
use Illuminate\Http\Request;
use App\Http\Requests\BatchRequest;
use App\Http\Controllers\Controller;

class BatchController extends Controller
{

    /**
     * @var BatchService
     */
    private $batchService;

    public function __construct(BatchService $batchService)
     {

         $this->middleware('auth:admin');

         $this->batchService = $batchService;
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batch= $this->batchService->getallbatch();

       return view('admin.batch.index',compact('batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        if ($this->batchService->addBatch($request)) {
            return redirect()->route('batch.index')->withSuccess("Batch added!");
        }
        return back()->withErrors("Something went wrong");
    }

    public function location($id)
    {
        $location=$this->batchService->getbatchId($id);
        return view('admin.batch.location',compact('location'));
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
