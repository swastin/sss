<form class="form-inline" role="form" method="post" action="">
<input type="hidden" name="id" id="id1" value="">
   <!-- <div class="form-group">
   
     <input type="hidden" name="id" value="" id="id1">
   </div>   -->
   <div class="form-group">
      <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="emailid">
   </div>
   <div class="form-group">
      <label for="email">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
 </div>
   <button type="submit" class="btn btn-success">Add</button>
</form>
<hr>
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Created</th>
<th>Action</th>
</tr>
<?php foreach ($data as $d): ?><tr>
<td><?= $d->id ?></td>
<td><?= $d->emailid ?></td>
<td><?= $d->address ?></td>
<td><?= $d->created ?></td>
<td>
<a class="btn btn-warning"  onClick="editUser(<?= $d['id'];?>);" id="edit">Edit
</a>


<a class="btn btn-danger" href="<?= BASE_URL?>Ajaxdemo/deleteajaxdemo/<?= $d['id']	?>		onClick="return confirm(' Are you sure ')" role="button">Delete</a>
</td>
</tr>
 <?php endforeach; ?>
 </table>