<?php


?>

<script>
<script>
02
var jsonURL = "https://www.tistory.com/apis/category/list?access_token=8df7d60133971ee45bad7d173e422133_d170823622d4c111fe425a3b3c7cdef0&targetUrl=corcordium&output=json
";


$(document).ready(function(){
   // $.getJSON(jsonURL, parseXML);
   alert("aaaa");
});
     
function parseXML(data)
{
    var keyword = [];           //키워드명
    var rankVary = [];      //순위의 증감 여부(+:증가, -:감소, .:변동없음, new:새로운순위)
    var varyVal = [];               //변동값, 0인 경우 새로운 순위를 의미
     
    var result = [];
     
    $.each(data, function(key, val) {
        for(var i=1; i<=10; i++){
        var temp = [];     
        temp.push(eval("data.query.results.result.item.R" + i + ".K"));
        temp.push(eval("data.query.results.result.item.R" + i + ".S"));
        temp.push(eval("data.query.results.result.item.R" + i + ".V"));
        result.push(temp);
    }
    console.log(result);
    return;
});
}
</script>


</script>