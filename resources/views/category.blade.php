@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>

                
                <div class="card-body">
                  List
                  <br  />
                  <div id="video" > 
                  
                  <table  class="table">
                    <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>  Action  </th>
                    </tr>

                    @foreach ($category as $category)
                    <tr>
                    <td>{{$category->id}}</td>

                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                    
                        <td>  <a href="updateCategory/{{$category->id}}" >  <button class="btn  btn-primary"> update  </button>      </a>
                         <button onclick='deletes({{$category->id}})' class="btn  btn-danger"> Delete  </button>                      </td>
                       
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
