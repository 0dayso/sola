<?php
function get_html(&$arr_req)
{
    $server_time = time()*1000;
    //return $server_time;
$html = <<<EOD
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=8,9,10">
    <title>【去哪儿网】机票查询预订，酒店预订，旅游团购，度假搜索，门票预订-去哪儿网Qunar.com</title>
    <link rel="stylesheet" href="prd/styles/reset.css">
    <link rel="stylesheet" href="prd/styles/home.css">
    <link rel="stylesheet" href="prd/styles/index.css">
    <meta name="Robots" content="index,follow,NOODP">
    <meta name="keywords" content="机票,飞机票,机票查询,飞机票查询,机票预订,特价机票,机票预定,打折机票" />
    <meta name="description" content="去哪儿Qunar.com提供机票,飞机票,特价机票,打折机票的查询预订；99元春秋航空特惠折扣机票，百元南航、海航惊喜特价机票任您挑选,国航、深航1折特价机票和折扣机票一网打尽，更多打折机票尽在Qunar.com。实时提供上百家旅游预订网站机票报价和航空公司直销机票价格，为您找到最实惠的飞机票信息,是你查询特价机票和机票预订的最佳途径。" />
    <meta http-equiv="cache-control" content="no-cache" />
</head>
<body>
<div class="q_header q_header_home q_header_max">
<div class="q_header_main" data-hfchannel="home" data-hffile="header_main"> <div class="q_header_logo"> <a href="http://www.qunar.com/" target="_top" title="去哪儿旅游搜索引擎 Qunar.com" hidefocus="on"><img src="//source.qunarzz.com/common/hf/logo.png" ></a>
</div> 
<div class="q_header_tnav"> <ul> <li id="__loginInfo_u__" class="q_header_username"><a href="http://user.qunar.com/passport/login.jsp" hidefocus="on" rel="nofollow">登录</a></li>
<li id="__loginInfo_r__" class="q_header_register"><a href="http://user.qunar.com/passport/register.jsp" hidefocus="on" rel="nofollow">注册</a></li> <li class="q_header_tnav_omenu" id="__orderInfo_l__"> <dl> <dt><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Fuser.qunar.com%2Fflight_toolbox.jsp%3Fcatalog%3Downorders%26from%3Dmyorder&jump=0" class="q_header_tnav_omenu_link" id="q_header_tnav_omenu_link"><span class="q_header_tnav_omenu_title" id="__orderInfo_t__">查看订单<b id="__orderInfo_b__"></b></span></a></dt> <dd id="__orderInfo_w__"> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fflight%2F%3Ft%3D1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderFlight__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">机票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fhotel%2F%3Ffrom%3Dmyorder" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderHotel__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">酒店订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fapartment?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderApartment__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">公寓订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fgroup?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderGroup__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">团购订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Fdujia.qunar.com%2Fmyorder.jsp%3Ffrom%3Dmyorder" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderVacation__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">度假订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fticket?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderTicket__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">门票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Ftrain?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderTrain__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">火车票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fbus?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderBus__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">汽车票订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fcar?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderCar__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">车车订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fqmall?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderQmall__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">Q商城订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Flocal?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderDdr__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">当地人订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fpay?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderDdr__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">金融订单</span></a></div> <div class="q_header_tnav_omenu_item"><a href="http://user.qunar.com/order/query.jsp?ret=http%3A%2F%2Forder.qunar.com%2Fpay?t=1" target="_blank" hidefocus="on" rel="nofollow" data-name="__link_orderDdr__" id="__tnav_card_order__" class="q_header_tnav_omenu_m"><span class="q_header_tnav_omenu_ordertips">礼品卡订单</span></a></div> </dd> </dl>
</li>
<li><a href="http://review.qunar.com/mall/index.htm" target="_top" rel="nofollow" id="__link_mall__">积分商城</a></li>
<li><a href="http://help.qunar.com/" target="_top" rel="nofollow" id="__link_contact__">联系客服</a></li> <li class="last q_header_en"><a href="http://www.qua.com/?from=home" target="_blank" rel="nofollow" id="__link_en__"><img src="http://simg1.qunarzz.com/site/images/flight/ico_en_v1.png" align="absmiddle"></img>In English</a></li>
</ul> </div>
<div class="q_header_mnav"> <ul> <li class="qhf_home"> <a href="http://www.qunar.com/" target="_top" hidefocus="on" id="__link_home__" class="q_header_navlink"><span><b>首页</b></span></a> </li> <li class="qhf_flight"> <a href="http://flight.qunar.com/" target="_top" hidefocus="on" id="__link_flight__" class="q_header_navlink"><span><b>机票</b></span></a> </li> <li class="qhf_hotel"> <a href="http://hotel.qunar.com/" target="_top" hidefocus="on" id="__link_hotel__" class="q_header_navlink"><span><b>酒店</b></span></a> </li> <li class="qhf_tuan"> <a href="http://tuan.qunar.com/" target="_top" hidefocus="on" id="__link_tuan__" class="q_header_navlink"><span><b>团购</b></span></a> </li> <li class="qhf_package"> <a href="http://dujia.qunar.com/" target="_top" hidefocus="on" id="__link_package__" class="q_header_navlink"><span><b>度假</b></span></a> </li> <li class="qhf_piao"> <a href="http://piao.qunar.com/" target="_top" hidefocus="on" id="__link_piao__" class="q_header_navlink"><span><b>门票</b></span></a> </li> <li class="qhf_train"> <a href="http://train.qunar.com/" target="_top" hidefocus="on" id="__link_train__" class="q_header_navlink"><span><b>火车票</b></span></a> </li> <li class="qhf_travel"> <a href="http://travel.qunar.com/?from=header" target="_top" hidefocus="on" id="__link_travel__" class="q_header_navlink"><span><b>攻略</b></span></a> </li> <li class="qhf_gongyu"> <a href="http://gongyu.qunar.com/" target="_top" hidefocus="on" id="__link_gongyu__" class="q_header_navlink"><span><b>公寓</b></span></a> </li> <li class="qhf_ddr"> <a href="http://i.qunar.com/" target="_top" hidefocus="on" id="__link_ddr__" class="q_header_navlink q_header_navlink_ddr"><span><b>当地人</b></span></a> </li> <li class="qhf_car"> <a href="http://car.qunar.com/?from=186" target="_top" hidefocus="on" id="__link_car__" class="q_header_navlink"><span><b>车车</b></span></a> </li> <!--li class="guide"> <a href="http://guide.qunar.com/" target="_top" hidefocus="on" id="__link_guide__" class="q_header_navlink"><span><b>骆驼书</b></span></a> </li--> <li class="qhf_bus"> <a href="http://bus.qunar.com/" target="_top" hidefocus="on" id="__link_bus__" class="q_header_navlink"><span><b>汽车票</b></span></a> </li> <li class="qhf_navmore" id="__header_navmore__"> <a href="javascript:void(0)" target="_top" hidefocus="on" class="q_header_navlink q_header_navlink_more"><span><b>更多</b></span><i></i></a> <div class="q_header_navmore-con" id="__header_navmore_con__"> <!-- <a href="http://guide.qunar.com/" target="_top" hidefocus="on" id="__link_guide_navmore__" class="q_header_navlink"><span><b>骆驼书</b></span></a> --> <a href="http://card.qunar.com/" target="_top" hidefocus="on" id="__link_card_navmore__" class="q_header_navlink"><span><b>礼品卡</b></span></a> <a href="http://jr.qunar.com/" target="_top" hidefocus="on" id="__link_jr_navmore__" class="q_header_navlink"><span><b>金融</b></span></a> <!-- <a href="http://app.qunar.com/" target="_top" hidefocus="on" id="__link_app_navmore__" class="q_header_navlink"><span><b>客户端</b></span></a> --> </div> </li> <li class="qhf_card"> <a href="http://card.qunar.com/" target="_top" hidefocus="on" id="__link_card__" class="q_header_navlink"><span><b>礼品卡</b></span></a> </li> <li class="qhf_jr"> <a href="http://jr.qunar.com/" target="_top" hidefocus="on" id="__link_jr__" class="q_header_navlink"><span><b>金融</b></span></a> </li> <!-- <li class="qhf_app"> <a href="http://app.qunar.com/" target="_top" hidefocus="on" id="__link_app__" class="q_header_navlink"><span><b>客户端</b></span></a> </li> -->
</ul> 
<div id="__header_nav_tags__" class="q_header_tags"> <!--img src="//source.qunarzz.com/common/hf/tags/gonglue.gif" class="qh_tag_guide"--> <img src="//source.qunarzz.com/common/hf/tags/quanjia.gif" class="qhf_tag_gongyu"> <img src="//source.qunarzz.com/common/hf/tags/all.png" class="qhf_tag_piao"> <!-- <img src="//source.qunarzz.com/common/hf/tags/dujia_v1.gif" class="qhf_tag_package"> --> <!-- <img src="//source.qunarzz.com/common/hf/tags/lmqx.gif" class="qhf_tag_package"> --> <img src="//source.qunarzz.com/common/hf/tags/local.gif" class="qhf_tag_local"> <img src="//source.qunarzz.com/common/hf/tags/card_v1.gif" class="qhf_tag_card"> <img src="//source.qunarzz.com/common/hf/tags/bjcx.gif" class="qhf_tag_bjcx"> <img src="//source.qunarzz.com/common/hf/tags/jr_v1.gif" class="qhf_tag_jr"> <img src="//source.qunarzz.com/common/hf/tags/car.gif" class="qhf_tag_car">
</div> 
</div> <a class="q_header_app_logo" href="http://app.qunar.com/"></a>
</div>
</div>

<div class="q_pagewrap">
    <div class="q_pagecontair">
        <div class="mod-home-topbar">
            <abbr id="ad_home_topbar" style="display:none;" data-type="qde" data-query="chan=homepage&pg=home&pos=top&site=qunar&type=fullscreen" data-style="width:100%;"></abbr>
        </div>
        <div class="q_page clrfix">

            <div class="home-top clrfix">
                <!--搜索模块-->
                <div class="b_cgy_sch clrfix" id="js_searchbox">
                    <!--div class="e_csh_cgy">
                        <ul class="nav_cgy" id="js_nva_cgy">
                            <li class="c_flight js-searchnav cur first" data-for="flight"><a data-beacon="顶部一级tab-机票" href="javascript:;">机票</a></li>
                            <li class="c_hotel js-searchnav" data-for="hotel"><a data-beacon="顶部一级tab-酒店" href="javascript:;">酒店</a></li>
                            <li class="c_train js-searchnav" data-for="train"><a data-beacon="顶部一级tab-火车票" href="javascript:;">火车票</a></li>
                            <li class="c_package js-searchnav" data-for="package"><a data-beacon="顶部一级tab-度假" href="javascript:;">度假</a></li>
                            <li class="c_piao js-searchnav" data-for="piao"><a data-beacon="顶部一级tab-门票" href="javascript:;">门票</a></li>
                            <li class="c_tuan js-searchnav" data-for="tuan"><a data-beacon="顶部一级tab-团购" href="javascript:;">团购</a></li>
                            <li class="c_car js-searchnav last" data-for="car"><a data-beacon="顶部一级tab-车车" href="javascript:;">车车</a></li>
                        </ul>
                    </div--><!-- gino -->
                    <div class="e_csh_sch">
                        <div id="js_searchbox_flight" class="js-searchbox-panel e_csh_sch_fl">
                            <div class="e_csh_sch_flpn searchbox-flight">
                                <div class="ch_search_tab">
                                    <div class="rt_link"><a href="http://user.qunar.com/flight_toolbox.jsp?catalog=ownorders&amp;from=qunarindexP1" target="_blank" class="icon-status">出票状态查询</a><a href="http://user.qunar.com/flight_toolbox.jsp?catalog=ownorders&amp;from=tuigai" target="_blank" class="icon-edit">退票改签</a></div>
                                    <ul class="ul_search_tab">
                                    <!-- modify -->
                                        <li class="cur" id="js_inter_tab" class=""><a data-beacon="顶部二级tab-国际·港澳台机票" href="#" onclick="return false;">国际·港澳台机票</a></li>
                                        <li id="js_domestic_tab"><a data-beacon="顶部二级tab-国内机票" href="#" onclick="return false;">国内机票</a></li>
                                    </ul>
                                </div>
                                <div class="con">
                                    <div class="ch_sch_form ch_sch_flt_bf clrfix" id="js_flighttype_tab_domestic" style="display: none;">
                                        <form action="/twell/flight/Search.jsp" method="get" id="js_flight_domestic_searchbox">
                                            <input type="hidden" value="qunarindex" name="from">
                                            <div class="crl_group">
                                                <div class="controls">
                                                    <div class="b_hongbao_lst js_hongbao">
                                                        全场买机票送500元酒店红包！
                                                    </div>
                                                    <label class="lal_rdo" for="js_searchtype_oneway" hidefocus="on">
                                                        <input name="searchType" type="radio" class="inp_rad js-searchtype-oneway" value="OnewayFlight" checked="checked" id="js_searchtype_oneway">
                                                        单程</label>
                                                    <label class="lal_rdo" for="js_searchtype_roundtrip" hidefocus="on">
                                                        <input name="searchType" type="radio" class="inp_rad js-searchtype-roundtrip" value="RoundTripFlight" id="js_searchtype_roundtrip">
                                                        往返</label>
                                                </div>
                                            </div>
                                            <div class="crl_group iwrap">
                                                <div class="crl_sp2_1">
                                                    <a class="lnk_change js-exchagne-city" href="#" title="调换出发地和目的地">换</a>
                                                    <div class="controls">
                                                        <div class="qcbox qcity" style="z-index: 40;">
                                                            <div class="qunar-qcbox"><div class="qcbox-placeholder" style="width: 160px; left: 35px; padding-left: 0px; height: 35px; line-height: 35px; display: none;">输入国家/城市/机场</div><div class="qcbox-prefix">出发</div><div class="qcbox-info"><b></b></div><input type="text" value="" name="fromCity" class="cinput textbox" data-qcbox-placeholder="城市名" data-qcbox-prefix="出发" data-qcbox-suggest="flight-fromcity" data-qcbox-hotcity="flight" autocomplete="off" x-webkit-speech="x-webkit-speech" data-detect-oninput="1" style="left: 32px;"><div class="qcbox-fixed"></div></div>
                                                            <div class="qsuggest-contaier js-suggestcontainer"><div class="q-suggest" style="display: none; z-index: 500;"></div></div>
                                                        </div>
                                                    </div>
                                                    <div class="controls">
                                                        <div class="qcbox qcity" style="z-index: 30;">
                                                            <div class="qunar-qcbox"><div class="qcbox-placeholder" style="width: 160px; left: 35px; padding-left: 0px; height: 35px; line-height: 35px; display: none;">输入国家/城市/机场</div><div class="qcbox-prefix">到达</div><div class="qcbox-info"><b></b></div><input type="text" value="" name="toCity" class="cinput textbox" data-qcbox-placeholder="城市名" data-qcbox-prefix="到达" data-qcbox-suggest="flight-tocity" data-qcbox-hotcity="flight" autocomplete="off" x-webkit-speech="x-webkit-speech" data-detect-oninput="2" style="left: 32px;"><div class="qcbox-fixed"></div></div>
                                                            <div class="qsuggest-contaier js-suggestcontainer"><div class="q-suggest" style="display: none; z-index: 500;"></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="crl_sp2_2">
                                                    <div class="controls">
                                                        <div class="qcbox qdate fromD" style="z-index: 20;">
                                                            <div class="qunar-dp"><div class="dp-prefix">日期</div><div class="dp-info"><b></b><span class="dp-text">后天</span></div><input type="text" id="js_domestic_fromdate" value="" name="fromDate" class="cinput textbox" autocomplete="off" maxlength="10" data-prefix="日期" data-type="oneWay" style="left: 32px;"><div class="q-datepicker q-datepicker-fly" style="display: none;"></div></div>
                                                        </div>
                                                    </div>
                                                    <div class="controls js-backdate" style="visibility: hidden; display: none;">
                                                        <div class="qcbox qdate toD" style="z-index: 10;">
                                                            <div class="qunar-dp"><div class="dp-prefix">日期</div><div class="dp-info"><b></b><span class="dp-text">周二</span></div><input type="text" id="js_domestic_todate" value="" name="toDate" class="cinput textbox" autocomplete="off" maxlength="10" data-prefix="日期" style="left: 32px;"><div class="q-datepicker q-datepicker-fly" style="display: none;"></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="crl_group crl_group_submit">
                                                <div class="controls"> <span class="p_btn">&nbsp;
                                                    <button type="submit" class="button-search"></button>
                                                    </span>
                                                    <div class="p_text">
                                                        <div class="flight_ad js-searchbox-ad"></div>
                                                        <p class="linenum">
                                                            <span id="js_alsosearch_domestic" style="display: none;"></span>
                                                            可实时搜索&nbsp;<span class="highlight">28万</span>&nbsp;条国内国际航线
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="foot">
                                </div>
                            </div>
                        </div>
                        <div id="js_searchbox_hotel" class="js-searchbox-panel e_csh_sch_h" style="display:none;"><img class="e_csh_sch_loadding" src="http://simg4.qunarzz.com/tts/images/demo/spinner_tra.gif" /></div>
                        <div id="js_searchbox_train" class="js-searchbox-panel e_csh_sch_train" style="display:none;"><img class="e_csh_sch_loadding" src="http://simg4.qunarzz.com/tts/images/demo/spinner_tra.gif" /></div>
                        <div id="js_searchbox_tuan" class="js-searchbox-panel" style="display:none;"><img class="e_csh_sch_loadding" src="http://simg4.qunarzz.com/tts/images/demo/spinner_tra.gif" /></div>
                        <div id="js_searchbox_package" class="js-searchbox-panel" style="display:none;"><img class="e_csh_sch_loadding" src="http://simg4.qunarzz.com/tts/images/demo/spinner_tra.gif" /></div>
                        <div id="js_searchbox_piao" class="js-searchbox-panel" style="display:none;"><img class="e_csh_sch_loadding" src="http://simg4.qunarzz.com/tts/images/demo/spinner_tra.gif" /></div>
                        <div id="js_searchbox_car" class="js-searchbox-panel e_csh_sch_cheche" style="display:none;"><img class="e_csh_sch_loadding" src="http://simg4.qunarzz.com/tts/images/demo/spinner_tra.gif" /></div>
                    </div>
                </div>
                <!--\搜索模块-->
                <div class="home-top-right">
                    <abbr id="ad_home_top_right" style="display:none;" data-type="qde" data-style="width:464px;" data-query="chan=homepage&pg=home&pos=top&site=qunar&size=464x320"></abbr>
                </div>
            </div>
            <!--中间广告-->
            <div class="mod-home-mid-advertisement">
                <abbr id="ad_home_top" style="display:none;" data-type="qde" data-style="width:1200px;" data-query="chan=homepage&pg=home&pos=top&site=qunar&size=1200x90"></abbr>
            </div>
            <!--中间广告End-->

            <!--左栏-->
            <div class="l_lside">

                        <!--特价-->
        <div class="mod-home-onSale" id="js_b_onSale">
        </div>
        <!--特价End-->

        <!--小编推荐-->
        <div class="mod-editor-recommend clrfix" style="display:none;" id="js_b_editorRecommend">
            <div class="mod-editor-recommend-left" id="js_b_editorRecommend_left">
            </div>
            <div class="mod-editor-recommend-right" id="js_b_editorRecommend_right">
            </div>
        </div>
        <!--小编推荐End-->

        <div class="mod-home-minbanner">
            <abbr id="ad_home_min_banner" data-type="qde"  data-style="width:944px;" data-query="chan=homepage&pg=home&pos=mid&site=qunar&size=944x90"></abbr>
        </div>



            </div>
            <!--\左栏-->
            <!--右栏-->
            <div class="l_rside">
            </div>
            <!--\右栏-->

        </div>

    </div>
</div>

<abbr id="ad_home_rightbar" data-type="qde"  data-style="width:100%;" data-query="chan=homepage&pg=home&pos=right_bottom&site=qunar&size=60x80&type=Floating_window"></abbr>
</div>
<div class="qn_footer">
      <style type="text/css"> .qn_footer .copyright {padding:7px 0 0;line-height:22px;margin: 0;} .qn_footer .copyright span,.qn_footer .copyright a,.qn_footer .copyright a:visited{margin-right:7px;padding:2px 0;color:#999;text-decoration: none;} .qn_footer .copyright .s24{background:url(//source.qunarzz.com/common/hf/24h.png) no-repeat left center;padding-left:20px;} .qn_footer .fh-about{display: inline-block;*zoom:1;*display:inline;width:110px;text-align:left;border:1px solid transparent;_border:0;_padding:1px;white-space:nowrap;} .qn_footer .fh-about a{padding-left:6px;} .qn_footer .fh-about .about-link{margin:0;*zoom:1;} .qn_footer .fh-about.hover{border:1px solid #ddd;padding:0;z-index: 999;background: #fff;} .qn_footer .fh-about.hover .about-link{color:#ff9e5e;margin:0;} .qn_footer .fh-about.hover .fh-list{display: block !important;} .qn_footer .fh-about .fh-list{position: absolute;left:-1px;bottom:22px;border:1px solid #ddd;background: #fff;width:110px;display:none;white-space:normal;} .qn_footer .fh-about .fh-list a{display: block;margin:0;*margin:0 !important;*width: 70%;} .qn_footer .fh-about .fh-list a:hover{color:#666;background: #e2e2e2;*background:#fff;*color:#ff9e5e;} .qn_footer .fh-about i{font-size:0;background:url(//source.qunarzz.com/common/hf/arc.png) no-repeat left bottom;width:7px;height:4px;display: inline-block;*display:inline;*zoom:1;margin:0 0 2px 3px;} .qn_footer .fh-about.hover i{background-position:0 0;} .qn_footer .fh-list-wrapper{height:0;position:relative;z-index: 999;*float: left;} .qn_footer { clear: both; margin: 0 auto; padding: 15px 0 25px; width: 979px; line-height: 1.231; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #848484;} .qn_footer .inner { margin: 0 10px; text-align: right; } .qn_footer .gs { float: right; margin: 0 20px 0 0; } .qn_footer .cr { margin-right: 0; padding-bottom: 11px;text-align:center;} .qn_footer .links { margin: 0; padding: 2px 0 0; list-style: none;color:#999;display:block; } .qn_footer .links span{*display:inline;*zoom:1;} .qn_footer .links a, .qn_footer .links a:visited { padding: 0 5px;margin:0; text-decoration: none; color: #999;display:inline-block;*zoom:1;*display:inline;height:22px;line-height: 22px;white-space:nowrap; } .qn_footer .links a:hover { color: #f60; } .qn_footer .links a.hl, .qn_footer .links a.hl:visited { color: #ff5555; } .qn_footer .clr{clear:both;height:0;overflow:hidden;} .qn_footer .f_imglist{margin-bottom:10px;} .qn_footer .f_imglist ul{width:545px;margin:0 auto;padding-bottom:4px;overflow:hidden;} .qn_footer .f_imglist li{float:left;margin-right:10px;display:inline;} .qn_footer .f_imglist li a{display:block;width:100%;height:30px;} .qn_footer .f_imglist li a span,.qn_footer .f_imglist li.f_icon_pata span{position:relative;z-index:-1;color:#0086A0;} .qn_footer .f_imglist .f_icon_cnnic{width:88px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -431px 0 no-repeat;margin-right:0;} .qn_footer .f_imglist .f_icon_ec{width:87px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -339px 0 no-repeat;} .qn_footer .f_imglist .f_icon_beian{width:78px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -256px 0 no-repeat;} .qn_footer .f_imglist .f_icon_itrust{width:91px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -160px 0 no-repeat;} .qn_footer .f_imglist .f_icon_pci{width:49px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) -106px 0 no-repeat;} .qn_footer .f_imglist .f_icon_verisign{width:101px;height:30px;background:url(//source.qunarzz.com/common/hf/footer_v10.png) 0 0 no-repeat;} .seo { border-top: 1px solid #ddd; } .seo .seo_links { clear: both; margin: 10px 0 0; padding: 0; color: #a7a7a7; } .seo .seo_links a, .seo .seo_links a:visited { margin-right: 6px; text-decoration: none; color: #a7a7a7; } .seo .seo_links dt { float: left; padding-left: 25px; font-weight: 700; } .seo .seo_links dd { margin-left: 88px; padding: 0; word-spacing: 5px; } .seo .seo_links dd span { float: left; margin-right: 6px; white-space: nowrap; } .seo .seo_links dd .clr { clear: both; height: 0; overflow: hidden; } </style> <div class="cr"> <div class="links"> <div class="fh-about" onmouseover="this.className+=' hover'" onmouseout="this.className=this.className.replace(/\shover/g,'')"><a href="http://www.qunar.com/site/zh/Qunar.in.China_1.2.shtml" target="_blank" rel="nofollow" class="about-link">关于Qunar.com</a><i></i><div class="fh-list-wrapper"><div class="fh-list"> <a href="http://www.qunar.com/site/zh/ContactUs_3.shtml" target="_blank" rel="nofollow">联系我们</a> <a href="http://hot.qunar.com/" target="_blank">媒体报道</a> <a href="http://www.qunar.com/site/zh/Rules.shtml" target="_blank" rel="nofollow">用户协议</a> <a href="http://www.qunar.com/site/zh/Question_7.shtml" target="_blank" rel="nofollow">常见问题</a><a href="http://www.qunar.com/site/zh/Links_8.shtml" target="_blank" rel="nofollow">友情链接</a></div></div></div><span>|</span><a href="http://investor-zh.qunar.com" target="_blank" rel="nofollow">投资者关系</a><span>|</span><a href="http://hotelzt.qunar.com/xuanchuan/index.html?from=qunarfooter" target="_blank" rel="nofollow">酒店加盟</a><span>|</span><a href="http://www.qunar.com/site/zh/Cooperate_4.shtml" target="_blank" rel="nofollow">业务合作</a><span>|</span><a href="http://www.qunar.com/site/zh/Jobs_2.shtml" target="_blank" rel="nofollow">职位招聘</a><span>|</span><a href="http://help.qunar.com/complaint.html" class="hl" target="_blank" rel="nofollow">我要投诉</a><span>|</span><a href="http://security.qunar.com" target="_blank" rel="nofollow">安全中心</a><span>|</span><a href="http://www.qunar.com/site/en/Qunar.in.China_1.1.shtml" target="_blank" rel="nofollow">About Us</a></div> <p class="copyright"><span>Copyright &copy;2015 Qunar.com</span><span>京公网安备110108901530</span><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">京ICP备05021087号</a><a href="http://www.qunar.com/site/company_info.htm" target="_blank" rel="nofollow">营业执照信息</a><a href="http://baoxian.qunar.com/html/notify_zct.html" target="_blank" rel="nofollow">保险经纪资质</a><span class="s24">去哪儿网客服电话10101234</span></p> </div> <div class="f_imglist"> <ul> <li class="f_icon_verisign"><a href="https://seal.wosign.com/Signature/Profiles/bp/CN/dccc0269512042d0b319804c6ba5f4be.htm?ref=aHR0cHM6Ly8qLnF1bmFyLmNvbQo=" target="_blank" rel="nofollow" title="wosign加密服务"></a></li> <li class="f_icon_pci"><a href="http://www.atsec.cn/cn/pci-attestation/Qunar-PCIAttestation-atsec-PCI-DSS-C-65221.jpg" target="_blank" rel="nofollow" title="去哪儿网通过PCI认证"></a></li> <li class="f_icon_itrust"><a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1786892425" target="_blank" rel="nofollow" title="信用编码：1786892425"></a></li> <li class="f_icon_beian"><a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202007112700003" target="_blank" rel="nofollow" title="经营性网站备案信息"></a></li> <li class="f_icon_ec"><a href="https://search.szfw.org/cert/l/CX20130509002871002587" target="_blank" rel="nofollow" title="诚信网站"></a></li> <li class="f_icon_cnnic"><a href="https://ss.knet.cn/verifyseal.dll?sn=e131022110100429697dhp000000&ct=df&a=1&pa=500267" target="_blank" rel="nofollow" title="可信网站身份验证"></a></li> </ul> <div class="clr"></div> </div> <script> (function(){var i = new Image(); i.src = "//user.qunar.com/passport/addICK.jsp" + ( document.location.protocol === "https:" ? "?ssl" : ""); })(); </script>
</div>
<img id="allocateCookie" src="http://www.qunar.com/twell/cookie/allocateCookie.jsp" style="display:none" />
<iframe id="js_ifrmHistory" style="width:1px;height:1px;visibility:hidden;position:absolute" src=""></iframe>
<script type="text/javascript">

//var SERVER_TIME = new Date(1441065766181);
    var SERVER_TIME = new Date( ${server_time} ); //modify
var CLIENT_TIME = new Date();
var QZZVERSION = "2014091011245002";
var IP_ADDRESS = "";
var __getip__ = function(obj) {
    var city = location.search.match(/debug=city=([^&#]+)/);
    IP_ADDRESS = city ? decodeURI(city[1]) : obj["city"];
};
document.write("<script src='http://ws.qunar.com/ips.jcp?callback=__getip__'></scr" + "ipt>");

(function(){
    window._ba_utm_init = function(GA){
        var ga = this;
        window['_ba_utm_l'] = 'w';
        window['_ba_utm_s'] = '170';
    };
    //-- load ga script
    var s = document.createElement('script');
    //s.src = 'http://bc.qunar.com/js/ga.min.js';
        s.src = 'prd/scripts/ga.min.js';
    var head = document.getElementsByTagName('head');
    if(head&&head[0]) { head[0].appendChild(s); }
})();
</script>
<!--script src="http://qunarzz.com/jquery/prd/jquery-1.7.2.js"></script-->
<!--script src="http://qunarzz.com/homenode/prd/scripts/home@a6e285e3591f626438f79b79ebca0fa4.js"></script-->
<script src="ips.php?callback=__getip__"></script>
<script src="prd/jquery-1.7.2.js"></script>
<script src="prd/scripts/home_pack.js"></script>
<script type="text/javascript">
;(function(d){
    var s=d.createElement('script');
    //s.src="//qunarzz.com/usertoolbar/prd/v1.0.0/m-usertoolbar.js?"+(new Date()/180000|0);
    s.src="prd/scripts/m-usertoolbar.js?"+(new Date()/180000|0);
    var h=d.getElementsByTagName('head');
    if(h&&h[0]){h[0].appendChild(s);}
})(document);
</script>


<script type="text/javascript">
</script>
<script type="text/javascript">
 //modify
 //onload 与 ready的区别
 window.onload = function (){ 
 $("#js_inter_tab").trigger("click");
 } 
</script>
            </body>
        </html>

EOD;
    return $html;
}
?>
