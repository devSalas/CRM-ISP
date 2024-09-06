<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xls;

class ExcelController extends Controller
{
    public function index()
    {
        return view("excel");
    }




    
    public function import()
    {
        set_time_limit(300); // Extiende el tiempo de ejecución
    
        // Ruta al archivo Excel
        $filePath = public_path('prueba1.xlsx');
    
        // Cargar el archivo de Excel
        $spreadsheet = IOFactory::load($filePath);
    
        // Seleccionar la hoja activa por nombre (puedes cambiar 'gigamas' por el nombre real de la hoja)
        $spreadsheet->setActiveSheetIndexByName('gigamas');
        $sheet = $spreadsheet->getActiveSheet();
    
        $data = $sheet->toArray();

        // Mostrar los datos extraídos
        dd($data); // Utiliza `dd()` para depuración, puedes cambiarlo por `print_r($data)` si es necesario
    }
    
}
