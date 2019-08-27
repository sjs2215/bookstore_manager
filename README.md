#### 서버 실행 방법

</br>

> 참고: <https://thereclub.tistory.com/50?category=749181>

~~~
cd C:\Apache24\htdocs
httpd
~~~

</br>

#### 웹 서버 설정 항목 

httpd.conf file includes 

- DocumentRoot
- ServerName
- ServerRoot
- ErrorLog

and many more...

> 참고: <https://blog.habonyphp.com/entry/%EC%95%84%ED%8C%8C%EC%B9%98-%EC%84%9C%EB%B2%84-httpdconf>

~~~
C:\Apache24\htdocs\httpd.conf  파일 확인하기
~~~

</br>

#### ServerName

- localhost:80

<html><body><h1>It works!</h1></body></html>

index.html 파일 뜸

- localhost:80/hw_main.html (파일명.확장자) 

</br>

#### 에러 주의

- php socket error

작업 관리자 들어가서 80 포트 kill 해주기 

- mysqli_connect(servername)  -> access denied error

서버 이름은 root인지 localhost인지 127.0.0.1:3307인지 명확하게 하기 

