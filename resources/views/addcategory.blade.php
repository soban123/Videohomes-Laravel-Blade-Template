@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Category</div>

                <div class="card-body">
            

                <form id="form" >
  <div class="form-group">
    <label for="title"> Title </label>
    <input type="text" class="form-control" id="title" >
  </div>
  <div class="form-group">
    <label for="desciption">Description</label>
    <input type="text" class="form-control" id="description">
  </div>
  
  <button type="button" onClick="add()" id="sub" class="btn btn-primary">ADD</button>
</form>

                </div>
            </div>
        </div>
    </div>

    <script>

const add = () =>{
    
    console.log(document.getElementById("title").value)

    let obj = {
        title : document.getElementById("title").value ,
        description : document.getElementById("description").value 
    }

   axios.post('/category1/' , obj )
   .then( data =>{  window.location.href = '/category'} )

}

</script>
</div>
@endsection
