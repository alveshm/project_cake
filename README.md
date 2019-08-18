# Projeto cakePHP

Setar o host, username e password do banco de dados, no seguinte caminho:

<pre>project_cake\config\app.php</pre>

<pre>
'Datasources' => [
        'default' => [
            'className' => Connection::class,
            'driver' => Mysql::class,
            'persistent' => false,
            'host' => HOSTNAME,
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => USER_NAME,
            'password' => PASSWORD,
            'database' => 'project_cake',
</pre>

Entrar na pasta do projeto e rodar o comando abaixo para criar a base de dados:

<pre>
bin/cake.bat migrations migrate
</pre>
