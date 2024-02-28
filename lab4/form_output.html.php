<?php
//check whether user submits or not
//1st case: if form is already submitted => retrieve data and show table
if (isset($_POST['add'])) {
   $name = $_POST['product_name'];
   $price = $_POST['product_price'];
   $quantity = $_POST['product_quantity'];
   $image = $_POST['product_image'];
   $color = $_POST['product_color'];
   $brand = $_POST['product_brand'];
?>
   <h1>Product Detail</h1>
   <!-- Emmet syntax: table>(tr>th+td)*6 -->
   <table border=1>
      <tr>
         <th>Product name</th>
         <td><?= $name ?></td>
      </tr>
      <tr>
         <th>Product price</th>
         <td>$<?= $price ?></td>
      </tr>
      <tr>
         <th>Product quantity</th>
         <td><?= $quantity ?></td>
      </tr>
      <tr>
         <th>Product image</th>
         <td>
            <img src="<?= $image ?>" alt="image" width="100" height="120">
         </td>
      </tr>
      <tr>
         <th>Product color</th>
         <td><?= $color ?></td>
      </tr>
      <tr>
         <th>Product brand</th>
         <td><?= $brand ?></td>
      </tr>
   </table>
<?php
//2nd case: if form is not submit => show error
} else { ?>
   <h1>Error: Form is not submitted yet</h1>
   <h3>Click <a href="form_input.html.php">here </a> to input information first</h3>
<?php
}
?>