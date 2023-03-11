<?php
<form action="filter.php" method="get">
  <label for="status-filter">Filter by status:</label>
  <select name="status" id="status-filter">
    <option value="all">All</option>
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
  </select>
  <button type="submit">Filter</button>
</form>
$status = $_GET['status'];
if ($status == 'active') {
  $filteredData = // code to filter active data
} else if ($status == 'inactive') {
  $filteredData = 
} else {
  $filteredData = // code to show all data
}
?>
