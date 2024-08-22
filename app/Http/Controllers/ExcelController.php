<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // Ruta del archivo Excel en la carpeta public
        $filePath = public_path('developers.xlsx');

        // Cargar el archivo Excel
        $spreadsheet = IOFactory::load($filePath);

        // Obtener la primera hoja (sheet)
        $sheet = $spreadsheet->getActiveSheet();

        // Extraer los datos (ejemplo: desde la fila 2 para saltar el encabezado)
        $data = [];
        foreach ($sheet->getRowIterator(1) as $row) {
            $rowData = [];
            foreach ($row->getCellIterator() as $cell) {
                $rowData[] = $cell->getValue();
            }
            $data[] = $rowData;
        }
        dd($data);
        // Enviar los datos a la vista
        return view('dashboard');
    }
}
