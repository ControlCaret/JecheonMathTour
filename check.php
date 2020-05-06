<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>제천 Math Tour</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="card">
            <header class="bluehost">제천 Math Tour</header>
            <br>
            <p style="margin: 0; font-size: 2em;">
                <?php
                    $question = $_POST['question'];
                    $answer = $_POST['answer'];

                    //1번 문제 의림지 저수량
                    if ($question == "1") {
                        if ($answer == "90ha") {
                            echo "정답입니다!!";
                        }
                        elseif ($question == "90") {
                            echo "<script>alert(\"ha 단위를 적어주세요!\");</script>";
                        }
                        else {
                            echo "<script>alert(\"틀렸습니다!\");</script>";
                            echo "<script>history.back();</script>";
                        }   
                    }

                    //2번 문제 영호정
                    elseif ($question == "2") {
                        if ($answer == "3.96평") {
                            echo "정답입니다!!";
                        }
                        elseif ($answer == "3.96") {
                            echo "<script>alert(\"평 단위를 적어주세요!(띄어쓰기 필요 없음)\");</script>";
                        }
                        else {
                            echo "<script>alert(\"틀렸습니다!\");</script>";
                            echo "<script>history.back();</script>";
                        }
                    }
                    
                    //3번 문제 경호루
                    elseif ($question == "3") {
                        if ($answer == "true") {
                            echo "예쁜 꽃이 활짝 피었네요!!^^";
                        }
                    }

                    //4번 문재 의림지
                    elseif ($question == "4") {
                        if ($answer) {
                            echo "정답입니다!!";
                        }
                        else {
                            echo "<script>alert(\"정확한 값을 입력해 주세요!\");</script>";
                            echo "<script>history.back();</script>";
                        }
                    }

                    //5번 문제 소나무
                    elseif ($question == "5") {
                        if ($answer) {
                            echo "정답입니다!!";
                        }
                        else {
                            echo "<script>alert(\"정확한 값을 입력해 주세요!\");</script>";
                            echo "<script>history.back();</script>";
                        }
                    }

                    //6번 문제 약초 향기 주머니
                    elseif ($question == "6") {
                        if ($answer == "20") {
                            echo "정답입니다!!";
                        }
                        else {
                            echo "<script>alert(\"틀렸습니다!\");</script>";
                            echo "<script>history.back();</script>";
                        }
                    }

                    //오류 페이지
                    else {
                        echo "<script>alert(\"잘못된 접근입니다! 새로고침 후 다시 시도해주세요!\");</script>";
                        echo "<script>history.back();</script>";
                    }

                    //window.location.href = '';

                ?>
            </p>
            <br>
            <input type="button" class="bluehost button" value="" oneclick="close();">
            <?php // 보안상의 이유로 작동이 안되는 현재 창 닫기 버튼 ?>
            <br>
        </div>
    </body>
</html>



