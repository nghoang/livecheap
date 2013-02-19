<?php include 'header.php';?>
<?php
if (isset($_POST["smUpdateSettings"]))
{
	UpdateSettings("admin_email",$_POST["email"]);
}
?>
<div class="container">
  <h1>Administrator Panel</h1>
  <form method="post">
  <table class="table">
    <tbody>
      <tr>
        <td width="120">Admin Email</td>
        <td>
          <input type="email" class="input-medium" style="width: 300px;" name="email" maxlength="255" value="<?= GetSettings("admin_email")?>"> 
        </td>
      </tr>
    </tbody>
  </table>
  <input type="submit" name="smUpdateSettings" class="btn" value="Update Settings" /> 
  </form>
  
  
  <h1>Members</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Member Code</th>
        <th>Name</th>
        <th>Email</th>
        <th>ClickBank ID</th>
        <th>Register Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = mysql_query("SELECT * FROM affiliate ORDER BY created_date DESC LIMIT 100");
      while ($row = mysql_fetch_object($query))
      {
      	echo "<tr>
        <td><a href=\"http://livecheap360.com/test/banner.php?code={$row->code}\">{$row->code}</a></td>
        <td>{$row->name}</td>
        <td>{$row->email}</td>
        <td>{$row->cbid}</td>
        <td>{$row->created_date}</td>
      </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
<?php include 'footer.php';?>