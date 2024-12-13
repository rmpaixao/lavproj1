<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    $busca = request('search');
    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id = null) {
    return view('product', ['id' => $id]);
    echo 'a';
});




class User
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {

        $this->id = $id;
        $this->name = $name;
    }
}


class UserRepository
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }


    public function findById($id)
    {
        return new User($id, "John Doe");
    }
}


class UserService
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function getUserDetails($id)
    {
        return $this->userRepository->findById($id);
    }
}


class UserController
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function showUser($id)
    {
        $user = $this->userService->getUserDetails($id);
        return "User: " . $user->name;
    }
}

$db = new stdClass();
$userRepository = new UserRepository($db);
$userService = new UserService($userRepository);
$userController = new UserController($userService);

//echo $userController->showUser(1);
