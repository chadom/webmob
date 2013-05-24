var my_data=new Object();

my_data.Set=function(cle,val){
	if(typeof(localStorage)!=="undefined"){
		localStorage.setItem(cle, val);
	}else
	{
		alert ("Votre navigateur ne supporte pas le webstorage")
	}
}
my_data.Get=function(cle){
	if(typeof(localStorage)!=="undefined"){
		return(localStorage.getItem(cle));
	}else
	{
		alert ("Votre navigateur ne supporte pas le webstorage")
	}
}
my_data.Clear=function(){
	if(typeof(localStorage)!=="undefined"){
		return(localStorage.clear());
	}else
	{
		alert ("Votre navigateur ne supporte pas le webstorage")
	}
}
my_data.Reset=function(cle){
	if(typeof(localStorage)!=="undefined"){
		localStorage.removeItem(cle);
	}else
	{
		alert ("Votre navigateur ne supporte pas le webstorage")
	}
}

var my_gps = new Object();

my_gps.init=function(){
	if (navigator.geolocation)
	  {
	  navigator.geolocation.getCurrentPosition(my_gps._set, my_gps._onError);
	  }
	else{alert("Geolocation is not supported by this browser.");}
	}
}

my_gps._set=function(position){
	my_data.Set("positionGPS",position);
}

my_gps.get=function(){
	return(my_data.Get("positionGPS");
}

my_gps.update=function(){
	my_gps.init();
}

my_gps._onError=function(error){
	switch(error.code) 
    {
    case error.PERMISSION_DENIED:
    	alert("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
    	alert("Location information is unavailable.");
      break;
    case error.TIMEOUT:
    	alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
    	alert("An unknown error occurred.");
      break;
    }
  
}
