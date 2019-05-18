result in console


<form >
   
   <input type="button" value="Create Random String" onClick="randomString(32);">&nbsp;
   <p name="p"></p>
   </form>
<script>

function randomString(jumlah) {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length =32;
	var randomstring = '';
   var random = [];

   for (var a=0; a<jumlah; a++) {
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
   
   random.push(randomstring)
    randomstring ='';
   }
  

	console.log(random);
}

</script>

