@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Category</div>

                <div class="card-body">
            

                <form id="form" >
  <div class="form-group">
    <label for="title"> Title </label>
    <input type="text"  class="form-control" value = "{{ $category->title }}"  id="title" >
  </div>
  <div class="form-group">
    <label for="desciption">Description</label>
    <input type="text" class="form-control" value = "{{ $category->description }}" id="description">
  </div>
  
  <button type="button" onClick="update()" id="sub" class="btn btn-primary"> Update </button>
</form>

                </div>
            </div>
        </div>
    </div>

    <script>

const update = () =>{
    
    console.log(document.getElementById("title").value)

    let obj = {
        title : document.getElementById("title").value ,
        description : document.getElementById("description").value 
    }

   axios.put('/category/update/'+{{$category->id}} , obj )
   .then( data =>{  console.log(data)
       window.location.href = '/category'  

} )

}

</script>
</div>
@endsection
