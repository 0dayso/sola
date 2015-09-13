﻿// JavaScript Document

var city_data = "";
city_data = "110000|北京,110100|市辖区,110101|东城区,110102|西城区,110103|崇文区,110104|宣武区,110105|朝阳区,110106|丰台区,110107|石景山区,110108|海淀区,110109|门头沟区,110111|房山区,110112|通州区,110113|顺义区,110114|昌平区,110115|大兴区,110116|怀柔区,110117|平谷区,110200|县,110228|密云县,110229|延庆县,120000|天津,120100|市辖区,120101|和平区,120102|河东区,120103|河西区,120104|南开区,120105|河北区,120106|红桥区,120107|塘沽区,120108|汉沽区,120109|大港区,120110|东丽区,120111|西青区,120112|津南区,120113|北辰区,120114|武清区,120115|宝坻区,120200|县,120221|宁河县,120223|静海县,120225|蓟县,130000|河北,130100|石家庄,130101|长安区,130103|桥东区,130104|桥西区,130105|新华区,130107|井陉矿区,130108|裕华区,130121|井陉县,130123|正定县,130124|栾城县,130125|行唐县,130126|灵寿县,130127|高邑县,130128|深泽县,130129|赞皇县,130130|无极县,130131|平山县,130132|元氏县,130133|赵县,130181|辛集,130182|藁城,130183|晋州,130184|新乐,130185|鹿泉,130200|唐山,130201|路南区,130203|路北区,130204|古冶区,130205|开平区,130207|丰南区,130208|丰润区,130223|滦县,130224|滦南县,130225|乐亭县,130227|迁西县,130229|玉田县,130230|唐海县,130281|遵化,130283|迁安,130300|秦皇岛,130301|海港区,130303|山海关区,130304|北戴河区,130321|青龙满族自治县,130322|昌黎县,130323|抚宁县,130324|卢龙县,130400|邯郸,130401|邯山区,130403|丛台区,130404|复兴区,130406|峰峰矿区,130421|邯郸县,130423|临漳县,130424|成安县,130425|大名县,130426|涉县,130427|磁县,130428|肥乡县,130429|永年县,130430|邱县,130431|鸡泽县,130432|广平县,130433|馆陶县,130434|魏县,130435|曲周县,130481|武安,130500|邢台,130501|桥东区,130503|桥西区,130521|邢台县,130522|临城县,130523|内丘县,130524|柏乡县,130525|隆尧县,130526|任县,130527|南和县,130528|宁晋县,130529|巨鹿县,130530|新河县,130531|广宗县,130532|平乡县,130533|威县,130534|清河县,130535|临西县,130581|南宫,130582|沙河,130600|保定,130601|新市区,130603|北市区,130604|南市区,130621|满城县,130622|清苑县,130623|涞水县,130624|阜平县,130625|徐水县,130626|定兴县,130627|唐县,130628|高阳县,130629|容城县,130630|涞源县,130631|望都县,130632|安新县,130633|易县,130634|曲阳县,130635|蠡县,130636|顺平县,130637|博野县,130638|雄县,130681|涿州,130682|定州,130683|安国,130684|高碑店,130700|张家口,130701|桥东区,130703|桥西区,130705|宣化区,130706|下花园区,130721|宣化县,130722|张北县,130723|康保县,130724|沽源县,130725|尚义县,130726|蔚县,130727|阳原县,130728|怀安县,130729|万全县,130730|怀来县,130731|涿鹿县,130732|赤城县,130733|崇礼县,130800|承德,130801|双桥区,130803|双滦区,130804|鹰手营子矿区,130821|承德县,130822|兴隆县,130823|平泉县,130824|滦平县,130825|隆化县,130826|丰宁满族自治县,130827|宽城满族自治县,130828|围场满族蒙古族自治县,130900|沧州,130901|新华区,130903|运河区,130921|沧县,130922|青县,130923|东光县,130924|海兴县,130925|盐山县,130926|肃宁县,130927|南皮县,130928|吴桥县,130929|献县,130930|孟村回族自治县,130981|泊头,130982|任丘,130983|黄骅,130984|河间,131000|廊坊,131001|安次区,131003|广阳区,131022|固安县,131023|永清县,131024|香河县,131025|大城县,131026|文安县,131028|大厂回族自治县,131081|霸州,131082|三河,131100|衡水,131101|桃城区,131121|枣强县,131122|武邑县,131123|武强县,131124|饶阳县,131125|安平县,131126|故城县,131127|景县,131128|阜城县,131181|冀州,131182|深州,140000|山西,140100|太原,140101|小店区,140106|迎泽区,140107|杏花岭区,140108|尖草坪区,140109|万柏林区,140110|晋源区,140121|清徐县,140122|阳曲县,140123|娄烦县,140181|古交,140200|大同,140201|城区,140203|矿区,140211|南郊区,140212|新荣区,140221|阳高县,140222|天镇县,140223|广灵县,140224|灵丘县,140225|浑源县,140226|左云县,140227|大同县,140300|阳泉,140301|城区,140303|矿区,140311|郊区,140321|平定县,140322|盂县,140400|长治,140401|城区,140411|郊区,140421|长治县,140423|襄垣县,140424|屯留县,140425|平顺县,140426|黎城县,140427|壶关县,140428|长子县,140429|武乡县,140430|沁县,140431|沁源县,140481|潞城,140500|晋城,140501|城区,140521|沁水县,140522|阳城县,140524|陵川县,140525|泽州县,140581|高平,140600|朔州,140601|朔城区,140603|平鲁区,140621|山阴县,140622|应县,140623|右玉县,140624|怀仁县,140700|晋中,140701|榆次区,140721|榆社县,140722|左权县,140723|和顺县,140724|昔阳县,140725|寿阳县,140726|太谷县,140727|祁县,140728|平遥县,140729|灵石县,140781|介休,140800|运城,140801|盐湖区,140821|临猗县,140822|万荣县,140823|闻喜县,140824|稷山县,140825|新绛县,140826|绛县,140827|垣曲县,140828|夏县,140829|平陆县,140830|芮城县,140881|永济,140882|河津,140900|忻州,140901|忻府区,140921|定襄县,140922|五台县,140923|代县,140924|繁峙县,140925|宁武县,140926|静乐县,140927|神池县,140928|五寨县,140929|岢岚县,140930|河曲县,140931|保德县,140932|偏关县,140981|原平,141000|临汾,141001|尧都区,141021|曲沃县,141022|翼城县,141023|襄汾县,141024|洪洞县,141025|古县,141026|安泽县,141027|浮山县,141028|吉县,141029|乡宁县,141030|大宁县,141031|隰县,141032|永和县,141033|蒲县,141034|汾西县,141081|侯马,141082|霍州,142300|吕梁,142301|孝义,142302|离石,142303|汾阳,142322|文水县,142323|交城县,142325|兴县,142326|临县,142327|柳林县,142328|石楼县,142329|岚县,142330|方山县,142332|中阳县,142333|交口县,150000|内蒙古,150100|呼和浩特,150101|新城区,150103|回民区,150104|玉泉区,150105|赛罕区,150121|土默特左旗,150122|托克托县,150123|和林格尔县,150124|清水河县,150125|武川县,150200|包头,150201|东河区,150203|昆都仑区,150204|青山区,150205|石拐区,150206|白云矿区,150207|九原区,150221|土默特右旗,150222|固阳县,150223|达尔罕茂明安联合旗,150300|乌海,150301|海勃湾区,150303|海南区,150304|乌达区,150400|赤峰,150401|红山区,150403|元宝山区,150404|松山区,150421|阿鲁科尔沁旗,150422|巴林左旗,150423|巴林右旗,150424|林西县,150425|克什克腾旗,150426|翁牛特旗,150428|喀喇沁旗,150429|宁城县,150430|敖汉旗,150500|通辽,150501|科尔沁区,150521|科尔沁左翼中旗,150522|科尔沁左翼后旗,150523|开鲁县,150524|库伦旗,150525|奈曼旗,150526|扎鲁特旗,150581|霍林郭勒,150600|鄂尔多斯,150602|东胜区,150621|达拉特旗,150622|准格尔旗,150623|鄂托克前旗,150624|鄂托克旗,150625|杭锦旗,150626|乌审旗,150627|伊金霍洛旗,150700|呼伦贝尔,150701|海拉尔区,150721|阿荣旗,150722|莫力达瓦达斡尔族自治旗,150723|鄂伦春自治旗,150724|鄂温克族自治旗,150725|陈巴尔虎旗,150726|新巴尔虎左旗,150727|新巴尔虎右旗,150781|满洲里,150782|牙克石,150783|扎兰屯,150784|额尔古纳,150785|根河,152200|兴安盟,152201|乌兰浩特,152202|阿尔山,152221|科尔沁右翼前旗,152222|科尔沁右翼中旗,152223|扎赉特旗,152224|突泉县,152500|锡林郭勒盟,152501|二连浩特,152502|锡林浩特,152522|阿巴嘎旗,152523|苏尼特左旗,152524|苏尼特右旗,152525|东乌珠穆沁旗,152526|西乌珠穆沁旗,152527|太仆寺旗,152528|镶黄旗,152529|正镶白旗,152530|正蓝旗,152531|多伦县,152600|乌兰察布盟,152601|集宁,152602|丰镇,152624|卓资县,152625|化德县,152626|商都县,152627|兴和县,152629|凉城县,152630|察哈尔右翼前旗,152631|察哈尔右翼中旗,152632|察哈尔右翼后旗,152634|四子王旗,152800|巴彦淖尔盟,152801|临河,152822|五原县,152823|磴口县,152824|乌拉特前旗,152825|乌拉特中旗,152826|乌拉特后旗,152827|杭锦后旗,152900|阿拉善盟,152921|阿拉善左旗,152922|阿拉善右旗,152923|额济纳旗,210000|辽宁,210100|沈阳,210101|和平区,210103|沈河区,210104|大东区,210105|皇姑区,210106|铁西区,210111|苏家屯区,210112|东陵区,210113|新城子区,210114|于洪区,210122|辽中县,210123|康平县,210124|法库县,210181|新民,210200|大连,210201|中山区,210203|西岗区,210204|沙河口区,210211|甘井子区,210212|旅顺口区,210213|金州区,210224|长海县,210281|瓦房店,210282|普兰店,210283|庄河,210300|鞍山,210301|铁东区,210303|铁西区,210304|立山区,210311|千山区,210321|台安县,210323|岫岩满族自治县,210381|海城,210400|抚顺,210401|新抚区,210403|东洲区,210404|望花区,210411|顺城区,210421|抚顺县,210422|新宾满族自治县,210423|清原满族自治县,210500|本溪,210501|平山区,210503|溪湖区,210504|明山区,210505|南芬区,210521|本溪满族自治县,210522|桓仁满族自治县,210600|丹东,210601|元宝区,210603|振兴区,210604|振安区,210624|宽甸满族自治县,210681|东港,210682|凤城,210700|锦州,210701|古塔区,210703|凌河区,210711|太和区,210726|黑山县,210727|义县,210781|凌海,210782|北宁,210800|营口,210801|站前区,210803|西市区,210804|鲅鱼圈区,210811|老边区,210881|盖州,210882|大石桥,210900|阜新,210901|海州区,210903|新邱区,210904|太平区,210905|清河门区,210911|细河区,210921|阜新蒙古族自治县,210922|彰武县,211000|辽阳,211001|白塔区,211003|文圣区,211004|宏伟区,211005|弓长岭区,211011|太子河区,211021|辽阳县,211081|灯塔,211100|盘锦,211101|双台子区,211103|兴隆台区,211121|大洼县,211122|盘山县,211200|铁岭,211201|银州区,211204|清河区,211221|铁岭县,211223|西丰县,211224|昌图县,211281|调兵山,211282|开原,211300|朝阳,211301|双塔区,211303|龙城区,211321|朝阳县,211322|建平县,211324|喀喇沁左翼蒙古族自治县,211381|北票,211382|凌源,211400|葫芦岛,211401|连山区,211403|龙港区,211404|南票区,211421|绥中县,211422|建昌县,211481|兴城,220000|吉林,220100|长春,220101|南关区,220103|宽城区,220104|朝阳区,220105|二道区,220106|绿园区,220112|双阳区,220122|农安县,220181|九台,220182|榆树,220183|德惠,220200|吉林,220201|昌邑区,220203|龙潭区,220204|船营区,220211|丰满区,220221|永吉县,220281|蛟河,220282|桦甸,220283|舒兰,220284|磐石,220300|四平,220301|铁西区,220303|铁东区,220322|梨树县,220323|伊通满族自治县,220381|公主岭,220382|双辽,220400|辽源,220401|龙山区,220403|西安区,220421|东丰县,220422|东辽县,220500|通化,220501|东昌区,220503|二道江区,220521|通化县,220523|辉南县,220524|柳河县,220581|梅河口,220582|集安,220600|白山,220601|八道江区,220621|抚松县,220622|靖宇县,220623|长白朝鲜族自治县,220625|江源县,220681|临江,220700|松原,220701|宁江区,220721|前郭尔罗斯蒙古族自治县,220722|长岭县,220723|乾安县,220724|扶余县,220800|白城,220801|洮北区,220821|镇赉县,220822|通榆县,220881|洮南,220882|大安,222400|延边,222401|延吉,222402|图们,222403|敦化,222404|珲春,222405|龙井,222406|和龙,222424|汪清县,222426|安图县,230000|黑龙江,230100|哈尔滨,230101|道里区,230103|南岗区,230104|道外区,230105|太平区,230106|香坊区,230107|动力区,230108|平房区,230121|呼兰县,230123|依兰县,230124|方正县,230125|宾县,230126|巴彦县,230127|木兰县,230128|通河县,230129|延寿县,230181|阿城,230182|双城,230183|尚志,230184|五常,230200|齐齐哈尔,230201|龙沙区,230203|建华区,230204|铁锋区,230205|昂昂溪区,230206|富拉尔基区,230207|碾子山区,230208|梅里斯达斡尔族区,230221|龙江县,230223|依安县,230224|泰来县,230225|甘南县,230227|富裕县,230229|克山县,230230|克东县,230231|拜泉县,230281|讷河,230300|鸡西,230301|鸡冠区,230303|恒山区,230304|滴道区,230305|梨树区,230306|城子河区,230307|麻山区,230321|鸡东县,230381|虎林,230382|密山,230400|鹤岗,230401|向阳区,230403|工农区,230404|南山区,230405|兴安区,230406|东山区,230407|兴山区,230421|萝北县,230422|绥滨县,230500|双鸭山,230501|尖山区,230503|岭东区,230505|四方台区,230506|宝山区,230521|集贤县,230522|友谊县,230523|宝清县,230524|饶河县,230600|大庆,230601|萨尔图区,230603|龙凤区,230604|让胡路区,230605|红岗区,230606|大同区,230621|肇州县,230622|肇源县,230623|林甸县,230624|杜尔伯特蒙古族自治县,230700|伊春,230701|伊春区,230703|南岔区,230704|友好区,230705|西林区,230706|翠峦区,230707|新青区,230708|美溪区,230709|金山屯区,230710|五营区,230711|乌马河区,230712|汤旺河区,230713|带岭区,230714|乌伊岭区,230715|红星区,230716|上甘岭区,230722|嘉荫县,230781|铁力,230800|佳木斯,230801|永红区,230803|向阳区,230804|前进区,230805|东风区,230811|郊区,230822|桦南县,230826|桦川县,230828|汤原县,230833|抚远县,230881|同江,230882|富锦,230900|七台河,230901|新兴区,230903|桃山区,230904|茄子河区,230921|勃利县,231000|牡丹江,231001|东安区,231003|阳明区,231004|爱民区,231005|西安区,231024|东宁县,231025|林口县,231081|绥芬河,231083|海林,231084|宁安,231085|穆棱,231100|黑河,231101|爱辉区,231121|嫩江县,231123|逊克县,231124|孙吴县,231181|北安,231182|五大连池,231200|绥化,231201|北林区,231221|望奎县,231222|兰西县,231223|青冈县,231224|庆安县,231225|明水县,231226|绥棱县,231281|安达,231282|肇东,231283|海伦,232700|大兴安岭,232721|呼玛县,232722|塔河县,232723|漠河县,310000|上海,310100|市辖区,310101|黄浦区,310103|卢湾区,310104|徐汇区,310105|长宁区,310106|静安区,310107|普陀区,310108|闸北区,310109|虹口区,310110|杨浦区,310112|闵行区,310113|宝山区,310114|嘉定区,310115|浦东新区,310116|金山区,310117|松江区,310118|青浦区,310119|南汇区,310120|奉贤区,310200|县,310230|崇明县,320000|江苏,320100|南京,320101|玄武区,320103|白下区,320104|秦淮区,320105|建邺区,320106|鼓楼区,320107|下关区,320111|浦口区,320113|栖霞区,320114|雨花台区,320115|江宁区,320116|六合区,320124|溧水县,320125|高淳县,320200|无锡,320201|崇安区,320203|南长区,320204|北塘区,320205|锡山区,320206|惠山区,320211|滨湖区,320281|江阴,320282|宜兴,320300|徐州,320301|鼓楼区,320303|云龙区,320304|九里区,320305|贾汪区,320311|泉山区,320321|丰县,320322|沛县,320323|铜山县,320324|睢宁县,320381|新沂,320382|邳州,320400|常州,320401|天宁区,320404|钟楼区,320405|戚墅堰区,320411|新北区,320412|武进区,320481|溧阳,320482|金坛,320500|苏州,320501|沧浪区,320503|平江区,320504|金阊区,320505|虎丘区,320506|吴中区,320507|相城区,320581|常熟,320582|张家港,320583|昆山,320584|吴江,320585|太仓,320600|南通,320601|崇川区,320611|港闸区,320621|海安县,320623|如东县,320681|启东,320682|如皋,320683|通州,320684|海门,320700|连云港,320701|连云区,320705|新浦区,320706|海州区,320721|赣榆县,320722|东海县,320723|灌云县,320724|灌南县,320800|淮安,320801|清河区,320803|楚州区,320804|淮阴区,320811|清浦区,320826|涟水县,320829|洪泽县,320830|盱眙县,320831|金湖县,320900|盐城,320901|城区,320921|响水县,320922|滨海县,320923|阜宁县,320924|射阳县,320925|建湖县,320928|盐都县,320981|东台,320982|大丰,321000|扬州,321001|广陵区,321003|邗江区,321011|郊区,321023|宝应县,321081|仪征,321084|高邮,321088|江都,321100|镇江,321101|京口区,321111|润州区,321112|丹徒区,321181|丹阳,321182|扬中,321183|句容,321200|泰州,321201|海陵区,321203|高港区,321281|兴化,321282|靖江,321283|泰兴,321284|姜堰,321300|宿迁,321301|宿城区,321321|宿豫县,321322|沭阳县,321323|泗阳县,321324|泗洪县,330000|浙江,330100|杭州,330101|上城区,330103|下城区,330104|江干区,330105|拱墅区,330106|西湖区,330108|滨江区,330109|萧山区,330110|余杭区,330122|桐庐县,330127|淳安县,330182|建德,330183|富阳,330185|临安,330200|宁波,330201|海曙区,330204|江东区,330205|江北区,330206|北仑区,330211|镇海区,330212|鄞州区,330225|象山县,330226|宁海县,330281|余姚,330282|慈溪,330283|奉化,330300|温州,330301|鹿城区,330303|龙湾区,330304|瓯海区,330322|洞头县,330324|永嘉县,330326|平阳县,330327|苍南县,330328|文成县,330329|泰顺县,330381|瑞安,330382|乐清,330400|嘉兴,330401|秀城区,330411|秀洲区,330421|嘉善县,330424|海盐县,330481|海宁,330482|平湖,330483|桐乡,330500|湖州,330501|德清县,330522|长兴县,330523|安吉县,330600|绍兴,330601|越城区,330621|绍兴县,330624|新昌县,330681|诸暨,330682|上虞,330683|嵊州,330700|金华,330701|婺城区,330703|金东区,330723|武义县,330726|浦江县,330727|磐安县,330781|兰溪,330782|义乌,330783|东阳,330784|永康,330800|衢州,330801|柯城区,330803|衢江区,330822|常山县,330824|开化县,330825|龙游县,330881|江山,330900|舟山,330901|定海区,330903|普陀区,330921|岱山县,330922|嵊泗县,331000|台州,331001|椒江区,331003|黄岩区,331004|路桥区,331021|玉环县,331022|三门县,331023|天台县,331024|仙居县,331081|温岭,331082|临海,331100|丽水,331101|莲都区,331121|青田县,331122|缙云县,331123|遂昌县,331124|松阳县,331125|云和县,331126|庆元县,331127|景宁畲族自治县,331181|龙泉,340000|安徽,340100|合肥,340101|瑶海区,340103|庐阳区,340104|蜀山区,340111|包河区,340121|长丰县,340122|肥东县,340123|肥西县,340200|芜湖,340201|镜湖区,340203|马塘区,340204|新芜区,340207|鸠江区,340221|芜湖县,340222|繁昌县,340223|南陵县,340300|蚌埠,340301|东市区,340303|中市区,340304|西市区,340311|郊区,340321|怀远县,340322|五河县,340323|固镇县,340400|淮南,340401|大通区,340403|田家庵区,340404|谢家集区,340405|八公山区,340406|潘集区,340421|凤台县,340500|马鞍山,340501|金家庄区,340503|花山区,340504|雨山区,340521|当涂县,340600|淮北,340601|杜集区,340603|相山区,340604|烈山区,340621|濉溪县,340700|铜陵,340701|铜官山区,340703|狮子山区,340711|郊区,340721|铜陵县,340800|安庆,340801|迎江区,340803|大观区,340811|郊区,340822|怀宁县,340823|枞阳县,340824|潜山县,340825|太湖县,340826|宿松县,340827|望江县,340828|岳西县,340881|桐城,341000|黄山,341001|屯溪区,341003|黄山区,341004|徽州区,341021|歙县,341022|休宁县,341023|黟县,341024|祁门县,341100|滁州,341101|琅琊区,341103|南谯区,341122|来安县,341124|全椒县,341125|定远县,341126|凤阳县,341181|天长,341182|明光,341200|阜阳,341201|颍州区,341203|颍东区,341204|颍泉区,341221|临泉县,341222|太和县,341225|阜南县,341226|颍上县,341282|界首,341300|宿州,341301|墉桥区,341321|砀山县,341322|萧县,341323|灵璧县,341324|泗县,341400|巢湖,341401|居巢区,341421|庐江县,341422|无为县,341423|含山县,341424|和县,341500|六安,341501|金安区,341503|裕安区,341521|寿县,341522|霍邱县,341523|舒城县,341524|金寨县,341525|霍山县,341600|亳州,341621|涡阳县,341622|蒙城县,341623|利辛县,341700|池州,341701|贵池区,341721|东至县,341722|石台县,341723|青阳县,341800|宣城,341801|宣州区,341821|郎溪县,341822|广德县,341823|泾县,341824|绩溪县,341825|旌德县,341881|宁国,350000|福建,350100|福州,350101|鼓楼区,350103|台江区,350104|仓山区,350105|马尾区,350111|晋安区,350121|闽侯县,350122|连江县,350123|罗源县,350124|闽清县,350125|永泰县,350128|平潭县,350181|福清,350182|长乐,350200|厦门,350201|鼓浪屿区,350203|思明区,350204|开元区,350205|杏林区,350206|湖里区,350211|集美区,350212|同安区,350300|莆田,350301|城厢区,350303|涵江区,350304|荔城区,350305|秀屿区,350322|仙游县,350400|三明,350401|梅列区,350403|三元区,350421|明溪县,350423|清流县,350424|宁化县,350425|大田县,350426|尤溪县,350427|沙县,350428|将乐县,350429|泰宁县,350430|建宁县,350481|永安,350500|泉州,350501|鲤城区,350503|丰泽区,350504|洛江区,350505|泉港区,350521|惠安县,350524|安溪县,350525|永春县,350526|德化县,350527|金门县,350581|石狮,350582|晋江,350583|南安,350600|漳州,350601|芗城区,350603|龙文区,350622|云霄县,350623|漳浦县,350624|诏安县,350625|长泰县,350626|东山县,350627|南靖县,350628|平和县,350629|华安县,350681|龙海,350700|南平,350701|延平区,350721|顺昌县,350722|浦城县,350723|光泽县,350724|松溪县,350725|政和县,350781|邵武,350782|武夷山,350783|建瓯,350784|建阳,350800|龙岩,350801|新罗区,350821|长汀县,350822|永定县,350823|上杭县,350824|武平县,350825|连城县,350881|漳平,350900|宁德,350901|蕉城区,350921|霞浦县,350922|古田县,350923|屏南县,350924|寿宁县,350925|周宁县,350926|柘荣县,350981|福安,350982|福鼎,360000|江西,360100|南昌,360101|东湖区,360103|西湖区,360104|青云谱区,360105|湾里区,360111|青山湖区,360121|南昌县,360122|新建县,360123|安义县,360124|进贤县,360200|景德镇,360201|昌江区,360203|珠山区,360222|浮梁县,360281|乐平,360300|萍乡,360301|安源区,360313|湘东区,360321|莲花县,360322|上栗县,360323|芦溪县,360400|九江,360401|庐山区,360403|浔阳区,360421|九江县,360423|武宁县,360424|修水县,360425|永修县,360426|德安县,360427|星子县,360428|都昌县,360429|湖口县,360430|彭泽县,360481|瑞昌,360500|新余,360501|渝水区,360521|分宜县,360600|鹰潭,360601|月湖区,360622|余江县,360681|贵溪,360700|赣州,360701|章贡区,360721|赣县,360722|信丰县,360723|大余县,360724|上犹县,360725|崇义县,360726|安远县,360727|龙南县,360728|定南县,360729|全南县,360730|宁都县,360731|于都县,360732|兴国县,360733|会昌县,360734|寻乌县,360735|石城县,360781|瑞金,360782|南康,360800|吉安,360801|吉州区,360803|青原区,360821|吉安县,360822|吉水县,360823|峡江县,360824|新干县,360825|永丰县,360826|泰和县,360827|遂川县,360828|万安县,360829|安福县,360830|永新县,360881|井冈山,360900|宜春,360901|袁州区,360921|奉新县,360922|万载县,360923|上高县,360924|宜丰县,360925|靖安县,360926|铜鼓县,360981|丰城,360982|樟树,360983|高安,361000|抚州,361001|临川区,361021|南城县,361022|黎川县,361023|南丰县,361024|崇仁县,361025|乐安县,361026|宜黄县,361027|金溪县,361028|资溪县,361029|东乡县,361030|广昌县,361100|上饶,361101|信州区,361121|上饶县,361122|广丰县,361123|玉山县,361124|铅山县,361125|横峰县,361126|弋阳县,361127|余干县,361128|波阳县,361129|万年县,361130|婺源县,361181|德兴,370000|山东,370100|济南,370101|历下区,370103|市中区,370104|槐荫区,370105|天桥区,370112|历城区,370113|长清区,370124|平阴县,370125|济阳县,370126|商河县,370181|章丘,370200|青岛,370201|市南区,370203|市北区,370205|四方区,370211|黄岛区,370212|崂山区,370213|李沧区,370214|城阳区,370281|胶州,370282|即墨,370283|平度,370284|胶南,370285|莱西,370300|淄博,370301|淄川区,370303|张店区,370304|博山区,370305|临淄区,370306|周村区,370321|桓台县,370322|高青县,370323|沂源县,370400|枣庄,370401|市中区,370403|薛城区,370404|峄城区,370405|台儿庄区,370406|山亭区,370481|滕州,370500|东营,370501|东营区,370503|河口区,370521|垦利县,370522|利津县,370523|广饶县,370600|烟台,370601|芝罘区,370611|福山区,370612|牟平区,370613|莱山区,370634|长岛县,370681|龙口,370682|莱阳,370683|莱州,370684|蓬莱,370685|招远,370686|栖霞,370687|海阳,370700|潍坊,370701|潍城区,370703|寒亭区,370704|坊子区,370705|奎文区,370724|临朐县,370725|昌乐县,370781|青州,370782|诸城,370783|寿光,370784|安丘,370785|高密,370786|昌邑,370800|济宁,370801|市中区,370811|任城区,370826|微山县,370827|鱼台县,370828|金乡县,370829|嘉祥县,370830|汶上县,370831|泗水县,370832|梁山县,370881|曲阜,370882|兖州,370883|邹城,370900|泰安,370901|泰山区,370903|岱岳区,370921|宁阳县,370923|东平县,370982|新泰,370983|肥城,371000|威海,371001|环翠区,371081|文登,371082|荣成,371083|乳山,371100|日照,371101|东港区,371121|五莲县,371122|莒县,371200|莱芜,371201|莱城区,371203|钢城区,371300|临沂,371301|兰山区,371311|罗庄区,371312|河东区,371321|沂南县,371322|郯城县,371323|沂水县,371324|苍山县,371325|费县,371326|平邑县,371327|莒南县,371328|蒙阴县,371329|临沭县,371400|德州,371401|德城区,371421|陵县,371422|宁津县,371423|庆云县,371424|临邑县,371425|齐河县,371426|平原县,371427|夏津县,371428|武城县,371481|乐陵,371482|禹城,371500|聊城,371501|东昌府区,371521|阳谷县,371522|莘县,371523|茌平县,371524|东阿县,371525|冠县,371526|高唐县,371581|临清,371600|滨州,371601|滨城区,371621|惠民县,371622|阳信县,371623|无棣县,371624|沾化县,371625|博兴县,371626|邹平县,371700|荷泽,371701|牡丹区,371721|曹县,371722|单县,371723|成武县,371724|巨野县,371725|郓城县,371726|鄄城县,371727|定陶县,371728|东明县,410000|河南,410100|郑州,410101|中原区,410103|二七区,410104|管城回族区,410105|金水区,410106|上街区,410108|邙山区,410122|中牟县,410181|巩义,410182|荥阳,410183|新密,410184|新郑,410185|登封,410200|开封,410201|龙亭区,410203|顺河回族区,410204|鼓楼区,410205|南关区,410211|郊区,410221|杞县,410222|通许县,410223|尉氏县,410224|开封县,410225|兰考县,410300|洛阳,410301|老城区,410303|西工区,410304|廛河回族区,410305|涧西区,410306|吉利区,410307|洛龙区,410322|孟津县,410323|新安县,410324|栾川县,410325|嵩县,410326|汝阳县,410327|宜阳县,410328|洛宁县,410329|伊川县,410381|偃师,410400|平顶山,410401|新华区,410403|卫东区,410404|石龙区,410411|湛河区,410421|宝丰县,410422|叶县,410423|鲁山县,410425|郏县,410481|舞钢,410482|汝州,410500|安阳,410501|文峰区,410503|北关区,410504|铁西区,410511|郊区,410522|安阳县,410523|汤阴县,410526|滑县,410527|内黄县,410581|林州,410600|鹤壁,410601|鹤山区,410603|山城区,410611|淇滨区,410621|浚县,410622|淇县,410700|新乡,410701|红旗区,410703|新华区,410704|北站区,410711|郊区,410721|新乡县,410724|获嘉县,410725|原阳县,410726|延津县,410727|封丘县,410728|长垣县,410781|卫辉,410782|辉县,410800|焦作,410801|解放区,410803|中站区,410804|马村区,410811|山阳区,410821|修武县,410822|博爱县,410823|武陟县,410825|温县,410881|济源,410882|沁阳,410883|孟州,410900|濮阳,410901|市区,410922|清丰县,410923|南乐县,410926|范县,410927|台前县,410928|濮阳县,411000|许昌,411001|魏都区,411023|许昌县,411024|鄢陵县,411025|襄城县,411081|禹州,411082|长葛,411100|漯河,411101|源汇区,411121|舞阳县,411122|临颍县,411123|郾城县,411200|三门峡,411201|湖滨区,411221|渑池县,411222|陕县,411224|卢氏县,411281|义马,411282|灵宝,411300|南阳,411301|宛城区,411303|卧龙区,411321|南召县,411322|方城县,411323|西峡县,411324|镇平县,411325|内乡县,411326|淅川县,411327|社旗县,411328|唐河县,411329|新野县,411330|桐柏县,411381|邓州,411400|商丘,411401|梁园区,411403|睢阳区,411421|民权县,411422|睢县,411423|宁陵县,411424|柘城县,411425|虞城县,411426|夏邑县,411481|永城,411500|信阳,411501|师河区,411503|平桥区,411521|罗山县,411522|光山县,411523|新县,411524|商城县,411525|固始县,411526|潢川县,411527|淮滨县,411528|息县,411600|周口,411601|川汇区,411621|扶沟县,411622|西华县,411623|商水县,411624|沈丘县,411625|郸城县,411626|淮阳县,411627|太康县,411628|鹿邑县,411681|项城,411700|驻马店,411701|驿城区,411721|西平县,411722|上蔡县,411723|平舆县,411724|正阳县,411725|确山县,411726|泌阳县,411727|汝南县,411728|遂平县,411729|新蔡县,420000|湖北,420100|武汉,420101|江岸区,420103|江汉区,420104|乔口区,420105|汉阳区,420106|武昌区,420107|青山区,420111|洪山区,420112|东西湖区,420113|汉南区,420114|蔡甸区,420115|江夏区,420116|黄陂区,420117|新洲区,420200|黄石,420201|黄石港区,420203|西塞山区,420204|下陆区,420205|铁山区,420222|阳新县,420281|大冶,420300|十堰,420301|茅箭区,420303|张湾区,420321|郧县,420322|郧西县,420323|竹山县,420324|竹溪县,420325|房县,420381|丹江口,420500|宜昌,420501|西陵区,420503|伍家岗区,420504|点军区,420505|虎亭区,420506|夷陵区,420525|远安县,420526|兴山县,420527|秭归县,420528|长阳土家族自治县,420529|五峰土家族自治县,420581|宜都,420582|当阳,420583|枝江,420600|襄樊,420601|襄城区,420606|樊城区,420607|襄阳区,420624|南漳县,420625|谷城县,420626|保康县,420682|老河口,420683|枣阳,420684|宜城,420700|鄂州,420701|梁子湖区,420703|华容区,420704|鄂城区,420800|荆门,420801|东宝区,420804|掇刀区,420821|京山县,420822|沙洋县,420881|钟祥,420900|孝感,420901|孝南区,420921|孝昌县,420922|大悟县,420923|云梦县,420981|应城,420982|安陆,420984|汉川,421000|荆州,421001|沙市区,421003|荆州区,421022|公安县,421023|监利县,421024|江陵县,421081|石首,421083|洪湖,421087|松滋,421100|黄冈,421101|黄州区,421121|团风县,421122|红安县,421123|罗田县,421124|英山县,421125|浠水县,421126|蕲春县,421127|黄梅县,421181|麻城,421182|武穴,421200|咸宁,421201|咸安区,421221|嘉鱼县,421222|通城县,421223|崇阳县,421224|通山县,421281|赤壁,421300|随州,421301|曾都区,421381|广水,422800|恩施,422801|恩施,422802|利川,422822|建始县,422823|巴东县,422825|宣恩县,422826|咸丰县,422827|来凤县,422828|鹤峰县,429000|省直辖行政单位,429004|仙桃,429005|潜江,429006|天门,429021|神农架林区,430000|湖南,430100|长沙,430101|芙蓉区,430103|天心区,430104|岳麓区,430105|开福区,430111|雨花区,430121|长沙县,430122|望城县,430124|宁乡县,430181|浏阳,430200|株洲,430201|荷塘区,430203|芦淞区,430204|石峰区,430211|天元区,430221|株洲县,430223|攸县,430224|茶陵县,430225|炎陵县,430281|醴陵,430300|湘潭,430301|雨湖区,430304|岳塘区,430321|湘潭县,430381|湘乡,430382|韶山,430400|衡阳,430401|珠晖区,430406|雁峰区,430407|石鼓区,430408|蒸湘区,430412|南岳区,430421|衡阳县,430422|衡南县,430423|衡山县,430424|衡东县,430426|祁东县,430481|耒阳,430482|常宁,430500|邵阳,430501|双清区,430503|大祥区,430511|北塔区,430521|邵东县,430522|新邵县,430523|邵阳县,430524|隆回县,430525|洞口县,430527|绥宁县,430528|新宁县,430529|城步苗族自治县,430581|武冈,430600|岳阳,430601|岳阳楼区,430603|云溪区,430611|君山区,430621|岳阳县,430623|华容县,430624|湘阴县,430626|平江县,430681|汨罗,430682|临湘,430700|常德,430701|武陵区,430703|鼎城区,430721|安乡县,430722|汉寿县,430723|澧县,430724|临澧县,430725|桃源县,430726|石门县,430781|津市,430800|张家界,430801|永定区,430811|武陵源区,430821|慈利县,430822|桑植县,430900|益阳,430901|资阳区,430903|赫山区,430921|南县,430922|桃江县,430923|安化县,430981|沅江,431000|郴州,431001|北湖区,431003|苏仙区,431021|桂阳县,431022|宜章县,431023|永兴县,431024|嘉禾县,431025|临武县,431026|汝城县,431027|桂东县,431028|安仁县,431081|资兴,431100|永州,431101|芝山区,431103|冷水滩区,431121|祁阳县,431122|东安县,431123|双牌县,431124|道县,431125|江永县,431126|宁远县,431127|蓝山县,431128|新田县,431129|江华瑶族自治县,431200|怀化,431201|鹤城区,431221|中方县,431222|沅陵县,431223|辰溪县,431224|溆浦县,431225|会同县,431226|麻阳苗族自治县,431227|新晃侗族自治县,431228|芷江侗族自治县,431229|靖州苗族侗族自治县,431230|通道侗族自治县,431281|洪江,431300|娄底,431301|娄星区,431321|双峰县,431322|新化县,431381|冷水江,431382|涟源,433100|湘西,433101|吉首,433122|泸溪县,433123|凤凰县,433124|花垣县,433125|保靖县,433126|古丈县,433127|永顺县,433130|龙山县,440000|广东,440100|广州,440101|东山区,440103|荔湾区,440104|越秀区,440105|海珠区,440106|天河区,440107|芳村区,440111|白云区,440112|黄埔区,440113|番禺区,440114|花都区,440183|增城,440184|从化,440200|韶关,440201|北江区,440203|武江区,440204|浈江区,440221|曲江县,440222|始兴县,440224|仁化县,440229|翁源县,440232|乳源瑶族自治县,440233|新丰县,440281|乐昌,440282|南雄,440300|深圳,440301|罗湖区,440304|福田区,440305|南山区,440306|宝安区,440307|龙岗区,440308|盐田区,440400|珠海,440401|香洲区,440403|斗门区,440404|金湾区,440500|汕头,440501|达濠区,440507|龙湖区,440508|金园区,440509|升平区,440510|河浦区,440523|南澳县,440582|潮阳,440583|澄海,440600|佛山,440601|城区,440603|石湾区,440681|顺德,440682|南海,440683|三水,440684|高明,440700|江门,440701|蓬江区,440704|江海区,440705|新会区,440781|台山,440783|开平,440784|鹤山,440785|恩平,440800|湛江,440801|赤坎区,440803|霞山区,440804|坡头区,440811|麻章区,440823|遂溪县,440825|徐闻县,440881|廉江,440882|雷州,440883|吴川,440900|茂名,440901|茂南区,440903|茂港区,440923|电白县,440981|高州,440982|化州,440983|信宜,441200|肇庆,441201|端州区,441203|鼎湖区,441223|广宁县,441224|怀集县,441225|封开县,441226|德庆县,441283|高要,441284|四会,441300|惠州,441301|惠城区,441322|博罗县,441323|惠东县,441324|龙门县,441381|惠阳,441400|梅州,441401|梅江区,441421|梅县,441422|大埔县,441423|丰顺县,441424|五华县,441426|平远县,441427|蕉岭县,441481|兴宁,441500|汕尾,441501|城区,441521|海丰县,441523|陆河县,441581|陆丰,441600|河源,441601|源城区,441621|紫金县,441622|龙川县,441623|连平县,441624|和平县,441625|东源县,441700|阳江,441701|江城区,441721|阳西县,441723|阳东县,441781|阳春,441800|清远,441801|清城区,441821|佛冈县,441823|阳山县,441825|连山壮族瑶族自治县,441826|连南瑶族自治县,441827|清新县,441881|英德,441882|连州,441900|东莞,442000|中山,445100|潮州,445101|湘桥区,445121|潮安县,445122|饶平县,445200|揭阳,445201|榕城区,445221|揭东县,445222|揭西县,445224|惠来县,445281|普宁,445300|云浮,445301|云城区,445321|新兴县,445322|郁南县,445323|云安县,445381|罗定,450000|广西,450100|南宁,450101|兴宁区,450103|新城区,450104|城北区,450105|江南区,450106|永新区,450121|邕宁县,450122|武鸣县,450200|柳州,450201|城中区,450203|鱼峰区,450204|柳南区,450205|柳北区,450221|柳江县,450222|柳城县,450300|桂林,450301|秀峰区,450303|叠彩区,450304|象山区,450305|七星区,450311|雁山区,450321|阳朔县,450322|临桂县,450323|灵川县,450324|全州县,450325|兴安县,450326|永福县,450327|灌阳县,450328|龙胜各族自治县,450329|资源县,450330|平乐县,450331|荔蒲县,450332|恭城瑶族自治县,450400|梧州,450401|万秀区,450404|蝶山区,450411|市郊区,450421|苍梧县,450422|藤县,450423|蒙山县,450481|岑溪,450500|北海,450501|海城区,450503|银海区,450512|铁山港区,450521|合浦县,450600|防城港,450601|港口区,450603|防城区,450621|上思县,450681|东兴,450700|钦州,450701|钦南区,450703|钦北区,450721|浦北县,450722|灵山县,450800|贵港,450801|港北区,450803|港南区,450821|平南县,450881|桂平,450900|玉林,450901|玉州区,450921|容县,450922|陆川县,450923|博白县,450924|兴业县,450981|北流,451000|百色,451001|右江区,451021|田阳县,451022|田东县,451023|平果县,451024|德保县,451025|靖西县,451026|那坡县,451027|凌云县,451028|乐业县,451029|田林县,451030|西林县,451031|隆林各族自治县,451100|贺州,451101|八步区,451121|昭平县,451122|钟山县,451123|富川瑶族自治县,451200|河池,451201|金城江区,451221|南丹县,451222|天峨县,451223|凤山县,451224|东兰县,451225|罗城仫佬族自治县,451226|环江毛南族自治县,451227|巴马瑶族自治县,451228|都安瑶族自治县,451229|大化瑶族自治县,451281|宜州,452100|南宁地区,452101|凭祥,452122|横县,452123|宾阳县,452124|上林县,452126|隆安县,452127|马山县,452128|扶绥县,452129|崇左县,452130|大新县,452131|天等县,452132|宁明县,452133|龙州县,452200|柳州地区,452201|合山,452223|鹿寨县,452224|象州县,452225|武宣县,452226|来宾县,452227|融安县,452228|三江侗族自治县,452229|融水苗族自治县,452230|金秀瑶族自治县,452231|忻城县,460000|海南,460100|海口,460101|振东区,460103|新华区,460104|秀英区,460200|三亚,460201|五指山,469002|琼海,469003|儋州,469004|琼山,469005|文昌,469006|万宁,469007|东方,469025|定安县,469026|屯昌县,469027|澄迈县,469028|临高县,469030|白沙黎族自治县,469031|昌江黎族自治县,469033|乐东黎族自治县,469034|陵水黎族自治县,469035|保亭黎族苗族自治县,469036|琼中黎族苗族自治县,469037|西沙群岛,469038|南沙群岛,469039|中沙群岛的岛礁及其海域,500000|重庆,500100|市辖区,500101|万州区,500102|涪陵区,500103|渝中区,500104|大渡口区,500105|江北区,500106|沙坪坝区,500107|九龙坡区,500108|南岸区,500109|北碚区,500110|万盛区,500111|双桥区,500112|渝北区,500113|巴南区,500114|黔江区,500115|长寿区,500200|县,500222|綦江县,500223|潼南县,500224|铜梁县,500225|大足县,500226|荣昌县,500227|璧山县,500228|梁平县,500229|城口县,500230|丰都县,500231|垫江县,500232|武隆县,500233|忠县,500234|开县,500235|云阳县,500236|奉节县,500237|巫山县,500238|巫溪县,500240|石柱土家族自治县,500241|秀山土家族苗族自治县,500242|酉阳土家族苗族自治县,500243|彭水苗族土家族自治县,500300|市,500381|江津,500382|合川,500383|永川,500384|南川,510000|四川,510100|成都,510101|锦江区,510105|青羊区,510106|金牛区,510107|武侯区,510108|成华区,510112|龙泉驿区,510113|青白江区,510114|新都区,510121|金堂县,510122|双流县,510123|温江县,510124|郫县,510129|大邑县,510131|蒲江县,510132|新津县,510181|都江堰,510182|彭州,510183|邛崃,510184|崇州,510300|自贡,510301|自流井区,510303|贡井区,510304|大安区,510311|沿滩区,510321|荣县,510322|富顺县,510400|攀枝花,510401|东区,510403|西区,510411|仁和区,510421|米易县,510422|盐边县,510500|泸州,510501|江阳区,510503|纳溪区,510504|龙马潭区,510521|泸县,510522|合江县,510524|叙永县,510525|古蔺县,510600|德阳,510601|旌阳区,510623|中江县,510626|罗江县,510681|广汉,510682|什邡,510683|绵竹,510700|绵阳,510701|涪城区,510704|游仙区,510722|三台县,510723|盐亭县,510724|安县,510725|梓潼县,510726|北川县,510727|平武县,510781|江油,510800|广元,510801|市中区,510811|元坝区,510812|朝天区,510821|旺苍县,510822|青川县,510823|剑阁县,510824|苍溪县,510900|遂宁,510901|市中区,510921|蓬溪县,510922|射洪县,510923|大英县,511000|内江,511001|市中区,511011|东兴区,511024|威远县,511025|资中县,511028|隆昌县,511100|乐山,511101|市中区,511111|沙湾区,511112|五通桥区,511113|金口河区,511123|犍为县,511124|井研县,511126|夹江县,511129|沐川县,511132|峨边彝族自治县,511133|马边彝族自治县,511181|峨眉山,511300|南充,511301|顺庆区,511303|高坪区,511304|嘉陵区,511321|南部县,511322|营山县,511323|蓬安县,511324|仪陇县,511325|西充县,511381|阆中,511400|眉山,511401|东坡区,511421|仁寿县,511422|彭山县,511423|洪雅县,511424|丹棱县,511425|青神县,511500|宜宾,511501|翠屏区,511521|宜宾县,511522|南溪县,511523|江安县,511524|长宁县,511525|高县,511526|珙县,511527|筠连县,511528|兴文县,511529|屏山县,511600|广安,511601|广安区,511621|岳池县,511622|武胜县,511623|邻水县,511681|华莹,511700|达州,511701|通川区,511721|达县,511722|宣汉县,511723|开江县,511724|大竹县,511725|渠县,511781|万源,511800|雅安,511801|雨城区,511821|名山县,511822|荥经县,511823|汉源县,511824|石棉县,511825|天全县,511826|芦山县,511827|宝兴县,511900|巴中,511901|巴州区,511921|通江县,511922|南江县,511923|平昌县,512000|资阳,512001|雁江区,512021|安岳县,512022|乐至县,512081|简阳,513200|阿坝州,513221|汶川县,513222|理县,513223|茂县,513224|松潘县,513225|九寨沟县,513226|金川县,513227|小金县,513228|黑水县,513229|马尔康县,513230|壤塘县,513231|阿坝县,513232|若尔盖县,513233|红原县,513300|甘孜州,513321|康定县,513322|泸定县,513323|丹巴县,513324|九龙县,513325|雅江县,513326|道孚县,513327|炉霍县,513328|甘孜县,513329|新龙县,513330|德格县,513331|白玉县,513332|石渠县,513333|色达县,513334|理塘县,513335|巴塘县,513336|乡城县,513337|稻城县,513338|得荣县,513400|凉山州,513401|西昌,513422|木里藏族自治县,513423|盐源县,513424|德昌县,513425|会理县,513426|会东县,513427|宁南县,513428|普格县,513429|布拖县,513430|金阳县,513431|昭觉县,513432|喜德县,513433|冕宁县,513434|越西县,513435|甘洛县,513436|美姑县,513437|雷波县,520000|贵州,520100|贵阳,520101|南明区,520103|云岩区,520111|花溪区,520112|乌当区,520113|白云区,520114|小河区,520121|开阳县,520122|息烽县,520123|修文县,520181|清镇,520200|六盘水,520201|钟山区,520203|六枝特区,520221|水城县,520222|盘县,520300|遵义,520301|红花岗区,520321|遵义县,520322|桐梓县,520323|绥阳县,520324|正安县,520325|道真仡佬族苗族自治县,520326|务川仡佬族苗族自治县,520327|凤冈县,520328|湄潭县,520329|余庆县,520330|习水县,520381|赤水,520382|仁怀,520400|安顺,520401|西秀区,520421|平坝县,520422|普定县,520423|镇宁布依族苗族自治县,520424|关岭布依族苗族自治县,520425|紫云苗族布依族自治县,522200|铜仁,522201|铜仁,522222|江口县,522223|玉屏侗族自治县,522224|石阡县,522225|思南县,522226|印江土家族苗族自治县,522227|德江县,522228|沿河土家族自治县,522229|松桃苗族自治县,522230|万山特区,522300|黔西南州,522301|兴义,522322|兴仁县,522323|普安县,522324|晴隆县,522325|贞丰县,522326|望谟县,522327|册亨县,522328|安龙县,522400|毕节,522401|毕节,522422|大方县,522423|黔西县,522424|金沙县,522425|织金县,522426|纳雍县,522427|威宁彝族回族苗族自治县,522428|赫章县,522600|黔东南州,522601|凯里,522622|黄平县,522623|施秉县,522624|三穗县,522625|镇远县,522626|岑巩县,522627|天柱县,522628|锦屏县,522629|剑河县,522630|台江县,522631|黎平县,522632|榕江县,522633|从江县,522634|雷山县,522635|麻江县,522636|丹寨县,522700|黔南州,522701|都匀,522702|福泉,522722|荔波县,522723|贵定县,522725|瓮安县,522726|独山县,522727|平塘县,522728|罗甸县,522729|长顺县,522730|龙里县,522731|惠水县,522732|三都水族自治县,530000|云南,530100|昆明,530101|五华区,530103|盘龙区,530111|官渡区,530112|西山区,530113|东川区,530121|呈贡县,530122|晋宁县,530124|富民县,530125|宜良县,530126|石林彝族自治县,530127|嵩明县,530128|禄劝彝族苗族自治县,530129|寻甸回族彝族自治县,530181|安宁,530300|曲靖,530301|麒麟区,530321|马龙县,530322|陆良县,530323|师宗县,530324|罗平县,530325|富源县,530326|会泽县,530328|沾益县,530381|宣威,530400|玉溪,530401|红塔区,530421|江川县,530422|澄江县,530423|通海县,530424|华宁县,530425|易门县,530426|峨山彝族自治县,530427|新平彝族傣族自治县,530428|元江哈尼族彝族傣族自治县,530500|保山,530501|隆阳区,530521|施甸县,530522|腾冲县,530523|龙陵县,530524|昌宁县,530600|昭通,530601|昭阳区,530621|鲁甸县,530622|巧家县,530623|盐津县,530624|大关县,530625|永善县,530626|绥江县,530627|镇雄县,530628|彝良县,530629|威信县,530630|水富县,532300|楚雄,532301|楚雄,532322|双柏县,532323|牟定县,532324|南华县,532325|姚安县,532326|大姚县,532327|永仁县,532328|元谋县,532329|武定县,532331|禄丰县,532500|红河,532501|个旧,532502|开远,532522|蒙自县,532523|屏边苗族自治县,532524|建水县,532525|石屏县,532526|弥勒县,532527|泸西县,532528|元阳县,532529|红河县,532530|金平苗族瑶族傣族自治县,532531|绿春县,532532|河口瑶族自治县,532600|文山,532621|文山县,532622|砚山县,532623|西畴县,532624|麻栗坡县,532625|马关县,532626|丘北县,532627|广南县,532628|富宁县,532700|思茅,532701|思茅,532722|普洱哈尼族彝族自治县,532723|墨江哈尼族自治县,532724|景东彝族自治县,532725|景谷傣族彝族自治县,532726|镇沅彝族哈尼族拉祜族自治县,532727|江城哈尼族彝族自治县,532728|孟连傣族拉祜族佤族自治县,532729|澜沧拉祜族自治县,532730|西盟佤族自治县,532800|西双版纳,532801|景洪,532822|勐海县,532823|勐腊县,532900|大理,532901|大理,532922|漾濞彝族自治县,532923|祥云县,532924|宾川县,532925|弥渡县,532926|南涧彝族自治县,532927|巍山彝族回族自治县,532928|永平县,532929|云龙县,532930|洱源县,532931|剑川县,532932|鹤庆县,533100|德宏,533102|瑞丽,533103|潞西,533122|梁河县,533123|盈江县,533124|陇川县,533200|丽江,533221|丽江纳西族自治县,533222|永胜县,533223|华坪县,533224|宁蒗彝族自治县,533300|怒江,533321|泸水县,533323|福贡县,533324|贡山独龙族怒族自治县,533325|兰坪白族普米族自治县,533400|迪庆,533421|香格里拉县,533422|德钦县,533423|维西傈僳族自治县,533500|临沧,533521|临沧县,533522|凤庆县,533523|云县,533524|永德县,533525|镇康县,533526|双江拉祜族佤族布朗族傣族自治县,533527|耿马傣族佤族自治县,533528|沧源佤族自治县,540000|西藏,540100|拉萨,540101|城关区,540121|林周县,540122|当雄县,540123|尼木县,540124|曲水县,540125|堆龙德庆县,540126|达孜县,540127|墨竹工卡县,542100|昌都,542121|昌都县,542122|江达县,542123|贡觉县,542124|类乌齐县,542125|丁青县,542126|察雅县,542127|八宿县,542128|左贡县,542129|芒康县,542132|洛隆县,542133|边坝县,542200|山南,542221|乃东县,542222|扎囊县,542223|贡嘎县,542224|桑日县,542225|琼结县,542226|曲松县,542227|措美县,542228|洛扎县,542229|加查县,542231|隆子县,542232|错那县,542233|浪卡子县,542300|日喀则,542301|日喀则,542322|南木林县,542323|江孜县,542324|定日县,542325|萨迦县,542326|拉孜县,542327|昂仁县,542328|谢通门县,542329|白朗县,542330|仁布县,542331|康马县,542332|定结县,542333|仲巴县,542334|亚东县,542335|吉隆县,542336|聂拉木县,542337|萨嘎县,542338|岗巴县,542400|那曲,542421|那曲县,542422|嘉黎县,542423|比如县,542424|聂荣县,542425|安多县,542426|申扎县,542427|索县,542428|班戈县,542429|巴青县,542430|尼玛县,542500|阿里,542521|普兰县,542522|札达县,542523|噶尔县,542524|日土县,542525|革吉县,542526|改则县,542527|措勤县,542600|林芝,542621|林芝县,542622|工布江达县,542623|米林县,542624|墨脱县,542625|波密县,542626|察隅县,542627|朗县,610000|陕西,610100|西安,610101|新城区,610103|碑林区,610104|莲湖区,610111|灞桥区,610112|未央区,610113|雁塔区,610114|阎良区,610115|临潼区,610116|长安区,610122|蓝田县,610124|周至县,610125|户县,610126|高陵县,610200|铜川,610201|王益区,610203|印台区,610204|耀州区,610222|宜君县,610300|宝鸡,610301|渭滨区,610303|金台区,610321|宝鸡县,610322|凤翔县,610323|岐山县,610324|扶风县,610326|眉县,610327|陇县,610328|千阳县,610329|麟游县,610330|凤县,610331|太白县,610400|咸阳,610401|秦都区,610403|杨凌区,610404|渭城区,610422|三原县,610423|泾阳县,610424|乾县,610425|礼泉县,610426|永寿县,610427|彬县,610428|长武县,610429|旬邑县,610430|淳化县,610431|武功县,610481|兴平,610500|渭南,610501|临渭区,610521|华县,610522|潼关县,610523|大荔县,610524|合阳县,610525|澄城县,610526|蒲城县,610527|白水县,610528|富平县,610581|韩城,610582|华阴,610600|延安,610601|宝塔区,610621|延长县,610622|延川县,610623|子长县,610624|安塞县,610625|志丹县,610626|吴旗县,610627|甘泉县,610628|富县,610629|洛川县,610630|宜川县,610631|黄龙县,610632|黄陵县,610700|汉中,610701|汉台区,610721|南郑县,610722|城固县,610723|洋县,610724|西乡县,610725|勉县,610726|宁强县,610727|略阳县,610728|镇巴县,610729|留坝县,610730|佛坪县,610800|榆林,610801|榆阳区,610821|神木县,610822|府谷县,610823|横山县,610824|靖边县,610825|定边县,610826|绥德县,610827|米脂县,610828|佳县,610829|吴堡县,610830|清涧县,610831|子洲县,610900|安康,610901|汉滨区,610921|汉阴县,610922|石泉县,610923|宁陕县,610924|紫阳县,610925|岚皋县,610926|平利县,610927|镇坪县,610928|旬阳县,610929|白河县,611000|商洛,611001|商州区,611021|洛南县,611022|丹凤县,611023|商南县,611024|山阳县,611025|镇安县,611026|柞水县,620000|甘肃,620100|兰州,620101|城关区,620103|七里河区,620104|西固区,620105|安宁区,620111|红古区,620121|永登县,620122|皋兰县,620123|榆中县,620200|嘉峪关,620201|金昌,620301|金川区,620321|永昌县,620400|白银,620401|白银区,620403|平川区,620421|靖远县,620422|会宁县,620423|景泰县,620500|天水,620501|秦城区,620503|北道区,620521|清水县,620522|秦安县,620523|甘谷县,620524|武山县,620525|张家川回族自治县,620600|武威,620601|凉州区,620621|民勤县,620622|古浪县,620623|天祝藏族自治县,620700|张掖,620701|甘州区,620721|肃南裕固族自治县,620722|民乐县,620723|临泽县,620724|高台县,620725|山丹县,620800|平凉,620801|崆峒区,620821|泾川县,620822|灵台县,620823|崇信县,620824|华亭县,620825|庄浪县,620826|静宁县,620900|酒泉,620901|肃州区,620921|金塔县,620922|安西县,620923|肃北蒙古族自治县,620924|阿克塞哈萨克族自治县,620981|玉门,620982|敦煌,621000|庆阳,621001|西峰区,621021|庆城县,621022|环县,621023|华池县,621024|合水县,621025|正宁县,621026|宁县,621027|镇原县,622400|定西,622421|定西县,622424|通渭县,622425|陇西县,622426|渭源县,622427|临洮县,622428|漳县,622429|岷县,622600|陇南,622621|武都县,622623|宕昌县,622624|成县,622625|康县,622626|文县,622627|西和县,622628|礼县,622629|两当县,622630|徽县,622900|临夏,622901|临夏,622921|临夏县,622922|康乐县,622923|永靖县,622924|广河县,622925|和政县,622926|东乡族自治县,622927|积石山保安族东乡族撒拉族自治县,623000|甘南,623001|合作,623021|临潭县,623022|卓尼县,623023|舟曲县,623024|迭部县,623025|玛曲县,623026|碌曲县,623027|夏河县,630000|青海,630100|西宁,630101|城东区,630103|城中区,630104|城西区,630105|城北区,630121|大通回族土族自治县,630122|湟中县,630123|湟源县,632100|海东,632121|平安县,632122|民和回族土族自治县,632123|乐都县,632126|互助土族自治县,632127|化隆回族自治县,632128|循化撒拉族自治县,632200|海北,632221|门源回族自治县,632222|祁连县,632223|海晏县,632224|刚察县,632300|黄南,632321|同仁县,632322|尖扎县,632323|泽库县,632324|河南蒙古族自治县,632500|海南,632521|共和县,632522|同德县,632523|贵德县,632524|兴海县,632525|贵南县,632600|果洛,632621|玛沁县,632622|班玛县,632623|甘德县,632624|达日县,632625|久治县,632626|玛多县,632700|玉树,632721|玉树县,632722|杂多县,632723|称多县,632724|治多县,632725|囊谦县,632726|曲麻莱县,632800|海西,632801|格尔木,632802|德令哈,632821|乌兰县,632822|都兰县,632823|天峻县,640000|宁夏,640100|银川,640101|城区,640103|新城区,640111|郊区,640121|永宁县,640122|贺兰县,640200|石嘴山,640201|大武口区,640203|石嘴山区,640204|石炭井区,640221|平罗县,640222|陶乐县,640223|惠农县,640300|吴忠,640301|利通区,640321|中卫县,640322|中宁县,640323|盐池县,640324|同心县,640381|青铜峡,640382|灵武,640400|固原,640401|原州区,640421|海原县,640422|西吉县,640423|隆德县,640424|泾源县,640425|彭阳县,650000|新疆,650100|乌鲁木齐,650101|天山区,650103|沙依巴克区,650104|新市区,650105|水磨沟区,650106|头屯河区,650107|达坂城区,650108|东山区,650121|乌鲁木齐县,650200|克拉玛依,650201|独山子区,650203|克拉玛依区,650204|白碱滩区,650205|乌尔禾区,652100|吐鲁番,652101|吐鲁番,652122|鄯善县,652123|托克逊县,652200|哈密,652201|哈密,652222|巴里坤哈萨克自治县,652223|伊吾县,652300|昌吉,652301|昌吉,652302|阜康,652303|米泉,652323|呼图壁县,652324|玛纳斯县,652325|奇台县,652327|吉木萨尔县,652328|木垒哈萨克自治县,652700|博尔塔拉,652701|博乐,652722|精河县,652723|温泉县,652800|巴音郭楞,652801|库尔勒,652822|轮台县,652823|尉犁县,652824|若羌县,652825|且末县,652826|焉耆回族自治县,652827|和静县,652828|和硕县,652829|博湖县,652900|阿克苏,652901|阿克苏,652922|温宿县,652923|库车县,652924|沙雅县,652925|新和县,652926|拜城县,652927|乌什县,652928|阿瓦提县,652929|柯坪县,653000|克孜勒苏,653001|阿图什,653022|阿克陶县,653023|阿合奇县,653024|乌恰县,653100|喀什,653101|喀什,653121|疏附县,653122|疏勒县,653123|英吉沙县,653124|泽普县,653125|莎车县,653126|叶城县,653127|麦盖提县,653128|岳普湖县,653129|伽师县,653130|巴楚县,653131|塔什库尔干塔吉克自治县,653200|和田,653201|和田,653221|和田县,653222|墨玉县,653223|皮山县,653224|洛浦县,653225|策勒县,653226|于田县,653227|民丰县,654000|伊犁,654002|伊宁,654003|奎屯,654021|伊宁县,654022|察布查尔锡伯自治县,654023|霍城县,654024|巩留县,654025|新源县,654026|昭苏县,654027|特克斯县,654028|尼勒克县,654200|塔城,654201|塔城,654202|乌苏,654221|额敏县,654223|沙湾县,654224|托里县,654225|裕民县,654226|和布克赛尔蒙古自治县,654300|阿勒泰,654301|阿勒泰,654321|布尔津县,654322|富蕴县,654323|福海县,654324|哈巴河县,654325|青河县,654326|吉木乃县,659000|省直辖行政单位,659001|石河子,810000|香港,810100|香港,810101|香港特别行政区,810102|九龙,810103|新界,820000|澳门,820100|澳门,820101|澳门特别行政区,710000|台湾,710100|台湾,710101|台北,710102|台南,710103|台中,710104|基隆,710105|高雄,710106|屏东,710107|南投,710108|云林,710109|新竹,710110|彰化,710111|苗栗,710112|嘉义,710113|花莲,710114|桃园,710115|宜兰,710116|台东,710117|金门,710118|马祖,710119|澎湖,";
//填充省级行政单位
function GetProvince() {
    city_arr = city_data.split(",");
    var cs_i = 1;
    for (i = 1; i <= city_arr.length; i++) {
        if (city_arr[i - 1].substring(2, 6) == "0000") {
            $("dropProvince").options[cs_i] = new Option(city_arr[i - 1].substring(7, city_arr[i - 1].length), city_arr[i - 1].substring(0, 6));
            cs_i++;
        }
    }
}
//省级行政单位改变时填充地级行政单位
function GetCity() {
    var city1_str = $("dropProvince").getValue();
    fcs_i = 1;
    var str_city1 = city1_str / 10000;
    //alert(str_city1);
    for (i = 1; i <= city_arr.length; i++) {
        if (city_arr[i - 1].substring(0, 2) == str_city1 && city_arr[i - 1].substring(2, 6) != "0000" && city_arr[i - 1].substring(4, 6) == "00") {
            $("dropCity").options[fcs_i] = new Option(city_arr[i - 1].substring(7, city_arr[i - 1].length), city_arr[i - 1].substring(0, 6));
            fcs_i++;
        }
    }
    $("dropCity").length = fcs_i;
}
//地级行政单位改变时填充县级行政单位
function GetArea() {
    var city2_str = $("dropCity").getValue();
    fcs_i = 1;
    var str_city2 = city2_str / 100;
    //alert(str_city1);
    for (i = 1; i <= city_arr.length; i++) {
        if (city_arr[i - 1].substring(0, 4) == str_city2 && city_arr[i - 1].substring(4, 6) != "00") {
            $("dropArea").options[fcs_i] = new Option(city_arr[i - 1].substring(7, city_arr[i - 1].length), city_arr[i - 1].substring(0, 6));
            fcs_i++;
        }
    }
    $("dropArea").length = fcs_i;
}
//根据城市数据的默认值选种选择项
function DataBind() {
    var arrData = $("hidProvince").value.split("|");
    //显示第一个地区
    for (i = 1; i <= $("dropProvince").length; i++) {
        if ($("dropProvince").options[i - 1].innerHTML == arrData[0]) {
            $("dropProvince").selectedIndex = i - 1;
        }
    }
    GetCity();
    //显示第二个地区
    for (i = 1; i <= $("dropCity").length; i++) {
        if ($("dropCity").options[i - 1].innerHTML == arrData[1]) {
            $("dropCity").selectedIndex = i - 1;
        }
    }
    GetArea();
    //显示第三个地区
    for (i = 1; i <= $("dropArea").length; i++) {
        if ($("dropArea").options[i - 1].innerHTML == arrData[2]) {
            $("dropArea").selectedIndex = i - 1;
        }
    }
}
