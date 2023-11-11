
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="all.css">
<script type="text/javascript">
$(document).ready(function()
{
 // Activate tooltip
 $('[data-toggle="tooltip"]').tooltip();
 
 // Select/Deselect checkboxes
 var checkbox = $('table tbody input[type="checkbox"]');
 $("#selectAll").click(function()
 {
  if(this.checked){
   checkbox.each(function()
   {
    this.checked = true;                        
   });
  }
  else
  {
   checkbox.each(function()
   {
    this.checked = false;                        
   });
  } 
 });
 checkbox.click(function()
 {
  if(!this.checked)
  {
   $("#selectAll").prop("checked", false);
  }
 });
});
</script>
</head>
<body > 
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Manage <b>Employees</b></h2>
     </div>
     <div class="col-sm-6">
      <a href="add.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
      <!-- <a href="delete.php" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>       -->
     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
      <th>
     </th>
                        <th>Name</th>
                        <th>title</th>
                        <th>DATE</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
     <tr>
      <td>

      </td>
                        <td>Soeng Souy</td>
                        <td>soengsouy@mail.com</td>
      <td>Via Monte Bianco 34, Turin, Pursat</td>

                        <td>
                            <a href="edit.php" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="delete.php" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                            
                            <i class="fa-brands fa-instagram fa-bounce fa-2xs" style="color: #ff0000;">mars</i>

                        </td>
                    </tr> 
                </tbody>
            </table>

        </div>
    </div>
<!-- edit -->
 <!-- Edit Modal HTML
 <div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Add Employee</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Email</label>
       <input type="email" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Address</label>
       <textarea class="form-control" required></textarea>
      </div>
      <div class="form-group">
       <label>Phone</label>
       <input type="text" class="form-control" required>
      </div>     
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-success" value="Add">
     </div>
    </form>
   </div>
  </div>
 </div>
 Edit Modal HTML
 <!-- <div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Edit Employee</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Email</label>
       <input type="email" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Address</label>
       <textarea class="form-control" required></textarea>
      </div>
      <div class="form-group">
       <label>Phone</label>
       <input type="text" class="form-control" required>
      </div>     
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-info" value="Save">
     </div>
    </form>
   </div>
  </div>
 </div>
 <!-- Delete Modal HTML -->
 <!-- <div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Delete Employee</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <p>Are you sure you want to delete these Records?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-danger" value="Delete">
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>                                                                      -->
