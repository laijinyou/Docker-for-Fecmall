## 快速使用
1. `clone`项目：
    ```
    $ git clone https://github.com/laijinyou/Docker-for-Fecmall
    ```
2. 启动：
    ```
    $ docker-compose up
    ```
3. 启动完成后，在浏览器中访问：`http://localhost`测试环境是否成功。
4. 配置本地hosts：
    ```
    127.0.0.1       appfront.fecmall.test
    127.0.0.1       appadmin.fecmall.test
    127.0.0.1       img.fecmall.test
    127.0.0.1       apphtml5.fecmall.test
    127.0.0.1       appserver.fecmall.test
    127.0.0.1       appapi.fecmall.test
    ```
4. 进入PHP容器：
    ```
    $ docker-compose exec php  bash
    $ cd /www/fecmall                                       
    $ composer install
    $ ./init
    ```
5. 在浏览器中访问：`http://appfront.fecmall.test`就能看到效果。