<?php
echo"maths-api, develop by Surya V S.";
if (isset($_GET['num1'])&&isset($_GET['op'])&&isset($_GET['num2'])) {
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];
$o = $_GET['op'];
if ($o==1) {
$sop1 = $n1+$n2;
echo "Ans is $sop1.";
}
else if ($o==2) {
$sop2 = $n1-$n2;
echo "Ans is $sop2.";
}
else if ($o==3) {
$sop3 = $n1*$n2;
echo "Ans is $sop3.";
}
else if ($o==4) {
$sop4 = $n1/$n2;
echo "Ans is $sop4.";
}
else {
echo "Enter op between 1 for + 2 for - 3 for / and 4 for *.";
}
}
else if (isset($_GET['numForTable'])) {
$nft = $_GET['numForTable'];
for ($i=1; $i<=10; $i++) {
$ans = $i*$nft;
echo "table:";
echo"$ans.";
}
}
else {
echo"num1 op num2 or numForTable parameter is required";
}
echo"©copy  claims by surya v s.";
?>