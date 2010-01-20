(function(){
var $ = function(id){
return document.getElementById(id);
}
var d = document;
var f = $('f');
f.onsubmit = function(){
var button = $('s');
button.setAttribute('value','loading...');
var url = 'barcharts.php?format=json';
var fields = ['height','width',
'bargap','values'];
  for(var i=0;i<fields.length;i++){
        var value = $(fields[i]).value;
        url += '&'+fields[i]+'='+value;
  }
  var s = document.createElement('script');
  s.setAttribute('id','leach');
  s.setAttribute('type','text/javascript');
  s.setAttribute('src',url);
  var head = d.getElementsByTagName('head')[0];
  head.appendChild(s);
  return false;     
 }
})();
function csscharts(o) {
    var c = document.getElementById('output');
    var s = document.getElementById('leach');
    s.parentNode.removeChild(s);
    c.innerHTML = o.chart + c.innerHTML;
    var b = document.getElementById('s');
    b.setAttribute('value','show graph');
}