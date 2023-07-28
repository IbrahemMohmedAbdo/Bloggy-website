<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add New Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action={{route('students.store')}} id="addForm" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control " placeholder="Input Firstname" >

                </div>
                <div class="mb-3">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control "  placeholder="Input Lastname" >

                </div>
                <div class="mb-3">
                    <label for="firstname">Email</label>
                    <input type="email" name="email" class="form-control "   placeholder="Input Email">

                </div>
                <div class="mb-3">
                    <label for="lastname">Password</label>
                    <input type="password" name="password" class="form-control "  placeholder="Input Your Password" >
                </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  type="submit" class="btn btn-primary ">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="edit{{$student->id ?? ''}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action={{route('students.update',$student->id ?? '')}}  id="editForm" method="POST">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control"value={{$student->firstname ?? ''}} >
                </div>
                <div class="mb-3">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value={{$student->lastname ?? ''}}>
                </div>
        </div>
        <div class="mb-3">
            <label for="firstname">Email</label>
            <input type="email" name="email" class="form-control "   placeholder="Input Email" value={{$student->email ?? ''}}>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete{{$student->id ?? ''}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Delete Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action={{route('students.destroy',$student->id ?? '')}} method="POST" >
          @csrf
                @method('delete')
      <div class="modal-body">
            <h4 class="text-center">Are you sure you want to delete Member?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="deletemember" class="btn btn-danger">Delete</button>
             </form>
      </div>
    </div>
  </div>
</div>
