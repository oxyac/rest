<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ApiService
{
    protected Model $model;

    public function getItems(Request $request)
    {
        $filterValue = $request->query('filter');
        $offset = $request->query('perPage') ?? 15;
        $result = $this->model;


        if($filterValue && $filterValue != ''){
            $result = $result->newQuery()
                ->where('title', 'like', "%$filterValue%")
                ->orWhere('body', 'like', "%$filterValue%")
//                ->dd();die;
                ->paginate($offset);

//            dd($result);die;
            return $result;

        }

        return $result::paginate($offset);
    }

    public function store(Request $request, $id = null): ?Model
    {
        if($id){
            $model = $this->model::find($id);
            if(!$model){
                return null;
            }
            $this->model = $model;
        }

        $this->model->fill($request->only($this->model->getFillable()));
        $this->model->save();

        return $this->model;
    }

    public function destroy($id)
    {
        $post = $this->model::find( $id );
        if(!$post){
            return null;
        }
        return $post->delete();
    }
}
