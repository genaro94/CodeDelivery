<?php

namespace codeDelivery\Http\Controllers;

use Illuminate\Http\Request;
use codeDelivery\Http\Requests\AdminCategoryRequest;
use codeDelivery\Repositories\CategoryRepository;

class CategoriesController extends Controller
{
    private $repository;

    public function __construct(CategoryRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        //chamando no repository
        $categories = $this->repository->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request){
        //pegar todos os dados 
        $data = $request->all();
        //salvar
        $this->repository->create($data);
        //redirecionar
         return redirect()->route('admin.categories.index');


    }

    public function edit($id){
        //pegando o id
        $category =  $this->repository->find($id);

        //mandando o objeto através do id para a view
        return view('admin.categories.edit', compact('category'));
    } 

    public function update(AdminCategoryRequest $request, $id){
        $data = $request->all();
        //salvar
        $this->repository->update($data, $id);
        //redirecionar
         return redirect()->route('admin.categories.index');
    }

}
