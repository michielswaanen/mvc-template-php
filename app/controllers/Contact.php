<?php

class Contact extends Controller {

    // Index of the contact page (localhost/contact(/index))
    public function index($param1= '', $param2= '', $param3= '') {
        
        // Initialize Test model
        $test = $this->model('Test');

        // Call function from the model
        $testData = $test->getTestFunction();

        $this->view('contact/index', ['test' => testData, 'parameters' => [$param1, $param2, $param3]]);
    }
}

?>