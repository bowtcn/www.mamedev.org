<?php
$title = 'MAME | 项目历史';
?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

    <!-- 页面内容 -->
    <div class="container">

		<center><h1 class="page-header">MAME项目历史</h1></center>
		<center><h2>...和消息</h2></center>
		
		<h2>有什么新鲜事吗?</h2>

		<p>
		像MAME这样大的项目在其存在的过程中肯定有其起伏。从源代码的角度来看，项目中已发生变化的综合列表是
		在可以在找到的各种whatsnew.txt文件可用<a href="oldrel.html">以前版本</a> 页。这些文件的内容也被萃取到我们的在维基<a href="http://wiki.mamedev.org/index.php/Previous_MAME_Versions">以前街机模拟器版本</a> 部分.
		</p>
		
		<a target="_blank" href="mame_chart_latest-1224.png"><img alt="MAME发展的图表" align="right" src="mame_chart_latest-256.png" width="256" height="181" /></a>

		<h2>支持的ROM</h2>

		<p>
		项目成功的另一个衡量标准是简单地计算支持的集合的数量。右侧的图表（单击以查看大图）显示自开始以来的整体趋势。
		</p>
		<a target="_blank" href="mame_chart_latest.pdf">矢量PDF文件</a>

		<h2>日常工作 1999-2004</h2>
		
		<p>
		回顾项目历史的另一个有趣方式是仔细阅读令人难以置信的每日MAME正在进行的工作（WIP）页面。从<a href="oldwip/wip9902.html">1999年2月</a> 到 <a href="oldwip/wip0407.html">2004年7月</a>, Santeri Saarimaa承担了维护一个详细的具有挑战性的任务MAME开发的日常工作进度报告。这些页面代表了在项目开发过程中最活跃的时期发生的事情。
		</p>
		
		<h2>表格</h2>
		
		<p>
		提供了想要了解更多关于该项目的历史的人两个表。<br>
		下面的第一个列出了项目的主要里程碑。
		</p>
		<p>
		然后有一个更大的表（下面的一个超级集），列出每个MAME（和MESS）版本，重要的里程碑，发布日期，父母的数量，克隆，设备，CHD（仅限MAME），机械和非工作集。这些数据也用于图表。
		</p>
		<a target="_blank" href="full_mame_history.html">MAME完整历史记录表</a>
		
		<h2>项目里程碑</h2>

<div class="panel panel-primary">
	  <div class="panel-heading">MAME项目里程碑</div>
<table class="table">
 <col width=12% align="right">
 <col width=18% align="center">
 <col width=70%>
 <tr>
  <td>发布|Release</td>
  <td>版本|Version</td>
  <td>里程碑|Milestone</td>
 </tr>
 <tr>
 <td>28
  Dec 16</td>
  <td>0.181</td>
  <td>在许多游戏中实施了许多改善声音的MCU。Votrax SC-01仿真。进一步的ARM改进（阿基米德）。调试器适用于Linux / Mac。
  </td>
 </tr>
 <tr>
 <td>30
  Nov 16</td>
  <td>0.180</td>
  <td>ARM CPU的改进反过来改善了阿基米德仿真。Acclaim RAX音板模拟，改进了一些经典。
  </td>
 </tr>
 <tr>
 <td>26
  Oct 16</td>
  <td>0.179</td>
  <td>不再需要调试版本。32位二进制文​​件标记为这样。添加了一些稀有系统。大软件清单清理。Whatsnew包含一些软件列表详细信息。
  </td>
 </tr>
 <tr>
  <td>28
  Sep 16</td>
  <td>0.178</td>
  <td>UI更模块化（在LUA中描述的DAT，不是硬编码的）和其他UI改进。许多机器修复。许多新的布局。
  </td>
 </tr>
 <tr>
  <td>31
  Aug 16</td>
  <td>0.177</td>
  <td>一些大错误得到修复（双光枪，屏幕外的菜单）。机器中添加了许多新计算机。VGM文件播放器。串行/键盘设备的改进。
  </td>
 </tr>
 <tr>
  <td>27
  Jul 16</td>
  <td>0.176</td>
  <td>与Debian团队合作。新的着色器。在SPARC机器上取得更多进展。
  </td>
 </tr>
 <tr>
  <td>29
  Jun 16</td>
  <td>0.175</td>
  <td>有关模拟Sun SPARC计算机的大量工作。添加了许多新的软件列表CHD转储（尤其是PSX）。
  </td>
 </tr>
  <tr>
 <tr>
  <td>27
  Apr 16</td>
  <td>0.173</td>
  <td>充足的新图形
  缩放模式。对于大档案支持（＆GT ; 4GB，更新的档案
  功能），解决了PD中巨大的压缩附加功能的问题。一些努力
  通用Windows应用程序支持（UWP）。
  </td>
 </tr>
 <tr>
  <td>30
  Mar 16</td>
  <td>0.172</td>
  <td>第一个MAME版本
新的许可证。新文档。ini的重大变化。扩展BGFX渲染器
(打算完全搬到)。改进的屏幕效果。重大的改进
文件处理支持。</td>
 </tr>
 <tr>
  <td>04
  Mar 16</td>
  <td></td>
  <td>MAME现在免费开放
  源软件基于GPL-2.0 +许可证。</td>
 </tr>
 <tr>
  <td>24
  Feb 16</td>
  <td>0.171</td>
  <td>MEWUI与MAME合并
  替换大多数平台的默认MAME UI。最初的BGFX工作。支持
  videosnaps捕获。</td>
 </tr>
 <tr>
  <td>27
  Jan 16</td>
  <td>0.170</td>
  <td>LUA支持（返回）。
  更多视频过滤/效果工作。</td>
 </tr>
 <tr>
  <td>01
  Jan 16</td>
  <td></td>
  <td>基于MSYS2的工具构建
  MAME.</td>
 </tr>
 <tr>
  <td>30
  Dec 15</td>
  <td>0.169</td>
  <td>现代化的核心到C ++ 14。
  第一个在Raspberry Pi 2和其他ARM Linux目标中构建清理的版本。</td>
 </tr>
 <tr>
  <td>25
  Nov 15</td>
  <td>0.168</td>
  <td>更多HLSL更改。</td>
 </tr>
 <tr>
  <td>28
  Oct 15</td>
  <td>0.167</td>
  <td>主要HLSL更改。</td>
 </tr>
 <tr>
  <td>27
  May 15</td>
  <td>0.162</td>
  <td>MESS与MAME合并。</td>
 </tr>
 <tr>
  <td>20
  May 15</td>
  <td></td>
  <td>MAME开始工作成为
  开源。</td>
 </tr>
 <tr>
  <td>25
  Feb 15</td>
  <td>0.159</td>
  <td>大量增加机械游戏。</td>
 </tr>
 <tr>
  <td>20
  Oct 14</td>
  <td></td>
  <td>GIT项目(也)。</td>
 </tr>
 <tr>
  <td>10
  Oct 14</td>
  <td>0.155</td>
  <td>Raiden II / DX终于工作了。</td>
 </tr>
 <tr>
  <td>23
  Jul 14</td>
  <td>0.154</td>
  <td>添加了许多设备。</td>
 </tr>
 <tr>
  <td>07
  Apr 14</td>
  <td>0.153</td>
  <td>独立调色板（如
  设备）和其他架构变化和主要代码现代化。</td>
 </tr>
 <tr>
  <td>05
  Nov 13</td>
  <td>0.151</td>
  <td>主要的NeoGeo驱动
  更新。</td>
 </tr>
 <tr>
  <td>17
  Sep 13</td>
  <td>0.150</td>
  <td>之后首次发布
  放弃你的中间版本。主要视频界面的变化。许多新的视频设备因为变化。</td>
 </tr>
 <tr>
  <td>23
  Jul 13</td>
  <td>0.149u1</td>
  <td>最后一次发布。关于设备定义的主要工作。</td>
 </tr>
 <tr>
  <td>10
  Mar 13</td>
  <td></td>
  <td>新服务器上的站点。</td>
 </tr>
 <tr>
  <td>11
  Jan 13</td>
  <td>0.148</td>
  <td>首先提到MESS
  在mamedev.org网站上发布新闻和第一个MESS二进制文件中的MAME，
  扩大项目合并的基础。</td>
 </tr>
 <tr>
  <td>07
  Dec 12</td>
  <td></td>
  <td>支持Python（和
  新的开发工具）。</td>
 </tr>
 <tr>
  <td>30
  Oct 12</td>
  <td>0.147u2</td>
  <td>设备回调模块的新实现。</td>
 </tr>
 <tr>
  <td>17
  Sep 12</td>
  <td>0.147</td>
  <td>Pong is back in MAME.</td>
 </tr>
 <tr>
  <td>21
  Aug 12</td>
  <td></td>
  <td>Project (MAME and MESS)
  moved to SVN.</td>
 </tr>
 <tr>
  <td>20
  Aug 12</td>
  <td>0.146u5</td>
  <td>New dev tools including
  support for building QT4. Massive addition of mechanical games and clones (not necessarily working).</td>
 </tr>
 <tr>
  <td>30
  Jul 12</td>
  <td>0.146u4</td>
  <td>Major addition of mechanical games and clones
  .</td>
 </tr>
 <tr>
  <td>26
  Apr 12</td>
  <td></td>
  <td>Miodrag Milanovic (Micko)
  takes over from Kale.</td>
 </tr>
 <tr>
  <td>08
  Apr 12</td>
  <td>0.145u6</td>
  <td>Many drivers modernized.</td>
 </tr>
 <tr>
  <td>19
  Feb 12</td>
  <td>0.145u1</td>
  <td>7zip support and change in
  CHD format (CHD v5).</td>
 </tr>
 <tr>
  <td>20
  Sep 11</td>
  <td>0.143u6</td>
  <td>One more major addition of gambling and fruit machine titles.</td>
 </tr>
 <tr>
  <td>25
  Aug 11</td>
  <td>0.143u4</td>
  <td>Further addition of gambling and fruit machine titles.</td>
 </tr>
 <tr>
  <td>15
  Aug 11</td>
  <td>0.143u3</td>
  <td>Device ROMs separated from drivers in loading and listing. Further addition of gambling and fruit machine titles.</td>
 </tr>
 <tr>
  <td>27
  Jul 11</td>
  <td>0.143u2</td>
  <td>Major addition of gambling titles.</td>
 </tr>
 <tr>
  <td>24
  May 11</td>
  <td>0.142u4</td>
  <td>HLSL effects added.</td>
 </tr>
 <tr>
  <td>05
  Apr 11</td>
  <td></td>
  <td>Angelo Salese (Kale) takes
  over from Aaron Giles (longest standing yet - with Nicola Salmoria close
  behind) as MAME coordinator.</td>
 </tr>
 <tr>
  <td>24
  Jan 11</td>
  <td>0.141u1</td>
  <td>Implemented mechanical games (pinball, redemption, bowling etc.). Imported drivers from PINMAME.</td>
 </tr>
 <tr>
  <td>29
  Jul 10</td>
  <td>0.139</td>
  <td>Larger binary due to
  on-going move to C++ work.</td>
 </tr>
 <tr>
  <td>17
  Jun 10</td>
  <td>0.138u2</td>
  <td>Modern implementation of devices as derived classes
  with mix-in interfaces.</td>
 </tr>
 <tr>
  <td>15
  May 10</td>
  <td>0.138</td>
  <td>MESS gets support for
  Software Lists.</td>
 </tr>
 <tr>
  <td>11
  Mar 10</td>
  <td>0.137</td>
  <td>SDLMAME is now part of the main source package.</td>
 </tr>
 <tr>
  <td>13
  Aug 09</td>
  <td>0.133u2</td>
  <td>Many renames.</td>
 </tr>
 <tr>
  <td>02
  Aug 09</td>
  <td>0.133u1</td>
  <td>39 in 1 (MAME rip-off
  originally added in 0.117) now working. Huge number of renames.</td>
 </tr>
 <tr>
  <td>19
  Mar 09</td>
  <td>0.130u1</td>
  <td>Major change in CHD file
  format (CHD v4).</td>
 </tr>
 <tr>
  <td>26
  Feb 09</td>
  <td>0.129u5</td>
  <td>More hardware components
  are becoming &quot;devices&quot;.</td>
 </tr>
 <tr>
  <td>17
  Feb 09</td>
  <td>0.129u4</td>
  <td>Added some AGEMAME drivers.</td>
 </tr>
 <tr>
  <td>29
  Jan 09</td>
  <td>0.129u3</td>
  <td>First implementation of device callback module.</td>
 </tr>
 <tr>
  <td>21
  Dec 08</td>
  <td>0.128u7</td>
  <td>Internal (source) changes:
  Global Machine pointer eliminated, CPUs are &quot;devices&quot;.</td>
 </tr>
 <tr>
  <td>01
  Nov 08</td>
  <td>0.128u2</td>
  <td>mamedev.org renovated.</td>
 </tr>
 <tr>
  <td>19
  Aug 08</td>
  <td>0.127</td>
  <td>First laserdisc game
  emulated (Cube Quest).</td>
 </tr>
 <tr>
  <td>07
  Aug 08</td>
  <td>0.126u4</td>
  <td>Cheat re-enabled
  (read-only), renovation continues.</td>
 </tr>
 <tr>
  <td>06
  Jul 08</td>
  <td>0.126</td>
  <td>New universal recompiler
  engine (started few u releases earlier), cheat engine in the middle of
  renovation (disabled).</td>
 </tr>
 <tr>
  <td>26
  Jun 08</td>
  <td>0.125u8</td>
  <td>MAME debugger included all
  the time.</td>
 </tr>
  <tr>
  <td>21
  Feb 08</td>
  <td>0.123u2</td>
  <td>First implementation of a generic device
  interface.</td>
 </tr>
 <tr>
  <td>01
  Dec 07</td>
  <td></td>
  <td>New server for
  mamedev.org.</td>
 </tr>
 <tr>
  <td>15
  Oct 07</td>
  <td>0.120</td>
  <td>First official x64 build.
  Further source tree clean up (started few u releases earlier with new
  development tools).</td>
 </tr>
 <tr>
  <td>19
  Jul 07</td>
  <td>0.117u1</td>
  <td>Major changes in input
  system. Basic UI to select a game.</td>
 </tr>
 <tr>
  <td>10
  Jul 07</td>
  <td>0.117</td>
  <td>Interesting little fact of
  history: MAME for the first time includes a preliminary driver of a bootleg
  multigame arcade that is based on a hacked early version... MAME!</td>
 </tr>
 <tr>
  <td>20
  Jun 07</td>
  <td>0.116u2</td>
  <td>CPS3 decryption added.</td>
 </tr>
 <tr>
  <td>17
  Jun 07</td>
  <td></td>
  <td>SDL headers/libraries.
  Build SDLMAME out of the box.</td>
 </tr>
 <tr>
  <td>26
  Feb 07</td>
  <td>0.112u3</td>
  <td>Major changes in sound
  generation.</td>
 </tr>
 <tr>
  <td>12
  Feb 07</td>
  <td>0.112u1</td>
  <td>MAME code reorganized, separating game drivers from
  emulation core in the source tree.</td>
 </tr>
 <tr>
  <td>07
  Feb 07</td>
  <td></td>
  <td>MAME 10 year anniversary.
  Wiki added in mamedev.org.</td>
 </tr>
 <tr>
  <td>05
  Feb 07</td>
  <td>0.112</td>
  <td>CPS2 decryption fully
  implemented.</td>
 </tr>
 <tr>
  <td>16
  Nov 06</td>
  <td>0.110u3</td>
  <td>Added support for split CHD.</td>
 </tr>
 <tr>
  <td>20
  Aug 06</td>
  <td>0.108</td>
  <td>High score support
  removed.</td>
 </tr>
 <tr>
  <td>25
  May 06</td>
  <td>0.106u2</td>
  <td>New video system, focused
  on letting the video hardware do compositing (enabled by default in 0.106u3 -
  Jun 1)</td>
 </tr>
 <tr>
  <td>03
  Jun 06</td>
  <td>0.106u1</td>
  <td>First version of SDLMAME
  released.</td>
 </tr>
 <tr>
  <td>23
  Jan 06</td>
  <td></td>
  <td>mamedev.org is finally an
  .org (and on new servers).</td>
 </tr>
 <tr>
  <td>14
  Sep 05</td>
  <td>0.100</td>
  <td>Added back support for
  some gambling games.</td>
 </tr>
 <tr>
  <td>14
  Aug 05</td>
  <td>0.99u2</td>
  <td>Video-based gambling games
  added (drivers ported from AGEMAME).</td>
 </tr>
 <tr>
  <td>03
  May 05</td>
  <td>0.96</td>
  <td>Changed the license to be
  based off of the BSD license, with commercial restrictions.</td>
 </tr>
 <tr>
  <td>18
  Apr 05</td>
  <td></td>
  <td>Aaron Giles takes over
  from David Haywood as MAME coordinator.</td>
 </tr>
 <tr>
  <td>07
  Apr 05</td>
  <td></td>
  <td>mamedev.org is born
  (mamedev.com actually initially).</td>
 </tr>
 <tr>
  <td>27
  Feb 05</td>
  <td>0.93</td>
  <td>Major sound system
  reorganization around streams.</td>
 </tr>
 <tr>
 <td>15
  Feb 05</td>
  <td>0.92u1</td>
  <td>Raiden Fighters 2 (et al) finally working.</td>
 </tr>
 <tr>
  <td>13
  Feb 05</td>
  <td>0.92</td>
  <td>Sega improvements and clean up.</td>
 </tr>
 <tr>
  <td>24
  Nov 04</td>
  <td>0.89</td>
  <td>New debugger added.</td>
 </tr>
 <tr>
  <td>24
  Oct 04</td>
  <td>0.88</td>
  <td>Sega FD1094 decryption
  added.</td>
 </tr>
 <tr>
  <td>21
  Nov 03</td>
  <td>0.77u1</td>
  <td>CHD v3. "hdcomp" tool, got replaced by "chdman". (internal release)</td>
 </tr>
 <tr>
  <td>11
  Nov 03</td>
  <td>0.77</td>
  <td>3dfx Voodoo emulation
  added.</td>
 </tr>
 <tr>
  <td>06
  Oct 03</td>
  <td>0.74u2</td>
  <td>Removed the concept of
  TESTDRIVERS, making all drivers available in all builds.</td>
 </tr>
 <tr>
  <td>09
  Aug 03</td>
  <td>0.72</td>
  <td>First emulation of the
  SP0250 speech chip.</td>
 </tr>
 <tr>
  <td>12
  Jun 03</td>
  <td>0.70u1</td>
  <td>CHD v2.</td>
 </tr>
 <tr>
  <td>05
  Jun 03</td>
  <td>0.69u3</td>
  <td>First release to have
  intermediate 'u' updates.</td>
 </tr>
 <tr>
  <td>15
  May 03</td>
  <td>0.68</td>
  <td>David Haywood takes over
  from Nicola as MAME coordinator. Added SHA1 hashes in addition to CRCs to
  reduce hacks and prevent collisions.</td>
 </tr>
 <tr>
  <td>06
  Apr 03</td>
  <td>0.67</td>
  <td>First dynamic recompiled
  CPU core added: MIPS3.</td>
 </tr>
 <tr>
  <td>12
  Jan 03</td>
  <td>0.63</td>
  <td>First actual CHD (Wargods).</td>
 </tr>
 <tr>
  <td>04
  Jul 02</td>
  <td>0.61</td>
  <td>Added initial support for
  artwork external to games.</td>
 </tr>
 <tr>
  <td>01
  May 02</td>
  <td>0.60</td>
  <td>Removed SoundBlaster FM
  support as software-based emulation finally became better in almost all
  cases.</td>
 </tr>
 <tr>
  <td>22
  Mar 02</td>
  <td>0.59</td>
  <td>Aaron Giles implements CHD (Compressed Hard Disk - later Compressed Hunks of Data).</td>
 </tr>
 <tr>
  <td>06
  Feb 02</td>
  <td>0.58</td>
  <td> "Machine drivers," previously hard-coded structures,
  now initialized by macro-based constructors, allowing
  configurations to derive from each other.</td>
 </tr>
 <tr>
  <td>24
  Aug 01</td>
  <td>0.54</td>
  <td>First release to call out
  MAMETesters bugs.</td>
 </tr>
 <tr>
  <td>16
  Aug 01</td>
  <td>0.37b15 (MESS)</td>
  <td>First Win32 MESS release.</td>
 </tr>
 <tr>
  <td>12
  Aug 01</td>
  <td>0.53</td>
  <td>Abandoning of
  &quot;beta&quot; numbering scheme.</td>
 </tr>
 <tr>
  <td>19
  Aug 01</td>
  <td>-</td>
  <td>First checkins for
  AdvanceMAME (0.37b16).</td>
 </tr>
 <tr>
  <td>24
  May 01</td>
  <td>0.37b15</td>
  <td>Windows takes over from
  DOS as the primary development target. MAMEW becomes MAME and MAME (DOS MAME)
  becomes DMAME. Restructuring of parents and clones.</td>
 </tr>
 <tr>
  <td>17
  Jan 01</td>
  <td>0.37b11</td>
  <td>Initial support for
  discrete sound emulation.</td>
 </tr>
 <tr>
  <td>06
  Nov 00</td>
  <td>0.37b9</td>
  <td>First proper 32-bit CPU
  added (68EC020).</td>
 </tr>
 <tr>
  <td>26
  Feb 00</td>
  <td>0.36rc1</td>
  <td>Removed Pong and gambling
  game drivers.</td>
 </tr>
 <tr>
  <td>11
  Jan 00</td>
  <td>0.36b14</td>
  <td>Major reorganization of driver
  configuration structures.</td>
 </tr>
 <tr>
  <td>10
  Oct 99</td>
  <td>0.36b6 (MESS)</td>
  <td>MESS versions are synced
  to MAME versions (MAME source override.</td>
 </tr>
 <tr>
  <td>08
  Aug 99</td>
  <td>0.36b2</td>
  <td>Konami 052001/053248 CPU
  first emulated.</td>
 </tr>
 <tr>
  <td>05
  Jul 99</td>
  <td>0.35b3</td>
  <td>License change. First history.dat support.</td>
 </tr>
 <tr>
  <td>24
  May 99</td>
  <td>0.35b13</td>
  <td>Switched to PNG from PCX
  as the main screenshot image format.</td>
 </tr>
 <tr>
  <td>15
  Feb 99</td>
  <td>0.35b3</td>
  <td>Internal tilemap code
  added. Previously many drivers did tilemaps their own way.</td>
 </tr>
 <tr>
  <td>04
  Oct 98</td>
  <td>0.34b4</td>
  <td>Began using CRCs to
  identify ROMs.</td>
 </tr>
 <tr>
  <td>30
  Aug 98</td>
  <td>0.34b2</td>
  <td>First DSP core added: the
  TMS34010.</td>
 </tr>
 <tr>
  <td>16
  Aug 98</td>
  <td>0.34b1</td>
  <td>First BIOS (NEOGEO). First appearance of Neo
  Geo games, which have been the source of much controversy ever since.</td>
 </tr>
 <tr>
  <td>03
  Jun 98</td>
  <td>0.1 (MESS)</td>
  <td>First public release of
  MESS.</td>
 </tr>
 <tr>
  <td>03
  May 98</td>
  <td>0.33b1</td>
  <td>Public betas started;
  previously users would have to wait several months between releases. The
  series of betas were sometimes followed by some rc (release candidate)
  versions.</td>
 </tr>
 <tr>
  <td>-</td>
  <td>0.32</td>
  <td>0.32 does not exist to
  avoid confusion with MAME32.</td>
 </tr>
 <tr>
  <td>25
  Apr 98</td>
  <td>0.31</td>
  <td>Atari slapstic first
  emulated. Timer system added. Built-in ZIP file support added.</td>
 </tr>
 <tr>
  <td>08
  Jan 98</td>
  <td>0.30</td>
  <td>First official "non working" game, Future Spy. YM2151 support added.</td>
 </tr>
 <tr>
  <td>07
  Sep 97</td>
  <td>0.28</td>
  <td>First 68000 game emulated
  (Rastan).</td>
 </tr>
 <tr>
  <td>10
  Aug 97</td>
  <td>0.27</td>
  <td>Nicola returns as MAME
  coordinator. MAME switched away from the GPL license.</td>
 </tr>
 <tr>
  <td>18
  Jul 97</td>
  <td>0.26.1</td>
  <td>First release of MAME32.</td>
 </tr>
 <tr>
  <td>14
  Jul 97</td>
  <td>0.26</td>
  <td>First vector games added
  to MAME.</td>
 </tr>
 <tr>
  <td>02
  Jun 97</td>
  <td>0.23</td>
  <td>First FM synthesis-based
  sound chip supported — but only through a hack to use the OPL on a
  SoundBlaster card under DOS.</td>
 </tr>
 <tr>
  <td>26
  Apr 97</td>
  <td>0.19</td>
  <td>Mirko Buffoni takes over
  from Nicola as MAME coordinator.</td>
 </tr>
 <tr>
  <td>20
  Apr 97</td>
  <td>0.18</td>
  <td>First version of X/MAME
  checked in.</td>
 </tr>
 <tr>
  <td>02
  Apr 97</td>
  <td>0.14</td>
  <td>First version to use samples - Donkey Kong.</td>
 </tr>
 <tr>
  <td>26
  Mar 97</td>
  <td>0.13</td>
  <td>High score saving support
  added.</td>
 </tr>
 <tr>
  <td>23
  Mar 97</td>
  <td>0.12</td>
  <td>First multiple-CPU game emulated (Burger Time).</td>
 </tr>
 <tr>
  <td>13
  Mar 97</td>
  <td>0.10</td>
  <td>First non-Z80-based game emulated (Centipede).</td>
 </tr>
 <tr>
  <td>18
  Feb 97</td>
  <td>-</td>
  <td>First version of MacMAME
  released (0.4).</td>
 </tr>
 <tr>
  <td>16
  Feb 97</td>
  <td>0.4</td>
  <td>First not playable game added (although there is no official concept for "non working" yet).</td>
 </tr>
 <tr>
  <td>05
  Feb 97</td>
  <td>0.1</td>
  <td>MAME 0.1 released.</td>
 </tr>
 <tr>
  <td> </td>
  <td> </td>
  <td> </td>
 </tr>
</table>
<p>
This page has been heavily modified and enriched in May and June 2016, by <a target="_blank" href="http://blog.ilogic.gr">NLS</a>, using historical data from various sources. A big thanks to Fujix for the original chart idea and <a target="_blank" href="http://www.progettosnaps.net/">AntoPISA</a> for his "renameSET" detailed files that helped immensely to build the statistics.
</p>
</div> 
		
<!--	Original Table for reference
<div class="panel panel-primary">
	  <div class="panel-heading">MAME Project Compact Timeline</div>
<table class="table">
 <tr>
  <th width="7%">Release</th>
  <th width="6%">Version</th>
  <th width="5%">Parents</th>
  <th width="5%">Clones</th>
  <th width="5%">Software</th>
  <th width="70%">Milestone</th>
 </tr>
 <tr>
  <th colspan=6>1997</th>
 </tr>
 <tr>
  <td class="date">05 Feb 97</td>
  <td class="version">0.1</td>
  <td>5</td>
  <td>-</td>
  <td>-</td>
  <td>MAME 0.1 released.</td>
 </tr>
</table>
</div>

-->

<br/>
<br/>
</div>

<!-- /.container -->
	
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>
