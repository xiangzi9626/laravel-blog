var url=window.location.href;
  url1=url.substr(0,24);
url2=url.substr(0,25);
url3=url.substr(0,20);
url4=url.substr(0,21);
  if (url1!=="http://www.123.com/admin"
      && url2!=="https://www.123.com/admin"
      && url3!=="http://123.com/admin"
      && url4!=="https://123.com/admin" ){
      window.location="/";
  }
/*if (window===top) {
    var url=window.location.href;
     top.location.href = location.href;
    if (!/^http:[/]{2}www.123.com[/]admin/.test(url) || !/^https:[/]{2}www.123.com[/]admin/.test(url)){
        window.location.href="/";
    }else if (!/^http:[/]{2}123.com[/]admin/.test(url) || !/^https:[/]{2}123.com[/]admin/.test(url)){
        window.location.href="/";
    }
}else{
    var p_url=window.parent.location.href;
    if (!/^http:[/]{2}www.123.com[/]admin/.test(p_url) || !/^http:[/]{2}www.123.com[/]admin/.test(p_url)){
        window.location.href="/";
        window.parent.location.href="/";
    }else if (!/^http:[/]{2}123.com[/]admin/.test(p_url) || !/^http:[/]{2}123.com[/]admin/.test(p_url)){
        window.location.href="/";
        window.parent.location.href="/";
    }
}*/
