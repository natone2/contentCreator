<?php


function setArticle($art) {
    if(isset($_POST['postSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $sql = "INSERT INTO article (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $art->query($sql);
    }
}


function escribirDocumento($carpeta,$archivo, $texto){
    $direccionDocumento = $_SERVER["DOCUMENT_ROOT"]."/$carpeta/$archivo";
    if(!is_dir($_SERVER["DOCUMENT_ROOT"]. "/" . $carpeta)) mkdir($_SERVER["DOCUMENT_ROOT"]. "/" .$carpeta, 0777,true);
    file_put_contents($direccionDocumento, $texto);
    return 1;
    echo "El artículo ha sido creado correctamente";
}

function getArticles($art) {
    $sql = "SELECT * FROM article";
    $result = $art->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<br><br><div class='comment-box'><h2>";
        echo $row['uid']. "<br>";
        echo $row['date']. "<br><br></h2><p>";
        echo nl2br($row['message']);
        echo "</p>

        <form class='edit-form' method='POST' action='editcommnent.php>
        <input type='hidden' name='cid' value='".$row['cid']."'>
        <input type='hidden' name='uid' value='".$row['uid']."'>
        <input type='hidden' name='date' value='".$row['date']."'>
        <input type='hidden' name='message' value='".$row['message']."'>
        <button>Editar</button>
        </form>
        <form class='edit-form' method='POST' action='createArticle.php>
        <input type='hidden' name='cid' value='".$row['cid']."'>
        <input type='hidden' name='uid' value='".$row['uid']."'>
        <input type='hidden' name='date' value='".$row['date']."'>
        <input type='hidden' name='message' value='".$row['message']."'>
        <button>Publicar</button>
        </form>
        </div>"

        ;
    }
}


