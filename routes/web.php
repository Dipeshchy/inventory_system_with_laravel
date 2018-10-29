<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@admin_index');

// ****** Client Routes ******************

Route::get('/clientmanager','AdminController@clientManager');

Route::get('/add_client','AdminController@addclients');

Route::get('/storeclients','AdminController@storeclients');

Route::get('/clientmanager/{id}/edit_client','AdminController@editClient');

Route::get('/updateclients/{id}','AdminController@updateClients');



// ****************** Cheque Route ******************

Route::get('/chequemanager','AdminController@chequeManager');

Route::get('/add_cheques','AdminController@addCheques');

Route::get('/storecheques','AdminController@storecheques');

Route::get('/chequemanager/{id}/edit_cheque','AdminController@editCheque');

Route::get('/updatecheques/{id}','AdminController@updateCheques');


// ************ Ledger Manager ******************
Route::get('/ledgermanager','AdminController@ledgerManager');

Route::get('/ledger_view/{id}','AdminController@ledgerView');

Route::get('/storeledger/{id}','AdminController@storeLedger');


// ******** A/C Receivables Manager********* 
Route::get('/ac_receivables','AdminController@ac_Receivables');



// **************** A/C Payables *********************
Route::get('/ac_payables','AdminController@ac_Payables');




// ************ A/C Scrap *****************************
Route::get('/ac_scrap','AdminController@ac_Scraps');




// *********** Agent Manager **************
Route::get('/agentmanager','AdminController@agentManager');

Route::get('/add_agents','AdminController@addAgents');

Route::get('/storeagents','AdminController@storeAgents');


// ************** Labour Manager *****************
Route::get('/labourmanager','AdminController@labourManager');

Route::get('/add_labour','AdminController@addLabour');

Route::get('/storelabour','AdminController@storeLabour');