<?php 
	class FistClass{

		# proprety
		public $name="xxx";
		public $surname="xxx";

		# method
		# this คือการ ชี้ไปยัง proprety หรือ method นั้นๆ
		public function sayhi(){
			
			# ตัวแปรของ method ไม่ใช้ proprety ของ class ไม่สามารถใช้ this อ้าอิงถึงได้
			# this จะไม่ออกจะไปมองตัวนอกสุดใน scope ของ class แทน
			# สวนมากใช้ในการ คำนวณ ภายใน function โดยไม่ต้องการให้ไป ยุ่งเกี่ยวกับข้างนอกใดๆ 
			
			$name="xxx";
			$surname ="xxxx"; 

			echo "Hi"." ".$this->name." ".$this->surname." ".$this->saybye();
		}
		# สร้าง method ที่ไม่แนะนำ 
		# ถ้าจะสร้าง methods ให้บอก ability การเข้าถึงของมันด้วย ว่าเป็น public / private
		function saybye(){
			// echo "GoodBey";
			return "<br/>GoodBye";
		}
	}

	# call
	$obj = new FistClass;
	# -> (ref)
	# กำหนดค่าใหม่ให้ proprety
	$obj->name="pakawat";
	$obj->surname="klomyang";
	$obj->sayhi();
	// $obj->saybye(); #GoodBey

?>