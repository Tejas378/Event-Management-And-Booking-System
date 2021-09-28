
Drop table booking;
Drop table cancel_booking;
Drop table payment;
Drop table users;
Drop table admin;
Drop table events;
Drop table eventhall;
Drop table caterors;
Drop table soundsystem;
Drop table decorators;
Drop table designers;
Drop table music_event;
Drop table theme_party;
Drop table concert;
Drop table workshop;
Drop table category;



CREATE TABLE category (  cid SERIAL PRIMARY KEY ,   ctype_id  int  ); 

INSERT INTO category ( ctype_id ) VALUES ('5');

CREATE TABLE workshop (
  eventid SERIAL PRIMARY KEY ,
  Title varchar(255) NOT NULL,
  Description varchar(255) NOT NULL,
  StartDate date NOT NULL,
  EndDate date NOT NULL,
  shift_name VARCHAR ,
  stime TIME ,
  etime TIME,
  Cost float ,
  Location char(50)
   ) ;

INSERT INTO workshop (Title , Description ,  StartDate , EndDate , shift_name , stime , etime , Cost , Location) VALUES
('Rakesh Auto Workshop', 'Learning is something to be enjoyed, not endured. By getting hands-on from the start, Workshop lets you skip the lectures and do more of what you love.', '10-Oct-2015', '10-Oct-2016', 'Morning' , '10:00:00', '8:00:00' ,  25000, 'Pune');

CREATE TABLE concert (
  eventid SERIAL PRIMARY KEY ,
  Title varchar(255) NOT NULL,
  Description varchar(255) NOT NULL,
  StartDate date NOT NULL,
  EndDate date NOT NULL,
  shift_name VARCHAR ,
  stime TIME ,
  etime TIME,
  Cost float ,
  Location char(50)
   ) ;

INSERT INTO concert (Title , Description ,  StartDate , EndDate , shift_name , stime , etime , Cost , Location) VALUES
('Conference', 'Conference By dr.Vivek Bindra', '10-Oct-2015', '10-Oct-2016', 'Afternoon' , '1:00:00', '3:00:00' ,  25000, 'Pune');

CREATE TABLE theme_party (
  eventid SERIAL PRIMARY KEY ,
  Title varchar(255) NOT NULL,
  Description varchar(255) NOT NULL,
  StartDate date NOT NULL,
  EndDate date NOT NULL,
  shift_name VARCHAR ,
  stime TIME ,
  etime TIME,
  Cost float ,
    Location char(50)
   ) ;


INSERT INTO theme_party (Title , Description ,  StartDate , EndDate , shift_name , stime , etime , Cost , Location) VALUES
('Night At sapphire', 'rom Animal & Jungle to Unicorns and More, Explore Our Huge Range of Kids Party Themes. Party Shop Online Party Supplies Party Decorations -- Theme My Party. Multiple Payment Options. Subscribe To Newsletter. Free Shipping Availa', '10-Oct-2015', '10-Oct-2016', 'Afternoon' , '1:00:00', '3:00:00' , 2500  , 'Pune');

CREATE TABLE music_event (
  eventid SERIAL PRIMARY KEY ,
  Title varchar(255) NOT NULL,
  Description varchar(255) NOT NULL,
  StartDate date NOT NULL,
  EndDate date NOT NULL,
  shift_name VARCHAR ,
  stime TIME ,
  etime TIME,
  Cost float ,
      Location char(50)
   ) ;


INSERT INTO music_event (Title , Description ,  StartDate , EndDate , shift_name , stime , etime , Cost , Location) VALUES
('Musicial Quarentine2021', ' Featuring live in concerts,comedy show and 50+Stalls fashion,food,commericial stalls so Be ready for the event. ', '10-Oct-2015', '10-Oct-2016',  'Afternoon' , '1:00:00', '3:00:00' , 2500 , 'Kolkata');


CREATE TABLE designers (
  eventid SERIAL PRIMARY KEY ,
  dtitle varchar(255) NOT NULL,
  ddescription text NOT NULL,
  dstatus varchar(255) NOT NULL,
  dcost varchar(11) NOT NULL
   ) ;
   
   
INSERT INTO designers (dtitle , ddescription , dstatus ,  dcost) VALUES
('The Stylease - Designer Clothes on Rent | Exclusive Designs | Mumbai', 'We, at The Stylease, have always been firm believers of fashion for all. But somewhere in the midst of bringing luxury designers to every girl next door, we forget that there are those in the world who don’t even have the luxury of comfortable clothing.' , 'Available' , 35000);



CREATE TABLE decorators (
  eventid SERIAL PRIMARY KEY ,
  dtitle varchar(255) NOT NULL,
  ddescription text NOT NULL,
  dstatus varchar(255) NOT NULL,
  dcost varchar(100) NOT NULL
   ) ;
   
   
INSERT INTO decorators (dtitle , ddescription , dstatus ,  dcost) VALUES
('Isha Balloons And Decoration in Chinchwad, Pune', 'Isha Balloons And Decoration in Chinchwad, Pune is a top player in the category Event Organisers in the Pune. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Pune. Over the course of its journey, this business has established a firm foothold in it’s industry. ' , 'Unavailable' , 'Depends on service u want');


CREATE TABLE soundsystem (
  eventid SERIAL PRIMARY KEY ,
  stitle varchar(255) NOT NULL,
  sdescription text NOT NULL,
  sstatus varchar(255) NOT NULL,
  scost varchar(11) NOT NULL
   ) ;
   
   
   INSERT INTO soundsystem (stitle , sdescription , sstatus ,  scost) VALUES
('Kunal Sound Systems ', 'Established in the year 2010, Chetan Sound in Pimple Gurav This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Pune.' , 'Available' , 35000);



CREATE TABLE caterors (
  eventid SERIAL PRIMARY KEY ,
  ctitle varchar(255) NOT NULL,
  cdescription text NOT NULL,
  cmenu  text NOT NULL,
  cstatus varchar(255) NOT NULL,
  ccost varchar(255) NOT NULL,
  ccapacity varchar(255) NOT NULL
   ) ;
   
   INSERT INTO caterors (ctitle , cdescription , cmenu , cstatus , ccost , ccapacity) VALUES
('Akshay catering services', 'Akshay Caterers Services in Hadapsar  offer catering services' , 
	'u will get everything','Available', 35000 ,200);
   
  



CREATE TABLE eventhall (
  eventid SERIAL PRIMARY KEY ,
  htitle varchar(255) NOT NULL,
  hdescription text NOT NULL,
  hstatus varchar(255) NOT NULL,
  hcost varchar(11) NOT NULL,
  hcapacity int NOT NULL
   ) ;
   
   
INSERT INTO eventhall (htitle , hdescription , hstatus ,  hcost , hcapacity) VALUES
('Tejas Hall', 'Tejas Event hall provides Halls for All Events ', 'Available', 35000 ,200);
   
  
CREATE TABLE events (
  eventid SERIAL PRIMARY KEY ,
  Title varchar(255) NOT NULL,
  Description varchar(255) NOT NULL,
  StartDate date NOT NULL,
  EndDate date NOT NULL,
  Cost varchar(11) NOT NULL,
  LocationID varchar(255) NOT NULL 
   ) ;


INSERT INTO events (Title, Description ,  StartDate , EndDate, Cost, LocationID) VALUES
('Conference', 'Conference By dr.Vivek Bindra', '10-Oct-2015', '10-Oct-2016', 25000, 44);

CREATE TABLE  admin (
  ausername varchar(255) NOT NULL,
  aname varchar(255) NOT NULL ,
  apassword varchar(255) NOT NULL,
  acno numeric(10) NOT NULL ,
  aemail varchar(50) NOT NULL );
  
INSERT INTO admin (ausername , aname , apassword , acno , aemail ) VALUES ('TEJ172000 ', 'Tejas pawar' , '1234567890','1234567890','tej1234@gmail.com');



CREATE TABLE  users (
  userid SERIAL PRIMARY KEY,
  uusername varchar(255) NOT NULL,
  uname varchar(255) NOT NULL ,
  upassword varchar(255) NOT NULL ,
  ucno numeric(10) NOT NULL ,
  uemail varchar(50) NOT NULL );

INSERT INTO users (uusername , uname , upassword , ucno , uemail ) VALUES ('datta1234', 'Datta Survase' , '1234567890','1234567890','dat1234@gmail.com');
INSERT INTO users (uusername , uname , upassword , ucno , uemail ) VALUES ('sandip1234', 'Sandip Sahani' , '1234567890','1234567890','san1234@gmail.com');




 
  CREATE TABLE payment (
    pid SERIAL PRIMARY KEY ,
    eventid int REFERENCES events (eventid) ,
    userid int REFERENCES users (userid) ,
    status varchar(30) NOT NULL
); 

INSERT INTO payment (eventid , userid , status  ) VALUES ('1 ', '1' , 'pending');


																
CREATE TABLE cancel_booking (
    cid int REFERENCES events (eventid) ,
    eventid int REFERENCES events (eventid) ,
    userid int REFERENCES users (userid) ,
    status varchar(30) NOT NULL
); 

INSERT INTO cancel_booking (cid,eventid , userid , status  ) VALUES (null , '1', '1' , 'pending');																
																																
  
  CREATE TABLE booking (
    bid  SERIAL PRIMARY KEY ,
    tab_name varchar(50) NOT NULL ,
    cid numeric(12)  ,
    eventid numeric(12) ,
    userid int REFERENCES users (userid) ,
    booker_name varchar(50) NOT NULL ,
    booker_cno numeric(12) NOT NULL ,
    booker_mail varchar(50) NOT NULL ,
    booker_adress text ,
    booker_state varchar(50) NOT NULL  ,
    booker_zip int 
     ); 


INSERT INTO booking ( tab_name , cid , eventid  , userid , booker_name , booker_cno , booker_mail , booker_adress , booker_state , booker_zip   ) VALUES ('admin','1','1','1 ', 'Sandip Sahani' , '1234567890','san1234@gmail.com','Pune , Near Fc Road ' , 'Maharashtra','411001');



