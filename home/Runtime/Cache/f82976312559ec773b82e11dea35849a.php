<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><title>Projects and Publications|Yuzhuo S</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Bootstrap --><link href="/MyThinkPhp/Public/css/bootstrap.min.css" rel="stylesheet" media="screen"><link href="/MyThinkPhp/Public/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --><script src="/MyThinkPhp/Public/js/jquery.js"></script><!-- Include all compiled plugins (below), or include individual files as needed --><script src="/MyThinkPhp/Public/js/bootstrap.min.js"></script></head><body style="background-image: url(/MyThinkPhp/Public/img/bg16.jpg) ;background-repeat:repeat-x; background-attachment:fixed"><!-- Fixed navbar --><div class="navbar navbar-default navbar-fixed-top"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><ul class="nav navbar-nav navbar-left"><li><a href="<?php echo U('Index/index');?>"><button type="button" class="btn btn-primary">Resume</button></a></li><li ><a href="<?php echo U('Pap/index');?>"><button type="button" class="btn btn-primary">Projects and Publications</button></a></li><li ><a href="<?php echo U('Aac/index');?>"><button type="button" class="btn btn-primary">Awards and Certificates</button></a></li><li ><a href="<?php echo U('Ci/index');?>"><button type="button" class="btn btn-primary">Contact Information</button></a></li></ul></div><div class="navbar-collapse collapse"><ul class="nav navbar-nav navbar-right"><li><a href="./">Yuzhuo Sun</a></li><li class="active"><a href="">login</a></li></ul></div><!--/.nav-collapse --></div></div><div class="container" style = "margin-top:20px"><!-- Main component for a primary marketing message or call to action --><div class="jumbotron"><div class="row"><div class="col-md-2"><img src="/MyThinkPhp/Public/img/shu.jpg" class="img-responsive" alt="Responsive image"></div><div class="col-md-5 "><h1>Yuzhuo Sun</h1><p><h2>&nbsp;&nbsp;&nbsp;&nbsp;Shanghai &nbsp;&nbsp;University</h2></p></div><div class="col-md-3 col-md-offset-2"><br/><br/><button style = "margin-bottom: -100px" type="button" class="btn btn-default btn-lg active">Projects and Publications</button></div></div></div></div><!-- /container --><div class="container" style = "margin-bottom: 60px" ><table class="table table-bordered" style = "opacity:0.6;filter:alpha(opacity=60);"><tr class = "active"><td><h4>Human-like Dexterous Hand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></td><td><pre><h4>Purpose:</h4><h5>Design a human-like dexterous hand to grasp things accurately. It was designed to optimize home service robots’ function.</h5><h4>Abstract:</h4><h5>Fingers on the robot hand were driven by three motors inside the palm. This dexterous hand was controlled by data gathered from the feedback of force sensors, coded disc, and etc. It can also controlled by the software we programmed on the computer. In this case, this dexterous can grasp objects accurately.</h5><div id="video" style="width:800px;height:500px;"><div id="a1"></div></div><!--
上面一行是播放器所在的容器名称，如果只调用flash播放器，可以只用<div id="a1"></div>
--><script type="text/javascript" src="/MyThinkPhp/Public/ckplayer/ckplayer.js" charset="utf-8"></script><script type="text/javascript">
    //如果你不需要某项设置，可以直接删除，注意var flashvars的最后一个值后面不能有逗号
    var flashvars={
        f:'/MyThinkPhp/Public/vedio/Video.m4v',//视频地址
        a:'',//调用时的参数，只有当s>0的时候有效
        s:'0',//调用方式，0=普通方法（f=视频地址），1=网址形式,2=xml形式，3=swf形式(s>0时f=网址，配合a来完成对地址的组装)
        c:'0',//是否读取文本配置,0不是，1是
        x:'',//调用xml风格路径，为空的话将使用ckplayer.js的配置
        i:'/MyThinkPhp/Public/img/hand.png',//初始图片地址
        //d:'http://www.ckplayer.com/down/pause6.1_1.swf|http://www.ckplayer.com/down/pause6.1_2.swf',//暂停时播放的广告，swf/图片,多个用竖线隔开，图片要加链接地址，没有的时候留空就行
        u:'',//暂停时如果是图片的话，加个链接地址
        //l:'http://www.ckplayer.com/down/adv6.1_1.swf|http://www.ckplayer.com/down/adv6.1_2.swf',//前置广告，swf/图片/视频，多个用竖线隔开，图片和视频要加链接地址
        r:'',//前置广告的链接地址，多个用竖线隔开，没有的留空
        t:'10|10',//视频开始前播放swf/图片时的时间，多个用竖线隔开
        y:'',//这里是使用网址形式调用广告地址时使用，前提是要设置l的值为空
        //z:'http://www.ckplayer.com/down/buffer.swf',//缓冲广告，只能放一个，swf格式
        e:'2',//视频结束后的动作，0是调用js函数，1是循环播放，2是暂停播放并且不调用广告，3是调用视频推荐列表的插件，4是清除视频流并调用js功能和1差不多，5是暂停播放并且调用暂停广告
        v:'80',//默认音量，0-100之间
        p:'1',//视频默认0是暂停，1是播放
        h:'0',//播放http视频流时采用何种拖动方法，=0不使用任意拖动，=1是使用按关键帧，=2是按时间点，=3是自动判断按什么(如果视频格式是.mp4就按关键帧，.flv就按关键时间)，=4也是自动判断(只要包含字符mp4就按mp4来，只要包含字符flv就按flv来)
        q:'',//视频流拖动时参考函数，默认是start
        m:'1',//默认是否采用点击播放按钮后再加载视频，0不是，1是,设置成1时不要有前置广告
        o:'',//当m=1时，可以设置视频的时间，单位，秒
        w:'',//当m=1时，可以设置视频的总字节数
        g:'',//视频直接g秒开始播放
        j:'',//视频提前j秒结束
        k:'',//提示点时间，如 30|60鼠标经过进度栏30秒，60秒会提示n指定的相应的文字
        n:'',//提示点文字，跟k配合使用，如 提示点1|提示点2
        wh:'',//这是6.2新增加的宽高比，可以自己定义视频的宽高或宽高比如：wh:'4:3',或wh:'1080:720'
        ct:'2',//6.2新增加的参数，主要针对有些视频拖动时时间出错的修正参数，默认是2，自动修正，1是强制修正，0是强制不修正
        //调用播放器的所有参数列表结束
        //以下为自定义的播放器参数用来在插件里引用的
        my_url:encodeURIComponent(window.location.href)//本页面地址
        //调用自定义播放器参数结束
    };
    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always'};//这里定义播放器的其它参数如背景色（跟flashvars中的b不同），是否支持全屏，是否支持交互
    var attributes={id:'ckplayer_a1',name:'ckplayer_a1',menu:'false'};
    //下面一行是调用播放器了，括号里的参数含义：（播放器文件，要显示在的div容器，宽，高，需要flash的版本，当用户没有该版本的提示，加载初始化参数，加载设置参数如背景，加载attributes参数，主要用来设置播放器的id）
    CKobject.embedSWF('/MyThinkPhp/Public/ckplayer/ckplayer.swf','a1','ckplayer_a1','800','500',flashvars,params);
    /*CKobject.embedSWF(播放器路径,容器id,播放器id/name,播放器宽,播放器高,flashvars的值,其它定义也可省略);
     此时可以删除ckplayer.js中的最后一行，交互的部分也要改成CKobject.getObjectById('ckplayer_a1')
     */
    //调用ckplayer的flash播放器结束
    /*
     下面三行是调用html5播放器用到的
     var video='视频地址和类型';
     var support='支持的平台或浏览器内核名称';
     */

</script></pre></td></tr ><tr class = "active"><td><h4>Magnetic Bearing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></td><td><pre><h4>Purpose:</h4><h5>Design a low-cost, reliable, simple-structure, free-friction bearing for industrial use.</h5><h4>Abstract:</h4><h5>This bearing was designed from the principle of the ampere magnetic force laws. The passive magnetic bearing (PMB) has already been used on 1000W wind driven generator.</h5><h4>Publication:</h4><h5>ZHANG gang, ZHANG Jian, SUN Yu-zhuo, ZHANG Hai-long, MENG Qing-tao, <a href = "<?php echo U('Papers/index');?>">"Study on Bearing Capacity Characteristics of an Axial Permanent Magnetic Bearing", Journal of Applied Sciences</a></h5><br/></pre></td></tr><tr class = "active"><td><h4>Intelligent infusion device &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></td><td><pre><h4>Purpose:</h4><h5>Due to the situation of nurse shortage in China. This kind of device is needed in hospital. It can significantly reduce the stress of nurses.</h5><h4>Abstract:</h4><h5>This device is controlled by microcontroller chip. When one bottle of medicament is completed, it can move to next one automatically by the signal from the sensors. When all medicaments are completed infusion, this device can send an alert to nurse to inform them.</h5><h4>Patent:</h4><h5>Qin Bingfeng, Sun Yuzhuo, Wang Chenglong, Shang Susu, Jiang Jiansheng, “Intelligent infusion device”, Patent NO. 201120326970</h5><br/><img src="/MyThinkPhp/Public/img/patent.png" class="img-responsive" alt="Responsive image"></pre></td></tr></table></div><div class="navbar navbar-default navbar-fixed-bottom"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div><div class="navbar-collapse collapse"><ul class="nav navbar-nav navbar-right"><li class="active"><a href="">Copyright © 2013 Yuzhuo Sun. All rights reserved.</a></li></ul></div><!--/.nav-collapse --></div></div></body></html>