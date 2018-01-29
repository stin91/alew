
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$dbc=new PDO('mysql:host=localhost;dbname=iot','root','marika')

$stmt = $dbc->prepare("SELECT Username,Password FROM utente WHERE
Username= :usa && Password= :pas");
$stmt->bindParam(':usa', $us, PDO::PARAM_STR, 12);
$stmt->bindParam(':pas', $pas, PDO::PARAM_STR, 12);
 $result=$stmt->execute();
$outp = "";
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["CompanyName"] . '",';
    $outp .= '"City":"'   . $rs["City"]        . '",';
    $outp .= '"Country":"'. $rs["Country"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
