@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Videos</div>

                
                <div class="card-body">
                  List
                  <br  />
                  <div id="video" > 
                  
                  <table  class="table">
                    <tr>
                        <th>title</th>
                        <th>description</th>
                        <th>videotype</th>
                        <th>duration</th>
                        <th>size</th>
                        <th>path</th>
                        <th>  Action  </th>
                    </tr>

                    @foreach ($video as $video)
                    <tr>
                        <td>{{$video->title}}</td>
                        <td>{{$video->description}}</td>
                        <td>{{$video->video_type}}</td>
                        <td>{{$video->duration}}</td>
                        <td>{{$video->size}}</td>
                        <td>{{$video->video_path}}</td>
                        <td>   <button onclick='approve({{$video->id}})' class="btn  btn-primary"> approve  </button>                      </td>
                       
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

function approve(id){
    console.log(id)

   axios.post('/videosapprove/'+id  )
   .then( data => window.location.reload() )

}

</script>
@endsection
