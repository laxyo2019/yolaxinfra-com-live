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
        
         @foreach($data as $datas) 
         
          <tr>
            <td><input type="checkbox" class="sub_chk" data-id="<?php $datas->id ?>"></td>
            <td><?php echo $datas->job_title ?></td>
            <td><?php echo $datas->job_location ?></td>
            <td><?php echo $datas->min_exp ?></td>
            <td><?php echo $datas->max_exp ?></td>
            <td><?php echo $datas->resume_req != null ? 'Yes' : 'No'?></td>
            <td><?php echo $datas->sal_min ?></td>
            <td><?php echo $datas->sal_max ?></td>
            <td><?php echo $datas->no_of_pos ?></td>
           <td class='d-flex' style="border-bottom:none">
              <span>
              <button type="button" class="btn btn-primary btn-sm"><a href="{{route('replies', ['id' => $datas->id])}}"><i class="fa fa-comment text-white" aria-hidden="true"></i></a></button>
            </span>
            <span>
               <button type="button" class="btn btn-success btn-sm ml-1"><a href="{{route('admin.jobs.edit', ['id' => $datas->id])}}" class="text-primary"><span class="fa fa-edit text-white"></span></a></button>
               </span>
               <span>
                <a href="#" class="btn btn-sm btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
          document.getElementById('delete-form-{{ $datas->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>

          <form id="delete-form-{{ $datas->id }}" action="{{ route('admin.jobs.destroy', $datas->id ) }}" method="POST" style="display: none;">
              @csrf
              @method('delete')
          </form>

              </span>
               
             </td>
          </tr>
          @endforeach
        </tbody>