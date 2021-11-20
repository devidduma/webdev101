<?php
//just as an idea that you can use 2 different catch()

class ServerException extends Exception {}
class DatabaseException extends Exception {}

try {

}
catch(ServerException $ex) {

}
catch(DatabaseException $ex) {

}

?>