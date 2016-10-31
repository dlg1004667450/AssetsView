# Assets View

------

Assets View 资产发现、网络拓扑管理系统采用PHP+MYSQL开发，资产扫描部分采用C语言基于<em>SNMP.</em>协议以及nmap实现网络资产拓扑发现, 可对网络设备资产进行扫描、发现、管理，并对设备开发端口、服务、漏洞信息(后续会添加漏洞扫描功能)进行管理,采用Echarts对资产进行可视化展示，并对网络拓扑进行可视化展示、操作！

> * Codeigniter、nmap
> * PHP、Mysql、C
> * Bootstrap+jquery+Echart

![Assets View Dashboard](http://i2.buimg.com/567571/1717675c686a44d7.png)


### 关于作者

* Cryin'   https://cryin.github.io/
* Hardy    https://hardyguo.github.io/

------
### Project Site
Home Page:https://github.com/Cryin/AssetsView

------
## 使用帮助

Assets View资产发现、网络拓扑管理系统共包含两个功能模块，如下:

- [x] 资产管理、网络拓扑可视化展示、操作.
- [x] 设备资产、网络拓扑发现.
- [ ] 资产搜索
- [ ] 手动增加资产

![Network Topology](http://i2.buimg.com/567571/b8f507c11084fa72.png)

用户可先在Assets View资产发现、网络拓扑管理系统中使用Assets Scan模块创建任务,程序会调用后端C模块采用SNMP及nmap进行资产扫描、网络拓扑发现。并将数据存入mysql数据库。前端程序会对数据进行同步并展示到页面中。用户可以可以通过资产和服务管理功能对资产进行编辑、删除等管理操作

![Assets](http://i2.buimg.com/567571/7060e26ec61326f6.png)

------

目前php端展示与C后端资产发现模块在同步开发当中，并未合并到一起。后续计划持续开发中....

> * 网络拓扑展示优化、可视化操作管理.
> * PHP调用C端网络拓扑发现接口.
> * 资产搜索功能.
> * 手动添加资产.
> * 漏洞扫描模块.


作者:Cryin' & Hardy
2016 年 09月 20日    
