<?
require_once __DIR__ . '/../config/main.php';
function getConnect() {
    $dbConf = include_once CONFIG_DIR . 'db.php';
    static $conn = null;
    if(is_null($conn)) {
        $conn = mysqli_connect(
        $dbConf["host"],
        $dbConf["user_name"],
        $dbConf["user_password"],
        $dbConf["db_name"]
    ); 
}
    return $conn;
}
function execute(string $sql) {
    return mysqli_query(getConnect(), $sql);
}

function queryAll($sql) {
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function queryOne($sql) {
    return queryAll($sql)[0];
}

function closeConnection() {
    return mysqli_close(getConnection());
}