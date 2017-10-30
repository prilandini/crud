@extends('layouts.app')

@section('content')
<div class="container">
<h2>Post</h2>

<form action="/action_page.php">
  Title :<br>
  <input type="text" name="title">
  <br>
  Description:<br>
  <input type="text" name="description" >
  <br><br>
  <input type="submit" value="Submit">
</form>

<!-- <p>Post :</p>             -->
<table class="table table-striped">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Crud</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($post as $row): ?>
    <tr>
      <td><?php echo $row->title; ?></td>
      <td><?php echo $row->desc; ?></td>
      <td><a href="">Edit</a> | <a href="">Delete</a></td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>
</div>
@endsection