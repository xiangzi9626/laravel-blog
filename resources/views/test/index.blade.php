  <html>
  <head>
 <meta charset="UTF-8">
      <script src="/layuimini-2/lib/jquery-3.4.1/jquery-3.4.1.min.js"></script>
      <script src="/layuimini-2/lib/layui-v2.5.5/layui.js"></script>
      <script>
          window.onload=function (){
              var btn=document.getElementById("btn");
              btn.onclick=function (){
                  var domain=document.domain;
                  domain="http://"+domain+"/test?_token={{csrf_token()}}"
               $.ajax({
                   type:"POST",
                   url:domain,
                   success:function (res){
                       alert(res);
                   }
               })
              }
          }
      </script>
</head>
<body>
    <button id="btn">按扭</button>
</body>
</html>
