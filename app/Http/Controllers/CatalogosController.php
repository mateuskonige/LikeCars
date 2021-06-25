<?php

namespace App\Http\Controllers;

use App\Models\Catalogos;
use App\Models\Image;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    public function index()
    {
        $catalogos = Catalogos::orderBy('catalogos_id', 'DESC')->get();


        return view('catalogos.index', compact('catalogos'));
    }

    public function store(Request $request)
    {
        // $catalogos = Catalogos::create([
        //     'nomeCarro' => $request->nomeCarro,
        //     'anoCarro' => $request->anoCarro,
        //     'descriçãoCarro' => $request->descriçãoCarro, 
        //     'preçoCarro' => $request->preçoCarro, 
        //     'kmCarro' => $request->kmCarro, 
        //     'path' => $request->file('thumbnail')->getClientOriginalName()
        // ]);


        $catalogos = $request->all();



        // if ($request->hasFile('thumbnail')) {
        //     $dir = 'thumbnails';
        //     $imagename = $request->file('thumbnail')->getClientOriginalName();
        //     $path = $request->file('thumbnail')->storeAs($dir,$imagename);

        //     // $catalogos->image()->save(
        //     //     Image::create(['path' => $path])
        //     // );
        // }

        // $catalogos['path'] = $path;

        // Catalogos::create($catalogos);
        
        // dd($catalogos);

        if ($request->hasFile('thumbnail')) {
            // $dir = 'thumbnails';
            // $imagename = $request->file('thumbnail')->getToken();
            $path = $request->file('thumbnail')->store('thumbnails');

            // $catalogos->image()->save(
            //     Image::create(['path' => $path])
            // );
        }

        $catalogos['path'] = $path;

        Catalogos::create($catalogos);
        
        // dd($catalogos);


        return redirect()->route('catalogos.index');
    }

//     public function destroy($id)
//     {
//         if (!$mercadorias = Mercadorias::find($id))
//             return redirect()->route('mercadorias.index');

//         $mercadorias->delete($id);

//         return redirect()->route('mercadorias.index');
//     }

//     public function edit($id)
//     {
//         $fornecedores = Fornecedores::get();

//         if (!$mercadoria = Mercadorias::find($id))
//             return redirect()->route('mercadorias.index');

//         $mercadoria = Mercadorias::find($id);
//         $fornecedor = Fornecedores::find($id);
//         return view('mercadorias.edit', compact('mercadoria', 'fornecedores'));
//     }

//     public function update(Request $request)
//     {
//         // return $request->input();
//         $mercadoria = Mercadorias::find($request->id);

//         $mercadoria->codMercadoria = $request->codMercadoria;
//         $mercadoria->descricaoMercadoria = $request->descricaoMercadoria;
//         $mercadoria->mlgMercadoria = $request->mlgMercadoria;
//         $mercadoria->categoriaMercadoria = $request->categoriaMercadoria;
//         $mercadoria->fornecedorMercadoria = $request->fornecedorMercadoria;
//         $mercadoria->custoMercadoria = $request->custoMercadoria;

//         $mercadoria->save();

//         return redirect()->route('mercadorias.index');
//     }
}
