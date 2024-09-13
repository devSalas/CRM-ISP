<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        $name = [];

        foreach($sheet->getRowIterator() as $rowIndex=> $row) { 
           /*  if ($rowIndex == 1) {
                // Saltar la primera fila (cabecera)
                continue;
            } */
    
            if($rowIndex>4) break;

            $rowData  =[];

            foreach($row->getCellIterator() as $cell){
                $rowData[]  = $cell -> getValue();
            }


            $data[] = $rowData;



        }


        foreach($data as $userIndex=>$user){
           
            User::create([
                "name"=>$user[3],
                "phone"=>$user[11],
                "DNI" => $user[5],
                "CE" =>$user[6],
                "email"=>$user[7]
            ]);


            

        }
    
        /* $data = $sheet->toArray();

        $limitedData = array_slice($data,0,3); */

        // Mostrar los datos extraídos
        dd($data,$name); // Utiliza `dd()` para depuración, puedes cambiarlo por `print_r($data)` si es necesario
    }
    
}
