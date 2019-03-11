# Model View Controller - Design Pattern for PHP

## Models

All the database functions are stored in here.  
Every table has his own object inside of the model folder.

## Views

All the web pages are stored in here.  
Every page has his own folder with an index.php.  
All the data is passed to the view via the $data variable.

## Controller

All the functionallities are stored in here.  
All the models are called inside the controllers and can be modified and then be passed to the view.