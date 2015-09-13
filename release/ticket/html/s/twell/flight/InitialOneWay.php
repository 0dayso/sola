<?php
function get_html($pageidx)
{
$html = <<<EOD
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="Robots" content="index,follow" />
    <meta name="description" content="去哪儿(Qunar.com)作为全球最大的中文旅游搜索引擎,通过对机票,酒店,旅游线路的整合与发布,提供专业、实时、可信的旅游产品价格比较与服务比较系统,帮助消费者轻松进行充分选择,是您预订机票、酒店、旅游线路的的最佳选择!" />
    <meta name="keywords" content="机票酒店预订预定打折优惠特价比价,打折机票,特价机票,电子机票,机票查询,航班查询,国际机票,联程航班,酒店预订,宾馆预订,酒店打折,酒店价格,酒店博客,国际机票预定,国际酒店预定,Qunar.com" />
    <title>【去哪儿网】机票查询,特价机票,打折飞机票-去哪儿网Qunar.com</title>
    <link rel="stylesheet" href="http://qunarzz.com/flight/prd/styles/v3/oneway@4cf6ee920f8f982e8468922c8d3e8efb.css" />
</head>
<body>
    
<div class="q_sysnotice_flight hide" style="overflow:hidden;" id="js_flight_notice_box"><div class="q_sysnotice_flight_info" style="color:#FE0053; white-space:nowrap;" id="js_flight_notice">根据民航局规定，北京首都机场、南苑机场将于9月3日9：30－12：30实施空中管控措施，请及时联系航空公司确认航班情况，合理安排出行计划。</div></div>
<!--<script>
    (function() {
        var div = document.getElementById('js_flight_notice');
        var left = 0;
        var st = null;

        function scroll() {
            left -= 1;
            div.style.marginLeft = left + 'px';
            st = setTimeout(function() {
                if (left <= -950) {
                    left = 980;
                }
                scroll();
            }, 40);
        }  
        

        setTimeout(function() {
            scroll();
            div.onmouseover = function() {
                clearTimeout(st);
            }
            div.onmouseout = function() {
                scroll();
            }
        }, 5000);
    })();

</script> -->

    <style type="text/css" data-hfstamp="20150814143727" id="hf-style" data-hffile="header_styles">
.q_header ul,.q_header ol{list-style:none}.q_header img{border:0}.q_header ul,.q_header ol,.q_header dl,.q_header dd{margin:0;padding:0}.q_header a{text-decoration:none}.q_header{margin:0 auto -427px;width:100%;min-width:980px;height:500px;font:normal 12px/1.5 tahoma,arial,sans-serif;background:url(//source.qunarzz.com/common/hf/header_v16.png) 0 -401px repeat-x}.q_header .q_header_main{margin:0 auto;width:980px;height:73px;*z-index:10}.q_header .q_header_logo{float:left;display:inline;margin:15px 0 0 0;width:128px;height:50px;position:relative}.q_header .q_header_logo a{display:block;width:136px;height:54px;overflow:hidden;outline:0}.q_header .q_header_logo a span{z-index:-1;position:relative;color:#0086a0}.q_header .q_header_app_logo{position:relative;left:8px;_left:16px;display:block;height:36px;width:94px;background:url(//t.qunar.com/count/headerImage);float:right;margin-top:17px}.q_header_max .q_header_main{width:1200px}.q_header_max .q_header_app_logo{position:static!important;background-image:url(//t.qunar.com/count/headerImageHd);width:140px}@media screen and (min-width:1340px){.q_header .q_header_app_logo{background-image:url(//t.qunar.com/count/headerImageHd);margin-left:-100px;position:relative;left:140px;width:140px}}
.q_header .q_header_tnav{*overflow:hidden;float:right;display:inline;padding:6px 0 0 0;width:688px;height:14px}.q_header .q_header_tnav ul{float:right;display:inline;line-height:14px;font-family:tahoma,arial,sans-serif}.q_header .q_header_tnav li{float:left;display:inline;padding:0 11px 0 10px;background:url(//source.qunarzz.com/common/hf/header_new_v7.png) 100% -98px no-repeat;background-position:100% -100px\0;*background-position:100% -100px}.q_header .q_header_tnav li.q_header_tnav_menu{padding:0 1px 0 0}.q_header .q_header_tnav li.q_header_username{padding-right:0;background:0}.q_header .q_header_tnav li.q_header_register{padding-left:5px}.q_header .q_header_tnav li.q_header_username span,.q_header .q_header_tnav li.q_header_register span{margin-right:5px}.q_header .q_header_tnav li.q_header_username a,.q_header .q_header_tnav li.q_header_register a{color:#0084bb}.q_header .q_header_tnav li.q_header_register .q_header_logout{color:#666}.q_header .q_header_tnav li.q_header_register .q_header_logout:hover{color:#00a3d2}.q_header .q_header_tnav li.last{padding-right:0;background:0}.q_header .q_header_tnav li a{text-decoration:none;color:#666}.q_header .q_header_tnav li a:hover{text-decoration:none;color:#00a3d2}.q_header .q_header_tnav li a.q_header_uname{font-family:tahoma;overflow:hidden;text-align:right;text-overflow:ellipsis;width:135px;white-space:nowrap;display:inline-block;*display:inline;*zoom:1}.q_header .q_header_tnav_menu{position:relative;z-index:2000;width:84px;height:14px}.q_header .q_header_tnav_menu dl{position:absolute;z-index:1;top:-4px;left:0;margin:0;width:84px}.q_header .q_header_tnav_menu dt{margin:0 5px;padding:4px 5px;cursor:default}.q_header .q_header_tnav_menu dt b{position:absolute;z-index:1;top:10px;right:10px;display:block;width:7px;height:4px;background:url(//source.qunarzz.com/common/hf/header_new_v7.png) -152px -21px no-repeat;overflow:hidden}.q_header .q_header_tnav_menu dd{display:none}.q_header .q_header_tnav_menu dd a{display:block;padding:0 6px 0 10px;line-height:22px}.q_header .q_header_tnav_menu dd a:hover{background-color:#4b7bda;color:#fff}.q_header .q_header_tnav_menu_hover{z-index:2001}.q_header .q_header_tnav_menu_hover dl{margin:-1px -1px 0;padding:0 0 5px;border:1px solid #d6d6d6;background:#fff;color:#00a3d2}.q_header .q_header_tnav_menu_hover dt{border-bottom:1px solid #d6d6d6}.q_header .q_header_tnav_menu_hover dt b{background-position:-152px -29px!important}.q_header .q_header_tnav_menu_hover dd{display:block}.q_header .q_header_tnav_menu:hover{z-index:2001}.q_header .q_header_tnav_menu:hover dl{margin:-1px -1px 0;padding:0 0 5px;border:1px solid #d6d6d6;background:#fff;color:#00a3d2}.q_header .q_header_tnav_menu:hover dt{border-bottom:1px solid #d6d6d6}.q_header .q_header_tnav_menu:hover dt b{background-position:-152px -29px}.q_header .q_header_tnav_menu:hover dd{display:block}.q_header .q_header_tnav li.q_header_tnav_omenu{margin:0 0 -5px -1px;padding:0 1px 0 0}.q_header .q_header_tnav_omenu dl{position:relative}.q_header .q_header_tnav_omenu dt{position:relative;top:-4px;margin:0 0 -4px 1px;padding:0 5px}.q_header .q_header_tnav_omenu dd{position:absolute;top:17px;left:0;_left:-6px;display:none;padding:0 0 5px;border:1px solid #d6d6d6;background:#fff;z-index:99}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_link{display:block}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_title{display:block;margin-bottom:-5px;padding:4px 17px 5px 5px;cursor:default;cursor:pointer}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_title em{position:relative;top:0;*left:4px;z-index:1;display:inline-block;margin-left:4px;padding:0 0 0 4px;font:normal 12px/14px tahoma,arial,sans-serif;vertical-align:top;background:url(//source.qunarzz.com/common/hf/header_v16.png) 0 -376px no-repeat;color:#fff;overflow:hidden}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_title em span{display:inline-block;padding:0 4px 0 0;background:url(//source.qunarzz.com/common/hf/header_v16.png) 100% -376px no-repeat}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_title b{position:absolute;top:10px;top:7px\0;right:10px;z-index:1;display:block;width:7px;height:4px;background:url(//source.qunarzz.com/common/hf/header_new_v7.png) -152px -21px no-repeat;overflow:hidden}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_close{position:absolute;top:0;right:0;z-index:1;display:block;width:22px;height:22px;background:url(//source.qunarzz.com/common/hf/header_v16.png) -17px -55px no-repeat;cursor:pointer}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_item a{display:block;padding:0 5px;line-height:22px;white-space:nowrap;word-break:break-all;background:#fff;text-align:left;color:#666}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_item a.q_header_tnav_omenu_m:hover{background-color:#4b7bda;color:#fff}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_item a.q_header_tnav_omenu_m:hover em{color:#fff}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_item em{display:inline-block;padding:0 0 0 8px;width:16px;font-weight:700;color:#00a3d2;cursor:pointer}.q_header .q_header_tnav_omenu .q_header_tnav_omenu_item .q_header_tnav_omenu_ordertips{padding:0 5px;cursor:pointer}.q_header .q_header_tnav li.q_header_tnav_omenu_hover{margin-bottom:-6px;padding-right:0}.q_header .q_header_tnav_omenu_hover dl{z-index:2010}.q_header .q_header_tnav_omenu_hover dt{position:relative;z-index:100;top:-5px;margin:0 0 -4px;border:1px solid #d6d6d6;border-bottom:0 none;background-color:#fff}.q_header .q_header_tnav_omenu_hover dd{display:block}.q_header .q_header_tnav_omenu_hover .q_header_tnav_omenu_title{padding-bottom:4px;background-color:#fff;color:#00a3d2}.q_header .q_header_tnav .q_header_tnav_omenu_hover .q_header_tnav_omenu_title b{background-position:-152px -29px}
.q_header .q_header_mnav{float:left;display:inline;padding:17px 0 0 10px;position:relative;*z-index:1200;margin-right:-50px}.q_header .q_header_mnav ul{width:760px;margin-right:-50px}.q_header .q_header_mnav li{float:left;height:36px}.q_header .q_header_mnav li .q_header_navlink{float:left;cursor:pointer;height:100%;text-decoration:none}.q_header .q_header_mnav li .q_header_navlink span{margin:12px 10px 0 10px;width:33px;height:16px;display:block;color:#3c3c3c;*overflow:hidden}.q_header .q_header_mnav li .q_header_navlink span b{vertical-align:top;font-size:16px;white-space:nowrap;line-height:1;_line-height:1.2;font-weight:bold;font-family:"Hiragino Sans GB W3","Microsoft Yahei",\5b8b\4f53;*font-family:\5b8b\4f53;position:relative}.q_header .q_header_mnav li .q_header_navlink:hover span b,.q_header .q_header_mnav li .q_header_navlink.q_header_hover span b{color:#0088a4}.q_header .q_header_mnav li em{float:left;margin:7px -10px 0 0;width:10px;height:10px;font-size:9px;background:url(//source.qunarzz.com/common/hf/header_v16.png) -78px -59px no-repeat;color:#fe0053;overflow:hidden}.q_header .q_header_mnav li em.qhf_new{background-position:-93px -59px;color:#098483}.q_header .q_header_mnav li em i{position:relative;z-index:-1;line-height:10px;font-style:normal}.q_header .q_header_mnav li.qhf_train .q_header_navlink span,.q_header .q_header_mnav li.qhf_ddr .q_header_navlink span,.q_header .q_header_mnav li.qhf_app .q_header_navlink span,.q_header .q_header_mnav li.qhf_jr .q_header_navlink span,.q_header .q_header_mnav li.qhf_guide .q_header_navlink span,.q_header .q_header_mnav li.qhf_card .q_header_navlink span,.q_header .q_header_mnav li.qhf_navmore .q_header_navlink span,.q_header .q_header_mnav li.qhf_bus .q_header_navlink span{width:50px}.q_header .q_header_mnav .q_header_hover .q_header_navlink_more{background:url(//source.qunarzz.com/common/hf/header_new_v7.png) -70px -60px no-repeat}.q_header .q_header_mnav li.q_header_hover{z-index:2010}.q_header .q_header_mnav li a.q_header_hover{z-index:2010;border:0}.q_header .q_header_mnav li.qhf_navmore{border:0}.q_header .q_header_mnav li.qhf_navmore{position:relative;left:1px;text-align:left}.q_header .q_header_mnav li.qhf_navmore.q_header_hover i{background-position:-152px -39px}.q_header .q_header_mnav li.qhf_navmore.q_header_hover a:hover i{background-position:-152px -29px}.q_header .q_header_mnav li.qhf_navmore i{position:absolute;top:18px;*top:20px;left:46px;z-index:1;display:block;width:7px;height:4px;background:url(//source.qunarzz.com/common/hf/header_new_v7.png) -152px -21px no-repeat;overflow:hidden}.q_header .q_header_mnav .q_header_navmore-con{display:none;position:absolute;background:#fff;top:35px;border:1px solid #ccc;border-top:0;left:1px;width:66px;overflow:hidden;padding-bottom:10px;box-shadow:0 7px 10px rgba(0,0,0,0.1)}.q_header .q_header_mnav .q_header_navmore-con span{margin-left:9px!important}.q_header .q_header_mnav li.qhf_card{display:none}.q_header .q_header_mnav li.qhf_jr{display:none}.q_header_max .q_header_mnav li.qhf_app,.q_header_max .q_header_mnav li.qhf_jr,.q_header_max .q_header_mnav li.guide,.q_header_max .q_header_mnav li.qhf_card{display:block}.q_header_max .q_header_mnav li.qhf_navmore{display:none}.q_header_max .q_header_mnav ul{width:850px}.q_header .q_header_aside{white-space:nowrap;width:auto;_width:auto!important;box-shadow:0 7px 10px rgba(0,0,0,0.1);display:none;font-size:12px;z-index:9999;position:absolute;background:#fff;border:1px solid #ccc;padding:8px;bottom:-48px}.q_header .q_header_aside .q_header_blank{height:3px;font-size:0;background:#fff;position:absolute}.q_header .q_header_aside a{display:inline-block;*display:inline;zoom:1;line-height:1.2;padding:8px 12px;color:#666;position:relative}.q_header .q_header_aside a:hover{color:#00a3d2;text-decoration:underline;background:#e0f4ff}.q_header .q_header_aside a.qhf_hot{color:#f55}.q_header .q_header_aside a i{font-size:0;position:absolute;right:2px;top:2px;width:9px;height:9px;line-height:0;background:url(//source.qunarzz.com/common/hf/header_new_v7.png) no-repeat -151px 0}.q_header .q_header_aside a i.qhf_hot{background-position:-151px -9px}.q_header .q_header_aside a span{font-weight:bold;white-space:nowrap}.q_header .q_header_mnav li .q_header_navlink.q_header_hover{background:url(//source.qunarzz.com/common/hf/header_new_v7.png) 0 -60px no-repeat}.q_header .q_header_mnav li.qhf_ddr .q_header_navlink.q_header_hover{background:url(//source.qunarzz.com/common/hf/header_new_v7.png) -70px -60px no-repeat}.q_header .q_header_mnav .q_header_aside .q_header_blank{width:49px;font-size:0;left:99px;top:-1px}.q_header .q_header_mnav .q_header_aside .q_header_blank_ddr{width:66px;font-size:0;left:99px;top:-1px}.q_header_hotel .q_header_mnav li.qhf_hotel .q_header_navlink span{background-position:-82px -75px}.q_header_tags img{position:absolute;display:block;top:8px;display:none}.q_header_tags .qhf_tag_gongyu{left:454px}.q_header_tags .qhf_tag_guide{left:636px}.q_header_tags .qhf_tag_piao{left:277px}.q_header_tags .qhf_tag_package{left:225px}.q_header_tags .qhf_tag_local{left:512px}.q_header_tags .qhf_tag_card{left:705px}.q_header_tags .qhf_tag_bjcx{left:636px}.q_header_tags .qhf_tag_jr{left:767px}.q_header_tags .qhf_tag_car{left:576px}@media screen and (min-width:1340px){.q_header .q_header_mnav li.qhf_navmore{display:none}.q_header .q_header_mnav li.qhf_card{display:block}.q_header .q_header_mnav li.qhf_jr{display:block}.q_header .q_header_mnav ul{width:830px}}
.qhf_sysnotice{margin:0 auto;height:26px;background-color:#e8f8f7}.qhf_sysnotice a{text-decoration:none;color:#0069ca}.qhf_sysnotice a:hover{text-decoration:none;color:#f60}.qhf_sysnotice_info{margin:0 auto;padding:4px;width:980px;font:normal 12px/1.5 tahoma,arial,sans-serif;text-align:center;color:#098483}.qhf_sysnotice_close{float:right;display:inline;width:18px;height:18px;background:url(//source.qunarzz.com/common/hf/header_v16.png) 0 -56px no-repeat}
.q_header .q_header_tnav li.q_header_message{min-width:76px;*width:76px;position:relative;left:-1px;top:-1px;height:19px;border:0 solid black;position:relative;padding-left:0;padding-right:0;display:inline-block}.q_header .q_header_tnav li.q_header_message.q_has_message{min-width:88px;*width:88px}.q_header .q_header_tnav li.q_header_message.q_header_qm_hover,.q_header .q_header_tnav li.q_header_message.q_header_qm_autoshow{z-index:2000}.q_header .q_header_tnav .q_header_message.q_header_message_number{padding-right:21px}.q_header .q_header_tnav .q_header_message i{position:relative;_top:4px;display:inline-block;*display:inline;*zoom:1;background:url(//source.qunarzz.com/common/hf/header_v13.png) -30px -153px no-repeat;width:11px;height:8px;display:inline-block;overflow-x:hidden;margin-right:5px}.q_header .q_header_tnav .q_header_message i.q_header_message_red{background:url(//source.qunarzz.com/common/hf/header_v13.png) -18px -153px no-repeat}.q_header .q_header_tnav .q_header_message b{font-weight:bold;display:inline-block;*display:inline;*zoom:1;font-family:Tahoma;color:#f55;vertical-align:baseline}.q_header .q_header_tnav .q_header_message .q_header_message_n{position:relative;_top:2px;display:inline-block;width:12px;height:10px;background:url(//source.qunarzz.com/common/hf/header_v13.png) -41px -151px no-repeat}.q_header .q_header_tnav .q_header_message .q_header_message_count small{font:lighter 12px arial}.q_header .q_header_tnav .q_header_message .q_header_qm_arrow{display:inline-block;*display:inline;*zoom:1;position:relative;left:6px;right:10px;z-index:1;width:6px;height:6px;background:url(//source.qunarzz.com/common/hf/header_new_v7.png) -153px -21px no-repeat;overflow:hidden}.q_header .q_header_tnav .q_header_message.q_header_qm_autoshow .q_header_qm_arrow,.q_header .q_header_tnav .q_header_message.q_header_qm_hover .q_header_qm_arrow{background-position:-153px -38px}.q_header .q_header_tnav .q_header_message .q_header_qm_close{position:absolute;top:11px;right:10px;z-index:1;display:block;width:11px;height:11px;background:url(//source.qunarzz.com/common/hf/message/cross.png);overflow:hidden;cursor:pointer}.q_header .q_header_tnav .q_header_qm_red{color:#f55}.q_header .q_header_tnav .q_header_qm_word{margin-left:5px;color:#555}.q_header .q_header_tnav .q_header_qm_dp{display:none;width:240px;text-align:left;background:#fff;position:absolute;top:19px;top:17px\0;right:0;*right:2px;z-index:2000;border:1px solid #ccc;-webkit-box-shadow:0 0 10px rgba(0,0,0,0.2);box-shadow:0 0 10px rgba(0,0,0,0.2)}.q_header .q_header_tnav .q_header_qm_autoshow .q_header_qm_dp.qm_dp_autoshow,.q_header .q_header_tnav .q_header_qm_hover .q_header_qm_dp.q_header_qm_dp_hover{display:inline-block;*display:inline;*zoom:1}.q_header .q_header_tnav .q_header_qm_hover .q_header_qm_dp.qm_dp_autoshow{display:none}.q_header .q_header_tnav .q_header_qm_hover .q_header_qm_body{padding:7px 0}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_no_msg{text-align:center;color:#999;margin:30px auto}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item{font:normal 12px/1.5 '宋体',sans-serif;padding-left:20px;padding:7px 7px 7px 15px;display:block;position:relative}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_none{padding:30px 0 30px 0;text-align:center;color:#999}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item .q_header_qm_link{color:#999;position:absolute;top:7px;right:15px}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item .q_header_qm_link:hover{color:#0084bb}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item .q_header_qm_link2{color:#0084bb;padding-left:10px}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item .q_header_qm_switch{width:36px;height:19px;display:block;background:url(//source.qunarzz.com/common/hf/message/switch-shutdown.png);position:absolute;top:8px;right:10px}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item .q_header_qm_switch.q_header_qm_switch_open{background:url(//source.qunarzz.com/common/hf/message/switch-open.png)}.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item.q_header_qm_curr,.q_header .q_header_tnav .q_header_qm_body .q_header_qm_item:hover{background:#fafafa}.q_header .q_header_tnav .q_header_qm_footer{height:18px;color:#999;padding:7px 10px 5px 20px;background:#fafafa}.q_header .q_header_tnav a.qm_foote_left{vertical-align:middle;float:left;background:url(//source.qunarzz.com/common/hf/message/setting.png) no-repeat;padding-left:18px}.q_header .q_header_tnav a.qm_foote_right{float:right;color:#999}.q_header .q_header_tnav li .q_header_qm_inner{padding:5px 10px 0 10px;margin-top:-5px;*margin-left:-2px;*padding-top:3px;background:0;height:19px;*height:21px;bottom:-1px;border-left:1px solid #fff;border-right:1px solid #fff;position:relative}.q_header .q_header_tnav li.q_header_qm_autoshow .q_header_qm_inner,.q_header .q_header_tnav li.q_header_qm_hover .q_header_qm_inner{z-index:2001;border:1px solid #ccc;border-bottom:0;background:#fff;padding-top:4px;*padding-top:2px;height:17px\0}
.q_header.q_header_flight{margin-bottom:-427px!important}.q_header_flight .q_header_mnav li.qhf_flight .q_header_navlink span{color:#0088a4}.q_header_flight .q_header_tnav{*overflow:visible}.q_header_flight .q_header_tnav li.q_header_flight_en img{display:inline-block;vertical-align:middle;margin:0 5px}
</style>
    <div class="q_header q_header_flight">
        <div class="q_header_main" data-hfchannel="flight" data-hffile="header_main"> <div class="q_header_logo"> <a href="http://www.qunar.com/" target="_top" title="去哪儿旅游搜索引擎 Qunar.com" hidefocus="on"><img src="//source.qunarzz.com/common/hf/logo.png" ></a>
</div> <div class="q_header_tnav"> <ul> <li id="__loginInfo_u__" class="q_header_username"><a href="http://user.qunar.com/passport/login.jsp" hidefocus="on" rel="nofollow">登录</a></li>
<li id="__loginInfo_r__" class="q_header_register"><a href="http://user.qunar.com/passport/register.jsp" hidefocus="on" rel="nofollow">注册</a></li> <li id="__loginInfo_t__" class="q_header_tnav_menu" style="display:block;"> <dl id="__loginInfo_l__"> <dt>我的机票<b></b></dt> <dd><a href="http://user.qunar.com/order/query.jsp?ret=http://order.qunar.com/flight/?t=1%26from=flightindex_header_chupiao" hidefocus="on" rel="nofollow">机票订单</a></dd> <!--<dd><a href="http://tinfo.qunar.com/order/freefly" hidefocus="on" rel="nofollow">超值自游飞</a></dd>--> <dd><a href="http://tinfo.qunar.com/order/mytickets?catalog=passenger" hidefocus="on" rel="nofollow">乘机人管理</a></dd> <dd><a href="http://subscribe.qunar.com/info/addSub.do?s=30" hidefocus="on" rel="nofollow">预约机票</a></dd> <dd><a href="http://tinfo.qunar.com/order/mytickets?catalog=searchvendors" hidefocus="on" rel="nofollow">查询代理商</a></dd> </dl>
</li> <li class="q_header_tnav_omenu" id="__orderInfo_l__"> <dl> <dt><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Fuser.qunar.com%2Fflight_toolbox.jsp%3Fcatalog%3Downorders%26from%3Dmyorder&jump=0" class="q_header_tnav_omenu_link" id="q_header_tnav_omenu_link"><span class="q_header_tnav_omenu_title" id="__orderInfo_t__">查看订单<b id="__orderInfo_b__"></b></span></a></dt> <dd id="__orderInfo_w__"> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fflight%2F%3Ft%3D1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderFlight__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">机票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fhotel%2F%3Ffrom%3Dmyorder" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderHotel__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">酒店订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fapartment?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderApartment__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">公寓订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fgroup?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderGroup__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">团购订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Fdujia.qunar.com%2Fmyorder.jsp%3Ffrom%3Dmyorder" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderVacation__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">度假订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fticket?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderTicket__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">门票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Ftrain?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderTrain__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">火车票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fbus?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderBus__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">汽车票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fcar?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderCar__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">车车订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fqmall?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderQmall__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">Q商城订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Flocal?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderDdr__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">当地人订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fpay?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderDdr__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">金融订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fpay?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderDdr__" id="__tnav_card_order__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">礼品卡订单</span></a></div> </dd> </dl>
</li>
 <li><a href="http://review.qunar.com/mall/index.htm" target="_top" rel="nofollow" id="__link_mall__">积分商城</a></li>
<li><a href="http://help.qunar.com/" target="_top" rel="nofollow" id="__link_contact__">联系客服</a></li> <li class="last q_header_flight_en"><a href="http://www.qua.com/?from=flight_home" target="_blank" rel="nofollow" id="__link_enflight__"><img src="http://simg1.qunarzz.com/site/images/flight/ico_en_v1.png" align="absmiddle"></img>In English</a></li>
 </ul> </div> <div class="q_header_mnav"> <ul> <li class="qhf_home"> <a href="http://www.qunar.com/" target="_top" hidefocus="on" id="__link_home__" class="q_header_navlink"><span><b>首页</b></span></a> </li> <li class="qhf_flight"> <a href="http://flight.qunar.com/" target="_top" hidefocus="on" id="__link_flight__" class="q_header_navlink"><span><b>机票</b></span></a> </li> <li class="qhf_hotel"> <a href="http://hotel.qunar.com/" target="_top" hidefocus="on" id="__link_hotel__" class="q_header_navlink"><span><b>酒店</b></span></a> </li> <li class="qhf_tuan"> <a href="http://tuan.qunar.com/" target="_top" hidefocus="on" id="__link_tuan__" class="q_header_navlink"><span><b>团购</b></span></a> </li> <li class="qhf_package"> <a href="http://dujia.qunar.com/" target="_top" hidefocus="on" id="__link_package__" class="q_header_navlink"><span><b>度假</b></span></a> </li> <li class="qhf_piao"> <a href="http://piao.qunar.com/" target="_top" hidefocus="on" id="__link_piao__" class="q_header_navlink"><span><b>门票</b></span></a> </li> <li class="qhf_train"> <a href="http://train.qunar.com/" target="_top" hidefocus="on" id="__link_train__" class="q_header_navlink"><span><b>火车票</b></span></a> </li> <li class="qhf_travel"> <a href="http://travel.qunar.com/?from=header" target="_top" hidefocus="on" id="__link_travel__" class="q_header_navlink"><span><b>攻略</b></span></a> </li> <li class="qhf_gongyu"> <a href="http://gongyu.qunar.com/" target="_top" hidefocus="on" id="__link_gongyu__" class="q_header_navlink"><span><b>公寓</b></span></a> </li> <li class="qhf_ddr"> <a href="http://i.qunar.com/" target="_top" hidefocus="on" id="__link_ddr__" class="q_header_navlink q_header_navlink_ddr"><span><b>当地人</b></span></a> </li> <li class="qhf_car"> <a href="http://car.qunar.com/?from=186" target="_top" hidefocus="on" id="__link_car__" class="q_header_navlink"><span><b>车车</b></span></a> </li> <!--li class="guide"> <a href="http://guide.qunar.com/" target="_top" hidefocus="on" id="__link_guide__" class="q_header_navlink"><span><b>骆驼书</b></span></a> </li--> <li class="qhf_bus"> <a href="http://bus.qunar.com/" target="_top" hidefocus="on" id="__link_bus__" class="q_header_navlink"><span><b>汽车票</b></span></a> </li> <li class="qhf_navmore" id="__header_navmore__"> <a href="javascript:void(0)" target="_top" hidefocus="on" class="q_header_navlink q_header_navlink_more"><span><b>更多</b></span><i></i></a> <div class="q_header_navmore-con" id="__header_navmore_con__"> <!-- <a href="http://guide.qunar.com/" target="_top" hidefocus="on" id="__link_guide_navmore__" class="q_header_navlink"><span><b>骆驼书</b></span></a> --> <a href="http://card.qunar.com/" target="_top" hidefocus="on" id="__link_card_navmore__" class="q_header_navlink"><span><b>礼品卡</b></span></a> <a href="http://jr.qunar.com/" target="_top" hidefocus="on" id="__link_jr_navmore__" class="q_header_navlink"><span><b>金融</b></span></a> <!-- <a href="http://app.qunar.com/" target="_top" hidefocus="on" id="__link_app_navmore__" class="q_header_navlink"><span><b>客户端</b></span></a> --> </div> </li> <li class="qhf_card"> <a href="http://card.qunar.com/" target="_top" hidefocus="on" id="__link_card__" class="q_header_navlink"><span><b>礼品卡</b></span></a> </li> <li class="qhf_jr"> <a href="http://jr.qunar.com/" target="_top" hidefocus="on" id="__link_jr__" class="q_header_navlink"><span><b>金融</b></span></a> </li> <!-- <li class="qhf_app"> <a href="http://app.qunar.com/" target="_top" hidefocus="on" id="__link_app__" class="q_header_navlink"><span><b>客户端</b></span></a> </li> -->
</ul> <div id="__header_nav_tags__" class="q_header_tags"> <!--img src="//source.qunarzz.com/common/hf/tags/gonglue.gif" class="qh_tag_guide"--> <img src="//source.qunarzz.com/common/hf/tags/quanjia.gif" class="qhf_tag_gongyu"> <img src="//source.qunarzz.com/common/hf/tags/all.png" class="qhf_tag_piao"> <!-- <img src="//source.qunarzz.com/common/hf/tags/dujia_v1.gif" class="qhf_tag_package"> --> <img src="//source.qunarzz.com/common/hf/tags/lmqx.gif" class="qhf_tag_package"> <img src="//source.qunarzz.com/common/hf/tags/local.gif" class="qhf_tag_local"> <img src="//source.qunarzz.com/common/hf/tags/card_v1.gif" class="qhf_tag_card"> <img src="//source.qunarzz.com/common/hf/tags/bjcx.gif" class="qhf_tag_bjcx"> <img src="//source.qunarzz.com/common/hf/tags/jr_v1.gif" class="qhf_tag_jr"> <img src="//source.qunarzz.com/common/hf/tags/car.gif" class="qhf_tag_car">
</div> <div class="q_header_aside" id="__header_aside_package__" style="left:124px;"> <a href="http://dujia.qunar.com/?tf=djnavkj_index"><span>度假首页</span></a> <a href="http://dujia.qunar.com/p/abroad/?tf=djnavkj_abroad"><span>出境游</span></a> <a href="http://dujia.qunar.com/p/domestic/?tf=djnavkj_domestic"><span>国内游</span></a> <a href="http://dujia.qunar.com/tejia/?tf=djnavkj_tejia" class="qhf_hot"><span>特价</span><i class="qhf_hot"></i></a> <a href="http://dujia.qunar.com/visa/?tf=djnavkj_visa"><span>签证</span></a> <a href="http://dujia.qunar.com/p/around/?tf=djnavkj_around"><span>周边游</span></a> <a href="http://dujia.qunar.com/p/youlun/?tf=djnavkj_youlun"><span>邮轮</span><i class="new"></i></a> <a href="http://fh.dujia.qunar.com/?tf=package"><span>机酒自由行</span></a> <a href="http://dujia.qunar.com/p/tuan/?tf=djnavkj_tuan"><span>团购</span></a> <a href="http://i.qunar.com/?tf=dj_m"><span>WiFi/包车</span><i class="new"></i></a> <span class="q_header_blank"></span>
</div> <div class="q_header_aside" id="__header_aside_travel__" style="left:300px;"> <a href="http://travel.qunar.com/?from=header"><span>攻略首页</span></a> <a href="http://travel.qunar.com/travelbook/list.htm?order=hot_heat"><span>攻略库</span></a> <a href="http://travel.qunar.com/place/?from=header"><span>目的地</span></a> <a href="http://travel.qunar.com/bbs/?from=header"><span>论坛</span></a> <a href="http://travel.qunar.com/plan/first?from=header"><span>创建行程</span></a> <a href="http://travel.qunar.com/youji/create?from=header" class="qhf_hot"><span>发表游记</span><i class="qhf_hot"></i></a> <a href="http://guide.qunar.com/"><span>骆驼书</span></a> <span class="q_header_blank"></span>
</div> <div class="q_header_aside" id="__header_aside_car__" style="left:476px;"> <a href="http://car.qunar.com/?from=186"><span>车车首页</span></a> <a href="http://car.qunar.com/shuttle/?from=186"><span>接送专车</span></a> <a href="http://car.qunar.com/self_drive/?from=186"><span>国内自驾</span></a> <a href="http://acar.qunar.com/web/index/0?from=706" class="qhf_hot"><span>海外用车</span><i class="qhf_hot"></i></a> <span class="q_header_blank"></span>
</div> <div class="q_header_aside" id="__header_aside_piao__" style="left:177px;"> <a href="http://piao.qunar.com/"><span>门票搜索</span></a> <a href="http://piao.qunar.com/overseas/"><span>玩转海外</span><i class="new"></i></a> <a href="http://piao.qunar.com/topic/gat1409.htm"><span>港澳台门票</span></a> <a href="http://piao.qunar.com/ticket/vista.htm"><span>地图找景点</span></a> <a href="http://sale.piao.qunar.com/topic/mk/303.htm"><span>无锡马山</span></a> <span class="q_header_blank"></span>
</div> <div class="q_header_aside" id="__header_aside_tuan__" style="left:71px"> <a href="http://tuan.qunar.com/"><span>首页</span></a> <a href="http://tuan.qunar.com/#PAGE/L2JzbmVzL3R1YW5XZWIvbGlzdA__/category/aG90ZWw_"><span>酒店</span></a> <a href="http://tuan.qunar.com/vc/index.php?category=around"><span>周边休闲</span></a> <a href="http://tuan.qunar.com/piao/product/list.htm?in_track=tuan_hover_mp"><span>门票</span></a> <a href="http://tuan.qunar.com/vc/index.php?category=travel_d"><span>长线游</span></a> <!--a href="http://tuan.qunar.com/sale/"><span>秒杀特惠</span></a--> <span class="q_header_blank"></span>
</div> <div class="q_header_aside" id="__header_aside_jr__" style="left:667px"> <a href="https://jr.qunar.com/index.htm"><span>首页</span></a> <a href="https://jr.qunar.com/fund/index.htm"><span>趣游宝</span></a> <a href="https://jr.qunar.com/ious/index.htm"><span>拿去花</span></a> <a href="http://codpay.qunar.com/cod-web/home.do?fromId=homepage"><span>存款证明</span></a> <span class="q_header_blank"></span>
</div> <div class="q_header_aside" id="__header_aside_ddr__" style="left:406px"> <a href="http://i.qunar.com?tf=ejsy"><span>当地人首页</span></a> <a href="http://i.qunar.com/web/search/index?q=%E5%87%BA%E5%A2%83WiFi&tf=ejcjwf" class="qhf_hot"><span>出境WiFi</span><i class="qhf_hot"></i></a> <a href="http://i.qunar.com/web/search/index?q=%E6%97%85%E6%B8%B8%E5%8C%85%E8%BD%A6&tf=ejlybc"><span>旅游包车</span></a> <a href="http://i.qunar.com/web/search/index?q=%E5%AF%BC%E6%B8%B8%E8%AE%B2%E8%A7%A3&tf=ejdyjj"><span>导游讲解</span></a> <a href="http://i.qunar.com/web/search/index?q=%E4%BA%A4%E9%80%9A%E5%8D%A1&tf=ejjtk"><span>交通卡</span></a> <span class="q_header_blank q_header_blank_ddr"></span>
</div> </div> <a class="q_header_app_logo" href="http://app.qunar.com/"></a>
</div>
<script id="hf-script" type="text/javascript"> 
; (function() {
    function e(e, t, n) {
        for (var r in e) if (e.hasOwnProperty(r)) t.call(n || window, r, e[r])
    }
    var t = Array.prototype.forEach ?
    function(e, t) {
        Array.prototype.forEach.call(e || [], t)
    }: function(e, t) {
        for (var n = 0,
        r = e && e.length || 0; n < r; n++) t.call(window, e[n], n)
    };
    var n = new
    function() {
        var n = {
            "http://user.qunar.com": {
                "pay.qunar.com": "/user_proxy/"
            }
        };
        var r = {
            "http://user.qunar.com": "/user_proxy/"
        };
        this.httpsFilter = function(n) {
            function i(e) {
                return e.replace("http:", location.protocol)
            }
            var r;
            if (location.protocol === "https:") {
                try {
                    switch (Object.prototype.toString.call(n)) {
                    case "[object String]":
                        return i(n);
                    case "[object Object]":
                        e(n,
                        function(e, t) {
                            n[e] = i(t)
                        });
                        return n;
                    case "[object Array]":
                        t(n,
                        function(e, t) {
                            n[t] = i(e)
                        });
                        return n;
                    default:
                        return n
                    }
                } catch(s) {}
            }
            return n
        };
        this.bindEvent = function(e, t, n) {
            if (!e) {
                return
            }
            if (e.addEventListener) {
                e.addEventListener(t, n, false)
            } else if (e.attachEvent) {
                e.attachEvent("on" + t,
                function() {
                    n.apply(e, arguments)
                })
            } else {
                e["on" + t] = n
            }
        };
        this.GA = {
            param: function(e) {
                var t = ["utmwv=0.1", "t=" + +(new Date), "utmsr=" + (screen.width + "*" + screen.height), "utmasr=" + (screen.availWidth + "*" + screen.availHeight), "utmr=" + encodeURIComponent(document.referrer || "-1"), "utmp=" + encodeURIComponent(window.location.href.toString()), "utmhn=" + encodeURIComponent(window.location.host.toString()), "s=" + encodeURIComponent(e || window["_ba_utm_s"] || null)];
                return t.join("&")
            },
            clk: function(e, t) {
                this.send("clk", e, t)
            },
            send: function(e, t, n) {
                if (location.protocol !== "https:") {
                    var r = new Image,
                    i = this.param(n);
                    r.src = "http://bc.qunar.com/" + (e || window["_ba_utm_l"] || "e") + "?" + i + "&a=" + encodeURIComponent(t || "")
                }
            }
        };
        this.jsonpCall = function(e, t, n) {
            var r = document.head || document.getElementsByTagName("head")[0] || document.documentElement;
            var i = document.createElement("script");
            i.async = "false";
            i.defer = "false";
            var s = {};
            s.transportType = "JSONP";
            s.transport = i;
            s.transportKey = "callback_" + Math.ceil(Math.random() * 1e6);
            var o = n;
            if (undefined === window[s.transportKey] || null === window[s.transportKey]) {
                window[s.transportKey] = function(e) {
                    o(e);
                    if (r && i.parentNode) {
                        r.removeChild(i)
                    }
                    window[s.transportKey] = null;
                    if ( !! window[s.transportKey]) {
                        delete window[s.transportKey]
                    }
                }
            }
            i.onload = i.onreadystatechange = function() {
                if (!i.readyState || /loaded|complete/.test(i.readyState)) {
                    if (s.timeoutId) {
                        try {
                            clearTimeout(s.timeoutId)
                        } catch(e) {}
                    }
                    i.onload = i.onreadystatechange = null;
                    i.responseText = "";
                    i = undefined;
                    s.transport = null
                }
            };
            t += t ? "&": "";
            t += "callback=" + s.transportKey + "&" + (new Date).getTime();
            i.src = e + "?" + t;
            if (r.firstChild) {
                r.insertBefore(i, r.firstChild)
            } else {
                r.appendChild(i)
            }
        };
        this.contains = function(e, t) {
            if (document.documentElement.contains) {
                return e !== t && (e.contains ? e.contains(t) : true)
            } else if (document.documentElement.compareDocumentPosition) {
                return !! (e.compareDocumentPosition(t) & 16)
            } else {
                return false
            }
        };
        this.hasClass = function(e, t) {
            return (new RegExp("(\s|^)" + t + "(\s|$)")).test(e.className)
        };
        this.removeClass = function(e, t) {
            var n = [];
            if (typeof t == "string") {
                n.push(t)
            } else {
                n = t || n
            }
            var r = e.className.split(" ");
            var i = [],
            s;
            for (var o = 0; o < r.length; o++) {
                s = false;
                for (var u = 0; u < n.length; u++) {
                    if (this.trim(r[o]) == n[u]) {
                        s = true;
                        break
                    }
                }
                if (!s) {
                    i.push(this.trim(r[o]))
                }
            }
            e.className = i.join(" ")
        };
        this.addClass = function(e, t) {
            if (!e) {
                throw new Error("dom not exist when addClass:" + t)
            }
            var n = [];
            if (typeof t == "string") {
                n.push(t)
            } else {
                n = t || n
            }
            var r = e.className.split(" ");
            var i = [],
            s;
            for (var o = 0; o < n.length; o++) {
                s = false;
                for (var u = 0; u < r.length; u++) {
                    if (this.trim(r[u]) == n[o]) {
                        s = true;
                        break
                    }
                }
                if (!s) {
                    i.push(this.trim(n[o]))
                }
            }
            e.className = e.className + " " + i.join(" ")
        };
        this.trim = function(e) {
            if ("undefined" == typeof e) {
                return ""
            }
            e = e.toString();
            if (e.length === 0) {
                return ""
            }
            var t = [];
            t[" "] = true;
            t["    "] = true;
            t[" "] = true;
            t[" "] = true;
            while (e.length > 0 && t[e.substr(0, 1)]) {
                e = e.substr(1)
            }
            while (e.length > 0 && t[e.substr(e.length - 1, 1)]) {
                e = e.substr(0, e.length - 1)
            }
            return e
        };
        this.insertAfter = function(e, t) {
            var n = t.parentNode;
            if (n.lastChild == t) {
                n.appendChild(e)
            } else {
                n.insertBefore(e, t.nextSibling)
            }
        };
        this.getElementsByClassName = function(e, t) {
            if (e.getElementsByClassName) {
                return e.getElementsByClassName(t)
            } else {
                return function(t, n) {
                    if (n == null) n = document;
                    var r = [],
                    i = n.getElementsByTagName("*"),
                    s = i.length,
                    o = new RegExp("(^|\s)" + t + "(\s|$)"),
                    u,
                    a;
                    for (u = 0, a = 0; u < s; u++) {
                        if (o.test(i[u].className)) {
                            r[a] = i[u];
                            a++
                        }
                    }
                    return r
                } (t, e)
            }
        };
        this.setCookie = function(e, t) {
            var n = new Date;
            var r = arguments,
            i = r.length;
            var s = i > 2 ? r[2] : null;
            var o = i > 3 ? r[3] : null;
            var u = i > 4 ? r[4] : null;
            var a = i > 5 ? r[5] : false;
            if (s != null) n.setTime(n.getTime() + s * 1e3);
            document.cookie = e + "=" + escape(t) + (s == null ? "": "; expires=" + n.toGMTString()) + (o == null ? "": "; path=" + o) + (u == null ? "": "; domain=" + u) + (a == true ? "; secure": "")
        };
        this.getCookie = function(e) {
            var t = document.cookie.match(new RegExp("(^| )" + e + "=([^;]*)(;|$)"));
            if (t != null) return unescape(t[2]);
            return null
        };
        this.extend = function(e) {
            e = e || {};
            for (var t = 1; t < arguments.length; t++) {
                if (!arguments[t]) continue;
                for (var n in arguments[t]) {
                    if (arguments[t].hasOwnProperty(n)) e[n] = arguments[t][n]
                }
            }
            return e
        }
    };
    if (typeof QNR === "undefined") {
        window["QNR"] = {}
    }
    window["QNR"]["hfUtils"] = n
})();; (function() {
    var e = {
        version: "1.1",
        _COOKIEHASH: null,
        $: function(e) {
            return document.getElementById(e)
        },
        _escapeHTML: function(e) {
            return String(e).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/\//g, "&#x2F;").replace(/ /g, "&nbsp;")
        },
        _cookie: function(e) {
            this._COOKIEHASH = {};
            var t = document.cookie.split(";");
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                var i = r.split("=");
                if (r.indexOf("=") != -1) this._COOKIEHASH[this._trim(i[0])] = this._trim(i[1])
            }
            return this._COOKIEHASH[e]
        },
        _trim: function(e) {
            if (String.prototype.trim) {
                return e.trim()
            }
            return e.replace(/^\s+/, "").replace(/\s+$/, "")
        },
        _getinfo: function() {
            var e = {
                from: window["__qunarglobal_from"] || ""
            };
            var t = "";
            var n = "";
            var r = "";
            var i = this._cookie("QN16");
            var s = this._cookie("QN42");
            var o = this._cookie("QN15");
            if (typeof i !== "undefined") {
                switch (i) {
                case "1":
                    t = this._getQunarNickName();
                    n = this._getQunarNickName();
                    r = this._getQunarUserName();
                    break;
                case "0":
                    t = s;
                    n = o;
                    r = o;
                    break;
                default:
                    t = this._getQunarNickName();
                    n = this._getQunarNickName();
                    r = this._getQunarUserName()
                }
            } else {
                t = this._getQunarNickName();
                n = this._getQunarNickName();
                r = this._getQunarUserName()
            }
            e.displayName = this._escapeHTML(decodeURIComponent(t).replace(/<(.*?)>/ig, "")).replace(/\"/g, "");
            e.username = decodeURIComponent(n).replace(/\"/g, "");
            e.uname = decodeURIComponent(r).replace(/\"/g, "");
            return e
        },
        _getQunarNickName: function() {
            var e = "";
            var t = this._cookie("_a");
            var n = this._cookie("QN42");
            if (!n) {
                n = this._cookie("_q");
                if (n) {
                    n = n.replace("U.", "")
                }
            }
            if (n) {
                if (t) {
                    e = this._trim(n + "(未激活)")
                } else {
                    e = this._trim(n)
                }
            }
            return e
        },
        _getQunarUserName: function() {
            var e = "";
            var t = this._cookie("_q");
            var n = this._cookie("_a");
            if (t) {
                if (n) {
                    e = this._trim(t.replace("U.", "") + "(未激活)")
                } else {
                    e = this._trim(t.replace("U.", ""))
                }
            }
            return e
        },
        _run: function(e) {
            this.userNameEle = this.$(e["u"]);
            this.userTitleEle = this.$(e["t"]);
            this.userListEle = this.$(e["l"]);
            this.userRegEle = this.$(e["r"])
        },
        _html: function() {
            var e = arguments[0];
            var t = [];
            for (var n = 1,
            r = arguments.length; n < r; n++) {
                t.push(arguments[n])
            }
            e.innerHTML = t.join("")
        }
    };
    var t = {
        _regEvent: function() {
            var t = e.userTitleEle.className;
            e.userTitleEle.onmouseover = function() {
                e.userTitleEle.className = t + " q_header_tnav_menu_hover"
            };
            e.userTitleEle.onmouseout = function() {
                e.userTitleEle.className = t
            }
        },
        _isLogin: function() {
            if (e._cookie("_t") && e._cookie("_q") && e._cookie("_q").indexOf("G.") < 0) {
                return true
            } else if (e._cookie("QN42")) {
                return true
            } else {
                return false
            }
        },
        _render: function() {
            var n = e._getinfo();
            var r = encodeURIComponent(window.location.href);
            var i = "http://user.qunar.com";
            var s = e.userTitleEle ? e.userTitleEle.getAttribute("data-header-alwayshow") : false;
            var o = s && s === "true";
            if (t._isLogin()) {
                e._html(e.userNameEle, '<a href="', i, '/index.jsp#home" title="', n.displayName, '" hidefocus="on" class="q_header_uname" rel="nofollow">', n.displayName, "</a>");
                if (e.userListEle) {
                    e.userTitleEle.style.display = "";
                    var u = e.userListEle.getElementsByTagName("a");
                    for (var a = 0,
                    f = u.length; a < f; a++) {
                        u[a].href = u[a].href.replace(/#\[\[username\]\]/g, n.uname)
                    }
                }
                e._html(e.userRegEle, '<a id="__headerInfo_logout__" href="', i, "/passport/logout.jsp?ret=", r, '" hidefocus="on" rel="nofollow" class="q_header_logout">退出</a>')
            } else {
                e._html(e.userNameEle, '<span>请</span><a id="__headerInfo_login__" href="', i, "/passport/login.jsp?ret=", r, '" hidefocus="on" rel="nofollow">登录</a>');
                e._html(e.userRegEle, '<span>或</span><a id="__headerInfo_reg__" href="', i, "/passport/register.jsp?ret=", r, '" hidefocus="on" rel="nofollow">免费注册</a>');
                if (e.userListEle && !o) {
                    e.userTitleEle.style.display = "none"
                }
            }
        },
        _addItem: function(t, n) {
            var r = n || "";
            var i = document.createElement("DD");
            i.innerHTML = t;
            i.className = i.className + " " + r;
            e.userListEle.appendChild(i)
        },
        _getUserName: function() {
            if (!t._isLogin()) return {};
            var n = e._getinfo();
            return {
                username: n.username,
                displayName: n.displayName,
                uname: n.uname
            }
        },
        _run: function(n) {
            e._run(n);
            t._render();
            if (e.userTitleEle) {
                t._regEvent()
            }
            t._checkCookieExpire();
            t._plantCsrfToken()
        },
        _checkCookieExpire: function() {
            if (!e._cookie("_t")) {
                return
            }
            var n = (new Date((e._cookie("_t") || 0) * 6e4)).getTime(),
            r = (new Date).getTime();
            if (n > r || r > n + 12096e5) {
                if (window.QNR && window.QNR.hfUtils) {
                    window["___void"] = function() {
                        try {
                            t._plantCsrfToken()
                        } catch(e) {}
                    };
                    var i = document.createElement("script");
                    var s = document.head || document.getElementsByTagName("head")[0] || document.documentElement;
                    i.onload = i.onreadystatechange = function() {
                        t._render();
                        if (i.parentNode) {
                            s.removeChild(i)
                        }
                        return false
                    };
                    i.src = QNR.hfUtils.httpsFilter("http://user.qunar.com/webApi/forcelogout.jsp?format=js&callback=___void");
                    if (s.firstChild) {
                        s.insertBefore(i, s.firstChild)
                    } else {
                        s.appendChild(i)
                    }
                }
                setTimeout(function() {
                    t._render()
                },
                15e3)
            }
        },
        _plantCsrfToken: function() {
            var t = function(e) {
                var t = "123456789poiuytrewqasdfghjklmnbvcxzQWERTYUIPLKJHGFDSAZXCVBNM";
                var n = "";
                for (var r = 0; r < e; r++) {
                    n += t.charAt(Math.ceil(Math.random() * 1e8) % t.length)
                }
                return n
            };
            var n = e._cookie("csrfToken");
            if (!n) {
                n = t(32);
                try {
                    document.cookie = "csrfToken=" + n + ";domain=qunar.com;path=/;"
                } catch(r) {}
            }
        },
        _getFixNickName: function(e, n) {
            var r = t._getUserName().displayName || "";
            e = typeof e == "number" ? e: 7;
            return r.length > e ? r.substr(0, e) + (n || "...") : r
        }
    };
    var n = {};
    n["isLogin"] = t._isLogin;
    n["render"] = t._render;
    n["addItem"] = t._addItem;
    n["getUserName"] = t._getUserName;
    n["run"] = t._run;
    n["getFixNickName"] = t._getFixNickName;
    if (typeof QNR === "undefined") {
        window["QNR"] = {}
    }
    QNR["QUstatus"] = n;
    var r = function() {};
    r.prototype = {
        getQueryString: function(e, t) {
            try {
                var n = new RegExp("(^|&|\?)" + t + "=([^&]*)(&|$)"),
                r;
                if (r = e.match(n)) {
                    return unescape(r[2])
                }
                return null
            } catch(i) {
                return null
            }
        },
        setCookie: function(e, t, n, r, i) {
            var s = n + "=" + escape(r) + "; ";
            var o = "path=" + "/" + "; ";
            var u = "domain=" + e + ";";
            var a = s + o + u;
            if (i) {
                var f = new Date((new Date).getTime() + i * 36e5);
                var l = "expires=" + f.toGMTString() + "; ";
                a = a + l
            }
            document.cookie = a
        },
        init: function() {
            var e = window.location.search;
            var t = this.getQueryString(e, "ex_track");
            if (t && t.indexOf("bd_zhixin") === 0) {
                this.setCookie(".qunar.com", "/", "QN205", "bdzx")
            }
        }
    };
    var i = new r;
    i.init()
})();; (function() {
    function r(e) {
        return document.getElementById(e)
    }
    function s(e) {
        var t = /(windows)/;
        return t.test(e)
    }
    function o(e) {
        function l(e) {
            var i = r.exec(e) || t.exec(e) || n.exec(e) || s.exec(e) || o.exec(e) || u.exec(e) || e.indexOf("compatible") < 0 && a.exec(e) || [];
            return {
                browser: i[1] || "",
                version: i[2] || "0"
            }
        }
        var t = /(chrome)[ \/](\d+)/,
        n = /(safari)/,
        r = /(360se|360ee)/,
        i = /(webkit)[ \/]([\w.]+)/,
        s = /(opera)(?:.*version)?[ \/]([\w.]+)/,
        o = /(msie) (\d+)/,
        u = /(firefox)[ \/](\d+)/,
        a = /(mozilla)(?:.*? rv:(\d+))?/,
        f = /netscape/;
        browserMatch = l(e);
        var c = {};
        if (browserMatch.browser) {
            c[browserMatch.browser] = true;
            c.version = browserMatch.version
        }
        return c
    }
    function u() {
        try {
            if (/maxthon/.test(i)) {
                return true
            } else {
                return false
            }
        } catch(e) {
            return false
        }
    }
    function a() {
        try {
            var e = /(maxthon)[ \/](\d+)/.exec(i);
            if (e) {
                return e[2]
            } else {
                var t = window.external.max_version;
                var n = t.split(".")[0];
                if (n) {
                    return n
                } else {
                    return 0
                }
            }
        } catch(r) {
            return 0
        }
    }
    function f(e, t) {
        if (/opera|the world|qqbrowser|tencenttraveler|theworld/.test(t)) {
            return 2
        } else {
            var n = u();
            if (n) {
                var r = a();
                return r < 4 ? 1 : 0
            } else if (t.indexOf("se 2.x") > -1) {
                if (e.chrome) {
                    return e.version < 18 ? 1 : 0
                } else if (/metasr/.test(t)) {
                    return 0
                } else {
                    return 1
                }
            } else if (e.msie) {
                return e.version <= 7 ? 1 : 0
            } else if (e.chrome) {
                return e.version < 18 ? 1 : 0
            } else if (e.firefox) {
                return e.version < 12 ? 1 : 0
            }
        }
        return 0
    }
    function l() {
        if (d(e) == 1) {
            if (r(t)) {
                r(t).style.display = "none"
            }
            return
        }
        var n = o(i);
        var u = f(n, i);
        var a = s(i);
        if (u === 1) {
            v("您目前的浏览器版本过低，可能导致网站部分功能无法正常使用，建议尽快升级您的浏览器")
        } else if (u === 2) {
            if (a) {
                v('为保证您能顺畅体验去哪儿网的服务，建议改用 <a href = "http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank" rel="nofollow">Internet Explorer</a>、<a href = "http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank" rel="nofollow">Google Chrome</a>、<a href = "http://firefox.com.cn/download/" target="_blank" rel="nofollow">Mozilla Firefox</a> 等浏览器。')
            } else {
                v('为保证您能顺畅体验去哪儿网的服务，建议改用 <a href = "http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank" rel="nofollow">Google Chrome</a>、<a href = "http://firefox.com.cn/download/" target="_blank" rel="nofollow">Mozilla Firefox</a> 等浏览器。')
            }
        }
    }
    function c() {
        var e = r(n);
        if (e) e.onclick = function(e) {
            e = e || window.event;
            if (e.preventDefault) {
                e.preventDefault()
            } else {
                e.returnValue = false
            }
            h()
        }
    }
    function h() {
        var n = r(t);
        if (n) n.style.display = "none";
        p(e, 1, 2592e3, "/", "qunar.com")
    }
    function p(e, t) {
        var n = new Date;
        var r = arguments,
        i = r.length;
        var s = i > 2 ? r[2] : null;
        var o = i > 3 ? r[3] : null;
        var u = i > 4 ? r[4] : null;
        var a = i > 5 ? r[5] : false;
        if (s != null) n.setTime(n.getTime() + s * 1e3);
        document.cookie = e + "=" + escape(t) + (s == null ? "": "; expires=" + n.toGMTString()) + (o == null ? "": "; path=" + o) + (u == null ? "": "; domain=" + u) + (a == true ? "; secure": "")
    }
    function d(e) {
        var t = document.cookie.match(new RegExp("(^| )" + e + "=([^;]*)(;|$)"));
        if (t != null) return unescape(t[2]);
        return null
    }
    function v(e) {
        var n = document.getElementsByTagName("body")[0];
        var r = n.firstChild;
        var i = document.createElement("div");
        i.id = t;
        i.className = "qhf_sysnotice";
        i.innerHTML = ['<div class="qhf_sysnotice_info"><a id="up_notice_close" href="#" title="不再提示" class="qhf_sysnotice_close"></a>', e, "</div>"].join("");
        n.insertBefore(i, r);
        setTimeout(c, 0)
    }
    var e = "QN38",
    t = "up_notice_wrap",
    n = "up_notice_close";
    var i = navigator.userAgent.toLowerCase();
    l()
})();; (function() {
    QNR.TAB = "flight";
    var e = QNR.QUstatus;
    e.run({
        u: "__loginInfo_u__",
        t: "__loginInfo_t__",
        l: "__loginInfo_l__",
        r: "__loginInfo_r__"
    })
})();; (function() {
    var e = window["QNR"]["hfUtils"],
    t = ["package", "travel", "car", "piao", "tuan", "jr", "ddr"],
    n,
    r = document.getElementById("__header_nav_tags__"),
    i = document.getElementById("__header_navmore__"),
    s = document.getElementById("__header_navmore_con__"),
    o = r.children,
    u = new Date,
    a = new Date("2015-08-23 00:00:00"),
    f = u.getTime(),
    l = a.getTime(),
    c = "";
    if (f > l) {
        c = e.getElementsByClassName(r, "qhf_tag_package")[0];
        c.parentNode.removeChild(c)
    }
    num = Math.floor(Math.random() * o.length);
    n = function(t) {
        var n = document.getElementById("__header_aside_" + t + "__"),
        r = n.children,
        i,
        s,
        o,
        u;
        for (var a = 0; a < r.length; a++) {
            if (r[a].tagName.toLowerCase() === "a") {
                e.bindEvent(r[a], "click",
                function() {
                    e.GA.clk(t + "|" + this.innerHTML.replace(/.*<span>|<\/span>.*/gi, ""), 170)
                })
            }
        }
        if ( !! n && QNR.TAB && QNR.TAB !== t) {
            u = document.getElementById("__link_" + t + "__");
            target = u.parentNode;
            fnIn = function(e) {
                if ( !! i) clearTimeout(i);
                i = setTimeout(function() {
                    u.className = u.className.replace(" q_header_hover ", "");
                    u.className = u.className + " q_header_hover ";
                    n.style.display = "block"
                },
                100);
                return false
            };
            fnOut = function(e) {
                if ( !! i) clearTimeout(i);
                i = setTimeout(function() {
                    u.className = u.className.replace(" q_header_hover ", "");
                    n.style.display = "none"
                },
                100);
                return false
            };
            e.bindEvent(target, "mouseover", fnIn);
            e.bindEvent(target, "mouseout", fnOut);
            e.bindEvent(n, "mouseover", fnIn);
            e.bindEvent(n, "mouseout", fnOut)
        }
    };
    for (var h = 0; h < t.length; h++) {
        n(t[h])
    }
    o[num] && (o[num].style.display = "block");
    if ( !! i) {
        e.bindEvent(i, "mouseover",
        function() {
            i.className = i.className.replace(" q_header_hover ", "");
            i.className = i.className + " q_header_hover ";
            s.style.display = "block"
        });
        e.bindEvent(i, "mouseout",
        function() {
            i.className = i.className.replace(" q_header_hover ", "");
            s.style.display = "none"
        })
    }
})();; (function() {
    function e(e) {
        return document.getElementById(e)
    }
    function t(e, t) {
        if (document.documentElement.contains) {
            return e !== t && (e.contains ? e.contains(t) : true)
        } else if (document.documentElement.compareDocumentPosition) {
            return !! (e.compareDocumentPosition(t) & 16)
        } else {
            return false
        }
    }
    function n(e) {
        if (String.prototype.trim) {
            return e.trim()
        }
        return e.replace(/^\s+/, "").replace(/\s+$/, "")
    }
    function r(e) {
        var t = {};
        var r = document.cookie.split(";");
        for (var i = 0; i < r.length; i++) {
            var s = r[i];
            var o = s.split("=");
            if (s.indexOf("=") != -1) t[n(o[0])] = n(o[1])
        }
        if ( !! t[e]) {
            return decodeURIComponent(t[e])
        } else {
            return null
        }
    }
    var i = encodeURIComponent;
    var s = "http://user.qunar.com/order/query.jsp?ret=";
    var o = {
        eventBind: function() {
            var n = e("__orderInfo_l__");
            var r;
            e("__orderInfo_b__").onmouseover = function() {
                n.className = "q_header_tnav_omenu q_header_tnav_omenu_hover"
            };
            e("__orderInfo_l__").onmouseout = function(e) {
                e = e || window.event;
                r = e.relatedTarget || e.toElement;
                if (r !== null && !t(this, r)) {
                    this.className = "q_header_tnav_omenu"
                }
            }
        },
        updateUI: function(t) {
            var n = {
                _ele: e("__tnav_card_order__"),
                _href: "http://order.qunar.com/qunar_card/?t=1 ",
                _href1: "https://user.qunar.com/passport/login.jsp?ret=http://order.qunar.com/qunar_card/?t=1"
            };
            if ( !! t) {
                var r = e("q_header_tnav_omenu_link");
                r.href = "http://order.qunar.com/"
            }
            if (t) {
                n["_ele"].href = n["_href"]
            } else {
                n["_ele"].href = n["_href1"]
            }
        },
        run: function() {
            var e = this;
            e.eventBind();
            var t = r("_q") || null;
            e.updateUI(t)
        }
    };
    if (e("__orderInfo_l__")) {
        o.run()
    }
})();; (function() {
    var e = window["QNR"]["hfUtils"]["GA"];
    var t = ["home", "flight", "hotel", "tuan", "package", "train", "travel", "gongyu", "piao", "ddr", "car", "bus", "card", "app", "guide", "jr", "app_navmore", "guide_navmore"];
    t = t.concat(["hotelzt", "contact"]);
    t = t.concat(["orderFlight", "orderHotel", "orderApartment", "orderTuan", "orderTrain", "orderPiao", "orderVacation", "orderDdr", "orderCar", "orderFlightorder"]);
    var n = {
        hotelzt: "1265",
        contact: "170"
    };
    for (var r = 0,
    i = t.length; r < i; r++) {
        var s = document.getElementById("__link_" + t[r] + "__");
        if ( !! s) {
            s.onclick = function() {
                try {
                    var t = this.id.replace(/link|\s|_|navmore/g, "");
                    e.clk(t, n[t] || 170)
                } catch(r) {}
            }
        }
    }
    var o = document.getElementById("__link_mall__"),
    u,
    a;
    if (o) {
        u = o.getAttribute("href");
        domain = window.location.host.replace(/\.(.*)$|^www/, "");
        o.href = u + "?from=" + domain + "topheader"
    }
})();; (function() {
    function A(e) {
        if (e === "" || e === null || typeof e === "undefined") {
            return true
        } else {
            return false
        }
    }
    function O() {
        var e = n.getCookie("_q");
        if (e && /^U\./.test(e)) {
            g = e.replace(/^U\./, "").replace(/"/g, "");
            n.setCookie("QN44", g, null, "/", "qunar.com")
        }
    }
    function M() {
        var e = document.getElementById("q_header_btn_message");
        e.onclick = function() {
            p.clk("点击消息按钮", 1625);
            top.location.href = "http://user.qunar.com/index.jsp?p_message#message"
        };
        n.bindEvent(y, "click",
        function(e) {
            var t = n.hasClass;
            var r = e.relatedTarget || e.srcElement;
            var i = r.parentNode;
            var s;
            if (t(r, "q_header_qm_link") || t(r, "q_header_qm_link2")) {
                s = i.innerText || i.textContent;
                p.clk(s, "1625")
            } else if (t(r, "qm_foote_right")) {
                s = r.innerText || r.textContent;
                p.clk(s, "1625")
            }
        })
    }
    function _() {
        n.bindEvent(b, "mouseover",
        function() {
            if (!n.hasClass(this.parentNode, "qm-hide-dp")) {
                n.addClass(y, "q_header_qm_hover");
                x.setAttribute("aria-hidden", "false");
                T.setAttribute("aria-hidden", "true")
            }
            t("onmouseover")
        });
        n.bindEvent(y, "mouseout",
        function(e) {
            var r = e.relatedTarget || e.toElement;
            if (r !== null && r !== y && !n.contains(y, r)) {
                n.removeClass(y, "q_header_qm_hover");
                x.setAttribute("aria-hidden", "ture");
                if (n.hasClass(y, "q_header_qm_autoshow")) {
                    T.setAttribute("aria-hidden", "false")
                }
            }
            t("onmouseout")
        });
        n.bindEvent(C, "click",
        function(e) {
            var t = e.srcElement || e.target;
            if (t.className.indexOf("q_header_qm_close") >= 0) {
                var r = function() {
                    n.removeClass(y, "q_header_qm_autoshow");
                    T.setAttribute("aria-hidden", "true");
                    X()
                };
                I(r)
            }
        });
        n.bindEvent(N, "click",
        function(e) {
            var t = e.srcElement || e.target;
            var r = t.getAttribute("autoshow");
            if ((r === false || r === "false") && t.className.indexOf("q_header_qm_link") >= 0) {
                var i, s, o, u, a, f;
                i = t.getAttribute("msgids");
                if (i) {
                    u = "source=ucenter&messageIds=" + i;
                    a = "http://user.qunar.com/webapi/message/mark_read"
                } else {
                    s = t.getAttribute("product");
                    o = n.getCookie("QN44");
                    a = "http://user.qunar.com/webApi/unpayclear.jsp";
                    u = "format=js&product=" + s + "&username=" + o
                }
                f = function(e) {
                    if (e.ret) {
                        P()
                    }
                };
                n.jsonpCall(a, u, f)
            }
        })
    }
    function D() {
        y = document.getElementById("li_message");
        if (y) return;
        y = document.createElement("li");
        var e = n.getElementsByClassName(document.body, "q_header_tnav")[0];
        var t = n.getElementsByClassName(e, "q_header_tnav_omenu")[0];
        y.className = "q_header_message qm-hide-dp ";
        y.id = "li_message";
        y.innerHTML = '<div class="q_header_qm_inner"><a id="q_header_btn_message" href="http://user.qunar.com/message/list" class="q_header_message_number" aria-haspop="true"><i></i><span class="qm_text">消息</span><b class="q_header_message_count "></b><b class="q_header_qm_arrow"></b></a></div><div class="q_header_qm_dp qm_dp_autoshow" aria-hidden="true"><div class="q_header_qm_body"></div></div><div class="q_header_qm_dp q_header_qm_dp_hover" aria-hidden="true"><div class="q_header_qm_body"><div class="q_header_qm_no_msg">暂无新消息</div></div><div class="q_header_qm_footer"><a class="qm_foote_right" target="_blank" href="http://user.qunar.com/message/list">查看更多</a></div>';
        b = n.getElementsByClassName(y, "q_header_qm_inner")[0];
        x = n.getElementsByClassName(y, "q_header_qm_dp_hover")[0];
        T = n.getElementsByClassName(y, "qm_dp_autoshow")[0];
        N = n.getElementsByClassName(x, "q_header_qm_body")[0];
        C = n.getElementsByClassName(T, "q_header_qm_body")[0];
        t.parentNode.insertBefore(y, t)
    }
    function P() {
        s = 0;
        var e = n.getCookie("QN44");
        if (l === 0 || v === "half" || i()) {
            B();
            if (l === 0) {
                j(true)
            } else if (v === "login") {
                j()
            }
            H();
            l += 1
        } else {
            if (A(e) && v !== "half") {
                O()
            } else {
                s = 1;
                w = {
                    total_num: 0,
                    list: []
                };
                j(true);
                H();
                l += 1
            }
        }
        L = setTimeout(P, a * f * 1e3)
    }
    function H() {
        var e = "1111222244";
        f = e.charAt(l) || 8
    }
    function B() {
        var e = d + "//user.qunar.com/webapi/message/unreadTipList";
        var t = function(e) {
            if (e.ret) {
                w = e.data;
                v = w.login_status || "no";
                s = s ^ 1;
                if (s === 11) {
                    F()
                }
            } else {
                v = "no"
            }
        };
        var r = "";
        n.jsonpCall(e, r, t)
    }
    function j(e) {
        var t = d + "//user.qunar.com/webApi/unpaycount.jsp";
        var r = n.getCookie("QN44");
        var i = "format=js&username=" + r;
        var o = "http://user.qunar.com/order/query.jsp?ret=";
        var a = "http%3A%2F%2Forder.qunar.com%2F";
        var f = {
            hotel: {
                url: a + "hotel%2F%3Ffrom%3Dmyorder",
                name: "酒店",
                sort: 0,
                v: 1
            },
            flight: {
                url: "http%3A%2F%2Fflight.order.qunar.com%2Fflight",
                name: "机票",
                sort: 1,
                v: 0
            },
            tuan: {
                url: a + "group",
                name: "团购",
                sort: 2,
                v: 3
            },
            vacation: {
                url: "http%3A%2F%2Fdujia.qunar.com%2Fmyorder.jsp%3Ffrom%3Dmyorder",
                name: "度假",
                sort: 3,
                v: 4
            },
            train: {
                url: a + "train?t=1",
                name: "火车票",
                sort: 4,
                v: 6
            },
            piao: {
                url: a + "ticket?t=1",
                name: "门票",
                sort: 5,
                v: 5
            },
            car: {
                url: a + "car?t=1",
                name: "车车",
                sort: 6,
                v: 7
            },
            apartment: {
                url: a + "apartment?t=1",
                name: "公寓",
                sort: 7,
                v: 2
            },
            ddr: {
                url: a + "local?t=1",
                name: "当地人",
                sort: 8,
                v: 9
            },
            bus: {
                url: a + "bus?t=1",
                name: "汽车",
                sort: 9,
                v: 10
            },
            flightorder: {
                url: "http%3A%2F%2Ftinfo.qunar.com%2Forder%2Fmytickets%3Fcatalog%3Dmysubscribe",
                name: "机票预约",
                sort: 10,
                v: 8
            }
        };
        var l = function(t) {
            if (t.ret) {
                var r = t.data;
                if (r && typeof r === "object" && r.total > 0) {
                    var i, a, l = r.vacation,
                    c = r.visible;
                    if ( !! e) {
                        E = [];
                        for (var p in r) {
                            var d = r[p];
                            if (d > 0 && r.hasOwnProperty(p) && f.hasOwnProperty(p)) {
                                var v = f[p];
                                var m = +c[v.v];
                                var g = {
                                    count: d,
                                    autoShow: !!m,
                                    sort: v.sort << 16 | +d.count,
                                    url: o + v.url,
                                    message: "个" + v.name + "订单待支付",
                                    urlName: m ? "立即支付": "查看",
                                    product: p
                                };
                                E.push(g)
                            }
                        }
                    } else {
                        if (l > 0) {
                            var d = Boolean( + c[4]);
                            E = [{
                                count: l,
                                autoShow: d,
                                sort: (4 << 16) + l,
                                url: o + f.vacation.url,
                                message: "个度假订单待支付",
                                urlName: d ? "立即支付": "查看",
                                product: "vacation"
                            }]
                        }
                    }
                    a = +r.lasttime;
                    i = a + u - +(new Date);
                    if (a > 0) {
                        if (h !== a && !n.getCookie("_q")) {
                            n.setCookie("QN44", n.getCookie("QN44"), i / 1e3, "/", "qunar.com")
                        }
                    } else {
                        h = a
                    }
                } else {
                    E = null
                }
            } else {
                E = null
            }
            s = s ^ 10;
            if (s === 11) {
                F()
            }
        };
        n.jsonpCall(t, i, l)
    }
    function F() {
        var e, r, i, s;
        if (E) {
            w = n.extend({},
            {
                total_num: 0,
                other: 0,
                list: []
            },
            w);
            for (var o = E.length - 1; o >= 0; o--) {
                w.total_num += E[o].count
            }
            if (!w.list) {
                w.list = []
            }
            w.list = w.list.concat(E)
        }
        if (w.hasOwnProperty("list") && w.list.length > 0) {
            w.list.sort(function(e, t) {
                return e.sort > t.sort ? 1 : -1
            })
        }
        if (typeof JSON === "object" && JSON.stringify && typeof S !== "undefined" && JSON.stringify(w) === JSON.stringify(S)) {
            if (m === 0 && n.hasClass(y, "q_header_qm_autoshow")) {
                n.removeClass(y, "q_header_qm_autoshow");
                T.setAttribute("aria-hidden", "true")
            } else if (m > 0 && !n.hasClass(y, "q_header_qm_autoshow")) {
                n.addClass(y, "q_header_qm_autoshow");
                T.setAttribute("aria-hidden", "false");
                U();
                if (e) W(e)
            }
            return
        }
        S = w;
        m = J();
        r = document.getElementById("q_header_btn_message");
        i = r.getElementsByTagName("i")[0];
        s = n.getElementsByClassName(r, "q_header_message_count")[0];
        e = K();
        n.removeClass(i, "q_header_message_red");
        n.removeClass(s, "q_header_message_n");
        n.removeClass(r, "q_header_message_number");
        n.removeClass(y, "q_has_message");
        s.innerHTML = "";
        if (S.total_num > 0) {
            var u = S.list;
            for (var a = 0; a < u.length; a++) {
                var f = u[a];
                if (f.url === "https://pay.qunar.com/member") {
                    f.url = f.url + "/"
                }
            }
            n.addClass(i, "q_header_message_red");
            n.addClass(r, "q_header_message_number");
            n.addClass(y, "q_has_message");
            n.removeClass(y, "qm-hide-dp");
            if (S.total_num < 10) {
                s.innerHTML = S.total_num
            } else {
                s.innerHTML = "9<small>+</small>"
            }
            if (m > 0) {
                n.addClass(y, "q_header_qm_autoshow");
                T.setAttribute("aria-hidden", "false");
                U();
                W(e)
            } else {
                X();
                n.removeClass(y, "q_header_qm_autoshow");
                T.setAttribute("aria-hidden", "true")
            }
            z();
            M();
            r = null;
            i = null;
            c = 0
        } else {
            n.addClass(y, "qm-hide-dp");
            if (S.other > 0) {
                n.addClass(i, "q_header_message_red")
            }
            if (c === 10) {
                n.setCookie("QN44", "", 0, "/", "qunar.com");
                h = 0
            }
            if (n.hasClass(y, "q_header_qm_autoshow")) {
                n.removeClass(s, "q_header_qm_autoshow");
                T.setAttribute("aria-hidden", "ture");
                X();
                c = 0
            } else {
                c += 1
            }
            t(c)
        }
        window.QNR.hfUtils.onMessageRequestComplete()
    }
    function I(e) {
        q(e);
        R(e)
    }
    function q(e) {
        var t = d + "//user.qunar.com/webapi/message/hideHeaderTipListCell";
        var r = "";
        var i = function(t) {
            if (t.ret) {
                if (typeof e === "function" && o === 0) {
                    e();
                    o = 1
                }
            }
        };
        n.jsonpCall(t, r, i)
    }
    function R(e) {
        var t = d + "//user.qunar.com/webApi/unpayclear.jsp";
        var r = "format=js&username=" + n.getCookie("QN44");
        var i = function(t) {
            if (t.ret === t.errmsg === true && o === 0) {
                if (typeof e === "function") {
                    e();
                    o = 1
                }
            }
        };
        n.jsonpCall(t, r, i)
    }
    function U() {
        var e = S.list.length,
        t = 0;
        C.innerHTML = '<a class="q_header_qm_close" title="关闭"></a>';
        for (var n = 0; n < e; n++) {
            var r = S.list[n];
            if (t < 3 && !!r.autoShow) {
                var i = new $(r);
                t += 1;
                C.appendChild(i._dom)
            }
        }
    }
    function z() {
        N.innerHTML = "";
        n.removeClass(y, "qm-hide-dp");
        if (S.total_num === 0) {
            N.innerHTML = '<div class="q_header_qm_no_msg">暂无新消息</div>';
            return
        }
        if (S.list && S.list.length > 0) {
            for (var e = 0,
            t = S.list.length; e < t && e < 3; e++) {
                var r = S.list[e],
                i;
                i = new V(r);
                N.appendChild(i._dom)
            }
        } else {
            n.addClass(y, "qm-hide-dp")
        }
    }
    function W(e) {
        var t = 0,
        n, i;
        if (!e) {
            return
        }
        if (e <= 0) {
            return
        }
        if (k) {
            X()
        }
        n = ("" + e).length + 6;
        i = {
            "-1": "【" + e + "个订单待支付】",
            0 : "【" + (new Array(n)).join("　") + "】"
        }; (function s() {
            t = ~t;
            document.title = i[t] + r;
            k = setTimeout(function() {
                s()
            },
            1e3)
        })()
    }
    function X() {
        clearTimeout(k);
        document.title = r
    }
    function V(e) {
        var t = this;
        t._data = e;
        t._dom = document.createElement("div");
        n.addClass(this._dom, "q_header_qm_item");
        t._dom.innerHTML = '<span class="q_header_qm_red">' + t._data.count + '</span ><span class="q_header_qm_word">' + t._data.message + '</span><a class="q_header_qm_link" target="_blank" autoshow="' + t._data.autoShow + '" product="' + (t._data.product || "") + '" ' + 'msgids="' + (t._data.msgIds ? t._data.msgIds.join(",") : "") + '" href="' + t._data.url + '">' + t._data.urlName + "</a>"
    }
    function $(e) {
        var t = this;
        t._data = e;
        t._dom = document.createElement("div");
        n.addClass(this._dom, "q_header_qm_item");
        t._dom.innerHTML = '<span class="q_header_qm_red">' + e.count + '</span><span class="q_header_qm_word">' + e.message + '</span><a class="q_header_qm_link2" target="_blank" href="' + e.url + '">' + e.urlName + "</a>"
    }
    function J() {
        var e = S && S.list,
        t = 0;
        if (e) {
            for (var n = 0,
            r = e.length; n < r && n < 3; n++) {
                var i = e[n];
                if (i.autoShow) t += +i.count
            }
        }
        return t
    }
    function K() {
        var e = S && S.list,
        t = 0;
        if (e) {
            for (var n = e.length - 1; n >= 0; n--) {
                var r = e[n];
                if (r.urlName === "立即支付") {
                    t += +r.count
                }
            }
        }
        return t
    }
    var e = false;
    var t = function() {
        if (e && typeof console != "undefined" && console.log) {
            console.log(arguments[0])
        }
    };
    var n = window.QNR.hfUtils,
    r = document.title,
    i = function() {
        var e = n.getCookie("QN44");
        return !! e && !/^G\.(.+)/.test(e)
    },
    s = 0,
    o = 0,
    u = 864e5,
    a = 15,
    f = 1,
    l = 0,
    c = 0,
    h = 0,
    p = window.QNR.hfUtils.GA,
    d = window.location.protocol,
    v = "no",
    m = 0,
    g,
    y,
    b,
    w,
    E,
    S,
    x,
    T,
    N,
    C,
    k,
    L;
    O();
    D();
    P();
    _();
    window.QNR.hfUtils.getMessages = B;
    window.QNR.hfUtils.getData = P;
    window.QNR.hfUtils.onMessageRequestComplete = function() {};
    window.QNR.hfUtils.dataStateCode = s
})();
</script>
    </div>

    <div class="q_pagecontainer" id="j-pagecontainer">
    <div class="q_pagewrap">
        <div class="dlAd" id="ad_active_container">
            <div class="dll"><abbr style="display:none;" id="home_active_couplet_left" data-style="width:120px;"></abbr></div>
            <div class="dlr">
                <abbr style="display:none;" id="home_active_couplet_right" data-style="width:120px;"></abbr>

                <abbr style="display:none;" data-type="qde" data-query="chan=flight&pg=list&pos=right&site=qunar&size=120x300&type=couplet" id="couplet_load"></abbr>
                <abbr style="display:none;" data-type="qde" data-query="chan=flight&pg=list&pt=dmst&site=qunar&type=static_Skinned" id="dwad_right"></abbr>
            </div>
        </div>
        <!--search-->
<div class="b_fly_hwrap">
    <div class="b_fly_schwrap" id="js_schwrap">
        <div class="e_fly_sch">
            <div class="crl_group">
                <form id="searchboxForm" action="/s/twell/flight/Search.php" method="get">
                    <input type="hidden" name="from" value="fi_re_search" id="js_setfrom">
                    <input type="hidden" name="SearchLocation" value="sbox_search">
                    <div class="crl_sp_sel">
                        <div class="yselector" id="selbox_module">
                            <div class="yselector_box">
                                <div class="yselector_arraw"><b></b></div>
                                <span class="yselector_input">单程</span>
                            </div>
                        </div>
                        <div id="search_selbox"></div>
                        <input type="hidden" name="searchType" id="searchType" value="OnewayFlight">
                    </div>
                    <div class="crl_sp_city">
                        <div class="controls">
                            <div style="z-index: 40;" class="qcbox qcity">
                                <div class="boxWrapper">
                                    <div class="qcbox-mark">从</div>
                                    <div class="boxContainer"><div class="sinfo"></div><div class="sicon"></div><div style="clear:both"></div></div>
                                </div><input type="text" autocomplete="off" spellcheck="false" name="fromCity" class="textbox" spellcheck="false"/>
                            </div>
                        </div>
                        <span id="js-exchagne-city" title="互换出发、到达城市"  class="lnk_change">换</span>
                        <div class="controls">
                            <div style="z-index: 30;" class="qcbox qcity">
                                <div class="boxWrapper"><div class="qcbox-mark">到</div>
                                    <div class="boxContainer"><div class="sinfo"></div><div class="sicon"></div><div style="clear:both"></div></div>
                                </div><input type="text" autocomplete="off" spellcheck="false" name="toCity" class="textbox" spellcheck="false"/>
                            </div>
                        </div>
                    </div>
                    <div class="crl_sp_date">
                        <div class="controls">
                            <div style="z-index: 20;" class="qcbox qdate fromD">
                                <div class="boxWrapper"><div class="qcbox-mark">往</div>
                                    <div class="boxContainer"><div class="sinfo"></div><div class="sicon"><i></i></div><div style="clear:both"></div></div>
                                </div><input type="text" autocomplete="off" spellcheck="false" name="fromDate" class="textbox" />
                            </div>
                        </div>
                        <div style="" class="controls js-backdate" id="arrivalDateDiv_disable">
                            <div style="z-index: 10;" class="qcbox qdate toD qcbox_disable">
                                <div class="boxWrapper"><div class="qcbox-mark">返</div>
                                    <div class="boxContainer"><div class="sinfo"></div><div class="sicon"><i></i></div><div style="clear:both"></div></div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="controls js-backdate" id="arrivalDateDiv">
                            <div style="z-index: 10;" class="qcbox qdate toD">
                                <div class="boxWrapper"><div class="qcbox-mark">返</div>
                                    <div class="boxContainer"><div class="sinfo"></div><div class="sicon"><i></i></div><div style="clear:both"></div></div>
                                </div><input type="text" autocomplete="off" spellcheck="false" name="toDate" class="textbox" />
                            </div>
                        </div>
                    </div>
                    <div class="crl_sp_action">
                         <button type="submit" class="btn_sch" id="js_btn_sch">搜&nbsp;索</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--\search-->

        <div class="q_page">
        <!--左侧-->
        <div class="l_lside">
            <div><abbr id="ifrNTOPAD" data-lazyAD="1" style="display:none;" data-style="margin-bottom:6px;width:100%;" data-type="qad" data-query="vataposition=QNR_OQ==_CN&tag=0&rows=3&cur_page_num=0&rep=1&f=s"></abbr></div>
            <div style="padding: 0 6px;"><abbr id="ifrmVendorBanner" data-type="qde"  data-query="chan=flight&pg=list&pos=top&site=qunar&size=728x90"  data-style="margin-bottom:6px;width:100%;" style="display:none;" ></abbr></div>
        <div class="b_flt_check">
            <!--行程报价-->
            <div class="e_flt_ifo" id="progTip" style="display: none;"></div>
            <!--\行程报价-->
            <!--时间选择-->
            <div class="e_flt_date" id="searchDateBar" style="display: none;"></div>
            <!--\时间选择-->
            <!--时间filter-->
            <div class="clrfix" id="hdivfilterPanel"></div>
            <!--\时间filter-->
            <div id="roundtripVendor" style="display: none;"></div>

        </div>
        <!--航班信息-->
        <div class="b_fly_detail">
        <div class="e_fly_th">
            <ul>
                <li class="c0">&nbsp;</li>
                <li class="c1">航班信息</li>
                <li class="c2"><a id="btnDepttimeOrderArror" href="#">起降时间<i class="i_arr_ud"></i></a></li>
                <li class="c3">起降机场</li>
                <li class="c4">准点率/平均延时</li>
                <li class="c5">机票推荐</li>
                <li class="c6"><a href="#" id="btnPriceOrderArror">最低报价<i class="i_arr_ud"></i></a>（不含税费）</li>
            </ul>
        </div>
            <!--酒店红包广告-->
            <!--div id="hotel_hongbao" style="diaply:none"></div-->
            <!--酒店红包广告-->
            <!--航班列表-->
        <div id="Lw_historyprice" class="hisPnl"></div>
        <div id="Lw_recommed" class="upTimePanel"></div>
        <div id="dflightRecommendPanel"></div>
        <div id="js-fuzzyflight" class="fuzzy-flight" style="display: none;"></div>
        <a id="resultAnchor"></a>
        <div class="e_fly_lst" id="hdivResultPanel">
            <div class="loading"><p class="msg">请稍等,您查询的结果正在实时搜索中...</p><div><img src="http://simg1.qunarzz.com/site/images/loading.gif" alt="loading" width="114" height="16"></div><p class="msg2">想去哪儿就去哪儿</p></div>
        </div>
            <!--航班列表-->
            <div class="subenv"><a href="http://subscribe.qunar.com/info/addSub.do?s=20" target="_blank"  hidefocus="on">一折机票，抢先预约！</a></div>
            <div id="detailPage" style="display:none;" class="pager" >
                <div class="ps" >
                    <span class="t">显示</span><div id="hdivPageSizer" class="cs"></div><span class="t">条/页</span>
                </div>
                <div id="hdivPager"></div>
            </div>

        </div>
        <!--\航班信息-->
            <abbr id="listBottomAD" style="display:none;" data-style="margin-bottom:6px;width:100%;" data-type="qad" data-query="vataposition=QNR_YTM=_CN&tag=0&rows=3&cur_page_num=0&rep=1&f=s"></abbr>
        <!-- 度假推荐 -->
        <div class="dujia_recommend" id="dujiaRecommend"></div>

        <!-- 相关航线 -->
        <div id="dFlightPanel" class="rl" style="display: none;"></div>
        
        
            <!-- 价格趋势 -->
        <div id="dTrendflashPanel" class="fpt">
                <div id="trendTitle" class="hd"></div>
                <ul id="hulTrend" style="display:none;"></ul>
                <div class="ct">
                    <div id="hdivTrendFlash" class="b_fly_iframe_h" style="display: none;"></div>
                </div>
        </div>
        <!-- 返程推荐 -->
        <div id="dSpringPanel" class="rl" style="display: none;"></div>
        <div class="b_fly_iframe_h" style="display: none;">
              <abbr id="hotelSearch" data-style="width:100%;"></abbr>
        </div>
        <div class="b_fly_iframe_h" style="display: none;">
                <abbr id="frmTuan" data-lazyAD="1" data-type="qde_auto"  data-style="margin-bottom:6px;width:100%;" data-src="http://tuan.qunar.com/api/latesttuan.php?ifrmId=frmTuan&site=flight"></abbr>
        </div>
        <div style="padding: 0 6px;"><abbr id="middleAd" data-type="qde"  data-query="chan=flight&pg=list&pos=bottom&site=qunar&size=728x90"  data-style="margin-top:6px;width:100%;" style="display:none;" ></abbr></div>
        <div id="hdivVisaInfo"></div>

        </div>
        <!--\左侧-->
        <!--右侧-->
        <div class="l_rside">
            <!--广告-->
            <div id="Lw_Tips_swf" class="Lw_Tips" style="display:none;padding:0 0 0 5px;"></div>
            <div>
                <abbr id="ifrFlightResultRightAd" data-type="qde"  data-query="chan=flight&pg=list&pos=top&site=qunar&size=230x200&adtype=flash"  data-style="margin-bottom:6px;width:100%;" style="display:none;" ></abbr>
                <div id="js-mod-recommendRoundtrip"></div>
                <div>
                    <abbr id="ifrRightTopAd1" data-type="qde"  data-query="chan=flight&pg=list&pos=top&site=qunar&size=230x90"  data-style="margin-bottom:6px;width:100%;" style="display:none;" ></abbr>
                </div>
                <div id="FlightResultRightAd"></div>
                <style type="text/css">
    .b_bao_pn .e_bao{ margin-bottom:5px;}
    .b_bao_pn .e_pn{ line-height:25px; text-align:center; padding-bottom:10px;}
    .b_bao_pn .e_pn .hl{ color:#cc0000; font:16px/25px "microsoft yahei";}
    .b_bao_pn .e_pn .h4{ font-size:12px}
    .b_bao_pn .e_pn .h4 span{color:#cc0000;}
</style>
<div class="b_bao_pn">
    <div class="e_bao">
        <a href="http://www.qunar.com/xiaobao/flight.html" target="_blank">
            <img src="http://simg1.qunarzz.com/site/images/flight/flight_v1/bg_bao_v1.png" alt="全程预订保障，去哪儿都放心"/>
        </a>
    </div>
    <div class="e_pn">
        <p class="hl">去哪儿网客服电话　10101234</p>
        <p class="h4">海外用户请拨打 (+8610)82872677</p>
        <p>提供24小时服务</p>
    </div>
</div> 
            </div>
            <div class="b_spy_lnk" id="ifrNTAD_title" style="display:none;">
    <div class="e_spy_tit"><a id="ifrNTAD_title_more" href="###" target="_blank" class="more">更多</a>
        <h3>去哪儿提供的链接</h3>
        <p class="m_sg"><i class="icon_bz" title="商户服务安全双重保障"></i>商户，服务安全双重保障</p>
    </div>
    <div class="e_spy_cont">
        <abbr id="ifrNTAD" style="display:none;" data-style="width:100%;" data-type="qad" data-query="vataposition=QNR_YQ==_CN&tag=0&rows=15&cur_page_num=0&rep=1&f=s"></abbr>
    </div>
</div>
<div id="js-travel-rec" class="travel-rec" style="display: none"></div>
<div id="divOTA" style="display:none;"></div>
<div class="b_spy_lnk" id="ifrNTAD_patch_title" style="display:none;">
    <div class="e_spy_tit">
        <h3>去哪儿提供的链接</h3>
    </div>
    <div class="e_spy_cont">
        <abbr id="ifrNTAD_patch" style="display:none;" data-lazyAD="1" data-style="width:100%;" data-type="qad" data-query="vataposition=QNR_Yg==_CN&tag=0&cur_page_num=0&rep=1&f=s"></abbr>
    </div>
</div>
            
            

            <div>
                <div class="wInfo" id="weatherList" style="display:none;"></div>
            </div>
            <abbr id="ifrIhgAd" data-type="qde"  data-query="chan=flight&pg=list&pos=top&site=qunar&size=230x140"  data-style="width:100%;" style="display:none;" ></abbr>

            <abbr id="ifrRightCenterAd" data-type="qde"  data-query="chan=flight&pg=list&pos=mid&site=qunar&size=230x200"  data-style="margin:6px 0;width:100%;" style="display:none;" ></abbr>

            <div id="HotelRecommended" style="display:none;"></div>

            <div style="display:none;" class="allHotels Lw_HotelSearch"><a id="linkSearchVisa" href="#" target="_blank"></a></div>
            <div class="blogComm" id="blogRecommend"></div>
            <div>
                <div id="js_ownFlightRightBottom"></div>
                <abbr id="ifmOwnFlightRightBottom" style="display:none;" data-style="width:100%;margin-top:6px;" data-type="qad" data-query="vataposition=QNR_NWE%3D_CN&tag=99&rows=1&cur_page_num=0&rep=1&f=s"></abbr>
            </div>

            <!--\广告-->
        </div>
        <!--\右侧-->
        <div class="clear"></div>
    </div>
    </div>
</div>
    <div class="qn_footer">
        <div class="inner">
             <style type="text/css"> .qn_footer .copyright {padding:7px 0 0;line-height:22px;margin: 0;} .qn_footer .copyright span,.qn_footer .copyright a,.qn_footer .copyright a:visited{margin-right:7px;padding:2px 0;color:#999;text-decoration: none;} .qn_footer .copyright .s24{background:url(//source.qunarzz.com/common/hf/24h.png) no-repeat left center;padding-left:20px;} .qn_footer .fh-about{display: inline-block;*zoom:1;*display:inline;width:110px;text-align:left;border:1px solid transparent;_border:0;_padding:1px;white-space:nowrap;} .qn_footer .fh-about a{padding-left:6px;} .qn_footer .fh-about .about-link{margin:0;*zoom:1;} .qn_footer .fh-about.hover{border:1px solid #ddd;padding:0;z-index: 999;background: #fff;} .qn_footer .fh-about.hover .about-link{color:#ff9e5e;margin:0;} .qn_footer .fh-about.hover .fh-list{display: block !important;} .qn_footer .fh-about .fh-list{position: absolute;left:-1px;bottom:22px;border:1px solid #ddd;background: #fff;width:110px;display:none;white-space:normal;} .qn_footer .fh-about .fh-list a{display: block;margin:0;*margin:0 !important;*width: 70%;} .qn_footer .fh-about .fh-list a:hover{color:#666;background: #e2e2e2;*background:#fff;*color:#ff9e5e;} .qn_footer .fh-about i{font-size:0;background:url(//source.qunarzz.com/common/hf/arc.png) no-repeat left bottom;width:7px;height:4px;display: inline-block;*display:inline;*zoom:1;margin:0 0 2px 3px;} .qn_footer .fh-about.hover i{background-position:0 0;} .qn_footer .fh-list-wrapper{height:0;position:relative;z-index: 999;*float: left;} .qn_footer { clear: both; margin: 0 auto; padding: 15px 0 25px; width: 979px; line-height: 1.231; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #848484;} .qn_footer .inner { margin: 0 10px; text-align: right; } .qn_footer .gs { float: right; margin: 0 20px 0 0; } .qn_footer .cr { margin-right: 0; padding-bottom: 11px;text-align:center;} .qn_footer .links { margin: 0; padding: 2px 0 0; list-style: none;color:#999;display:block; } .qn_footer .links span{*display:inline;*zoom:1;} .qn_footer .links a, .qn_footer .links a:visited { padding: 0 5px;margin:0; text-decoration: none; color: #999;display:inline-block;*zoom:1;*display:inline;height:22px;line-height: 22px;white-space:nowrap; } .qn_footer .links a:hover { color: #f60; } .qn_footer .links a.hl, .qn_footer .links a.hl:visited { color: #ff5555; } .qn_footer .clr{clear:both;height:0;overflow:hidden;} .qn_footer .f_imglist{margin-bottom:10px;} .qn_footer .f_imglist ul{width:545px;margin:0 auto;padding-bottom:4px;overflow:hidden;} .qn_footer .f_imglist li{float:left;margin-right:10px;display:inline;} .qn_footer .f_imglist li a{display:block;width:100%;height:30px;} .qn_footer .f_imglist li a span,.qn_footer .f_imglist li.f_icon_pata span{position:relative;z-index:-1;color:#0086A0;} .qn_footer .f_imglist .f_icon_cnnic{width:88px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -431px 0 no-repeat;margin-right:0;} .qn_footer .f_imglist .f_icon_ec{width:87px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -339px 0 no-repeat;} .qn_footer .f_imglist .f_icon_beian{width:78px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -256px 0 no-repeat;} .qn_footer .f_imglist .f_icon_itrust{width:91px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -160px 0 no-repeat;} .qn_footer .f_imglist .f_icon_pci{width:49px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -106px 0 no-repeat;} .qn_footer .f_imglist .f_icon_verisign{width:101px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) 0 0 no-repeat;} .seo { border-top: 1px solid #ddd; } .seo .seo_links { clear: both; margin: 10px 0 0; padding: 0; color: #a7a7a7; } .seo .seo_links a, .seo .seo_links a:visited { margin-right: 6px; text-decoration: none; color: #a7a7a7; } .seo .seo_links dt { float: left; padding-left: 25px; font-weight: 700; } .seo .seo_links dd { margin-left: 88px; padding: 0; word-spacing: 5px; } .seo .seo_links dd span { float: left; margin-right: 6px; white-space: nowrap; } .seo .seo_links dd .clr { clear: both; height: 0; overflow: hidden; } </style> <div class="cr"> <div class="links"> <div class="fh-about" onmouseover="this.className+=' hover'" onmouseout="this.className=this.className.replace(/\shover/g,'')"><a href="http://www.qunar.com/site/zh/Qunar.in.China_1.2.shtml" target="_blank" rel="nofollow" class="about-link">关于Qunar.com</a><i></i><div class="fh-list-wrapper"><div class="fh-list"> <a href="http://www.qunar.com/site/zh/ContactUs_3.shtml" target="_blank" rel="nofollow">联系我们</a> <a href="http://hot.qunar.com/" target="_blank">媒体报道</a> <a href="http://www.qunar.com/site/zh/Rules.shtml" target="_blank" rel="nofollow">用户协议</a> <a href="http://www.qunar.com/site/zh/Question_7.shtml" target="_blank" rel="nofollow">常见问题</a><a href="http://www.qunar.com/site/zh/Links_8.shtml" target="_blank" rel="nofollow">友情链接</a></div></div></div><span>|</span><a href="http://investor-zh.qunar.com" target="_blank" rel="nofollow">投资者关系</a><span>|</span><a href="http://hotelzt.qunar.com/xuanchuan/index.html?from=qunarfooter" target="_blank" rel="nofollow">酒店加盟</a><span>|</span><a href="http://www.qunar.com/site/zh/Cooperate_4.shtml" target="_blank" rel="nofollow">业务合作</a><span>|</span><a href="http://www.qunar.com/site/zh/Jobs_2.shtml" target="_blank" rel="nofollow">职位招聘</a><span>|</span><a href="http://help.qunar.com/complaint.html" class="hl" target="_blank" rel="nofollow">我要投诉</a><span>|</span><a href="http://security.qunar.com" target="_blank" rel="nofollow">安全中心</a><span>|</span><a href="http://www.qunar.com/site/en/Qunar.in.China_1.1.shtml" target="_blank" rel="nofollow">About Us</a></div> <p class="copyright"><span>Copyright &copy;2015 Qunar.com</span><span>京公网安备110108901530</span><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">京ICP备05021087号</a><a href="http://www.qunar.com/site/company_info.htm" target="_blank" rel="nofollow">营业执照信息</a><a href="http://baoxian.qunar.com/html/notify_zct.html" target="_blank" rel="nofollow">保险经纪资质</a><span class="s24">去哪儿网客服电话10101234</span></p> </div> <div class="f_imglist"> <ul> <li class="f_icon_verisign"><a href="https://seal.wosign.com/Signature/Profiles/bp/CN/dccc0269512042d0b319804c6ba5f4be.htm?ref=aHR0cHM6Ly8qLnF1bmFyLmNvbQo=" target="_blank" rel="nofollow" title="wosign加密服务"></a></li> <li class="f_icon_pci"><a href="http://www.atsec.cn/cn/pci-attestation/Qunar-PCIAttestation-atsec-PCI-DSS-C-65221.jpg" target="_blank" rel="nofollow" title="去哪儿网通过PCI认证"></a></li> <li class="f_icon_itrust"><a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1786892425" target="_blank" rel="nofollow" title="信用编码：1786892425"></a></li> <li class="f_icon_beian"><a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007112700003" target="_blank" rel="nofollow" title="经营性网站备案信息"></a></li> <li class="f_icon_ec"><a href="https://search.szfw.org/cert/l/CX20130509002871002587" target="_blank" rel="nofollow" title="诚信网站"></a></li> <li class="f_icon_cnnic"><a href="https://ss.knet.cn/verifyseal.dll?sn=e131022110100429697dhp000000&ct=df&a=1&pa=500267" target="_blank" rel="nofollow" title="可信网站身份验证"></a></li> </ul> <div class="clr"></div> </div> <script> (function(){var i = new Image(); i.src = "//user.qunar.com/passport/addICK.jsp" + ( document.location.protocol === "https:" ? "?ssl" : ""); })(); </script>

        </div>
    </div>
<div id="divDebugConsole" style="display:none;"></div>
<div id="js-iframe_ajax" style="display:none;"></div>

<!--footer script-->
<script type="text/javascript">
    var randomNum = 1000 + parseInt(Math.random() * 8999);
    document.write('<img style="display:none;" src="/s/twell/images/Lw_AdsDotLine.gif?'+randomNum+'" alt="" />')
</script>
    <script language="javaScript" type="text/javascript">
        //common
        var CLIENT_TIME = new Date();
        var SERVER_TIME = new Date(Date.parse('2015/08/15 11:15:59'));
        var LONGWELLVERSION = 'f' + SERVER_TIME.getTime();
        var CLIENT_LANG = "zh";
        var qunarversion = '201109081840';
        var SERVER_IP = 'flight.qunar.com';
        var CLIENT_IP = '10.88.133.148';
        var JSS_SERVER = 'http://qunarzz.com/flight/prd/scripts';
        //oneway_list
        var qunarflashver = "20090108";
    </script>
<script type="text/javascript" src="/s/twell/searchrt_ui/js/150815120536"></script>

<script type="text/javascript" src="/s/prd/scripts/v4_oneway_main.js"></script>
<script type="text/javascript" src="/s/prd/scripts/v4_oneway_list.js"></script>
<style type="text/css">
.stoolbar { position:fixed; bottom:0; left:50%; margin-left:-490px; padding:1px 1px 0; border:1px solid #ddd; border-bottom:0; width:975px; height:20px; font:normal 12px/20px simsun; background-color:#fff; color:#0069ca; z-index:9000; }
.stoolbar_ie6 { position:absolute !important; left:expression( ( document.documentElement.clientWidth - this.offsetWidth ) / 2 + 'px' ) !important; margin:0 !important; top:expression( document.documentElement.scrollTop + document.documentElement.clientHeight - this.offsetHeight + 'px' ) !important; }
.stoolbar_ipad{position:absolute;bottom:0;}
.stoolbar .inner { height:20px; text-align:center; background:#fff url(http://simg1.qunarzz.com/site/images/new_main/tb.bg.gif) 0 0 repeat-x; }
.stoolbar a { margin:0 10px; color:#0069ca; }
.stoolbar a:hover { color:#f60; }
</style>
<div id="__stoolbar__" class="stoolbar">
    <div class="inner"> 
        <a href="#" onclick="return _stoolbar_vendor_jumpto('bookingstate',event);">出票状态</a>|
        <a href="#" onclick="return _stoolbar_vendor_jumpto('subscribe',event);">预约机票</a>|
        <a href="#" onclick="return _stoolbar_vendor_jumpto('passenger',event);">乘机人信息</a>|
        <a href="#" onclick="return _stoolbar_vendor_jumpto('vendor',event);">查询代理商</a>|
        <a href="#" onclick="return _stoolbar_vendor_jumpto('pricetrend',event);">价格趋势</a>|
        <a href="#" onclick="return _stoolbar_vendor_jumpto('iflight',event);">机票攻略</a>|
        <a href="#" onclick="return _stoolbar_vendor_jumpto('flightnav',event);">机票导航</a>
    </div>
</div>
<script>    
(function(){
    
    var islogin = ( document.cookie.indexOf('_t=') >= 0 && document.cookie.indexOf('_q=') >= 0 );
    var logstr = islogin ? '是' : '否';

    window._stoolbar_vendor_jumpto = function( page , event ){
        switch( page ) {
            case 'ownorders' : 
                    if(islogin){
                        window.open('http://user.qunar.com/flight_toolbox.jsp?catalog=ownorders&from=flight_dibu_chupiao');
                    }else{
                        window.open('http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Fuser.qunar.com%2Fflight_toolbox.jsp%3Fcatalog%3Downorders%26from%3Dflight_dibu_chupiao');
                    }
                    BEACON.clk('出票状态' );
                break;
            case 'flightnav':
                    window.open('http://flight.qunar.com/site/category/');
                    BEACON.clk('机票导航' );
                break;
            case 'iflight':
                    window.open('http://help.qunar.com/category.html?id=12');
                    BEACON.clk('机票攻略' );
                break;
            case 'passenger':
                    window.open('http://user.qunar.com/flight_toolbox.jsp?catalog=passenger');
                    BEACON.clk('乘机人信息' );
                break;
            case 'subscribe':
                    window.open('http://subscribe.qunar.com/info/addSub.do?s=10');
                    BEACON.clk('机票预约' );
                break;
            case 'bookingstate':
                if(islogin){
                    window.open('http://user.qunar.com/flight_toolbox.jsp?catalog=ownorders&from=flight_dibu_chupiao');
                }else{
                    window.open('http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Fuser.qunar.com%2Fflight_toolbox.jsp%3Fcatalog%3Downorders%26from%3Dflight_dibu_chupiao');
                }
                BEACON.clk('出票状态' );
                break;
            case 'bookinghistory' :
                    window.open('http://user.qunar.com/flight_toolbox.jsp?catalog=bookinghistory');
                    BEACON.clk('订票历史' );
                break;
            case 'vendor' :
                window.open('http://user.qunar.com/flight_toolbox.jsp?catalog=searchvendors');
                // if ( islogin ) {
                //     window.open('http://user.qunar.com/flight_toolbox.jsp?catalog=searchvendors');
                // } else {
                //     window.open('http://www.qunar.com/bookingFeedback/interface/feedback/vendors.htm');                    
                // }                
                BEACON.clk('查询代理商');
                break;
            case 'pricetrend':
                // window.open('http://flight.qunar.com/t-cast/flight_cast.html');
                var data = {
                        from: 'fi_toolbar_search',
                        searchType: 'PriceTrend',
                        pfromCity: '北京(BJS)', // 默认值
                        ptoCity: '香港(HKG)',
                        pfromDate: \$jex.date.add(window.SERVER_TIME || new Date(), 1, true)
                    },
                    r = QunarHistory && QunarHistory.firstInter;
                if(r) { // 用历史记录查询价格趋势
                    data.pfromCity = r.FromCity();
                    data.ptoCity = r.ToCity();
                    data.pfromDate = r.FromDate();
                }
                
                // window.open('/twell/flight/Search.jsp?' + \$jex.toQueryString(data));
                var fmatch = data.pfromCity.match(/^(.*)\((\w+)\)$/),
                    tmatch = data.ptoCity.match(/^(.*)\((\w+)\)$/);
                var pdata = {
                    fromCity: fmatch ? fmatch[1] : data.pfromCity,
                    toCity: tmatch ? tmatch[1] : data.ptoCity,
                    fromDate: data.pfromDate,
                    fromCode: fmatch ? fmatch[2] : "",
                    toCode: tmatch ? tmatch[2] : "",
                    from: data.from,
                    isInter: true
                };
                window.open('/site/pricetrend.htm?' + \$jex.toQueryString(pdata));
                BEACON.clk('价格趋势');
                break;
        }
        event.cancelBubble = false;
        return false;
    }
    
    var BEACON = new (function(){
        
        this.sid = '';
        
        function _cImg ( type ){ 
            
            if ( !this.sid ) return;
            
            var img = new Image();
            var list = [ 's=' + this.sid ];       
            for ( var i = 1; i < arguments.length; i++ ) {
                list.push( String.fromCharCode(96+i) + '=' + encodeURIComponent( arguments[i] ) );
            }
            list.push( "n=" + Math.random() );
            img.src = [ 'http://bc.qunar.com/' , type , '?' , list.join('&') ].join('');
        }
    
        this.f = function(){
            _cImg.apply( this , [ 'f' ].concat( Array.prototype.slice.call( arguments , 0 ) )  );
        }
    
        this.click = this.clk = function(){
            _cImg.apply( this , [ 'clk' ].concat( Array.prototype.slice.call( arguments , 0 ) )  );
        }   
    
    })();
    
    BEACON.sid = 100;
    
    var ipadDo = function(func){
        var userAgent = navigator.userAgent;
        var isIpad = userAgent.indexOf("iPad") > -1;
        if(isIpad){
            func();
        }
    }
    
    
    var ie6 = !window.XMLHttpRequest;
    
    var a = document.getElementById('__stoolbar__');
    if (ie6) {
        a.className = 'stoolbar stoolbar_ie6';
        if(window.attachEvent){
            window.attachEvent("onscroll",function(){  a.className = a.className;   });
        }
    }
    
    ipadDo(function(){
        var stoolbar = function(){
            a.className = 'stoolbar stoolbar_ipad';
            var div = document.createElement("DIV");
            div.appendChild(a);
            div.style.position = "relative";
            document.getElementsByTagName("body")[0].appendChild(div);
        };
        stoolbar();
    });
    
})();
</script> 

    <img id="allocateCookie" width="0" height="0" border="0" style="display:none" src="http://www.qunar.com/twell/cookie/allocateCookie.jsp" />
    <img  width="0" height="0" border="0" style="display:none" src='http://log.flight.qunar.com/qua.gif?s=flight&p=oneway_list&quahtml=150815111559' />
    <script>
        <!-- beacon.start -->
        (function(){
            window._ba_utm_init = function(GA){
                var ga = this;
                window['_ba_utm_l'] = 'f';
                window['_ba_utm_s'] = '182';
                window['_ba_utm_ex'] = {
                    a : encodeURIComponent( ga.getQueryString('searchDepartureAirport') ) ,
                    b : encodeURIComponent( ga.getQueryString('searchArrivalAirport') ),
                    c : ga.getQueryString('searchDepartureTime')
                };
            };
            //-- load ga script
            var s = document.createElement('script');
            s.src = 'http://bc.qunar.com/js/ga.min.js';
            var head = document.getElementsByTagName('head');
            if(head&&head[0]) { head[0].appendChild(s); }
        })();
        <!-- beacon.end -->
    </script>
    
    <script type='text/javascript'>
        var _agt=_agt||[];
        _agt.push(['_atscu','AG_275634_HFVR']);
        _agt.push(['_atsdomain','qunar.com']);
        (function(){
            var ag=document.createElement('script'); 
             ag.type='text/javascript'; 
             ag.async = true;
            ag.src=(document.location.protocol=='https:'?'https':'http')+'://'+'t.agrantsem.com/js/ag.js';
            var s= document.getElementsByTagName('script')[0]; 
             s.parentNode.insertBefore(ag,s);
         })();

        var _query_q = \$jex.parseQueryParam();
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push(
            { event: "setAccount", account: 17463 },
            { event: "setSiteType", type: "d" },
            { event: "viewItem", item: _query_q.fromCode + '/' +_query_q.toCode },
            { event: "viewSearch", checkin_date: _query_q.searchDepartureTime || '', checkout_date: ''}
        );
        (function(){
            var ag=document.createElement('script');
            ag.type='text/javascript';
            ag.async = true;
            ag.src=(document.location.protocol=='https:'?'https':'http')+'://'+'static.criteo.net/js/ld/ld.js';
            var s= document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ag,s);
         })();
    </script>
</body>
</html>

EOD;
    return $html;
}
?>
