配置PHP环境：
 
安装的任何路径不能有中文名
第一步安装IIS：
控制面板 程序 卸载程序  打开或关闭windows  internet信息服务  里面所有加号打开，所有勾选上
 

 

验证是否配置成功IIS7，查看：浏览器输入localhost，出现下面界面表示成功
 

查看：控制面板   系统和安全  管理工具  Internet信息服务（IIS）管理器

连接项目：控制面板、 系统和安全、  管理工具 、 Internet信息服务（IIS）管理器 打开、左边连接、箭头打开、
网站打开、Default Web Site、右击添加应用程序、写上别名（应用程序）：lyc   物理路径:1610(根目录)、网站打开http://localhost/lyc/ 这样就直接打开1610下的index.html文件，默认打开index文件
 
注意：6.0是旧版本，不要打开那个

 

停止：控制面板   系统和安全  管理工具  Internet信息服务（IIS）管理器  打开IIS最右边有停止，点击之后就可以停止了。不停止的话随时可以访问，开机，关机都可以

第二步：搭建PHP环境
安装PHPManagerForIIS-1.2.0-x64.msi，双击安装
安装vc_redist.x64_2015.exe,双击安装
解压php-7.0.13-nts-Win32-VC14-x64.zip安装包，一般解压到C盘，用一个文件接收解压的东西，所有文件不可以是中文的命名
三个软件 

步骤：
打开IIS  
PHPManager打开
 
点击Register new PHP version  
找到解压的PHP php-cgi 点击安装版本成功
测试安装是否成功，在根目录下添加一个文件，命名为.php 里面代码为：<?php phpinfo();  ?>，之后在浏览器测试添加http://localhost/lyc/index.php，出现边框表格版本表示成功，如下图：
 

自动显示错误：
如果没有显示错误：打开IIS,Default Web Site,PHP Manger,PHP Settings,Configure error reporting,第一个勾选，应用 Development machine,应用在最右边


后端语言与浏览器刷新没有关联

信息存入数据库
MariaDB

DB:Oracle/MSSQL/MySql

数据层：驱动：MySql ODBC MySqli

安装 mariadb-10.0.14-winx64
 
密码：root
utf-8打勾
其他都是next

打开 新建 命名：localhost(只是一个标识)，输进密码，点击旁边保存，之后打开
展开localhost,
点击localhost右键新建数据库，命名不能存在中文





