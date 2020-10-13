<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo Contact List</title>
    <style>
      #demo-main{
        background: rgb(34,42,235);
background: linear-gradient(0deg, rgba(34,42,235,1) 21%, rgba(17,101,232,1) 42%, rgba(86,170,247,1) 91%);
      }
        .blue-line{
    width: 6%;
    position: relative;
    margin: 10px;
    border-bottom: 1px solid  #2bb6ed;
}
/*#demo-main tbody{
  color: white;
}*/
#demo-main thead{
  background: orange;
}
#demo-main td img{
  border-radius: 50%;
}
table.dataTable tbody tr{
      background-color: #56a9f7 !important;
}
  </style>
  </head>
  <body>
    <br/>
    <h2 class="text-center text-uppercase text-primary">CONT<span class="text-success">ACTS</span></h2>
    <center>
      <div class="title-icon d-flex justify-content-center"><hr class="blue-line"/><img src="images/notelist.png" height="40px;"/><hr class="blue-line"/>
      </div>
    </center>
    <br/>
    <!-- Contactlist demo Table  -->
    <div class="container" id="demo-main">
    <table class="table" id="contacts-data">
      <thead class="thead">
        <tr>
          <th scope="col">#</th>
          <!-- <th scope="col">Avatar</th> -->
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Country</th>

        </tr>
      </thead>
      <tbody>

        <?php
        $query = "SELECT * from `requests`;";
        $result = mysqli_query($dbConn,$query);
        if ($result->num_rows > 0) {
            while($rows = mysqli_fetch_array($result)) {
                echo '<tr>';
                    echo "<td>" . $rows['id']. "</td>";
                    echo "<td>" . $rows['username']. "</td>";
                    echo "<td>" . $rows['phone']. "</td>";
                    echo "<td>" . $rows['email']. "</td>";
                    echo "<td>" . $rows['address']. "</td>";
                    echo "<td>" . $rows['country']. "</td>";
                echo '</tr>';
              }
        }

        ?>
      </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    
  </div>
  </body>
  <script type="text/javascript">
  $( document ).ready(function() {
    $('#contacts-data').DataTable({
       dom: 'Bfrtip',
      buttons: [
        'copy', 'excel','csv','pdf'
    ]
    });

});
</script>
  </html>