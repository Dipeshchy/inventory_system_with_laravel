<?php

namespace App\Http\Controllers;
use App\Client;
use App\Cheque_entry;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_index()
    {
        return view('admin.admin_home');
    }
    public function clientManager()
    {
        $clients = Client::all();
        return view('admin.clients.client_manager')->with('clients',$clients);
    }
    public function addclients()
    {
        return view('admin.clients.createclients');
    }
    public function storeclients(Request $request)
    {
        $client = new Client;

        $client->name = $request->input('name');
        $client->phone_no = $request->input('phone_no');
        $client->mobile = $request->input('mobile');
        $client->address = $request->input('address');
        $client->agent = $request->input('agent');
        $client->region = $request->input('region');
        $client->pan_no = $request->input('pan_no');
        $client->credit_limit = $request->input('credit_limit');
        $client->description = $request->input('description');
        $client->account_type = $request->input('account_type');
        $client->account_no = 1;
        $client->status = 1;

       

        $client->save();
        return redirect('/clientmanager');

    }

    public function chequeManager()
    {
        $cheques = Cheque_entry::all();
        // foreach($cheques as $cheque){
        //     echo $cheque->clients->name.',';
        // }
        // die;
        return view('admin.cheque.cheque_manager',compact('cheques'));
    }

    public function addCheques()
    {
        $clients = Client::all();
        return view('admin.cheque.add_cheques',compact('clients'));
    }

    public function storecheques(Request $request)
    {
        $clients = Client::all();
        $cheque = new Cheque_entry;

        $cheque->client_id = $request->input('client_name');
        $cheque->client_name = $request->input('client_name');
        $cheque->other_cheque = 200;
        $cheque->amount = $request->input('amount');
        $cheque->bank = $request->input('bank');
        $cheque->cheque_status = 1;
        $cheque->cheque_date = $request->input('cheque_date');
        $cheque->cheque_detail = $request->input('cheque_status');
        $cheque->gender = 1;
        $cheque->description = $request->input('description');

        $cheque->save();

        return redirect('/chequemanager');
    }
   
}
