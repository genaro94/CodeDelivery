<?php

namespace codeDelivery\Http\Controllers;

use Illuminate\Http\Request;
use codeDelivery\Http\Requests\AdminClientRequest;
use codeDelivery\Repositories\ClientRepository;
use codeDelivery\Services\ClientService;

class ClientsController extends Controller
{
    private $repository;
    private $clientService;

    public function __construct(ClientRepository $repository, ClientService $clientService){
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index(){

        //chamando no repository
        $clients = $this->repository->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function store(AdminClientRequest $request){
        //pegar todos os dados 
        $data = $request->all();
        //salvar
        $this->clientService->create($data);
        //redirecionar
         return redirect()->route('admin.clients.index');

    }

    public function edit($id){
        //pegando o id
        $client =  $this->repository->find($id);

        //mandando o objeto através do id para a view
        return view('admin.clients.edit', compact('client'));
    }

    public function update(AdminClientRequest $request, $id){
        $data = $request->all();
        //salvar
        $this->clientService->update($data, $id);
        //redirecionar
         return redirect()->route('admin.clients.index');
    }

}
