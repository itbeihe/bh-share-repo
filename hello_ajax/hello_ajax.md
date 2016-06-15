# Hello  AJAX
2016.06.14 唐琪

---

* AJAX是什么
* 什么时候用AJAX
* AJAX如何使用
* 使用AJAX注意什么

---

## AJAX是什么

* Asynchronous JavaScript and XML
* AJAX是一种网页局部刷新的技术。
* AJAX不是新技术。

----

<h4 style="text-transform:none;">Asynchronous JavaScript and XML</h4>

* 运用XHTML+CSS来表达信息；
* 运用JavaScript操作DOM来运行动态效果；
* 运用XML,JSON等文本格式表达数据
* 运用XMLHttpRequest为Agent与网页服务器进行异步数据交换；

----

#### AJAX不是新技术。

* 最早最重要的 Ajax api是 XMLHttpRequest (XHR) API。
* 早在 2000 年，XHR 最先出现于 IE 5 中。是 Microsoft® Internet Explorer® 团队贡献给 Internet 的最好礼物。
* 2005年初,Google在gmail等应用中使用ajax。

---

##什么时候需要AJAX

* 摆脱刷新
* 数据延迟加载

---

## 举个例子


---

## ajax原理

<pre >
 var xmlHttp = null;  
//表示当前浏览器不是ie,如ns,firefox  
    if(window.XMLHttpRequest) {  
        xmlHttp = new XMLHttpRequest();  
    } else if (window.ActiveXObject) {  
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");  
    } 
xmlHttp.open("POST", url, false);
// 监听readystate，关于readystate参照https://developer.mozilla.org/zh-CN/docs/Web/API/XMLHttpRequest/readyState
xmlHttp.onreadystatechange = function () {
    if (xmlHttp.readyState == 4) {
        document.getElementById("user1").innerHTML = "数据正在加载...";
        // 当http状态返回200时候，http状态列表 http://www.daqianduan.com/4280.html
        if (xmlHttp.status == 200) {
            console.log(xmlHttp.responseText);
        }
    }
}
xmlHttp.send();
</pre>

---

## 后端原理

* php环境安装
* php返回一条数据

----

### PHP相关资料

wnmp环境：http://demo.itbeihe.com/download/Wnmp-2.2.4.exe
php教程：http://www.w3school.com.cn/php/

---

## ajax 其余例子 
* ajax 查询天气 http://tq.com/bh-share-repo/hello_ajax/demos/demo/
* jsonp 跨域 http://tq.com/bh-share-repo/hello_ajax/demos/cross_domain/







