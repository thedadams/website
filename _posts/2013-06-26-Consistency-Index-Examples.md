---
layout: post
title: "Consistency Index Examples"
date: 2013-06-26
tags: ["sports", "stats", "consistency index"]
updated: "04/02/2021"
author: "Donnie"
---

<p>The <a href="http://blog.thedadams.com/blog.html?post=2013-06Jun-22" title="Introduction to the Consistency Indicies">Consistency Indices</a> are two baseball statistics I invented a few months ago.  I've dedicated a lot of my time and computing time to these statistics.  I have calculated both the On-Base Consistency Index (OBCI) and the Hit Consistency Index (HCI) for every batter's career debuting in 1915 or later with at least 2000 plate appearances.  I have also calculated the top indices for each year, three-year span, and five-year span since 1915 (with plate appearance restrictions for each).  All of this is through the 2012 season.  I would like to share some of my thoughts and data.</p>
<br>
<p>Let's start with the career data.  The average OBCI and HCI for all the careers I calculated are 4.758552464799467 and 2.0165131499264994, respectively.  The best careers for OBCI and HCI should not be a surprise: Ted Williams has the highest career OBCI and Joe DiMaggio has the highest career HCI.  Unfortunately I don't have access to game log data for Ty Cobb because he debuted in 1905.  I would expect that he would have the highest career HCI.  Lou Gehrig owns the second highest career OBCI, which did not surprise me either.  However, I was surprised that Ichiro Suzuki has the second highest career HCI.  This made a lot of sense after looking at Ichiro's numbers and recalling that he had an extremely low swing-and-miss rate in his prime.  It validates that both indicies are measuring the correct thing.  Click <a href="#career-obci" class="open-popup-link">here</a> for a list of the top 50 career OBCIs and <a href="#career-hci" title="Career Top HCIs" class="open-popup-link">here</a> for a list of the top 50 career HCIs.  Both indicies are included in each list for comparison and the ordered index is highlighted.</p>
<br>
<p>I would like to note a couple things about top career numbers.  First, I am a little surprised how high Nomar Garciaparra and Derek Jeter are ranked in the career HCI list.  I grew up watching these two players and I would never have guessed they would be 4 and 6 respectively on this list.  Secondly, Miguel Cabrera is on the top 50 OBCI, but not the top 50 HCI.  I found this to be a little surprising.  However, I suspect that when his career is over we might see him in the top 10 in both statistics.</p>
<br>
<p>Next, we turn our attention to single seasons.  A player must have had 400 plate appearances in a season to qualify here.  I made it a little lower than the typical 500 plate appearances to compensate for the early years.  The average single season OBCI and HCI are 6.064497631927045 and 2.8492318181947778.  You can view the top 50 single seasons for OBCI <a href="#ss-obci" title="Single Season OBCI" class="open-popup-link">here</a> and HCI <a href="#ss-hci" title="Single Season HCI" class="open-popup-link">here</a>.  Note how many times Irchiro's name is listed; his rank in the career list begins to make more sense.  You'll also notice that many of the players on the top 50 Single Season OBCI list do not appear on the HCI list.  This is a result of these players getting walked so often that they did not have the opportunity to get very many hits.  This is not to say that they got walked in every plate appearance - the indicies do take that into account - but rather that they may have only had one or two at bats out of five or six plate appearances (see Barry Bonds' 2004 season).</p>
<br>
<p>Finally, we get to the data that most interests me: the three-year and five-year top lists.  I calculated both indicies in three year and five year increments for every player that averaged 400 plate appearances in that span.  The average three-year OBCI and HCI are 5.775338785540019 and 2.515898432026124, while the average five-year OBCI and HCI are 6.213813765426554 and 2.7272567613527263, respectively.  It is interesting that the five-year averages are both higher than the three-year averages.  This suggests that in a three year span, a player will likely have a "slump year," but will recover over a five year span.  You can view the three-year top lists for OBCI <a href="#ts-obci" title="Three Season OBCI" class="open-popup-link">here</a> and HCI <a href="#ts-hci" title="Three Season HCI" class="open-popup-link">here</a>, and the five-year top lists for OBCI <a href="#fs-obci" title="Five Season OBCI" class="open-popup-link">here</a> and HCI <a href="#fs-hci" title="Five Season HCI" class="open-popup-link">here</a>.  You will notice a lot of overlap in these lists.  For example, Ted Williams has the top four spots on the five-year OBCI list, all of which include his 1949 season when he reached base in 84 consecutive games.  With this in mind, it is worth mentioning that Joe DiMaggio does not hold the top spot on the three year list; it is held by George Sisler.  This validates that the indicies are not overly reliant on the longest streaks.</p>
<br>
<p>I find the three-year and five-year data most interesting because it shows how players performed in their prime seasons.  Players have fluke bad seasons as well as fluke great seasons, and as I have already mentioned, the indicies were designed for single seasons.  Players also tend to decline as they reach retirement.  The three to five year window when a player is at their best is when one should judge the consistency of that player.  Also, a team doesn't sign a player for their whole career.  Hence, three-year and five-year data would be of some importance to a team considering signing a free agent.</p>
<br>
<p>In conclusion, the statistics really speak for themselves.  It is obvious that the indicies are attempting to measure the correct thing; players that are well-known for getting hits and getting on base are at or near the top of every list I have presented.  I use the word "attempting" because I believe this is an excellent first step with room for improvement.  I am very excited to share this with everyone and I would really appreciate constructive comments and suggestions.</p>
<br>
<div id="career-obci" class="bests-popup mfp-hide">
<h2>Top 50 Career OBCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th class="sorted">On Base CI</th><th>Hit CI</th></tr>
<tr><td>Ted Williams</td><td class="sorted">16.606179973943792</td><td>3.8817264478289464</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">15.764827408366914</td><td>4.765449206285452</td></tr>
<tr><td>Albert Pujols</td><td class="sorted">14.403690476190476</td><td>4.474146586345381</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">13.808631209443448</td><td>6.770853020443962</td></tr>
<tr><td>Frank Thomas</td><td class="sorted">12.793458781362007</td><td>3.535655812261234</td></tr>
<tr><td>Jeff Bagwell</td><td class="sorted">12.39647577092511</td><td>3.580976551800654</td></tr>
<tr><td>Derek Jeter</td><td class="sorted">12.017633990558176</td><td>5.383593269033448</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">11.841176470588236</td><td>2.3924936386768447</td></tr>
<tr><td>Dom DiMaggio</td><td class="sorted">11.79745767325385</td><td>4.760824778266639</td></tr>
<tr><td>Hank Greenberg</td><td class="sorted">11.65079365079365</td><td>4.451619514832443</td></tr>
<tr><td>Joey Votto</td><td class="sorted">11.549329501915707</td><td>3.5124573035965447</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">11.498389307402183</td><td>3.259886036495553</td></tr>
<tr><td>Dale Alexander</td><td class="sorted">11.43656489709121</td><td>5.284134248665141</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">11.13597193352222</td><td>5.280159642334902</td></tr>
<tr><td>Ferris Fain</td><td class="sorted">11.074662421532764</td><td>2.351388888888889</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">10.840410952474821</td><td>3.709044099531905</td></tr>
<tr><td>Arky Vaughan</td><td class="sorted">10.815086887835704</td><td>3.697130829733023</td></tr>
<tr><td>Manny Ramirez</td><td class="sorted">10.744127962893685</td><td>3.8846865040152725</td></tr>
<tr><td>Chipper Jones</td><td class="sorted">10.540211406716262</td><td>3.477687144104077</td></tr>
<tr><td>Earle Combs</td><td class="sorted">10.522058823529411</td><td>5.087179487179488</td></tr>
<tr><td>Luke Appling</td><td class="sorted">10.482829406272314</td><td>3.4578348225554034</td></tr>
<tr><td>Prince Fielder</td><td class="sorted">10.438158961881589</td><td>3.032483930211203</td></tr>
<tr><td>Dick Porter</td><td class="sorted">10.406372549019608</td><td>4.385693121693122</td></tr>
<tr><td>Paul Waner</td><td class="sorted">10.34780103124052</td><td>4.956968480772581</td></tr>
<tr><td>Lu Blue</td><td class="sorted">10.309289279147434</td><td>3.0213381420342498</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">10.294103547459253</td><td>4.206169999795311</td></tr>
<tr><td>Ichiro Suzuki</td><td class="sorted">10.287842488389582</td><td>6.408868184955142</td></tr>
<tr><td>Charlie Gehringer</td><td class="sorted">10.272608575528283</td><td>4.405017921146953</td></tr>
<tr><td>Mickey Mantle</td><td class="sorted">10.081602096200635</td><td>2.714128561961564</td></tr>
<tr><td>Chase Utley</td><td class="sorted">10.069264069264069</td><td>3.452966058653665</td></tr>
<tr><td>Harlond Clift</td><td class="sorted">10.047619047619047</td><td>2.7803577571379434</td></tr>
<tr><td>Ralph Kiner</td><td class="sorted">10.047582304526749</td><td>2.5150032615786038</td></tr>
<tr><td>Eddie Stanky</td><td class="sorted">9.985181485181483</td><td>2.7593594424989774</td></tr>
<tr><td>Jackie Robinson</td><td class="sorted">9.982998084291188</td><td>3.352668017561635</td></tr>
<tr><td>Todd Helton</td><td class="sorted">9.924363877822046</td><td>3.780722142291781</td></tr>
<tr><td>Earl Sheely</td><td class="sorted">9.90793884105986</td><td>3.0771969044027867</td></tr>
<tr><td>Brian Giles</td><td class="sorted">9.85398466360222</td><td>2.354433497536946</td></tr>
<tr><td>Chuck Knoblauch</td><td class="sorted">9.829743008314436</td><td>3.9770536074841836</td></tr>
<tr><td>Miguel Cabrera</td><td class="sorted">9.81929181929182</td><td>4.274975024975025</td></tr>
<tr><td>Stan Musial</td><td class="sorted">9.813563763973242</td><td>4.105423081934115</td></tr>
<tr><td>Pete Rose</td><td class="sorted">9.804988083077971</td><td>4.528984572016369</td></tr>
<tr><td>Richie Ashburn</td><td class="sorted">9.799694779116464</td><td>4.287289353628884</td></tr>
<tr><td>Ben Chapman</td><td class="sorted">9.76525387900055</td><td>4.143047164416598</td></tr>
<tr><td>Mel Ott</td><td class="sorted">9.718972986748216</td><td>2.895797358671144</td></tr>
<tr><td>Bobby Abreu</td><td class="sorted">9.714913733609386</td><td>2.807941376959782</td></tr>
<tr><td>Ross Youngs</td><td class="sorted">9.710876208721038</td><td>4.473667054021036</td></tr>
<tr><td>Ed Morgan</td><td class="sorted">9.676421404682275</td><td>3.9327715703202664</td></tr>
<tr><td>Minnie Minoso</td><td class="sorted">9.65749601275917</td><td>3.6140467486429606</td></tr>
<tr><td>Joe Vosmik</td><td class="sorted">9.618541033434651</td><td>4.305061436240144</td></tr>
<tr><td>Al Rosen</td><td class="sorted">9.589962234148281</td><td>3.207835253205825</td></tr>
</table>
</div>
<div id="career-hci" class="bests-popup mfp-hide">
<h2>Top 50 Career HCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th>On Base CI</th><th class="sorted">Hit CI</th></tr>
<tr><td>Joe DiMaggio</td><td>13.808631209443448</td><td class="sorted">6.770853020443962</td></tr>
<tr><td>Ichiro Suzuki</td><td>10.287842488389582</td><td class="sorted">6.408868184955142</td></tr>
<tr><td>George Sisler</td><td>8.623809523809525</td><td class="sorted">6.048398033565012</td></tr>
<tr><td>Nomar Garciaparra</td><td>8.353252032520325</td><td class="sorted">5.4325236167341435</td></tr>
<tr><td>Sam Rice</td><td>7.990889398572885</td><td class="sorted">5.391466702019532</td></tr>
<tr><td>Derek Jeter</td><td>12.017633990558176</td><td class="sorted">5.383593269033448</td></tr>
<tr><td>Al Simmons</td><td>7.9330503021181</td><td class="sorted">5.310758602268036</td></tr>
<tr><td>Dale Alexander</td><td>11.43656489709121</td><td class="sorted">5.284134248665141</td></tr>
<tr><td>Rogers Hornsby</td><td>11.13597193352222</td><td class="sorted">5.280159642334902</td></tr>
<tr><td>Jacoby Ellsbury</td><td>9.067627627627628</td><td class="sorted">5.276952861952862</td></tr>
<tr><td>Earle Combs</td><td>10.522058823529411</td><td class="sorted">5.087179487179488</td></tr>
<tr><td>Heinie Manush</td><td>7.557043650793652</td><td class="sorted">5.051014591883265</td></tr>
<tr><td>Jose Reyes</td><td>7.884090909090909</td><td class="sorted">5.0140311070368995</td></tr>
<tr><td>Pie Traynor</td><td>8.715515627924388</td><td class="sorted">4.988356046230809</td></tr>
<tr><td>Joe Medwick</td><td>7.0566893424036286</td><td class="sorted">4.981026644016839</td></tr>
<tr><td>Paul Waner</td><td>10.34780103124052</td><td class="sorted">4.956968480772581</td></tr>
<tr><td>Don Mattingly</td><td>8.231182795698926</td><td class="sorted">4.891350619195046</td></tr>
<tr><td>Lance Richbourg</td><td>6.8475283606653745</td><td class="sorted">4.889981641751901</td></tr>
<tr><td>Johnny Hodapp</td><td>5.9489426451641565</td><td class="sorted">4.889786655693961</td></tr>
<tr><td>Robinson Cano</td><td>7.440028901734105</td><td class="sorted">4.878378378378378</td></tr>
<tr><td>Victor Martinez</td><td>9.5560301705463</td><td class="sorted">4.8377647714604235</td></tr>
<tr><td>Michael Young</td><td>8.069444444444445</td><td class="sorted">4.834991241241241</td></tr>
<tr><td>Lloyd Waner</td><td>6.591089108910892</td><td class="sorted">4.834313725490197</td></tr>
<tr><td>Ryan Zimmerman</td><td>9.028385357332725</td><td class="sorted">4.815768388440788</td></tr>
<tr><td>Dustin Pedroia</td><td>9.318550520190442</td><td class="sorted">4.8095377740539025</td></tr>
<tr><td>Bob Dillinger</td><td>7.546153846153847</td><td class="sorted">4.806204736739088</td></tr>
<tr><td>Tony Gwynn</td><td>8.881133177570094</td><td class="sorted">4.8013658176448875</td></tr>
<tr><td>Lou Gehrig</td><td>15.764827408366914</td><td class="sorted">4.765449206285452</td></tr>
<tr><td>Dom DiMaggio</td><td>11.79745767325385</td><td class="sorted">4.760824778266639</td></tr>
<tr><td>Kirby Puckett</td><td>6.801822379408587</td><td class="sorted">4.673772204806688</td></tr>
<tr><td>Freddie Lindstrom</td><td>5.7575357191388585</td><td class="sorted">4.617914165636091</td></tr>
<tr><td>Damaso Garcia</td><td>5.719628514056225</td><td class="sorted">4.610807528840315</td></tr>
<tr><td>Jo-Jo Moore</td><td>7.004839009864135</td><td class="sorted">4.6018326417704</td></tr>
<tr><td>Goose Goslin</td><td>9.137312459230268</td><td class="sorted">4.58858166922683</td></tr>
<tr><td>Ron LeFlore</td><td>8.157479296066253</td><td class="sorted">4.575787728026534</td></tr>
<tr><td>Paul Molitor</td><td>9.358355873677793</td><td class="sorted">4.575668288826184</td></tr>
<tr><td>Frankie Frisch</td><td>8.066466943105238</td><td class="sorted">4.5673056881136525</td></tr>
<tr><td>Pete Rose</td><td>9.804988083077971</td><td class="sorted">4.528984572016369</td></tr>
<tr><td>Rod Carew</td><td>8.90375530910807</td><td class="sorted">4.5167728635682165</td></tr>
<tr><td>Billy Herman</td><td>8.983787073926516</td><td class="sorted">4.474742937007089</td></tr>
<tr><td>Albert Pujols</td><td>14.403690476190476</td><td class="sorted">4.474146586345381</td></tr>
<tr><td>Ross Youngs</td><td>9.710876208721038</td><td class="sorted">4.473667054021036</td></tr>
<tr><td>Hank Greenberg</td><td>11.65079365079365</td><td class="sorted">4.451619514832443</td></tr>
<tr><td>Vladimir Guerrero</td><td>8.732142857142858</td><td class="sorted">4.423983739837397</td></tr>
<tr><td>Bill Terry</td><td>8.22882672882673</td><td class="sorted">4.417622080679405</td></tr>
<tr><td>Charlie Gehringer</td><td>10.272608575528283</td><td class="sorted">4.405017921146953</td></tr>
<tr><td>Cecil Travis</td><td>7.1953892668178385</td><td class="sorted">4.403823644166992</td></tr>
<tr><td>Hank Aaron</td><td>7.871349657077244</td><td class="sorted">4.386618876941458</td></tr>
<tr><td>Dick Porter</td><td>10.406372549019608</td><td class="sorted">4.385693121693122</td></tr>
<tr><td>Matt Holliday</td><td>9.417567661390088</td><td class="sorted">4.382269503546099</td></tr>
</table>
</div>
<div id="ss-hci" class="bests-popup mfp-hide">
<h2>Top 50 Single Season HCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th>On Base CI</th><th class="sorted">Hit CI</th><th>Year</th></tr>
<tr><td>Joe DiMaggio</td><td>23.563492063492063</td><td class="sorted">13.573260073260073</td><td>1941</td></tr>
<tr><td>George Sisler</td><td>17.63888888888889</td><td class="sorted">12.206349206349207</td><td>1922</td></tr>
<tr><td>Rogers Hornsby</td><td>17.833333333333332</td><td class="sorted">11.480392156862743</td><td>1922</td></tr>
<tr><td>George Sisler</td><td>12.156862745098039</td><td class="sorted">11.333333333333334</td><td>1925</td></tr>
<tr><td>Chuck Klein</td><td>17.192307692307693</td><td class="sorted">11.0</td><td>1930</td></tr>
<tr><td>Heinie Manush</td><td>12.03267973856209</td><td class="sorted">10.918470418470418</td><td>1933</td></tr>
<tr><td>Al Simmons</td><td>14.861111111111109</td><td class="sorted">10.882352941176471</td><td>1925</td></tr>
<tr><td>Tommy Holmes</td><td>15.18939393939394</td><td class="sorted">10.685185185185185</td><td>1945</td></tr>
<tr><td>Ichiro Suzuki</td><td>16.583333333333332</td><td class="sorted">10.017429193899781</td><td>2009</td></tr>
<tr><td>Pete Rose</td><td>13.9</td><td class="sorted">9.833888888888888</td><td>1978</td></tr>
<tr><td>Charlie Jamieson</td><td>12.663003663003664</td><td class="sorted">9.765277777777778</td><td>1924</td></tr>
<tr><td>Ichiro Suzuki</td><td>13.91904761904762</td><td class="sorted">9.73529411764706</td><td>2001</td></tr>
<tr><td>Joe DiMaggio</td><td>17.606060606060606</td><td class="sorted">9.689083820662768</td><td>1937</td></tr>
<tr><td>Luis Gonzalez</td><td>15.994949494949495</td><td class="sorted">9.61598440545809</td><td>1999</td></tr>
<tr><td>Michael Young</td><td>16.495726495726498</td><td class="sorted">9.511111111111111</td><td>2005</td></tr>
<tr><td>Sam Rice</td><td>11.809722222222222</td><td class="sorted">9.343859649122807</td><td>1924</td></tr>
<tr><td>George Sisler</td><td>11.940170940170939</td><td class="sorted">9.289760348583878</td><td>1917</td></tr>
<tr><td>Dom DiMaggio</td><td>10.354166666666666</td><td class="sorted">9.166666666666666</td><td>1949</td></tr>
<tr><td>Duke Snider</td><td>12.702777777777778</td><td class="sorted">9.057894736842107</td><td>1953</td></tr>
<tr><td>Mel Almada</td><td>12.946078431372548</td><td class="sorted">9.00388888888889</td><td>1938</td></tr>
<tr><td>Ichiro Suzuki</td><td>11.88562091503268</td><td class="sorted">8.977777777777778</td><td>2007</td></tr>
<tr><td>Paul Molitor</td><td>13.944444444444445</td><td class="sorted">8.962962962962964</td><td>1987</td></tr>
<tr><td>Harvey Kuenn</td><td>12.202991452991453</td><td class="sorted">8.883442265795207</td><td>1959</td></tr>
<tr><td>Hack Wilson</td><td>14.80952380952381</td><td class="sorted">8.865079365079366</td><td>1929</td></tr>
<tr><td>Sam Rice</td><td>10.92156862745098</td><td class="sorted">8.801054018445322</td><td>1930</td></tr>
<tr><td>Paul Waner</td><td>12.198412698412698</td><td class="sorted">8.77450980392157</td><td>1930</td></tr>
<tr><td>Dante Bichette</td><td>9.083333333333334</td><td class="sorted">8.697222222222223</td><td>1995</td></tr>
<tr><td>Joe DiMaggio</td><td>15.530303030303031</td><td class="sorted">8.693627450980392</td><td>1940</td></tr>
<tr><td>Paul Waner</td><td>19.5</td><td class="sorted">8.657894736842104</td><td>1928</td></tr>
<tr><td>Al Oliver</td><td>9.524366471734893</td><td class="sorted">8.608695652173912</td><td>1974</td></tr>
<tr><td>Harry Walker</td><td>10.604761904761906</td><td class="sorted">8.596923076923078</td><td>1943</td></tr>
<tr><td>Dale Alexander</td><td>12.46078431372549</td><td class="sorted">8.57</td><td>1930</td></tr>
<tr><td>Dave Parker</td><td>11.333333333333334</td><td class="sorted">8.564102564102564</td><td>1977</td></tr>
<tr><td>Rogers Hornsby</td><td>15.5</td><td class="sorted">8.563492063492063</td><td>1928</td></tr>
<tr><td>Earle Combs</td><td>14.623931623931625</td><td class="sorted">8.563241106719367</td><td>1931</td></tr>
<tr><td>Wade Boggs</td><td>21.75462962962963</td><td class="sorted">8.562582345191041</td><td>1985</td></tr>
<tr><td>Nomar Garciaparra</td><td>11.177777777777777</td><td class="sorted">8.53968253968254</td><td>1998</td></tr>
<tr><td>Don Mueller</td><td>8.675438596491228</td><td class="sorted">8.483333333333333</td><td>1954</td></tr>
<tr><td>Lloyd Waner</td><td>12.844017094017095</td><td class="sorted">8.46393762183236</td><td>1929</td></tr>
<tr><td>George Sisler</td><td>12.738095238095239</td><td class="sorted">8.43939393939394</td><td>1920</td></tr>
<tr><td>Tony Gwynn</td><td>9.055555555555555</td><td class="sorted">8.436507936507937</td><td>1997</td></tr>
<tr><td>Ken Boyer</td><td>14.261904761904761</td><td class="sorted">8.419103313840155</td><td>1959</td></tr>
<tr><td>Al Simmons</td><td>11.800505050505052</td><td class="sorted">8.41299019607843</td><td>1931</td></tr>
<tr><td>Pie Traynor</td><td>11.073232323232324</td><td class="sorted">8.411764705882353</td><td>1930</td></tr>
<tr><td>Juan Gonzalez</td><td>12.5</td><td class="sorted">8.404761904761905</td><td>1996</td></tr>
<tr><td>Goose Goslin</td><td>12.1875</td><td class="sorted">8.4</td><td>1928</td></tr>
<tr><td>Freddie Lindstrom</td><td>11.041666666666666</td><td class="sorted">8.385964912280702</td><td>1930</td></tr>
<tr><td>Babe Herman</td><td>10.285714285714286</td><td class="sorted">8.351851851851853</td><td>1929</td></tr>
<tr><td>Rico Carty</td><td>14.64141414141414</td><td class="sorted">8.323015873015873</td><td>1970</td></tr>
<tr><td>Hal Trosky</td><td>9.43859649122807</td><td class="sorted">8.319444444444445</td><td>1936</td></tr>
</table>
</div>
<div id="ss-obci" class="bests-popup mfp-hide">
<h2>Top 50 Single Season OBCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th class="sorted">On Base CI</th><th>Hit CI</th><th>Year</th></tr>
<tr><td>Ted Williams</td><td class="sorted">31.04444444444444</td><td>4.488888888888889</td><td>1949</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">25.277777777777775</td><td>5.624615384615384</td><td>1934</td></tr>
<tr><td>Ted Williams</td><td class="sorted">24.32142857142857</td><td>7.085137085137085</td><td>1941</td></tr>
<tr><td>Ted Williams</td><td class="sorted">24.04444444444444</td><td>5.503952569169961</td><td>1948</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">23.563492063492063</td><td>13.573260073260073</td><td>1941</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">23.547619047619047</td><td>2.4047619047619047</td><td>2004</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">22.73809523809524</td><td>3.535714285714286</td><td>2003</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">21.75462962962963</td><td>8.562582345191041</td><td>1985</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">21.333333333333332</td><td>6.7592592592592595</td><td>1939</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">20.762962962962963</td><td>3.3958333333333335</td><td>1935</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">20.458333333333332</td><td>2.985057471264368</td><td>2002</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">20.296296296296294</td><td>6.180555555555556</td><td>1936</td></tr>
<tr><td>Paul Waner</td><td class="sorted">19.5</td><td>8.657894736842104</td><td>1928</td></tr>
<tr><td>Jim Thome</td><td class="sorted">19.066666666666666</td><td>3.4310344827586206</td><td>1999</td></tr>
<tr><td>Duke Snider</td><td class="sorted">19.0</td><td>6.680555555555556</td><td>1954</td></tr>
<tr><td>J.D. Drew</td><td class="sorted">18.85185185185185</td><td>6.756410256410256</td><td>2004</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">18.40740740740741</td><td>5.226970560303894</td><td>1995</td></tr>
<tr><td>Stan Musial</td><td class="sorted">18.19047619047619</td><td>7.3999999999999995</td><td>1943</td></tr>
<tr><td>Joe Vosmik</td><td class="sorted">18.136363636363637</td><td>6.825396825396825</td><td>1938</td></tr>
<tr><td>Ted Williams</td><td class="sorted">18.075757575757574</td><td>3.5278897849462365</td><td>1946</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">17.87878787878788</td><td>6.958333333333333</td><td>1933</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">17.833333333333332</td><td>11.480392156862743</td><td>1922</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">17.7</td><td>6.906204906204906</td><td>1927</td></tr>
<tr><td>George Sisler</td><td class="sorted">17.63888888888889</td><td>12.206349206349207</td><td>1922</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">17.606060606060606</td><td>9.689083820662768</td><td>1937</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">17.59090909090909</td><td>4.884072580645161</td><td>1932</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">17.517676767676768</td><td>2.7008547008547006</td><td>1996</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">17.496969696969696</td><td>4.725641025641026</td><td>1988</td></tr>
<tr><td>Ichiro Suzuki</td><td class="sorted">17.383838383838384</td><td>7.578333333333333</td><td>2004</td></tr>
<tr><td>Lefty O'Doul</td><td class="sorted">17.363636363636363</td><td>7.255411255411256</td><td>1929</td></tr>
<tr><td>Arky Vaughan</td><td class="sorted">17.35897435897436</td><td>7.164203612479475</td><td>1936</td></tr>
<tr><td>Woody English</td><td class="sorted">17.32962962962963</td><td>6.097496706192358</td><td>1930</td></tr>
<tr><td>Mark McGwire</td><td class="sorted">17.2</td><td>3.0044091710758374</td><td>1996</td></tr>
<tr><td>Chuck Klein</td><td class="sorted">17.192307692307693</td><td>11.0</td><td>1930</td></tr>
<tr><td>Augie Galan</td><td class="sorted">17.175757575757576</td><td>4.715608465608465</td><td>1945</td></tr>
<tr><td>Bill Terry</td><td class="sorted">17.0962962962963</td><td>8.092592592592593</td><td>1930</td></tr>
<tr><td>Ken Williams</td><td class="sorted">17.08787878787879</td><td>5.296666666666667</td><td>1923</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">16.900000000000002</td><td>4.450617283950617</td><td>1999</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">16.863636363636363</td><td>6.255411255411256</td><td>1924</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">16.807692307692307</td><td>5.901477832512316</td><td>1932</td></tr>
<tr><td>Jim Thome</td><td class="sorted">16.661616161616163</td><td>2.5967741935483875</td><td>2002</td></tr>
<tr><td>Ichiro Suzuki</td><td class="sorted">16.583333333333332</td><td>10.017429193899781</td><td>2009</td></tr>
<tr><td>Bob Johnson</td><td class="sorted">16.574074074074073</td><td>3.511111111111111</td><td>1933</td></tr>
<tr><td>Michael Young</td><td class="sorted">16.495726495726498</td><td>9.511111111111111</td><td>2005</td></tr>
<tr><td>Ralph Kiner</td><td class="sorted">16.445454545454545</td><td>4.884236453201971</td><td>1949</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">16.38095238095238</td><td>6.021442495126706</td><td>1923</td></tr>
<tr><td>Ted Williams</td><td class="sorted">16.36111111111111</td><td>4.4782430213464695</td><td>1942</td></tr>
<tr><td>Albert Pujols</td><td class="sorted">16.32051282051282</td><td>5.570769230769231</td><td>2001</td></tr>
<tr><td>Alex Rodriguez</td><td class="sorted">16.205128205128204</td><td>3.638095238095238</td><td>2004</td></tr>
<tr><td>Stan Musial</td><td class="sorted">16.16060606060606</td><td>6.1000000000000005</td><td>1949</td></tr>
</table>
</div>
<div id="ts-obci" class="bests-popup mfp-hide">
<h2>Top 50 Three-Seasons OBCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th class="sorted">On Base CI</th><th>Hit CI</th><th>Years</th></tr>
<tr><td>Ted Williams</td><td class="sorted">34.2968253968254</td><td>5.168458781362008</td><td>1948 - 1950</td></tr>
<tr><td>Ted Williams</td><td class="sorted">32.07431457431458</td><td>4.315217391304348</td><td>1947 - 1949</td></tr>
<tr><td>Ted Williams</td><td class="sorted">28.741702741702742</td><td>4.138888888888889</td><td>1949 - 1951</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">27.166666666666668</td><td>3.1549019607843136</td><td>2002 - 2004</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">26.46980676328502</td><td>3.4046918767507</td><td>2001 - 2003</td></tr>
<tr><td>Ted Williams</td><td class="sorted">25.419103313840157</td><td>5.530748299319728</td><td>1941 - 1943</td></tr>
<tr><td>Ted Williams</td><td class="sorted">24.832325268817204</td><td>5.455606291222729</td><td>1940 - 1942</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">24.540277777777778</td><td>3.221264367816092</td><td>2003 - 2005</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">24.53833333333333</td><td>4.771604938271605</td><td>1934 - 1936</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">23.097340930674264</td><td>11.510933806146573</td><td>1939 - 1941</td></tr>
<tr><td>Ted Williams</td><td class="sorted">22.96446243814665</td><td>5.011600641737627</td><td>1939 - 1941</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">22.904905913978496</td><td>5.073082906754993</td><td>1932 - 1934</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">22.627240143369175</td><td>4.53150406504065</td><td>1933 - 1935</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">22.450089126559714</td><td>11.612886382623225</td><td>1940 - 1942</td></tr>
<tr><td>Ted Williams</td><td class="sorted">21.456315289648625</td><td>4.010533440097613</td><td>1946 - 1948</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">21.370967741935484</td><td>7.018518518518518</td><td>1985 - 1987</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">21.327956989247312</td><td>4.449186991869919</td><td>1935 - 1937</td></tr>
<tr><td>Duke Snider</td><td class="sorted">21.24124124124124</td><td>6.2807807807807805</td><td>1953 - 1955</td></tr>
<tr><td>Arky Vaughan</td><td class="sorted">21.199719887955183</td><td>4.773762838468721</td><td>1934 - 1936</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">20.831521739130434</td><td>9.344918699186993</td><td>1941 - 1943</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">19.964675201517306</td><td>5.1963601532567045</td><td>1932 - 1934</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">19.423926767676768</td><td>4.353703703703704</td><td>1995 - 1997</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">19.36936936936937</td><td>4.905982905982906</td><td>1937 - 1939</td></tr>
<tr><td>Ted Williams</td><td class="sorted">19.318181818181817</td><td>3.003260302556077</td><td>1945 - 1947</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">19.212100764732345</td><td>6.544411987449963</td><td>1984 - 1986</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">18.988095238095237</td><td>8.657340189554345</td><td>1922 - 1924</td></tr>
<tr><td>Ken Williams</td><td class="sorted">18.939096850861556</td><td>5.507246376811594</td><td>1922 - 1924</td></tr>
<tr><td>Paul Waner</td><td class="sorted">18.888439046333783</td><td>7.2815597287428275</td><td>1927 - 1929</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">18.85952380952381</td><td>5.712072072072071</td><td>1926 - 1928</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">18.839971550497868</td><td>3.539519140989729</td><td>2000 - 2002</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">18.80952380952381</td><td>7.421146953405018</td><td>1937 - 1939</td></tr>
<tr><td>Lu Blue</td><td class="sorted">18.564102564102566</td><td>3.224290780141844</td><td>1929 - 1931</td></tr>
<tr><td>Ted Williams</td><td class="sorted">18.53411306042885</td><td>3.5474747474747477</td><td>1950 - 1952</td></tr>
<tr><td>Mark McGwire</td><td class="sorted">18.427248677248677</td><td>2.5318761384335158</td><td>1994 - 1996</td></tr>
<tr><td>Arky Vaughan</td><td class="sorted">18.405291005291005</td><td>5.123931623931624</td><td>1935 - 1937</td></tr>
<tr><td>Stan Musial</td><td class="sorted">18.226190476190478</td><td>6.346153846153847</td><td>1943 - 1945</td></tr>
<tr><td>Albert Pujols</td><td class="sorted">18.069467787114846</td><td>4.727932098765432</td><td>2004 - 2006</td></tr>
<tr><td>Luke Appling</td><td class="sorted">18.046108861898336</td><td>3.647853318034041</td><td>1937 - 1939</td></tr>
<tr><td>Charlie Gehringer</td><td class="sorted">17.962962962962962</td><td>5.4901764901764905</td><td>1934 - 1936</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">17.867816091954023</td><td>9.4320987654321</td><td>1921 - 1923</td></tr>
<tr><td>Paul Waner</td><td class="sorted">17.823573573573572</td><td>7.801587301587301</td><td>1928 - 1930</td></tr>
<tr><td>Mike Schmidt</td><td class="sorted">17.823211875843455</td><td>2.9190613026819925</td><td>1981 - 1983</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">17.74712643678161</td><td>6.355555555555554</td><td>1923 - 1925</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">17.534139402560456</td><td>3.481672394043528</td><td>1996 - 1998</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">17.296586059743955</td><td>3.9275316455696205</td><td>1999 - 2001</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">17.181818181818183</td><td>5.857777777777777</td><td>1986 - 1988</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">17.071428571428573</td><td>4.181578947368421</td><td>1997 - 1999</td></tr>
<tr><td>George Sisler</td><td class="sorted">17.061264822134387</td><td>12.58068783068783</td><td>1921 - 1923</td></tr>
<tr><td>George Sisler</td><td class="sorted">17.037037037037038</td><td>10.814327485380117</td><td>1920 - 1922</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">16.941176470588236</td><td>4.085362760020295</td><td>1994 - 1996</td></tr>
</table>
</div>
<div id="ts-hci" class="bests-popup mfp-hide">
<h2>Top 50 Three-Seasons HCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th>On Base CI</th><th class="sorted">Hit CI</th><th>Years</th></tr>
<tr><td>George Sisler</td><td>17.061264822134387</td><td class="sorted">12.58068783068783</td><td>1921 - 1923</td></tr>
<tr><td>Joe DiMaggio</td><td>22.450089126559714</td><td class="sorted">11.612886382623225</td><td>1940 - 1942</td></tr>
<tr><td>Joe DiMaggio</td><td>23.097340930674264</td><td class="sorted">11.510933806146573</td><td>1939 - 1941</td></tr>
<tr><td>George Sisler</td><td>17.037037037037038</td><td class="sorted">10.814327485380117</td><td>1920 - 1922</td></tr>
<tr><td>Rogers Hornsby</td><td>16.077524893314365</td><td class="sorted">9.696763460375076</td><td>1920 - 1922</td></tr>
<tr><td>Rogers Hornsby</td><td>17.867816091954023</td><td class="sorted">9.4320987654321</td><td>1921 - 1923</td></tr>
<tr><td>Joe DiMaggio</td><td>20.831521739130434</td><td class="sorted">9.344918699186993</td><td>1941 - 1943</td></tr>
<tr><td>Chuck Klein</td><td>16.79047619047619</td><td class="sorted">9.038712921065862</td><td>1928 - 1930</td></tr>
<tr><td>Rogers Hornsby</td><td>18.988095238095237</td><td class="sorted">8.657340189554345</td><td>1922 - 1924</td></tr>
<tr><td>Chuck Klein</td><td>16.152439024390244</td><td class="sorted">8.455751545303784</td><td>1929 - 1931</td></tr>
<tr><td>Rico Carty</td><td>11.362773029439696</td><td class="sorted">8.40778227620333</td><td>1968 - 1970</td></tr>
<tr><td>Rico Carty</td><td>11.362773029439696</td><td class="sorted">8.40778227620333</td><td>1969 - 1971</td></tr>
<tr><td>Ichiro Suzuki</td><td>14.094973789700894</td><td class="sorted">8.3366452991453</td><td>2007 - 2009</td></tr>
<tr><td>Bill Lamar</td><td>10.351478494623656</td><td class="sorted">8.320370370370371</td><td>1923 - 1925</td></tr>
<tr><td>Rico Carty</td><td>12.093333333333334</td><td class="sorted">8.296296296296296</td><td>1970 - 1972</td></tr>
<tr><td>Joe DiMaggio</td><td>16.175627240143367</td><td class="sorted">8.259959349593496</td><td>1935 - 1937</td></tr>
<tr><td>Chuck Klein</td><td>15.9796973052787</td><td class="sorted">8.14920634920635</td><td>1930 - 1932</td></tr>
<tr><td>Ichiro Suzuki</td><td>14.600358422939067</td><td class="sorted">8.13034188034188</td><td>2000 - 2002</td></tr>
<tr><td>Harry Walker</td><td>9.05050505050505</td><td class="sorted">8.105263157894738</td><td>1942 - 1944</td></tr>
<tr><td>Harry Walker</td><td>8.676470588235295</td><td class="sorted">8.097165991902834</td><td>1941 - 1943</td></tr>
<tr><td>Charlie Jamieson</td><td>14.396825396825397</td><td class="sorted">7.988888888888888</td><td>1922 - 1924</td></tr>
<tr><td>Nomar Garciaparra</td><td>11.946296296296296</td><td class="sorted">7.946236559139787</td><td>1997 - 1999</td></tr>
<tr><td>Al Simmons</td><td>11.347427766032418</td><td class="sorted">7.938243597499496</td><td>1929 - 1931</td></tr>
<tr><td>Heinie Manush</td><td>9.490327380952381</td><td class="sorted">7.857357357357358</td><td>1931 - 1933</td></tr>
<tr><td>Paul Waner</td><td>17.823573573573572</td><td class="sorted">7.801587301587301</td><td>1928 - 1930</td></tr>
<tr><td>Nomar Garciaparra</td><td>11.17094017094017</td><td class="sorted">7.744897959183674</td><td>1996 - 1998</td></tr>
<tr><td>Nomar Garciaparra</td><td>12.154761904761905</td><td class="sorted">7.707885304659499</td><td>1998 - 2000</td></tr>
<tr><td>Ichiro Suzuki</td><td>11.982099661344945</td><td class="sorted">7.693650793650794</td><td>2008 - 2010</td></tr>
<tr><td>Ichiro Suzuki</td><td>9.671092278719398</td><td class="sorted">7.685405405405405</td><td>2006 - 2008</td></tr>
<tr><td>Al Simmons</td><td>11.84973544973545</td><td class="sorted">7.66481652790626</td><td>1923 - 1925</td></tr>
<tr><td>Heinie Manush</td><td>10.455827067669173</td><td class="sorted">7.612403667934836</td><td>1932 - 1934</td></tr>
<tr><td>Ichiro Suzuki</td><td>11.820055904961565</td><td class="sorted">7.590366581415175</td><td>2001 - 2003</td></tr>
<tr><td>Joe Medwick</td><td>10.90713853599516</td><td class="sorted">7.536276002029427</td><td>1935 - 1937</td></tr>
<tr><td>Pie Traynor</td><td>11.88695315524584</td><td class="sorted">7.531755308786285</td><td>1928 - 1930</td></tr>
<tr><td>Pete Rose</td><td>13.5121158392435</td><td class="sorted">7.496970680514985</td><td>1976 - 1978</td></tr>
<tr><td>Sam Rice</td><td>11.366002795248079</td><td class="sorted">7.493781094527364</td><td>1928 - 1930</td></tr>
<tr><td>George Sisler</td><td>11.91891891891892</td><td class="sorted">7.4533610854147385</td><td>1922 - 1924</td></tr>
<tr><td>Joe DiMaggio</td><td>18.80952380952381</td><td class="sorted">7.421146953405018</td><td>1937 - 1939</td></tr>
<tr><td>Sam Rice</td><td>10.876666666666667</td><td class="sorted">7.408602150537635</td><td>1929 - 1931</td></tr>
<tr><td>Chuck Klein</td><td>11.456521739130435</td><td class="sorted">7.39804292929293</td><td>1927 - 1929</td></tr>
<tr><td>Sam Rice</td><td>11.864630467571644</td><td class="sorted">7.360847278757728</td><td>1924 - 1926</td></tr>
<tr><td>Nomar Garciaparra</td><td>8.916666666666666</td><td class="sorted">7.357142857142858</td><td>1995 - 1997</td></tr>
<tr><td>Joe Medwick</td><td>10.562585232807324</td><td class="sorted">7.318041582830316</td><td>1934 - 1936</td></tr>
<tr><td>Jacoby Ellsbury</td><td>8.63464696223317</td><td class="sorted">7.307057057057057</td><td>2011 - 2013</td></tr>
<tr><td>Joe DiMaggio</td><td>14.420707070707072</td><td class="sorted">7.30702547866727</td><td>1936 - 1938</td></tr>
<tr><td>Paul Waner</td><td>18.888439046333783</td><td class="sorted">7.2815597287428275</td><td>1927 - 1929</td></tr>
<tr><td>Charlie Jamieson</td><td>14.457456626061278</td><td class="sorted">7.250373931623932</td><td>1923 - 1925</td></tr>
<tr><td>Joe DiMaggio</td><td>15.174509803921568</td><td class="sorted">7.154280510018214</td><td>1938 - 1940</td></tr>
<tr><td>Dick Wakefield</td><td>12.569444444444445</td><td class="sorted">7.1380952380952385</td><td>1942 - 1944</td></tr>
<tr><td>Dick Wakefield</td><td>12.569444444444445</td><td class="sorted">7.1380952380952385</td><td>1943 - 1945</td></tr>
</table>
</div>
<div id="fs-obci" class="bests-popup mfp-hide">
<h2>Top 50 Five-Seasons OBCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th class="sorted">On Base CI</th><th>Hit CI</th><th>Years</th></tr>
<tr><td>Ted Williams</td><td class="sorted">31.055026455026454</td><td>4.297098467561939</td><td>1946 - 1950</td></tr>
<tr><td>Ted Williams</td><td class="sorted">31.030577956989248</td><td>4.127371273712737</td><td>1945 - 1949</td></tr>
<tr><td>Ted Williams</td><td class="sorted">30.04338549075391</td><td>4.19195688225539</td><td>1947 - 1951</td></tr>
<tr><td>Ted Williams</td><td class="sorted">28.95279146141215</td><td>4.6246062428407795</td><td>1948 - 1952</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">26.826704545454547</td><td>3.2985761505212303</td><td>2001 - 2005</td></tr>
<tr><td>Ted Williams</td><td class="sorted">26.431417624521075</td><td>4.075462962962963</td><td>1949 - 1953</td></tr>
<tr><td>Ted Williams</td><td class="sorted">24.832325268817204</td><td>5.455606291222729</td><td>1940 - 1944</td></tr>
<tr><td>Ted Williams</td><td class="sorted">22.96446243814665</td><td>5.011600641737627</td><td>1937 - 1941</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">22.813756613756613</td><td>2.784590824245996</td><td>2002 - 2006</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">22.78251700680272</td><td>4.930859691808597</td><td>1932 - 1936</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">22.450089126559714</td><td>11.612886382623225</td><td>1940 - 1944</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">22.121794871794872</td><td>4.686868686868688</td><td>1933 - 1937</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">21.92207792207792</td><td>5.079480940794809</td><td>1931 - 1935</td></tr>
<tr><td>Ted Williams</td><td class="sorted">21.456315289648625</td><td>4.010533440097613</td><td>1944 - 1948</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">21.30544217687075</td><td>3.3523809523809525</td><td>2000 - 2004</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">21.043740573152338</td><td>9.585682433508522</td><td>1937 - 1941</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">20.65991127243396</td><td>4.362197198762729</td><td>1934 - 1938</td></tr>
<tr><td>Ted Williams</td><td class="sorted">19.915850340136053</td><td>4.702562609202096</td><td>1938 - 1942</td></tr>
<tr><td>Ted Williams</td><td class="sorted">19.915850340136053</td><td>4.702562609202096</td><td>1939 - 1943</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">18.7898265779391</td><td>5.729523392909219</td><td>1985 - 1989</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">18.70024198427102</td><td>8.415214521452144</td><td>1938 - 1942</td></tr>
<tr><td>Joe DiMaggio</td><td class="sorted">18.30972515856237</td><td>9.807027027027027</td><td>1939 - 1943</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">18.23939393939394</td><td>4.196708213486738</td><td>1995 - 1999</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">18.169753086419753</td><td>4.075862068965518</td><td>1935 - 1939</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">18.032945736434108</td><td>2.1919245505452403</td><td>2003 - 2007</td></tr>
<tr><td>Lou Gehrig</td><td class="sorted">17.68731865506059</td><td>5.6220277060811235</td><td>1930 - 1934</td></tr>
<tr><td>Ted Williams</td><td class="sorted">17.68478906714201</td><td>4.00872104981694</td><td>1950 - 1954</td></tr>
<tr><td>Ted Williams</td><td class="sorted">17.46348980559507</td><td>3.568672839506173</td><td>1951 - 1955</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">17.23954248366013</td><td>7.950730994152047</td><td>1921 - 1925</td></tr>
<tr><td>Barry Bonds</td><td class="sorted">17.154331450094162</td><td>3.209651257096512</td><td>1999 - 2003</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">17.06393442622951</td><td>5.9332895888014</td><td>1984 - 1988</td></tr>
<tr><td>Chuck Klein</td><td class="sorted">16.79047619047619</td><td>9.038712921065862</td><td>1926 - 1930</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">16.725541125541124</td><td>8.299433691002173</td><td>1920 - 1924</td></tr>
<tr><td>Chuck Klein</td><td class="sorted">16.47798463356974</td><td>8.47654970760234</td><td>1927 - 1931</td></tr>
<tr><td>Albert Pujols</td><td class="sorted">16.359471766848817</td><td>4.432319882071126</td><td>2004 - 2008</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">16.23446327683616</td><td>6.129252466752466</td><td>1923 - 1927</td></tr>
<tr><td>Rogers Hornsby</td><td class="sorted">16.221595655806183</td><td>7.010978342046304</td><td>1922 - 1926</td></tr>
<tr><td>Paul Waner</td><td class="sorted">16.159848484848485</td><td>6.527777777777779</td><td>1925 - 1929</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">16.03022533022533</td><td>4.826814031039383</td><td>1932 - 1936</td></tr>
<tr><td>Luke Appling</td><td class="sorted">16.007424475166413</td><td>4.633121429887599</td><td>1935 - 1939</td></tr>
<tr><td>Wade Boggs</td><td class="sorted">15.971326164874553</td><td>5.854884725113732</td><td>1983 - 1987</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">15.828207447610433</td><td>4.997410767038544</td><td>1931 - 1935</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">15.826927556487306</td><td>3.6</td><td>1993 - 1997</td></tr>
<tr><td>Charlie Gehringer</td><td class="sorted">15.770765027322405</td><td>5.6883680555555545</td><td>1934 - 1938</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">15.729390681003585</td><td>4.117592081877796</td><td>1996 - 2000</td></tr>
<tr><td>Edgar Martinez</td><td class="sorted">15.626130739033963</td><td>4.059784274069988</td><td>1997 - 2001</td></tr>
<tr><td>Hank Greenberg</td><td class="sorted">15.56850175967823</td><td>5.309909909909909</td><td>1937 - 1941</td></tr>
<tr><td>Jimmie Foxx</td><td class="sorted">15.545299145299145</td><td>4.727861319966583</td><td>1935 - 1939</td></tr>
<tr><td>Paul Waner</td><td class="sorted">15.499673969744393</td><td>6.968594217347956</td><td>1927 - 1931</td></tr>
<tr><td>Albert Pujols</td><td class="sorted">15.428743961352659</td><td>5.839523050049366</td><td>2001 - 2005</td></tr>
</table>
</div>
<div id="fs-hci" class="bests-popup mfp-hide">
<h2>Top 50 Five-Seasons HCIs</h2>
<table border="1" style="margin-left:auto;margin-right:auto;">
<tr><th>PlayerName</th><th>On Base CI</th><th class="sorted">Hit CI</th><th>Years</th></tr>
<tr><td>Joe DiMaggio</td><td>22.450089126559714</td><td class="sorted">11.612886382623225</td><td>1940 - 1944</td></tr>
<tr><td>Joe DiMaggio</td><td>18.30972515856237</td><td class="sorted">9.807027027027027</td><td>1939 - 1943</td></tr>
<tr><td>Joe DiMaggio</td><td>21.043740573152338</td><td class="sorted">9.585682433508522</td><td>1937 - 1941</td></tr>
<tr><td>Chuck Klein</td><td>16.79047619047619</td><td class="sorted">9.038712921065862</td><td>1926 - 1930</td></tr>
<tr><td>George Sisler</td><td>14.112916375494992</td><td class="sorted">8.751028806584362</td><td>1919 - 1923</td></tr>
<tr><td>George Sisler</td><td>12.135620915032677</td><td class="sorted">8.533730158730158</td><td>1921 - 1925</td></tr>
<tr><td>Chuck Klein</td><td>16.47798463356974</td><td class="sorted">8.47654970760234</td><td>1927 - 1931</td></tr>
<tr><td>Joe DiMaggio</td><td>18.70024198427102</td><td class="sorted">8.415214521452144</td><td>1938 - 1942</td></tr>
<tr><td>Rogers Hornsby</td><td>16.725541125541124</td><td class="sorted">8.299433691002173</td><td>1920 - 1924</td></tr>
<tr><td>George Sisler</td><td>12.012820512820513</td><td class="sorted">8.13623595505618</td><td>1920 - 1924</td></tr>
<tr><td>George Sisler</td><td>13.189684569479965</td><td class="sorted">8.028448844884489</td><td>1918 - 1922</td></tr>
<tr><td>Rogers Hornsby</td><td>17.23954248366013</td><td class="sorted">7.950730994152047</td><td>1921 - 1925</td></tr>
<tr><td>Ichiro Suzuki</td><td>13.647916666666667</td><td class="sorted">7.689964157706093</td><td>2000 - 2004</td></tr>
<tr><td>Ichiro Suzuki</td><td>11.163435140700068</td><td class="sorted">7.611753343956733</td><td>2006 - 2010</td></tr>
<tr><td>Ichiro Suzuki</td><td>11.820055904961565</td><td class="sorted">7.590366581415175</td><td>1999 - 2003</td></tr>
<tr><td>Chuck Klein</td><td>14.525641025641027</td><td class="sorted">7.5797829811536275</td><td>1928 - 1932</td></tr>
<tr><td>George Sisler</td><td>9.067236274214594</td><td class="sorted">7.555593685655457</td><td>1922 - 1926</td></tr>
<tr><td>Nomar Garciaparra</td><td>11.284313725490195</td><td class="sorted">7.555555555555556</td><td>1995 - 1999</td></tr>
<tr><td>Nomar Garciaparra</td><td>11.315972222222223</td><td class="sorted">7.531654456654457</td><td>1997 - 2001</td></tr>
<tr><td>Joe DiMaggio</td><td>14.576041666666669</td><td class="sorted">7.48161716171617</td><td>1936 - 1940</td></tr>
<tr><td>Heinie Manush</td><td>10.703787227949599</td><td class="sorted">7.4522381573229035</td><td>1929 - 1933</td></tr>
<tr><td>Ichiro Suzuki</td><td>11.17810113760324</td><td class="sorted">7.444082039595499</td><td>2005 - 2009</td></tr>
<tr><td>Nomar Garciaparra</td><td>10.929292929292929</td><td class="sorted">7.387037037037037</td><td>1996 - 2000</td></tr>
<tr><td>Joe DiMaggio</td><td>14.420707070707072</td><td class="sorted">7.30702547866727</td><td>1934 - 1938</td></tr>
<tr><td>Al Simmons</td><td>11.222222222222223</td><td class="sorted">7.299242424242425</td><td>1925 - 1929</td></tr>
<tr><td>Joe DiMaggio</td><td>15.28395061728395</td><td class="sorted">7.283730158730158</td><td>1935 - 1939</td></tr>
<tr><td>Heinie Manush</td><td>9.870577485380117</td><td class="sorted">7.2699823165340405</td><td>1930 - 1934</td></tr>
<tr><td>Rogers Hornsby</td><td>13.60530679933665</td><td class="sorted">7.264724919093851</td><td>1919 - 1923</td></tr>
<tr><td>Ichiro Suzuki</td><td>12.850864296533905</td><td class="sorted">7.215919701213818</td><td>2001 - 2005</td></tr>
<tr><td>Al Simmons</td><td>10.28499888218198</td><td class="sorted">7.209391534391535</td><td>1927 - 1931</td></tr>
<tr><td>George Sisler</td><td>11.967656012176562</td><td class="sorted">7.0939071446353</td><td>1917 - 1921</td></tr>
<tr><td>Joe Medwick</td><td>11.295454545454547</td><td class="sorted">7.059420289855073</td><td>1935 - 1939</td></tr>
<tr><td>Al Simmons</td><td>9.652450980392157</td><td class="sorted">7.057798165137615</td><td>1929 - 1933</td></tr>
<tr><td>Paul Waner</td><td>14.554263565891473</td><td class="sorted">7.056976413753907</td><td>1924 - 1928</td></tr>
<tr><td>Chuck Klein</td><td>14.121821919290275</td><td class="sorted">7.044802867383513</td><td>1929 - 1933</td></tr>
<tr><td>Sam Rice</td><td>11.006835597352838</td><td class="sorted">7.018150310971845</td><td>1926 - 1930</td></tr>
<tr><td>Al Simmons</td><td>9.594598765432098</td><td class="sorted">7.017716860206867</td><td>1928 - 1932</td></tr>
<tr><td>Rogers Hornsby</td><td>16.221595655806183</td><td class="sorted">7.010978342046304</td><td>1922 - 1926</td></tr>
<tr><td>Paul Waner</td><td>15.499673969744393</td><td class="sorted">6.968594217347956</td><td>1927 - 1931</td></tr>
<tr><td>Ichiro Suzuki</td><td>12.2174497428705</td><td class="sorted">6.959619047619047</td><td>2004 - 2008</td></tr>
<tr><td>Paul Waner</td><td>14.704204204204204</td><td class="sorted">6.902240896358543</td><td>1928 - 1932</td></tr>
<tr><td>Ichiro Suzuki</td><td>10.38637877831545</td><td class="sorted">6.897540983606558</td><td>2007 - 2011</td></tr>
<tr><td>Ichiro Suzuki</td><td>11.875429553264604</td><td class="sorted">6.8934820647419075</td><td>2003 - 2007</td></tr>
<tr><td>Nomar Garciaparra</td><td>10.368253968253969</td><td class="sorted">6.8686868686868685</td><td>1998 - 2002</td></tr>
<tr><td>Paul Waner</td><td>15.364458247066944</td><td class="sorted">6.824652338811631</td><td>1926 - 1930</td></tr>
<tr><td>Sam Rice</td><td>9.550520183104453</td><td class="sorted">6.806505478297514</td><td>1927 - 1931</td></tr>
<tr><td>Sam Rice</td><td>9.807122507122507</td><td class="sorted">6.789836919147263</td><td>1924 - 1928</td></tr>
<tr><td>Al Simmons</td><td>10.623120089786758</td><td class="sorted">6.778798798798799</td><td>1922 - 1926</td></tr>
<tr><td>Jim Bottomley</td><td>9.231329690346085</td><td class="sorted">6.682137834036568</td><td>1921 - 1925</td></tr>
<tr><td>Al Simmons</td><td>9.185077519379846</td><td class="sorted">6.675975975975976</td><td>1930 - 1934</td></tr>
</table>
</div>
<script>
$('.open-popup-link').magnificPopup({
type: 'inline',
tClose: 'Close',
closeBtnInside: true,
key: 'bests'
});
</script>