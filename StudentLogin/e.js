var db = openDatabase("itemDB","1.0","itemDB",65535);
$(function() {
    $("#sub").click(function(){
        var eroll = $("#eroll").val();
        var erank = $("#rank").val();
        var branch = $("#branch").val();
        var stdName = $("#stdName").val();
        var expName = $("#expName").val();
        var dob = $("#dob").val();
        var cast = $("#cast").val();
        var addr = $("#addr").val();
        var mob = $("#mob").val();
        var email = $("#email").val();
        db.transaction(function(transaction){
            var sql = "INSERT INTO cec2023(eroll,erank,branch,stdName,expName,dob,cast,relCast,stdAddress,stdMob,email) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        transaction.executeSql(sql,[eroll,erank,branch,stdName,expName,dob,cast,addr,mob,email])
        })
    });
})


