
   var poll = true;
    var getData = function() {
            $.get('/TUT/GETDATETIME.php', function(data) { 
var d = new Date(data);
var dd = new Date(data);
var ddd = new Date(data);

d.setSeconds(d.getSeconds() -3);
var dateTime_REALTIME =  + d.getFullYear() + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" +
    ("0"+(+d.getDate())).slice(-2)  + " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":" + ("0" + d.getSeconds()).slice(-2);

dd.setSeconds(dd.getSeconds());
var dateTime_DELETE_DB = + dd.getFullYear() + "-" + ("0"+(dd.getMonth()+1)).slice(-2) + "-" +
    ("0"+(+dd.getDate())).slice(-2) + " " + ("0" + dd.getHours()).slice(-2) + ":" + ("0" + dd.getMinutes()).slice(-2) + ":" + ("0" + dd.getSeconds()).slice(-2);

ddd.setSeconds(ddd.getSeconds());
var dateTime_INSERT_DB = + ddd.getFullYear() + "-" + ("0"+(ddd.getMonth()+1)).slice(-2) + "-" +
    ("0"+(+ddd.getDate())).slice(-2) + " " + ("0" + ddd.getHours()).slice(-2) + ":" + ("0" + ddd.getMinutes()).slice(-2) + ":" + ("0" + ddd.getSeconds()).slice(-2);

d.setSeconds(d.getSeconds() +3);
var dateTime_REALTIME_END =  + d.getFullYear() + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" +
    ("0"+(+d.getDate())).slice(-2)  + " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":" + ("0" + d.getSeconds()).slice(-2);



localStorage.dateTime_REALTIME=dateTime_REALTIME;
localStorage.dateTime_DELETE_DB=dateTime_DELETE_DB;
localStorage.dateTime_INSERT_DB=dateTime_INSERT_DB;
localStorage.dateTime_REALTIME_END = dateTime_REALTIME_END;
// console.log(dateTime_REALTIME);

             });
    };





    $(document).ready(function() {
        setInterval(getData, 100);
    });
