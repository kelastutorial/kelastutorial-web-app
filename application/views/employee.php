<html>
<head>
<style>
#search {
 background-color: lightyellow;
 outline: medium none;
 padding: 8px;
 width: 300px;
 border-radius: 2px;
 -moz-border-radius: 3px;
 -webkit-border-radius: 3px;
 border-radius: 3px;
 border: 2px solid orange;
}

ul {
 width: 300px;
 margin: 0px;
 padding-left: 0px;
}

ul li {
 list-style: none;
 background-color: lightgray;
 margin: 1px;
 padding: 1px;
 -moz-border-radius: 3px;
 -webkit-border-radius: 3px;
 border-radius: 3px;
}
</style>

<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>
<script>
 $(document).ready(function(){
   $("#search").keyup(function(){
  if($("#search").val().length>3){
  $.ajax({
   type: "post",
   url: "http://localhost/technicalkeeda/index.php/employee",
   cache: false,    
   data:'search='+$("#search").val(),
   success: function(response){
    $('#finalResult').html("");
    var obj = JSON.parse(response);
    if(obj.length>0){
     try{
      var items=[];  
      $.each(obj, function(i,val){           
          items.push($('<li/>').text(val.FIRST_NAME + " " + val.LAST_NAME));
      }); 
      $('#finalResult').append.apply($('#finalResult'), items);
     }catch(e) {  
      alert('Exception while request..');
     }  
    }else{
     $('#finalResult').html($('<li/>').text("No Data Found"));  
    }  
    
   },
   error: function(){      
    alert('Error while request..');
   }
  });
  }
  return false;
   });
 });
</script>
</head>
<body>
<div id="container">
<p>Note:- Please start typing surname as "Chavan", "Patil"</p>
<input type="text" name="search" id="search" />
<ul id="finalResult"></ul>
</div>
</body>
</html>