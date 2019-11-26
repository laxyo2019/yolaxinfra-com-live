@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 10px;
  }
  .navbar{
    margin-bottom: 50px;
  }
</style>
@include('partials.admin.sidebar')

<main class="app-content">
<div class="container">
  <div class="app-title">
        <div>
          <h1><i class="fa fa-location"></i>Job Post</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Job Post  </a></li>
        </ul>
      </div>

<div class="row">
  <div class="col-md-12"  >
    <button class="btn btn-info" type="submit" id="bulk_delete_post">Delete</button>
    <a href="{{route('admin.jobs.create')}}" class="btn btn-primary" style="float: right">Add New Post</a>
  </div>
  </div>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif
  <table class="table table-bordered table-responsive bg-light text-center" id="posttable" style="caption-side: top">
    <thead class="bg-dark" style="color: White;text-align: center;width: 100%;">
        <tr>
          <td style="width: 5%"> <input type="checkbox" id="selectall_post" name="selectall_post"></td>
          <td style="width: 10%">Job Title</td>
          <td style="width: 10%">Location</td>
          <td style="width: 20%" colspan="2">Experience</td>
          <td style="width: 5%">Resume Necessary</td>
          <td style="width: 20%" colspan="2">Salary Range</td>
          <td style="width: 5%">Candidate Count</td>
          <td style="width: 10%">Action</td>
        </tr>
        <tr>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%">Min Exp</td>
          <td style="width: 10%">Max Exp</td>
          <td style="width: 5%"></td>
          <td style="width: 10%">From</td>
          <td style="width: 10%">To</td>
          <td style="width: 5%"></td>
          <td></td> 
        </tr>
    </thead>
    <tbody>
           @foreach($post as $posts)
            <tr>
             <td><input type="checkbox" class="sub_chk_post" data-id="{{$posts->id}}"></td>
             <td>{{$posts->job_title}}</td>
             <td>{{$posts->job_location}}</td>
             <td>{{$posts->min_exp}}</td>
             <td>{{$posts->max_exp}}</td>
             <td>{{$posts->resume_req == 1 ? 'Yes' : 'No'}}</td>
             <td>{{$posts->sal_min}}</td>
             <td>{{$posts->sal_max}}</td>
             <td>{{$posts->no_of_pos}}</td>
             <td class='d-flex' style="border-bottom:none">
              <span>
              <button type="button" class="btn btn-primary btn-sm"><a href="{{route('replies', ['id' => $posts->id])}}"><i class="fa fa-comment text-white" aria-hidden="true"></i></a></button>
            </span>
            <span>
               <button type="button" class="btn btn-success btn-sm ml-1"><a href="{{route('admin.jobs.edit', ['id' => $posts->id])}}" class="text-primary"><span class="fa fa-edit text-white"></span></a></button>
               </span>
               <span>
                <a href="#" class="btn btn-sm btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
          document.getElementById('delete-form-{{ $posts->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

          <form id="delete-form-{{ $posts->id }}" action="{{ route('admin.jobs.destroy', $posts->id ) }}" method="POST" style="display: none;">
              @csrf
              @method('delete')
          </form>

              </span>
               
             </td>
            </tr>
         @endforeach
    </tbody>
  </table>
</div>
</div>
  </main>
<script>

  $(document).ready(function() {
    $('#posttable').DataTable();

   $('#selectall_post').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk_post").prop('checked', true);  
         } else {  
            $(".sub_chk_post").prop('checked',false);  
         }  
        });


   $('#bulk_delete_post').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk_post:checked").each(function() {  

                allVals.push($(this).attr('data-id'));

            });  


            if(allVals.length <=0)  

            {  

                alert("Please select row.");  

            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  

                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({

                        url: '/DeleteAll_post',

                        type: 'GET',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {
                           
                           $('#posttable').html(data);
                            $(".sub_chk_post").prop('checked',false);
                       },

                        error: function (data) {

                            alert(data.responseText);
                            
                        }

                    });
                  $.each(allVals, function( index, value ) {

                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });
   });
</script>
@endsection