#Files that I am working on

( I am using Bitnami setup for laravel. I just started using the default code and making changes to it. Therefore there are lot of unecessary files.)

to access the first page. <br>
http://127.0.0.1/index.php<br>

Significant files<br>

View<br>
resources/views/welcome.blade.php<br>

Controllers<br>
app\Http\Controllers\ImageUploadController.php<br>
app\Http\Controllers\SchedulerController.php<br>


Image Upload location<br>
public/uploads<br>



Query to create table<br>
CREATE TABLE `instagram`.`SMS_SCHEDULER` ( `SCHEDULER_ID` INT  NOT NULL AUTO_INCREMENT , `SCHEDULE_TIME` TIMESTAMP NOT NULL , `IMAGE_NAME` VARCHAR(1024)  NOT NULL , `PHONE_NUMBER` VARCHAR(15) NOT NULL , `SENT` TINYINT(1) NOT NULL DEFAULT '0', PRIMARY KEY (SCHEDULER_ID) ) ENGINE = MyISAM;<br>
