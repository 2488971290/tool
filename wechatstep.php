<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>微信刷步数 - 颜致恒工具网</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/materialdesignicons.min.css" rel="stylesheet">
<link href="css/style.min.css" rel="stylesheet">
<script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
</head>
  
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
    <aside class="lyear-layout-sidebar">      
      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="index.html"><img src="images/logo-sidebar.png" title="LightYear" alt="LightYear" /></a>
      </div>
      <div class="lyear-layout-sidebar-scroll"> 
        
        <nav class="sidebar-main">
          <ul class="nav nav-drawer">
            <li class="nav-item"> <a href="index.html"><i class="mdi mdi-home"></i> 后台首页</a> </li>
            <li class="nav-item active"> <a href="wechatstep.html"><i class="mdi mdi-self"></i> 微信刷步数</a> </li>
          </ul>
      </div>  
      
    </aside>
    <!--End 左侧导航-->
    
    <!--头部信息-->
    <header class="lyear-layout-header">
      
      <nav class="navbar navbar-default">
        <div class="topbar">
          
          <div class="topbar-left">
            <div class="lyear-aside-toggler">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div>
            <span class="navbar-page-title"> 微信刷步数 </span>
          </div>
          
          
        </div>
      </nav>
      
    </header>
    <!--End 头部信息-->
    
    <!--页面主要内容-->
    <main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        
        <!--说明卡片-->
        <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-header bg-primary">
                <h4>使用说明</h4>
                <ul class="card-actions">
                  <li>
                    <button type="button"><i class="mdi mdi-more"></i></button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                使用方法
              </div>
            </div>
        </div>      
          
        <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h4>微信刷步数</h4></div>
              <div class="card-body">
                <?php
                $user= $_GET['user'];
                $password= $_GET['password'];
                $step =$_GET['step'];
                $url="https://apis.jxcxin.cn/api/mi?user=".$user."&password=".$password."&step=".$step;
                $res = file_get_contents($url);
                if($res=="成功"){
                echo "成功";
                }else{
                echo "失败";
                }
                ?>
                <form id="myForm" >
                  <div class="form-group">
                    <label for="example-nf-email">zeep life账号</label>
                    <input class="form-control" type="text" id="user" name="user" placeholder="请输入zeep life账号.">
                  </div>
                  <div class="form-group">
                    <label for="example-nf-password">zeep life密码</label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="请输入zeep life密码.">
                  </div>
                  <div class="form-group">
                    <label for="example-nf-password">需要的步数</label>
                    <input class="form-control"  id="step" name="step" placeholder="请输入你要刷的步数.">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary edit-btn" target-form="add-form" type="submit" onclick="sub()">提交修改</button>
                  </div>
                </form>
                
              </div>
            </div>
          
      </div>
      
    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>