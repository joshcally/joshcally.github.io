<?php
$db = new PDO("mysql:host=localhost;dbname=Island_Cars", "root", "200337226");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                
                 $query = "SELECT * FROM Cars";
                 $statement = $db->prepare($query);
                 $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
echo'
<div class="container marketing">
<div>
<form method="post" action="Confirmation.php">
<div>
      <label>Name: </label>
      <input type="text" class="form-control input-sm" name="name">
</div>
      <div>
      <label>Contact Phone Number: </label>
      <input type="text" class="form-control input-sm" name="contactPhone">
      </div>
      <div>
      <label>Contact Email: </label>
      <input type="text" class="form-control input-sm" name="contactEmail">
      </div>
<div>
<label>Date Range for Car Rental: </label>
<input type="text" name="datefilter" value="" class="form-control input-sm" />
 
<script type="text/javascript">
$(function() {
  $(\'input[name="datefilter"]\').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: \'Clear\'
      }
  });
  $(\'input[name="datefilter"]\').on(\'apply.daterangepicker\', function(ev, picker) {
      $(this).val(picker.startDate.format(\'MM-DD-YYYY\') + \' - \' + picker.endDate.format(\'MM-DD-YYYY\'));
        console.log(picker.startDate.format(\'YYYY-MM-DD\'));
  		console.log(picker.endDate.format(\'YYYY-MM-DD\'));
  });
  $(\'input[name="datefilter"]\').on(\'cancel.daterangepicker\', function(ev, picker) {
      $(this).val(\'\');
  });
});
</script>
</div>
</div>
<br>
<label>Car Type: </label>
<select name="carType" class="form-control">
';
foreach($result as $row)
{
	echo ' <option value="' . $row['Car_Type_ID'] . '">' . $row['Make']. ' ' . $row['Model'] . ', Rate: $' . $row['Rate'] . ' a day</option>';
}
echo ' 
</select>
<br>
<div>
<input type="submit" class="btn btn-primary btn-sm" value="Continue">
</div>
</form>
</div>
';
?>