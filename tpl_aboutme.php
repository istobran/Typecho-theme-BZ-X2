<?php
/**
 * _About Me_
 *
 * @package custom
 *
 */
?>
<?php
    if (isset($_GET["action"]) && $_GET["action"] == "ajax_comments") {
        $this->need('comments.php');
    } else {
        if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/');
        $this->need('header.php');
?>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default aboutme">
              <div class="post-content-header">
                <div class="post-content-title">
                  <div class="line left"></div>
                  <h1><?php $this->title(); ?></h1>
                  <div class="line right"></div>
                </div>
              </div>
              <div class="post-content">
                <div class="container-fluid">
                  <div class="row basic" style="background-image:url('<?php themeCDN('img/aboutmebg.jpg'); ?>');">
                    <div class="col-md-8">
                      <div class="col-sm-5 avatar">
                        <img src="<?php themeCDN('img/avatar_temp.jpg'); ?>" alt="BangZ" class="img-responsive" />
                      </div>
                      <div class="col-sm-7">
                        <h1>雷 正 邦</h1>
                        <p>
                          一个初出茅庐的前端技术爱好者，有志于前端技术的研发
                        </p>
                      </div>
                    </div>
                    <div class="col-md-4 clearfix">
                      <ul class="list-left">
                        <li>籍贯</li>
                        <li>毕业院校</li>
                        <li>所学专业</li>
                        <li>英语水平</li>
                      </ul>
                      <ul class="list-right">
                        <li>广东 广州</li>
                        <li>华南理工大学广州学院</li>
                        <li>软件工程</li>
                        <li>CET - 4</li>
                      </ul>
                    </div>
                  </div>
                  <div class="row skills">
                    <div class="col-md-8">
                      <ul>
                        <li>
                          <h4>HTML/CSS</h4>
                          <div class="progress">
                            <div class="percentage" style="width: 97%;"></div>
                          </div>
                        </li>
                        <li>
                          <h4>JAVASCRIPT</h4>
                          <div class="progress">
                            <div class="percentage" style="width: 90%;"></div>
                          </div>
                        </li>
                        <li>
                          <h4>PHP/MYSQL</h4>
                          <div class="progress">
                            <div class="percentage" style="width: 85%;"></div>
                          </div>
                        </li>
                        <li>
                          <h4>Java Web</h4>
                          <div class="progress">
                            <div class="percentage" style="width: 60%;"></div>
                          </div>
                        </li>
                        <li>
                          <h4>Git/SVN</h4>
                          <div class="progress">
                            <div class="percentage" style="width: 90%;"></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4 logo">
                      <div class="text">
                        <span>我的</span><br>
                        <span>主要技术能力</span>
                      </div>
                    </div>
                  </div>
                  <div class="row am_experience">
                    <div class="col-md-4" style="background-image:url('<?php themeCDN('img/aboutmebg2.jpg'); ?>');">
                      <div class="logo">
                        <div class="text">
                          <span>我的</span><br>
                          <span>主要实践经验</span>
                        </div>
                      </div>
                      <div class="overlay"></div>
                    </div>
                    <div class="col-md-8 col-md-offset-4">
    									<!--Timeline-->
    									<div class="timeline experience">
    		                <!--Row-->
    										<div class="row">
    											<div class="col-md-12">
    												<!--Experience holder-->
    												<div class="exp-holder margTop">
                            <!--Experience-->
                            <div class="exp">
                              <div class="hgroup">
                                <h4>每日优鲜食品推送系统的开发</h4>
                                <h6><i class="fa fa-calendar" aria-hidden="true"></i>2016 年 5 月 - 2016 年 6 月</h6>
                              </div>
                              <p>此项目是一个团队实践项目，由东软集团的项目经理带领完成
                                该项目主要内容是使用 APICloud 云平台上的 API 接口来完成一个独立的移动互联网应用，
                                在该项目中本人担任小组组长并主要负责前端框架的设计任务，
                                一方面使用了 XMind 的思维导图来完成项目的总体思路，
                                另一方面通过在线查阅云平台官方的 API 文档来实现了一个移动前端的框架，
                                实现框架后，将具体的页面内容的实现平均分工给了小组中的其他成员，
                                他们分别完成后，由本人最终将所有内容进行了统一的整合。</p>
                            </div>
                            <!--End experience-->
    												<!--Experience-->
    												<div class="exp">
      												<div class="hgroup">
      													<h4>计算机学院公告栏系统的设计开发</h4>
      													<h6><i class="fa fa-calendar" aria-hidden="true"></i>2015 年 12 月 - 2016 年 1 月</h6>
      												</div>
      												<p>此项目是一个课程实践，用于解决计算机学院的公告宣传不到位
                                重要消息传播速度慢的问题，在该实践中本人担任前端页面模板设计与开发的任务，
                                使用时下盛行的 HTML5 和 CSS3 技术，
                                在浏览器下展现学院最新的重要消息，
                                给后端开发提供页面样式模板。</p>
    												</div>
    												<!--End experience-->
    												<!--Experience-->
    												<div class="exp">
      												<div class="hgroup">
      													<h4>OpenStack云平台的架构研究</h4>
      													<h6><i class="fa fa-calendar" aria-hidden="true"></i>2015 年 3 月 - 2015 年 11 月</h6>
      												</div>
    													<p>该项目主要是在学校提供的大型服务器机房中部署云服务架构，
                                通过对多台服务器进行集中管理并分工，
                                安装 CentOS 7 操作系统，
                                并按照 openstack 的云服务架构给各节点完成基本的网络架构部署 和 基本服务配置，
                                通过分别给计算节点，控制节点，存储节点部署相应的身份认证、
                                镜像、计算、存储等服务，最终构建了一个能够对外提供 IaaS 云服务的云服务器集群。</p>
    												</div>
    												<!--End experience-->
    													<!--Experience-->
    													<div class="exp">
      													<div class="hgroup">
      														<h4>校运会计分系统的设计开发</h4>
      														<h6><i class="fa fa-calendar" aria-hidden="true"></i>2014 年 10 月 - 2015 年 5 月</h6>
      													</div>
      													<p>该项目使用了 Java 的基础库中的 Swing 框架，
                                  并应用了简单的 MVC结构 对软件进行分层开发，
                                  主要对学校运动会中大量繁杂的分数数据进行快速统计，
                                  这是一个部署在工作站上的 桌面应用 ，
                                  该应用经过了反复多次的测试与修正，
                                  将以往三年的数据进行统计，
                                  最终达成了将统计正确率提升到100%的指标，
                                  并在校运会时成功部署。</p>
    													</div>
    													<!--End experience-->
    												</div>
    												<!--End experience holder-->
    											</div>
    										</div>
    										<!--End row-->
    		                </div>
    									<!--End timeline-->
                    </div>
                  </div>
                  <div class="row contact">
                    <div class="col-md-4">
                      <div class="icon-block">
                        <div class="icon-container center-block" onclick="window.open('tencent://message/?uin=413267558', '_blank')">
                          <i class="fa fa-qq" aria-hidden="true"></i>
                          <div class="icon-cover"></div>
                        </div>
                      </div>
                      <div class="icon-subtitle">
                        腾讯QQ
                      </div>
                      <div class="description">
                        通过腾讯QQ即时在线聊天工具来找到博主
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="icon-block">
                        <div class="icon-container center-block" onclick="window.open('mailto:i@bangz.me?cc=istobran@gmail.com&subject=Hello', '_blank')">
                          <i class="fa fa-envelope" aria-hidden="true"></i>
                          <div class="icon-cover"></div>
                        </div>
                      </div>
                      <div class="icon-subtitle">
                        发送E-Mail
                      </div>
                      <div class="description">
                        通过发送E-Mail电子邮件来联系博主
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="icon-block">
                        <div class="icon-container center-block" onclick="window.open('https://github.com/istobran', '_blank')">
                          <i class="fa fa-github-alt" aria-hidden="true"></i>
                          <div class="icon-cover"></div>
                        </div>
                      </div>
                      <div class="icon-subtitle">
                        GitHub
                      </div>
                      <div class="description">
                        通过在GitHub上面Report issue来找到博主
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $this->need('comments.duoshuo.php'); ?>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>
<?php } ?>
