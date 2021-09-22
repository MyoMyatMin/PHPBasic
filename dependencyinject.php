<?php
interface log{
    public function write($log);
}
class TextLogger implements log
{
    public function write($log)
    {
        echo $log;
    }
}
class DatabaseLogger implements log{
    public function write($log){
        echo $log;
    }
}
class App{
    private $logger;
    public function __construct(Log $logger)
    {
        $this->logger=$logger;
    }
    public function run()
    {
        $this->logger->write("App is runnnig");
    }
}
$app=new App(new TextLogger);
$app->run();