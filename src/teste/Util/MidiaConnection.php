namespace    teste\Util;
class   MidiaConnection {

    public static $connection;
    public  static function getConnection(){
//verifica se a connexão é nula , se não ela conecta no banco de dados
        if (MidiaConnection::$connection == null){
            MidiaConnection::$connection = 
            new \mysqli("localhost","root","1q2w3e","midia");
        }

        return MidiaConnection::$connection;
    }
}