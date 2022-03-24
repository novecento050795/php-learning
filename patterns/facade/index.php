<?php

class Bank {
    public function OpenTransaction() {}
    public function CloseTransaction() {}
    public function transferMoney($amount) {}
}

class Client {
    public function OpenTransaction() {}
    public function CloseTransaction() {}
    public function transferMoney($amount) {}
}

class Log {
    public function logTransaction(String $message) {
        $date = (new DateTime())->format("'Y-m-d H:i:s'");
        echo "{$date}: {$message} \n";
    }
}

class Facade
{
    public function transfer($amount)
    {
        $bank = new Bank();
        $client = new Client();
        $log = new Log();
       
        $bank->OpenTransaction();
        $client->OpenTransaction();
        sleep(1);
        $log->logTransaction('Transaction open');
        
        $bank->transferMoney(-$amount);
        sleep(2);
        $log->logTransaction('Transfer money from bank');
        
        $client->transferMoney($amount);
        sleep(1);
        $log->logTransaction('Transfer money to client');
        
        $bank->CloseTransaction();
        $client->CloseTransaction();
        sleep(3);
        $log->logTransaction('Transaction close');
    }
}

// Client code
$Transfer = new Facade();
$Transfer->transfer(1000);
