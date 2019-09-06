

<?php

$name = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["userName"]);

}



function test_input($data) {

  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;

}

?>

<?php

echo $name;

?>

<!-- Get : 브라우저 주소창에 입력하여 요청 - URL을 통해 데이터를 전송 -->
<!-- Post : 주소창에 데이터를 표시하지않고 정보를 전송데이터 내에 숨겨서 전송한다. -->