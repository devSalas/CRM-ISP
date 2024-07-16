<?php

namespace App\Livewire\Page\Installation;


use App\Models\Installation;
use Carbon\Carbon;
use Livewire\Component;

class Installations extends Component
{
    
    public $installations;
    public $id;
    public $message;
    public $filterDate;
    public $showModalDelete = false;
    public $today;

    public function updatedFilterDate($value)
    {   
        $this->today = $value;
        $this->filterInstallations();
    }


    public function mount()
    {
        // Inicializar filterDate con la fecha de hoy formateada
        $this->filterDate = Carbon::today()->format('Y-m-d');
        
        // Cargar todas las instalaciones por defecto
        $this->loadAllInstallations();
    }
    public function loadAllInstallations()
    {
        // Cargar todas las instalaciones
        $this->installations = Installation::all();
    }
    
    public function filterInstallations()
    {
        // Filtrar las instalaciones basado en la fecha de filtro
        if ($this->filterDate) {
            $this->installations = Installation::where('installation_date', 'like', $this->filterDate . '%')->get();
        } else {
            $this->loadAllInstallations();
        }
    }

    public function resetFilter()
    {
        // Restablecer el filtro de fecha y cargar todas las instalaciones
        $this->filterDate = null;
        $this->loadAllInstallations();
    }


    public function openModalDelete($id)
    {

        $this->id = $id;
    }
    
    public function delete()
    {
        if ($this->id) {
            Installation::find($this->id)->delete();
            $this->showModalDelete = false;
            $this->installations= Installation::get();
        } else {
            $this->message = "Ocurrio un Error";
        }
    }

    public function render()
    {

         

        return view('livewire.page.installation.installations');
    }
}
