<?php
require_once 'static/function.php';
$commentfather=myFetchAll("select * from commentfather where articleid='228'");

if($_SERVER['REQUEST_METHOD']==='POST'){
    if (empty($_POST['nickName'])) {
       exit('请输入昵称');

    }
    if (empty($_POST['comment'])) {
        exit('请输入评论内容');
    }
    if (empty($_POST['fatherid'])) {
        $articleid1= addslashes($_POST['articleid']);
        $commentName = addslashes($_POST['nickName']);
        $fatherComment =addslashes( $_POST['comment']);
        $commentTime = addslashes(date('Y-m-d H:i:s', time()));
        myExecute("insert into commentfather values('{$articleid1}',null,'{$commentTime}','{$commentName}','{$fatherComment}');");
    } else {
        $articleid1 = addslashes($_POST['articleid']);
        $fatherid = addslashes($_POST['fatherid']);
        $commentName = addslashes($_POST['nickName']);
        $fatherComment =addslashes( $_POST['comment']);
        $commentTime = addslashes(date('Y-m-d H:i:s', time()));
        myExecute("insert into commentchild values('{$articleid1}',null,'{$commentTime}','{$commentName}','{$fatherComment}','{$fatherid}');");

    }

    header('location:comments.php');
}



?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
    <link rel="icon" href="/favicon.ico">
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/assets/css/main.css">
    <link rel="stylesheet" href="static/assets/css/footer.css">
    <link rel="stylesheet" href="static/assets/css/comments.css">
</head>
<body>
<?php include 'navBar.php'; ?>
<div class="page">
<main>

<div class="container">
    <div class="commentBox col-12" id="commentBox">
        <div class="col-lg-12    py-3">
            <h1>留言板</h1>
            <hr>
        </div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group" style="display: none">
                <label for="fatherid"></label>
                <input type="text" class="form-control" name="articleid" id="articleid" accept="multipart/form-data"
                       value="228">
            </div>
            <div class="form-group " style="display: none">
                <label for="fatherid"></label>
                <input type="text" class="form-control" id="fatherid" name="fatherid" autocomplete="off"
                       placeholder="father">
            </div>
            <div class="form-group ">
                <label for="nickName"></label>
                <input type="text" class="form-control" id="nickName" name="nickName" autocomplete="off"
                       placeholder="昵称" minlength="1" required >
            </div>
            <div class="form-group" style="display: none">
                <label for="comment"></label>
                <textarea class="form-control " rows="10" name="comment" id="text1" placeholder="说点什么吧" required minlength="9"></textarea>
            </div>
            <div id="div1">
            </div>
            <button class="btn btn-primary btn-sm" type="submit">提交</button>
            <button class="btn btn-sm empty" type="button">清空</button>

        </form>
    </div>
        <?php $index=1;foreach ($commentfather as $item):
            $commentchild=myFetchAll("select * from commentchild where fatherid={$item['fatherid']}")?>
            <div class="comments col-lg-12  p-3" >
            <div class="avatarLine" id="commentNum<?php echo $index ?>" >
            <div class="avatarWrap">
                <img src="admin/avatar/default.png" alt="">
            </div >
                <b class="nickName"><?php echo $item['commentName'] ?></b>
                <span class="date1 text-muted"><?php echo $item['commentDate'] ?></span>
                <a href="#commentBox" class="repply">回复</a>
                <div class="fatherid" style="display: none"><?php echo $item['fatherid'] ?></div>
            </div>
                <div class="commentContent p-4 font-weight-light">
                    <?php echo $item['commentContent'] ?>
                </div>
<?php  foreach ($commentchild as $child):?>
                <div class="media p-3">
                    <div class="comments col-lg-12 ">
                        <div class="avatarLine" id="commentNum<?php echo $index ?>">
                            <div class="avatarWrap">
                                <img src="admin/avatar/default.png" alt="">
                            </div>
                            <b class="nickName"><?php echo $child['commentName'] ?></b>
                            <span class="date1 text-muted" ><?php echo $child['commentDate'] ?></span>
                            <a href="#" class="repply">回复</a>
                            <div class="fatherid" style="display: none"><?php echo $item['fatherid'] ?></div>
                        </div>
                        <div class="commentContent p-4 font-weight-light">
                        <?php echo $child['commentContent'] ?>
                        </div>
                    </div>
                </div>
                <?php $index++; endforeach; ?>
            </div>
    <?php $index++; endforeach; ?>

</div>
    <div class="footer ">
        <div class="footerItem text-center">

            <div class="link">
                <div class="QR"><img src="static/assets/img/微信图片_20180815234204.jpg" alt="" class="img-fluid"></div>
                <a href="#" class="icon1 wechat"><span></span></a>
                <a href="https://blog.csdn.net/Slartibartfast" class="icon1 csdn"><span></span></a>
                <a href="https://github.com/Slartbartfast1/Myblog" class="icon1 github"><span></span></a>

            </div>

            <?php $user=myFetchOne("select * from user where userid='huangrui1019';"); ?>
            <small class="text-muted"> <?php echo $user['email'] ?>  京ICP备18046047号</small>
            <p class="text-muted">© 2018 <?php echo $user['name'] ?></p>
        </div>
    </div>
</main>
</div>




<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>
<script src="static/assets/js/navBar.js"></script>
<script src="https://cdn.bootcss.com/wangEditor/3.1.1/wangEditor.min.js"></script>
<script type="text/javascript">
    var E = window.wangEditor;
    var editor = new E('#div1');
    var $text1 = $('#text1');
    editor.customConfig.onchange = function (html) {
        $text1.val(html)
    };
    editor.create();
    $text1.val(editor.txt.html())
</script>
<script>
    //回复按钮
    $('.repply').on('click',function(){
        var fatherid=$(this).next().text();
        var id=$(this).parent().attr('id');
        var name=$(this).parent().find('.nickName').eq(0).text();
        $('#fatherid').val(fatherid);
        var anchor="<a href='#"+id+"'>"+"@"+name+"</a>"+"<p><br></p>";
        editor.txt.html(anchor);
    });

    //清空按钮
    $('.empty').on('click',function(){
        editor.txt.html('');
        $('#tex1').text('');
        $('#fatherid').val('');
    })


</script>


<script>
    //导航栏

    $(function () {
        $(window).scroll(function () {
            var winTop = $(window).scrollTop();
            if (winTop >= 340) {
                $('.navbar-brand').addClass('fadeOut').text('留言板').removeClass('fadeOut').addClass('fadeIn');

            }
            else {
                $('.navbar-brand').text("Slartbartfast's Blog").removeClass('fixed fadeIn');

            }

        });
    });



</script>


</body>
</html>
