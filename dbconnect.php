<<<<<<< HEAD
<?php

class dbconnect

    {
        /** @var  PDO */
        private $handler;

        public function setHandler()
        {
            $this->handler;
            return $this->handler;
        }

        public function connectdb()
        {

            // Create a PDO Object
            try
            {
                $this->handler = new PDO('mysql:host=localhost;dbname=Birthday', 'root', 'mysql');
                $this->handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo "Connected to DB ..."."\n";
                return true;
            }

           // catch exception if unable to connect to DB
            catch(PDOException $e)
            {
                echo $e->getMessage()."\n";
                die();
            }

    }


}


=======
<?php

class dbconnect

    {
        /** @var  PDO */
        private $handler;

        public function setHandler()
        {
            $this->handler;
            return $this->handler;
        }

        public function connectdb()
        {

            // Create a PDO Object
            try
            {
                $this->handler = new PDO('mysql:host=localhost;dbname=Birthday', 'root', 'mysql');
                $this->handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo "Connected to DB ..."."\n";
                return true;
            }

           // catch exception if unable to connect to DB
            catch(PDOException $e)
            {
                echo $e->getMessage()."\n";
                die();
            }

    }


}


>>>>>>> 20e7a5bad43e3bcd54b0e869dde24008f1058199
?>