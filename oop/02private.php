<?php 
	# private ซ่อน proprety ให้เรียกใช้ได้แค่ในแต่ class เพื่อ ความปลอดภัยข้อมูลภายใน class
	
	class FistClass{
		public $name="xxx";
		public $surname="xxx";

		private $age="xxx";

		public function sayhi(){
			// echo "Hi"." ".$this->name." ".$this->surname." ".$this->age;
			echo "Hi"." ".$this->name." ".$this->surname." age = ".$this->setAge();
		}
	
		# private มันจะทำงานใน class ของมัน ข้างนอกไม่สามารถ access เข้ามาได้
		# private มีคุณสมบัติ ตรงที่ สามารถที่จะอ่านหรือเรียกใช้งานใน class อย่างเดียว ถ้าเกิดมี class อื่น
		# ที่ extend หรือ inheritance (สืบทอดไปคุณสมบัติ) ไปก็ไม่สามารถใช้งานได้
		# ถ้าจะเอา private ไปใช้งานกับอีก class นึ่งก็ต้องใช้ ability ชื่อว่า Protected
		private function setAge(){
			// echo "Age";
			return $this->age="30";
		}
	}
	
	$obj = new FistClass;
	# $obj->setAge(); # ข้างนอกเข้าถึงไม่ได้
	# $obj->age="30" // error
	$obj->sayhi();

 ?>