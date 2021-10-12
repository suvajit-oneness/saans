<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceReport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ServiceReportExport;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.service.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'serial_no' => 'required',
            'installed_system' => 'required',
            'warranty' => 'required',
            'amc_offer_sent' => 'required',
            'action_plan' => 'required',
            'concern_engineer' => 'required',
        ]);
        $service = new ServiceReport;
        $service->company_name = $request->input('company_name');
        $service->name = $request->input('name');
        $service->email = $request->input('email');
        $service->phone = $request->input('phone');
        $service->address = $request->input('address');
        $service->serial_no = $request->input('serial_no');
        $service->installed_system = $request->input('installed_system');
        $service->warranty = $request->input('warranty');
        $service->amc_offer_sent = $request->input('amc_offer_sent');
        $service->amc_value = $request->input('amc_value');
        $service->remarks = $request->input('remarks');
        $service->action_plan = $request->input('action_plan');
        $service->concern_engineer = $request->input('concern_engineer');
        $service->save();
        return redirect('service/service-report')->with('success','Report Added Successfully');
    }

    public function fileImportExport()
    {
       return view('file-import');
    }
    public function fileExport() 
    {
        return Excel::download(new ServiceReportExport, 'reports-collection.xlsx');
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
