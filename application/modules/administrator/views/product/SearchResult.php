<div id = 'center'>

<?php 
    $this->load->helper('form');
    echo form_fieldset("Search Product");
?>
<h3>Search Product result </h3>


<div id = 'modlistbran'>
    <form action = '' method = 'post'>
        <label>Product per page: </label>
        <input class = 'txt' type = 'text' name = 'per_page' value = <?php echo isset($per) ? $per : "" ?>>
        <span>Show all</span><input type = 'checkbox' name = 'show_all' value = 'show'>
        <br/>
        <input type = 'submit' name = 'btnok' value = 'Submit'>
    </form>
</div>
<a  href='<?php echo base_url("administrator/product/searchproduct");?>'>
            <button style = "style=background-color:green;float:right;">Search Product</button></a>


<div id = 'listproduct'>
  <?php  echo "Trang: ";
            echo isset($link) ? $link : "";  ?>

<table border='1' cellpadding='0' cellspacing='0'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Price Sale</th>
    <th>Image</th>
    <th>Description</th>
    <th>Infomation</th>
    <th>Status</th>
    <th>Brand</th>
    <th>Country</th>
    <th>Edit</th>
    <th>Delete</th>

    </tr>
    <?php
    if( ! isset($SearchResult) || empty($SearchResult)){
       echo "<br/><span class = 'error'>Không tìm thấy sản phẩm phù hợp với từ khoá tìm kiếm!</span>";
    } else {
        foreach($SearchResult as $list){
            echo "<tr>";
            echo "<td>".$list['pro_id']."</td>";
            echo "<td>".$list['pro_name']."</td>";
            echo "<td>".$list['pro_price']."</td>";
            echo "<td>".$list['pro_price_sale']."</td>";
            echo "<td>". "<img width= 100 height = 150 src='" . base_url("/public/images/") . "/" . $list['pro_images']."'></td>";
            echo "<td>".$list['pro_desc']."</td>";
            echo "<td>".$list['pro_info']."</td>";
            echo "<td>".$list['pro_status']."</td>";
            echo "<td>".$list['bran_id']."</td>";
            echo "<td>".$list['country_id']."</td>";
            echo "<td><a href = '" . base_url("/administrator/product/update/") . "/" . $list['pro_id'] . "'>Edit</a></td>";
            echo "<td><a href = '" . base_url("/administrator/product/delete/") . "/" . $list['pro_id'] . "'>Delete</a></td>";
            echo "</tr>";
        } // end foreach
    } // end if
    ?>
</table>
<?php  echo form_fieldset_close(); ?>
</div> <!-- div = center -->