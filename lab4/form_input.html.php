<form action="form_output.html.php" method="post">
   <h1>Add product</h1>
   Product name: <input type="text" name="product_name" minlength="5" maxlength="20" placeholder="Product name must be 5-20 characters" size="40">
   <br><br>
   Product price: <input type="number" name="product_price" min="10" max="1000">
   <br><br>
   Product quantity: <input type="number" name="product_quantity" min="1" max="100">
   <br><br>
   Product image: <input type="url" name="product_image" required>
   <br><br>
   Product color:
   <!-- Emmet syntax: input:radio*4 -->
   <input type="radio" name="product_color" value="Red"> Red
   <input type="radio" name="product_color" value="Yellow"> Yellow
   <input type="radio" name="product_color" value="Black"> Black
   <input type="radio" name="product_color" value="Blue"> Blue
   <br><br>
   Product brand:
   <!-- Emmet syntax: select>option*5 -->
   <select name="product_brand" id="">
      <option value="Apple">Apple</option>
      <option value="Samsung">Samsung</option>
      <option value="Sony">Sony</option>
      <option value="Xiaomi">Xiaomi</option>
      <option value="Huawei">Huawei</option>
   </select>
   <br><br>
   <input type="submit" value="Add" name="add">
</form>