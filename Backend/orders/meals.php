<?php 
require_once("../include/initialize.php"); 
?>
<table id="dash-table2"  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0" >
           <thead>
            <tr>   
              <th>Meals</th>  
              <th width="100">Kategori</th>  
              <th width="80">Harga</th> 
              <th width="20">Action</th> 
            </tr> 
          </thead>  

        <tbody>
            <?php 
              $meal = $_POST['MEAL'];
              $query = "SELECT * FROM `tblmeals` m , `tblcategory` c
                     WHERE  m.`CATEGORYID` = c.`CATEGORYID` AND MEALS LIKE '%" . $meal . "%'";
              $mydb->setQuery($query);
              $cur = $mydb->loadResultList();

            foreach ($cur as $result) { 
              echo '<tr>';   
              echo '<td>'.$result->MEALS.'</a></td>';
              
              echo '<td>'. $result->CATEGORY.'</td>'; 
              echo '<td> Rp. '.  number_format($result->PRICE).'</td>';   
              echo '<td align="center">
                   <a  title="Add to Cart" class="btn btn-primary btn-xs addcartadmin" data-id="'.$result->MEALID.'">  <span class="fa fa-shopping-cart fw-fa"></a> </a></td>'; 
              echo '<tr/>';
            } 
            ?>
          </tbody> 
        </table> 