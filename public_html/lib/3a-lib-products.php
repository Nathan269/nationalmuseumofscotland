<?php
class Products extends DB {
  function get () {
  // get () : get all products

    return $this->fetch(
      "SELECT * FROM `exhibitions`", null, 
      "product_id"
    );
  }

  function add ($name, $img, $desc, $price) {
  // add () : add new product

    return $this->exec(
      "INSERT INTO `exhibitions` (`e_name`, `e_image`, `e_briefdescription`, `e_price`) VALUES (?, ?, ?, ?)",
      [$name, $img, $desc, $price]
    );
  }

  function edit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product

    return $this->exec(
      "UPDATE `exhibitions` SET `e_name`=?, `e_image`=?, `e_briefdescription`=?, `e_price`=? WHERE `product_id`=?",
      [$name, $img, $desc, $price, $id]
    );
  }

  function del ($id) {
  // del () : delete product

    return $this->exec(
      "DELETE FROM `exhibitions` WHERE `product_id`=?",
      [$id]
    );
  }
}
?>