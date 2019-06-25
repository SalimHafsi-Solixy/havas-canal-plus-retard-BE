<?php
namespace  App\Service;

use App\Repository\UserRepository;

class UserService {

    private $repository;
    public  function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    public  function getUsers(){
        return $this->repository->findAll();
    }
}