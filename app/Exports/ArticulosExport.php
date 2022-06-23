<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\Articulos;


class ArticulosExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    /*public function collection()
    {
        return Articulos::all();
    }*/
    public function view(): View
    {
        //
        return view('excel.articulos', [
            'articulos' => Articulos::all()
        ]);
    }



}
