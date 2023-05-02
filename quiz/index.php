<?php
require_once __DIR__ . '/../autoload/autoload.php';


$questions = $db->fetchsql("SELECT * FROM questions");
$answers = $db->fetchsql("SELECT * FROM answer_question join questions on answer_question.id_question = questions.id
                                                        join answers on answer_question.id_answer = answers.id");
$user_id = $_SESSION["admin_id"];
$check_result = $db->fetchsql("SELECT * FROM result WHERE user_id = $user_id ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Trắc Nghiệm 15p </h1>
    <?php if (count($check_result) == 0): ?>
        <form action="result.php" method="post" id="quiz">
            <ol>
                <?php foreach ($questions as $question) : ?>
                    <h3>Câu: <?php echo $question["id"] ?> <?php echo $question["title"] ?> </h3>
                    <input type="hidden" id="question" name="<?php echo $question["id"]  ?>" value=" <?php echo $question["id"]  ?>">
                    <?php foreach ($answers as $answer) : ?>
                        <?php if ($answer["id_question"] == $question['id']) : ?>
                            <li>
                                <div>
                                    <input type="radio" name="<?php echo $answer["id_question"]  ?>" value="<?php echo $answer["id_answer"]  ?>" required />
                                    <label for="question-1-answers-A"> <?php echo $answer["title"] ?> </label>
                                </div>

                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endforeach ?>
            </ol>
            <input type="submit" value="Submit Quiz" />
         </form>
    <?php else: ?>
        <h2>Bạn đã làm bài rồi!....</h2>

   <?php endif ?>



</body>

</html>