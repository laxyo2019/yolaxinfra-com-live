<thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
  <tr style="">
    <th width="10%"><input type="checkbox" id="selectall_contact" name="selectall_contact"></th>
    <th>name</th>
    <th>Email</th>
    <th>Company</th>
    <th>Address</th>
    <th>Mobile</th>
    <th>Message</th>
    <th>Time</th>
    <th>Action</th>
  </tr>
</thead>
  @foreach($data as $con)
      <tbody>
        <tr>
          <td><input type="checkbox" class="sub_chk_contact" data-id="<?php echo $con->id; ?>"></td>
          <td><?php echo $con->name ?></td>
          <td><?php echo $con->email ?></td>
          <td><?php echo $con->company_name ?></td>
          <td><?php echo $con->address ?></td>
          <td><?php echo $con->mobile ?></td>
          <td><?php echo $con->message ?></td>
          <td><?php echo $con->created_at ?></td>
          <td>
            <a href="#" class="text-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
          document.getElementById('delete-form-{{ $con->id }}').submit();}"><span class="fa fa-trash fa-lg"></span></a>
          <form id="delete-form-{{ $con->id }}" action="{{ route('contactdel', ['id' => $con->id ]) }}" method="POST" style="display: none;">
              @csrf
              @method('delete')
          </form>
        </td>
       </tr>
       </tbody>
       @endforeach