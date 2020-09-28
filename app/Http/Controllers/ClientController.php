<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $client = Client::with('user')->get();
        return view('clients.index', [
        'clients' => Client::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $valdited = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'montant' => 'required',
            'description' => 'required',
            'debtor' => 'required',
            'creditor' => 'required',
            'statut' => 'required'

        ]);




        $client = new Client();
        $client->name =  $request->name;

        $client->email =  $request->email;
        $client->montant =  $request->montant;

        $client->description =  $request->description;
        $client->debtor =  $request->debtor;
        $client->creditor =  $request->creditor;
        $client->statut =  $request->statut;
        //  momkin tdir men hna user id li dir login bla matjibo man Front END
        $client->user_id = Auth::id();

        $client->save();

        $request->session()->flash('statu', 'client ajouté bien');

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('clients.index', [
            'client' => Client::find($id)
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.edit', [
            'client' => $client

        ]);
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
        $client = Client::findOrFail($id);
        $client->name =  $request->name;

        $client->email =  $request->email;
        $client->montant =  $request->montant;

        $client->description =  $request->description;
        $client->debtor =  $request->debtor;
        $client->creditor =  $request->creditor;
        $client->statut =  $request->statut;
        //  momkin tdir men hna user id li dir login bla matjibo man Front END
        $client->user_id = Auth::id();

        $client->save();

        $request->session()->flash('statu', 'client update bien');

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $client = Client::findOrFail($id);
        $client->delete();




        $request->session()->flash('statu', 'client deleted');

        return redirect()->route('client.index');
    }
}
