
<?PHP

function navi () {
  ?>
 
  <?PHP
}

include('Route.php');

//index
Route::add('/',function(){
  navi();
});

//home
Route::add('/home',function(){
  navi();
});
//users
Route::add('/users',function(){
  navi();
  include ('user/index.php');
});
//clients
Route::add('/clients',function(){
  navi();
  include ('client/index.php');
});
//projects
Route::add('/projects',function(){
  navi();
  include ('project/index.php');
});
//tasks
Route::add('/tasks',function(){
  navi();
  include ('task/index.php');
});
//add project
Route::add('/addproject',function(){
  navi();
  include('project/add.php');
  if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//edit project
Route::add('/editproject',function(){
  navi();
 include('project/edit.php');
 if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//delete project
Route::add('/deleteproject',function(){
  navi();
 include('project/delete.php');

});
//add user
Route::add('/adduser',function(){
  navi();
  include('user/add.php');
  if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//edit user
Route::add('/edituser',function(){
  navi();
 include('user/edit.php');
 if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//delete user
Route::add('/deleteuser',function(){
  navi();
 include('user/delete.php');

});
//add client
Route::add('/addclient',function(){
  navi();
  include('client/add.php');
  if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//edit client
Route::add('/editclient',function(){
  navi();
 include('client/edit.php');
 if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//delete client
Route::add('/deleteclient',function(){
  navi();
 include('client/delete.php');

});
//add task
Route::add('/addtask',function(){
  navi();
  include('task/add.php');
  if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//edit task
Route::add('/edittask',function(){
  navi();
 include('task/edit.php');
 if(isset($_POST["input"])){
    print_r($_POST);
  }
},['get','post']);
//delete task
Route::add('/deletetask',function(){
  navi();
 include('task/delete.php');

});

Route::pathNotFound(function($path){
  navi();
  echo 'Error 404 :-(<br/>';
  echo 'The requested path "'.$path.'" was not found!';
});

// Add a 405 method not allowed route
Route::methodNotAllowed(function($path, $method){
  navi();
  echo 'Error 405 :-(<br/>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});


Route::run('/');


?>
