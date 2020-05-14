@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <header class="head">
                <div class="main-bar">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h4 class="m-t-5">
                               
                                Category
                            </h4>
                        </div>
                    </div>
                </div>
            </header>

                
                <div class="card-body">
                  List
                  <br  />
                 
                  <div class="btn-group">
                                        <a href="/addcategory" id="editable_table_new" class=" btn btn-default">
                                            Add Category  <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                  <div id="video" > 
                  
                  <table    class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                  <tr    role="row">
                                                <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">id</th>
                                                <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">title</th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">description</th>
                                                <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Action</th>
                                              
                                            </tr>

                    @foreach ($category as $category)
                    <tr role="row">
                    <td>{{$category->id}}</td>

                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                    
                        <td> 
                         <!-- <a href="updateCategory/{{$category->id}}" >  <button class="btn  btn-primary"> update  </button>      </a>
                         <button onclick='deletes({{$category->id}})' class="btn  btn-danger"> Delete  </button>                      </td> -->
                         <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="updateCategory/{{$category->id}}"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;<a onclick='deletes({{$category->id}})'  class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete_user.html"><i class="fa fa-trash text-danger"></i></a>
                    </tr>
                 @endforeach
                    </table>

               
                                    
                  
                   </div> 
                </div>

            </div>
        </div>
    </div>
</div>


<script>


function deletes(id){
    console.log(id)

   axios.delete('/category_delete/'+id  )
   .then( data => window.location.reload() )

}

</script>
@endsection
