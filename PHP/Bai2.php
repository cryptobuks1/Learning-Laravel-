<?php 
/* Định nghĩa class Rectangle
* Các thuộc tính của class: width(chiều rộng), height(chiều cao).
* Các phương thức của lớp:
* - setSize()
* - getArea()
* - getPerimeter()
* - isSquare()
*/
class Rectangle {
    // Khai báo các thuộc tính
    public $width = 0;
    public $height = 0;

    // Phương thức này thiết lập các kích thước của hình chữ nhật
    function setSize($w = 0, $h = 0) {
        $this->width = $w;
        $this->height = $h;
    }

    // Phương thức này tính diện tích hình chữ nhật
    function getArea() {
        return ($this->width * $this->height);
    }

    // Phương thức này tính chu vi hình chữ nhật
    function getPerimeter() {
        return ( ($this->width + $this->height) * 2 );
    }

    // Phương thức này kiểm tra xem hình chữ nhật này có phải là hình vuông
    function isSquare() {
        if ($this->width == $this->height) {
            return true; // Hình chữ nhật
        } else {
            return false; // Không phải hình chữ nhật
        }
    }
} // End of Rectangle class.

$obj = new Rectangle();

$obj->setSize(5,5);

$obj->getArea();