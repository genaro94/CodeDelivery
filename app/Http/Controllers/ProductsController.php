<?php

namespace codeDelivery\Http\Controllers;

use Illuminate\Http\Request;
use codeDelivery\Http\Requests\AdminProductRequest;
use codeDelivery\Repositories\ProductRepository;
use codeDelivery\Repositories\CategoryRepository;

class ProductsController extends Controller
{
    private $repository;
    private $categoryRepository;

    public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository){
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){

        //chamando no repository
        $products = $this->repository->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = $this->categoryRepository->lists('name','id');
        return view('admin.products.create', compact('categories'));
    }

    public function store(AdminProductRequest $request){
        //pegar todos os dados 
        $data = $request->all();
        //salvar
        $this->repository->create($data);
        //redirecionar
         return redirect()->route('admin.products.index');


    }

    public function edit($id){
        //pegando o id
        $product =  $this->repository->find($id);
        $categories = $this->categoryRepository->lists('name','id');

        //mandando o objeto através do id para a view
        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(AdminProductRequest $request, $id){
        $data = $request->all();
        //salvar
        $this->repository->update($data, $id);
        //redirecionar
         return redirect()->route('admin.products.index');
    }

    public function destroy($id){
        $this->repository->delete($id);  
        return redirect()->route('admin.products.index');     
    }

}
