result in console


<form >
   <input type="button" value="Create Random String" onClick="myCountChar ('raflylesmana','a');">&nbsp;
   <p name="p"></p>
   </form>
<script>

function myCountChar (nama,huruf) {
   var namaa =nama.split("",nama.length);
   var jml = 0 ;
   for(var i = 0 ; i<nama.length;i++){
      if (huruf == namaa[i]) {
         jml += 1 ;
      }
   }
   alert(jml);
}

</script>

