<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  color: rgb(0, 0, 0);
}
h2{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}
</style>
</head>
<body>


<h2>Reports Projects</h2>
<table id="customers">
  <tr>
    <th>No.</th>
    <th>Project Name</th>
    <th>Project Price</th>
    <th>Has Been Paid</th>
    <th>Remaining Project Price</th>
    <th>Payment Status</th>
  </tr>
  <?php $i=1;  ?>
  @foreach ($projects as $project)
  <?php $id_p = $project->id; ?>
  <tr>
     <td>{{ $i }}</td>
     <td>{{ $project->name_project }}</td>
     <td>Rp.{{ number_format($project->price, '2',',','.') }}</td>
     <?php $total = 0;
     if (isset($payments_data[$id_p])) {
         foreach ($payments_data[$id_p] as $payment) {
             $total = $total + $payment;
         } 
         }?>
          <?php
          $remaining = $project->price - $total;
          if ($remaining < $project->price) {
              $remainder = $project->price - $total ;
              if($total > $project->price){
                  $remainder = null;
              }
          }else{
              $remainder = $project->price - $total;
          }

                                     
          ?>
     <td>Rp.{{ number_format($total, '2',',','.') }}</td>
     <td>Rp.{{ number_format($remainder, '2',',','.') }}</td>
     @if ($project->status_payments > 0)
         <td style="color: #04AA6D;">Paid Off</td>
     @else
         <td style="color: red;">Not Paid Off</td>
     @endif
  </tr>     
  <?php $i++ ?>
  @endforeach
</table>

</body>
</html>
