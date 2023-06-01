<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assets;
use App\Models\User;
use App\Models\Kriteria;
use App\Models\Owner;
use App\Http\Requests\Admin\AssetsRequest;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Assets::with([
            'kriterias','owners'])->get();

        return view('pages.admin.assets.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $kriteria= Kriteria::all();
        $owners= Owner::all();
        return view('pages.admin.assets.create', [
            'user' => $user,
            'kriteria' => $kriteria,
            'owners' => $owners,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(AssetsRequest $request)
     {
         $data = $request->all();
         $foto = '';
         if ($request->hasFile('foto')) {
             foreach ($request->file('foto') as $file) {
                 $foto .= $file->store('assets/asset', 'public') . ',';
             }
         }
         $data['foto'] = $foto;
     
         Assets::create($data);
         return redirect()->route('assets.index');
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
        $item = Assets::findOrFail($id);
        $user = User::all();
        $kriteria= Kriteria::all();
        $owners= Owner::all();

        return view('pages.admin.assets.edit', [
            'item' => $item,
            'user' => $user,
            'kriteria' => $kriteria,
            'owners' => $owners,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssetsRequest $request, $id)
    {
        $data = $request->all();
    
        if (!$request->hasFile('foto')) {
            unset($data['foto']);
        } else {
            $foto = '';
            foreach ($request->file('foto') as $file) {
                $foto .= $file->store('assets/asset', 'public') . ',';
            }
            $data['foto'] = $foto;
        }
    
        $item = Assets::findOrFail($id);
        $item->update($data);
    
        return redirect()->route('assets.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item = Assets::findOrFail($id);
        $item->delete();

        return redirect()->route('assets.index');
    }
}
