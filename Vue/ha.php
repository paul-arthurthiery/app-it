<?php 
//造连接对象
$db = new MySQLi("localhost","root","root","smartpanel");

//写SQL语句
$sql = "select ApptId from appartment  ";

//检测连接数据库是否成功，失败返回“连接失败”，并退出程序 
if(mysqli_connect_error()){
 die("连接失败"); 
}
//执行SQL语句,返回结果集对象
$result = $db->query($sql);
var_dump($result->num_rows);

//取数据（查询语句）
$arr = $result->fetch_all();//获取所有数据并以二维数组存在
//$arr = $result->fetch_all(MYSQLI_ASSOC);//获取所有数据中的关联数组
//$arr = $result->fetch_array();
echo $arr('result');
//while循环遍历数组所有数据
//while($arr = $result->fetch_array()){
// var_dump($arr);
//}

//$arr = $result->fetch_assoc();//返回关联数组
//$arr = $result->fetch_object();//列名对应成员变量
//$arr = $result->fetch_row();//返回索引数组
//var_dump($arr);
/* 
//增删改语句
//添加一条数据(返回值true或false)
$sql = "insert into student values('102','王某','男','1987-7-1','95033')";
//删除一条数据(返回值true或false)
$sql = "delete from student where Sname='李军'";
$r = $db->query($sql);
var_dump($r);
*/
?>
