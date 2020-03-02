<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = Donation::all();
      return view('sponsor.donation.index',[
          'title' => 'Listado de donaciones',
          'donations' => $donations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate (
            $request,
            [
                'donation' => 'required',
                'projects' => 'required',
                'users' => 'required',
            ]
        );

      $donation = Donation::create($request->all());
      return redirect('/sponsor/donation/' . $donation->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $id)
    {
        $donation = Donation::find($id);
      return view('website.donation.show', [
        'donation' => $donation,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        return view('sponsor.donation.edit',[
            'donation' => $donation,

            'project' => Auth::user()->projects,

         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation, $id)
    {
        $this->validate ($request,
      [
        'donation' => 'required',
        'projects' => 'required',
        'users' => 'required',
      ]);


      $donation = Donation::find($id);
      $donation->update($request->all());
      return redirect('/donation/' . $donation->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation, $id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return redirect('/donations');
    }
}
