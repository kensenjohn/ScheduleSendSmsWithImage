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

Backend Command Line Script<br>
app/Command/Console/SendSms.php<br>


Image Upload location<br>
public/uploads<br>

Include cacert.pem to php.ini<br>
 For Twilio to work you need to include cacert.pem so that php has access to it. I have included a copy in Github.<br>
   Download cacert.pem to your local machine. Then include the path in php.ini. (the parameter already exists. Uncomment it, and include correct path)<br>
      

        curl.cainfo = C:\Bitnami\wampstack-5.5.29-1\frameworks\laravel\cacert.pem





Query to create table<br>
CREATE TABLE `instagram`.`SMS_SCHEDULER` ( `SCHEDULER_ID` INT  NOT NULL AUTO_INCREMENT , `SCHEDULE_TIME` TIMESTAMP NOT NULL , `IMAGE_NAME` VARCHAR(1024)  NOT NULL , `PHONE_NUMBER` VARCHAR(15) NOT NULL , `SENT` TINYINT(1) NOT NULL DEFAULT '0', PRIMARY KEY (SCHEDULER_ID) ) ENGINE = MyISAM;<br>
