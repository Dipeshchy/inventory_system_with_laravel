<?php

namespace App\Http\Controllers;
use App\Client;
use App\Cheque_entry;
use App\Balance;
use App\Agent;
use App\Labour;
use App\Ledger_entry;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_index()
    {
        return view('admin.admin_home');
    }

    // **** CLients COntroller ************

    public function clientManager()
    {
        $clients = Client::all();
        return view('admin.clients.client_manager')->with('clients',$clients);
    }
    public function addclients()
    {
        $agents = Agent::all();
        return view('admin.clients.createclients',compact('agents'));
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

    public function editClient($id)
    {
        $client = Client::where('id',$id)->first();
        $agents = Agent::all();
        return view('admin.clients.edit_clients',compact('client','agents'));
    }

    public function updateClients(Request $request,$id)
    {
        $client = Client::find($id);

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

    // **********************End of Clients Controller **********************


    // ************* Cheque COntroller *********************

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


    public function editCheque($id)
    {
        $cheque = Cheque_entry::where('id',$id)->first();
        $clients = Client::all();
        return view('admin.cheque.edit_cheques',compact('cheque','clients'));
    }

    public function updateCheques(Request $request,$id)
    {
        $cheque = Cheque_entry::find($id);

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


    // **************************** End of Cheque Controller *****************






    // ************* Ledger Controller*******************
    public function ledgerManager()
    {
        $clients = Client::all();
        $balances = Balance::all();
        return view('admin.ledger.ledgermanager',compact('clients','balances'));
    }

    public function ledgerView($id)
    {
        $client = Client::where('id',$id)->first();
        $balances = Balance::all();
        $ledger = Ledger_entry::where('client_id',$id);
        return view('admin.ledger.ledger_view',compact('client','balances','ledger'));
    }

    public function storeLedger(Request $request,$id)
    {
        $client = Client::where('id',$id)->first();
        $ledger = new Ledger_entry;

        // Fetching balance from balance table
        $balance_data = Balance::where('client_id',$id)->first();
        $balance_amount = $balance_data->balance;

        // Fetching credit limit from clients table
        $credit_limit_amount = $client->credit_limit;

        $ledger->client_id = $request->input('client_id');;
        $ledger->date_of_today = $request->input('date');
        $ledger->nepali_date = "dipesh";
        $ledger->description = $request->input('description');
       

        if($request->input('debit'))
        {
            $new_balance = $balance_amount - $request->input('debit');
            if($new_balance > $credit_limit_amount)
            {
                die("Credit LImit Reached");
            }
            else
            {
                $ledger->debit = $request->input('debit');
                $ledger->credit = 0;
                $ledger->balance = $new_balance;
            }
            
        }
        else{
            $new_balance = $balance_amount + $request->input('credit'); 
            $ledger->credit = $request->input('credit');
                $ledger->debit = 0;
                $ledger->balance = $new_balance;   
        }
        

        

        $ledger->save();

        return redirect('/ledger_view/{id}');
    }



    // ******************** End of Ledger Controller ************************


    // *************** A/C Receivables Controller ******************
    public function ac_Receivables()
    {
        $clients = Client::where('account_type','A/C Receivables')->get();
        $balances = Balance::all();
        return view('admin.account_type.receivable',compact('clients','balances'));
    }


    // ************** A/C Payables Controller *******************
    public function ac_Payables()
    {
        $clients = Client::where('account_type','A/C Payables')->get();
        
        return view('admin.account_type.payable',compact('clients'));
    }
   


    // ***************** A/C Scraps *****************
    public function ac_Scraps()
    {
        $clients = Client::where('account_type','A/C Scraps')->get();
        
        return view('admin.account_type.scrap',compact('clients'));
    }



    // ************* Agent Manager Controller *************
    public function agentManager()
    {
        $agents = Agent::all();
        return view('admin.agent.agent_manager',compact('agents'));
    }

    public function addAgents()
    {
        return view('admin.agent.add_agent');
    }

    public function storeAgents(Request $request)
    {
        $agent = new Agent;

        $agent->name = $request->input('name');
        $agent->phone_no = $request->input('phone_no');
        $agent->mobile_no = $request->input('mobile_no');
        $agent->description = $request->input('description');

        $agent->save();
        return redirect('/agentmanager');
    }

    // ************** Labour Manager Controller ********************
    public function labourManager()
    {
        $labours = Labour::all();

        return view('admin.labour.labour_manager',compact('labours'));
    }

    public function addLabour()
    {
        return view('admin.labour.add_labour');
    }

    public function storeLabour(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone_no'=>'required',
            'salary' => 'required'
         ]);
          $labour = new Labour;
          $labour->name = $request->input('name');
          $labour->phone_no = $request->input('phone_no');
          $labour->salary = $request->input('salary');
          $labour->description = $request->input('description');

          $labour->save();

          return redirect('/labourmanager');
    }
}
