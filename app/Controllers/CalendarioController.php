<?php

namespace App\Controllers;

use App\Models\CalendarioModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\CitasModel;

use CodeIgniter\Controller;


class Calendariocontroller extends Controller
{
    //funcion para mostras la lista de citas
    // public function index(){
    //     $calendarioModel = new CitasModel();
    //     //obtener una lista de registros
    //     $data['citas'] = $calendarioModel -> orderBy('id','DESC') -> findAll();
    //     return view('Calendario_lista',$data); 
    // }

    use ResponseTrait;
    public function getCalendars()
    {
        $calendarioModel = new CalendarioModel();
        //obtener una lista de registros
        $calendars = $calendarioModel->findAll();
        return $this->respond($calendars);
    }
    public function getCitas()
    {
        $citasModel = new CitasModel();
        $events = $citasModel->findAll();
        return $this->respond($events);
    }
    public function createCitas(){
        $citasModel = new CitasModel();
        $data=[
            'start_date'=> $this->request->getVar('start_date'),
            'end_date'=> $this->request->getVar('end_date'),
            'text'=> $this->request->getVar('text'),
            'details'=> $this->request->getVar('details'),
            'calendar'=> $this->request->getVar('calendar'),
        ];
        $citasModel ->insert($data);
        return $this->response->setStatusCode(200);
    }
    public function getCalendar($id = null)
    {
        $calendarioModel = new CalendarioModel();
        //obtener una lista de registros
        $data = [
            'text' => $this->request->getVar('text'),
            'color' => $this->request->getVar('color'),
            'active' => $this->request->getVar('active'),

        ];
        $calendarioModel->update($id, $data);
        $calendar = $calendarioModel->where('id', $id)->first();
        return $this->respond($calendar);
    }
    public function crearCalendar()
    {
        $calendarioModel = new CalendarioModel();
        $data = [
            'text' => $this->request->getVar('text'),
            'color' => $this->request->getVar('color'),
            'active' => $this->request->getVar('active'),

        ];
        $calendarioModel->insert($data);
        return $this->response->setStatusCode(200);
    }
}
