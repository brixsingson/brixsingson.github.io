<?php

namespace App\Controllers;

class Item extends BaseController
{
    public function index(): string
    {
    	$item_model= new \App\Models\ItemModel();
    	$data['items']= $item_model->findAll();
         return view('item/index', $data);
    }

    public function test(): string
    {
    	try{
            echo $x;
        }
        catch(\Exception $e){
            echo 'error' ;
        }
    }

    public function view($id)
    {
       $item_model= new \App\Models\ItemModel();
       $data['item']= $item_model->find($id);
       return view('item/view', $data);

    }


    public function add()
    {
        $data= array();
        helper(['form']);

         if($this->request->getMethod()=='post'){
            $post= $this->request->getPost(['name', 'price', 'description']);
            $rules= [
                'name' => ['label' => 'Item name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required|numeric'],
                'description' => ['label' => 'Description', 'rules' => 'required'],
            ];
            if (! $this->validate($rules))
            {
                $data['validation']= $this->validator;
                // dd($data['validation']);
            }
            else {
            $item_model= new \App\Models\ItemModel();
            $item_model->save($post);
            return redirect()->to('item/index');
            }
        }

        return view('item/add', $data);

    }

    // public function insert()
    // {
    //     if($this->request->getMethod()=='post'){
    //         $post= $this->request->getPost(['name', 'price', 'description']);
    //         $item_model= new \App\Models\ItemModel();


    //         $item_model->save($post);
    //         return redirect()->to('item/index');
    //     }


    // }

    public function edit($id)
    {
        helper(['form']);
       

        if($this->request->getMethod()=='post'){
            $post= $this->request->getPost(['name','price', 'description']);

            $rules= [
                'name' => ['label' => 'Item name', 'rules' => 'required'],
                'price' => ['label' => 'Price', 'rules' => 'required|numeric'],
                'description' => ['label' => 'Description', 'rules' => 'required'],
            ];
            if (! $this->validate($rules))
            {
                $data['validation']= $this->validator;
                // dd($data['validation']);
            }
            else {
                $item_model= new \App\Models\ItemModel();
                $item_model->update($id, $post);
                return redirect()->to('item/index');
            }
        }

        $item_model= new \App\Models\ItemModel();
        $data['item']= $item_model->find($id);
        return view('item/edit', $data);

    }

    public function delete($id)
    {
        
            $item_model= new \App\Models\ItemModel();
            $data['item']= $item_model->find($id);
            return view('item/delete', $data);

    }

    public function destroy($id)
    {
           $item_model= new \App\Models\ItemModel();
            $item_model->delete($id);
            return redirect()->to('item/index');
    }

    
}
