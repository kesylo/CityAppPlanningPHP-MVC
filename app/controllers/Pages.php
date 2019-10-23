<?php

// default controller
class Pages extends Controller {

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        //echo 'pages loaded';
    }

    // default method
    public function index(){
        // prepare data to send to view
        $data = [
            'title' => 'welcome'
        ];

        // view from the controller class we inherited
        $this->view('pages/index', $data);
    }

    public function about(){
        // load the about page
        $this->view('pages/about');
    }


}
