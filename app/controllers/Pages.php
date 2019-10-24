<?php

// default controller
class Pages extends Controller {

    private $planningModel;

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        //echo 'pages loaded';
        $this->planningModel = $this->model('Planning');
    }

    // default method
    public function index(){
        // prepare data to send to view
        $data = [
            'title' => 'Acceuil'
        ];

        // view from the controller class we inherited
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'A propos'
        ];

        // load the about page
        $this->view('pages/about', $data);
    }


}
