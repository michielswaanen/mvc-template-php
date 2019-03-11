<?php

class Home extends Controller {

    // Index of the home page (localhost/home(/index))
    public function index($param1= '', $param2= '', $param3= '') {
        
        // Initialize Test model
        $test = $this->model('Test');

        // Call function from the model
        $testData = $test->getTestFunction();

        $this->view('home/index', ['test' => testData, 'parameters' => [$param1, $param2, $param3]]);
    }
}

?>