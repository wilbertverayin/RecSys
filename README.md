RecSys
======

A Recommender System implemented in PHP, using BCC/Myrrix and Myrrix Serving Layer

to run Myrrix Serving Layer: 
go to myrrix directory
the input.csv file was from the bgn data
java -jar myrrix-serving-1.0.1.jar --localInputDir "path\to\myrrix\" --port 8888
then access localhost:8888 to see myrrix serving layer ui


the index.php contains the sample usage of the php client, you can only test
the sample once the serving layer says it is ready
try accessing \recsys\vendor\bcc\myrrix\src\BCC\Myrrix\MyrrixService.php for more services
