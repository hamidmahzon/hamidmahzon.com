<?php

namespace App\Controllers;
use App\Models\NoteModel;
class NoteController extends BaseController
{
    public function __construct()
    {
        helper('app');
    }
    
    public function index()
    {
      $request = service('request');
      $searchData = $request->getGet();

      $search = "";
      if(isset($searchData) && isset($searchData['search']))
      {
        $search = $searchData['search'];
      }

      // Get data 
      $notes = new NoteModel();
      $notes->orderBy('id', 'DESC');
      
      if($search == '')
      {
          $paginateData = $notes->paginate(4);
      }
      else
      {
          $paginateData = $notes->select('*')
            ->orLike('namep', $search)
            ->orLike('namee', $search)
            ->orLike('notee', $search)
            ->orLike('notep', $search)
            ->orLike('id', $search)
            ->paginate(4);
      }
      
      $data = [
            'records' => $paginateData,
            'pager' => $notes->pager,
            'search' => $search
        ];
        
        return view('note/home',$data);
    }
    
    
}
