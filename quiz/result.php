<?php
require_once __DIR__ . '/../autoload/autoload.php';
$questions = $db->fetchsql("SELECT * FROM answer_question join questions on answer_question.id_question = questions.id
                            join answers on answer_question.id_answer = answers.id where status = '1' ");

$data = array();
foreach ($questions as $key => $question) {
    $data[$question["id_question"]] = $question["id_answer"];
}


echo "---------ĐÁP ÁN HỆ THỐNG----------------";

echo "<pre>";
print_r($data);
echo "</pre>";

echo "---------ĐÁP ÁN USER SUBMIT----------------";

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "---------KẾT QUẢ BẠN ĐÚNG---------";
$result = array_diff($_POST, $data);
if ((int) $result == 0) {
    # code...
    echo "<h1>";
    echo "bạn đúng " . count($questions) . '/' . count($questions);
    $total_wrong =  count($questions);
    echo "</h1>";
} else {
    $total_wrong = count($questions) - count($result);
    echo "<h1>";
    echo "Bạn Làm đúng " . $total_wrong . "/" . count($questions);
    echo "</h1>";
}

if (isset($_POST)) {
    $data =
        [
            "user_id" => $_SESSION['admin_id'],
            "point" =>  $total_wrong . "/" . count($questions),
            "status" => "1",
        ];
    $isset = $db->fetchOne("result", "user_id = '" . $_SESSION['admin_id'] . "' ");
    if ($isset == null) {
        $id_insert = $db->insert("result", $data);
    } else {
        header('Location:http://localhost:30/blog-main/quiz/');
    }
}
// echo "<pre>";
// print_r($result);
// echo "</pre>";

?>

<h1>abc</h1>