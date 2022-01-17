@extends('layouts.vertical-menu.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
							<div>
								<h1 class="page-title">Data Tables</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
								</ol>
							</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Data Tables</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered text-nowrap w-100">
												<thead>
													<tr>
														<th class="wd-15p">First name</th>
														<th class="wd-15p">Last name</th>
														<th class="wd-20p">Position</th>
														<th class="wd-15p">Start date</th>
														<th class="wd-10p">Salary</th>
														<th class="wd-25p">E-mail</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>$654,765</td>
														<td>b.Chloe@datatables.net</td>
													</tr>
													<tr>
														<td>Donna</td>
														<td>Bond</td>
														<td>Account Manager</td>
														<td>2012/02/21</td>
														<td>$543,654</td>
														<td>d.bond@datatables.net</td>
													</tr>
													<tr>
														<td>Harry</td>
														<td>Carr</td>
														<td>Technical Manager</td>
														<td>20011/02/87</td>
														<td>$86,000</td>
														<td>h.carr@datatables.net</td>
													</tr>
													<tr>
														<td>Lucas</td>
														<td>Dyer</td>
														<td>Javascript Developer</td>
														<td>2014/08/23</td>
														<td>$456,123</td>
														<td>l.dyer@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Hill</td>
														<td>Sales Manager</td>
														<td>2010/7/14</td>
														<td>$432,230</td>
														<td>k.hill@datatables.net</td>
													</tr>
													<tr>
														<td>Dominic</td>
														<td>Hudson</td>
														<td>Sales Assistant</td>
														<td>2015/10/16</td>
														<td>$654,300</td>
														<td>d.hudson@datatables.net</td>
													</tr>
													<tr>
														<td>Herrod</td>
														<td>Chandler</td>
														<td>Integration Specialist</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
														<td>h.chandler@datatables.net</td>
													</tr>
													<tr>
														<td>Jonathan</td>
														<td>Ince</td>
														<td>junior Manager</td>
														<td>2012/11/23</td>
														<td>$345,789</td>
														<td>j.ince@datatables.net</td>
													</tr>
													<tr>
														<td>Leonard</td>
														<td>Ellison</td>
														<td>Junior Javascript Developer</td>
														<td>2010/03/19</td>
														<td>$205,500</td>
														<td>l.ellison@datatables.net</td>
													</tr>
													<tr>
														<td>Madeleine</td>
														<td>Lee</td>
														<td>Software Developer</td>
														<td>20015/8/23</td>
														<td>$456,890</td>
														<td>m.lee@datatables.net</td>
													</tr>
													<tr>
														<td>Karen</td>
														<td>Miller</td>
														<td>Office Director</td>
														<td>2012/9/25</td>
														<td>$87,654</td>
														<td>k.miller@datatables.net</td>
													</tr>
													<tr>
														<td>Lisa</td>
														<td>Smith</td>
														<td>Support Lead</td>
														<td>2011/05/21</td>
														<td>$342,000</td>
														<td>l.simth@datatables.net</td>
													</tr>
													<tr>
														<td>Morgan</td>
														<td>Keith</td>
														<td>Accountant</td>
														<td>2012/11/27</td>
														<td>$675,245</td>
														<td>m.keith@datatables.net</td>
													</tr>
													<tr>
														<td>Nathan</td>
														<td>Mills</td>
														<td>Senior Marketing Designer</td>
														<td>2014/10/8</td>
														<td>$765,980</td>
														<td>n.mills@datatables.net</td>
													</tr>
													<tr>
														<td>Ruth</td>
														<td>May</td>
														<td>office Manager</td>
														<td>2010/03/17</td>
														<td>$654,765</td>
														<td>r.may@datatables.net</td>
													</tr>
													<tr>
														<td>Penelope</td>
														<td>Ogden</td>
														<td>Marketing Manager</td>
														<td>2013/5/22</td>
														<td>$345,510</td>
														<td>p.ogden@datatables.net</td>
													</tr>
													<tr>
														<td>Sean</td>
														<td>Piper</td>
														<td>Financial Officer</td>
														<td>2014/06/11</td>
														<td>$725,000</td>
														<td>s.piper@datatables.net</td>
													</tr>
													<tr>
														<td>Trevor</td>
														<td>Ross</td>
														<td>Systems Administrator</td>
														<td>2011/05/23</td>
														<td>$237,500</td>
														<td>t.ross@datatables.net</td>
													</tr>
													<tr>
														<td>Vanessa</td>
														<td>Robertson</td>
														<td>Software Designer</td>
														<td>2014/6/23</td>
														<td>$765,654</td>
														<td>v.robertson@datatables.net</td>
													</tr>
													<tr>
														<td>Una</td>
														<td>Richard</td>
														<td>Personnel Manager</td>
														<td>2014/5/22</td>
														<td>$765,290</td>
														<td>u.richard@datatables.net</td>
													</tr>
													<tr>
														<td>Justin</td>
														<td>Peters</td>
														<td>Development lead</td>
														<td>2013/10/23</td>
														<td>$765,654</td>
														<td>j.peters@datatables.net</td>
													</tr>
													<tr>
														<td>Adrian</td>
														<td>Terry</td>
														<td>Marketing Officer</td>
														<td>2013/04/21</td>
														<td>$543,769</td>
														<td>a.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Cameron</td>
														<td>Watson</td>
														<td>Sales Support</td>
														<td>2013/9/7</td>
														<td>$675,876</td>
														<td>c.watson@datatables.net</td>
													</tr>
													<tr>
														<td>Evan</td>
														<td>Terry</td>
														<td>Sales Manager</td>
														<td>2013/10/26</td>
														<td>$66,340</td>
														<td>d.terry@datatables.net</td>
													</tr>
													<tr>
														<td>Angelica</td>
														<td>Ramos</td>
														<td>Chief Executive Officer</td>
														<td>20017/10/15</td>
														<td>$6,234,000</td>
														<td>a.ramos@datatables.net</td>
													</tr>
													<tr>
														<td>Connor</td>
														<td>Johne</td>
														<td>Web Developer</td>
														<td>2011/1/25</td>
														<td>$92,575</td>
														<td>C.johne@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Chang</td>
														<td>Regional Director</td>
														<td>2012/17/11</td>
														<td>$546,890</td>
														<td>j.chang@datatables.net</td>
													</tr>
													<tr>
														<td>Brenden</td>
														<td>Wagner</td>
														<td>Software Engineer</td>
														<td>2013/07/14</td>
														<td>$206,850</td>
														<td>b.wagner@datatables.net</td>
													</tr>
													<tr>
														<td>Fiona</td>
														<td>Green</td>
														<td>Chief Operating Officer</td>
														<td>2015/06/23</td>
														<td>$345,789</td>
														<td>f.green@datatables.net</td>
													</tr>
													<tr>
														<td>Shou</td>
														<td>Itou</td>
														<td>Regional Marketing</td>
														<td>2013/07/19</td>
														<td>$335,300</td>
														<td>s.itou@datatables.net</td>
													</tr>
													<tr>
														<td>Michelle</td>
														<td>House</td>
														<td>Integration Specialist</td>
														<td>2016/07/18</td>
														<td>$76,890</td>
														<td>m.house@datatables.net</td>
													</tr>
													<tr>
														<td>Suki</td>
														<td>Burks</td>
														<td>Developer</td>
														<td>2010/11/45</td>
														<td>$678,890</td>
														<td>s.burks@datatables.net</td>
													</tr>
													<tr>
														<td>Prescott</td>
														<td>Bartlett</td>
														<td>Technical Author</td>
														<td>2014/12/25</td>
														<td>$789,100</td>
														<td>p.bartlett@datatables.net</td>
													</tr>
													<tr>
														<td>Gavin</td>
														<td>Cortez</td>
														<td>Team Leader</td>
														<td>2015/1/19</td>
														<td>$345,890</td>
														<td>g.cortez@datatables.net</td>
													</tr>
													<tr>
														<td>Martena</td>
														<td>Mccray</td>
														<td>Post-Sales support</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
														<td>m.mccray@datatables.net</td>
													</tr>
													<tr>
														<td>Unity</td>
														<td>Butler</td>
														<td>Marketing Designer</td>
														<td>2014/7/28</td>
														<td>$34,983</td>
														<td>u.butler@datatables.net</td>
													</tr>
													<tr>
														<td>Howard</td>
														<td>Hatfield</td>
														<td>Office Manager</td>
														<td>2013/8/19</td>
														<td>$98,000</td>
														<td>h.hatfield@datatables.net</td>
													</tr>
													<tr>
														<td>Hope</td>
														<td>Fuentes</td>
														<td>Secretary</td>
														<td>2015/07/28</td>
														<td>$78,879</td>
														<td>h.fuentes@datatables.net</td>
													</tr>
													<tr>
														<td>Vivian</td>
														<td>Harrell</td>
														<td>Financial Controller</td>
														<td>2010/02/14</td>
														<td>$452,500</td>
														<td>v.harrell@datatables.net</td>
													</tr>
													<tr>
														<td>Timothy</td>
														<td>Mooney</td>
														<td>Office Manager</td>
														<td>20016/12/11</td>
														<td>$136,200</td>
														<td>t.mooney@datatables.net</td>
													</tr>
													<tr>
														<td>Jackson</td>
														<td>Bradshaw</td>
														<td>Director</td>
														<td>2011/09/26</td>
														<td>$645,750</td>
														<td>j.bradshaw@datatables.net</td>
													</tr>
													<tr>
														<td>Olivia</td>
														<td>Liang</td>
														<td>Support Engineer</td>
														<td>2014/02/03</td>
														<td>$234,500</td>
														<td>o.liang@datatables.net</td>
													</tr>
													<tr>
														<td>Bruno</td>
														<td>Nash</td>
														<td>Software Engineer</td>
														<td>2015/05/03</td>
														<td>$163,500</td>
														<td>b.nash@datatables.net</td>
													</tr>
													<tr>
														<td>Sakura</td>
														<td>Yamamoto</td>
														<td>Support Engineer</td>
														<td>2010/08/19</td>
														<td>$139,575</td>
														<td>s.yamamoto@datatables.net</td>
													</tr>
													<tr>
														<td>Thor</td>
														<td>Walton</td>
														<td>Developer</td>
														<td>2012/08/11</td>
														<td>$98,540</td>
														<td>t.walton@datatables.net</td>
													</tr>
													<tr>
														<td>Finn</td>
														<td>Camacho</td>
														<td>Support Engineer</td>
														<td>2016/07/07</td>
														<td>$87,500</td>
														<td>f.camacho@datatables.net</td>
													</tr>
													<tr>
														<td>Serge</td>
														<td>Baldwin</td>
														<td>Data Coordinator</td>
														<td>2017/04/09</td>
														<td>$138,575</td>
														<td>s.baldwin@datatables.net</td>
													</tr>
													<tr>
														<td>Zenaida</td>
														<td>Frank</td>
														<td>Software Engineer</td>
														<td>2018/01/04</td>
														<td>$125,250</td>
														<td>z.frank@datatables.net</td>
													</tr>
													<tr>
														<td>Zorita</td>
														<td>Serrano</td>
														<td>Software Engineer</td>
														<td>2017/06/01</td>
														<td>$115,000</td>
														<td>z.serrano@datatables.net</td>
													</tr>
													<tr>
														<td>Jennifer</td>
														<td>Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>2017/02/01</td>
														<td>$75,650</td>
														<td>j.acosta@datatables.net</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- TABLE WRAPPER -->
								</div>
								<!-- SECTION WRAPPER -->
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Input Data Table</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example1" class="table table-striped table-bordered w-100 text-nowrap display">
												<thead>
													<tr>
														<th>Name</th>
														<th>Age</th>
														<th>Position</th>
														<th>Office</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td><input type="text" class="form-control" id="row-1-age" name="row-1-age" value="61"></td>
														<td><input type="text" class="form-control" id="row-1-position" name="row-1-position" value="System Architect" ></td>
														<td><select size="1" id="row-1-office" name="row-1-office" class="form-control ">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td><input type="text" class="form-control" id="row-2-age" name="row-2-age" value="63"></td>
														<td><input type="text" class="form-control" id="row-2-position" name="row-2-position" value="Accountant"></td>
														<td><select size="1" id="row-2-office" name="row-2-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo" selected="selected">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td><input type="text" class="form-control" id="row-3-age" name="row-3-age" value="66"></td>
														<td><input type="text" class="form-control" id="row-3-position" name="row-3-position" value="Junior Technical Author"></td>
														<td><select size="1" id="row-3-office" name="row-3-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td><input type="text" class="form-control" id="row-4-age" name="row-4-age" value="22"></td>
														<td><input type="text" class="form-control" id="row-4-position" name="row-4-position" value="Senior Javascript Developer"></td>
														<td><select size="1" id="row-4-office" name="row-4-office" class="form-control ">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td><input type="text" class="form-control" id="row-5-age" name="row-5-age" value="33"></td>
														<td><input type="text" class="form-control" id="row-5-position" name="row-5-position" value="Accountant"></td>
														<td><select size="1" id="row-5-office" name="row-5-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo" selected="selected">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td><input type="text" class="form-control" id="row-6-age" name="row-6-age" value="61"></td>
														<td><input type="text" class="form-control" id="row-6-position" name="row-6-position" value="Integration Specialist"></td>
														<td><select size="1" id="row-6-office" name="row-6-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Herrod Chandler</td>
														<td><input type="text" class="form-control" id="row-7-age" name="row-7-age" value="59"></td>
														<td><input type="text" class="form-control" id="row-7-position" name="row-7-position" value="Sales Assistant"></td>
														<td><select size="1" id="row-7-office" name="row-7-office" class="form-control select2 w-100">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Rhona Davidson</td>
														<td><input type="text" class="form-control" id="row-8-age" name="row-8-age" value="55"></td>
														<td><input type="text" class="form-control" id="row-8-position" name="row-8-position" value="Integration Specialist"></td>
														<td><select size="1" id="row-8-office" name="row-8-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo" selected="selected">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Colleen Hurst</td>
														<td><input type="text" class="form-control" id="row-9-age" name="row-9-age" value="39"></td>
														<td><input type="text" class="form-control" id="row-9-position" name="row-9-position" value="Javascript Developer"></td>
														<td><select size="1" id="row-9-office" name="row-9-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Sonya Frost</td>
														<td><input type="text" class="form-control" id="row-10-age" name="row-10-age" value="23"></td>
														<td><input type="text" class="form-control" id="row-10-position" name="row-10-position" value="Software Engineer"></td>
														<td><select size="1" id="row-10-office" name="row-10-office" class="form-control ">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Jena Gaines</td>
														<td><input type="text" class="form-control" id="row-11-age" name="row-11-age" value="30"></td>
														<td><input type="text" class="form-control" id="row-11-position" name="row-11-position" value="Office Manager"></td>
														<td><select size="1" id="row-11-office" name="row-11-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Quinn Flynn</td>
														<td><input type="text" class="form-control" id="row-12-age" name="row-12-age" value="22"></td>
														<td><input type="text" class="form-control" id="row-12-position" name="row-12-position" value="Support Lead"></td>
														<td><select size="1" id="row-12-office" name="row-12-office">
															<option value="Edinburgh" selected="selected" class="form-control ">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Charde Marshall</td>
														<td><input type="text" class="form-control" id="row-13-age" name="row-13-age" value="36"></td>
														<td><input type="text" class="form-control" id="row-13-position" name="row-13-position" value="Regional Director"></td>
														<td><select size="1" id="row-13-office" name="row-13-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Haley Kennedy</td>
														<td><input type="text" class="form-control" id="row-14-age" name="row-14-age" value="43"></td>
														<td><input type="text" class="form-control" id="row-14-position" name="row-14-position" value="Senior Marketing Designer"></td>
														<td><select size="1" id="row-14-office" name="row-14-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Tatyana Fitzpatrick</td>
														<td><input type="text" class="form-control" id="row-15-age" name="row-15-age" value="19"></td>
														<td><input type="text" class="form-control" id="row-15-position" name="row-15-position" value="Regional Director"></td>
														<td><select size="1" id="row-15-office" name="row-15-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Michael Silva</td>
														<td><input type="text" class="form-control" id="row-16-age" name="row-16-age" value="66"></td>
														<td><input type="text" class="form-control" id="row-16-position" name="row-16-position" value="Marketing Designer"></td>
														<td><select size="1" id="row-16-office" name="row-16-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Paul Byrd</td>
														<td><input type="text" class="form-control" id="row-17-age" name="row-17-age" value="64"></td>
														<td><input type="text" class="form-control" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)"></td>
														<td><select size="1" id="row-17-office" name="row-17-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Gloria Little</td>
														<td><input type="text" class="form-control" id="row-18-age" name="row-18-age" value="59"></td>
														<td><input type="text" class="form-control" id="row-18-position" name="row-18-position" value="Systems Administrator"></td>
														<td><select size="1" id="row-18-office" name="row-18-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Bradley Greer</td>
														<td><input type="text" class="form-control" id="row-19-age" name="row-19-age" value="41"></td>
														<td><input type="text" class="form-control" id="row-19-position" name="row-19-position" value="Software Engineer"></td>
														<td><select size="1" id="row-19-office" name="row-19-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Dai Rios</td>
														<td><input type="text" class="form-control" id="row-20-age" name="row-20-age" value="35"></td>
														<td><input type="text" class="form-control" id="row-20-position" name="row-20-position" value="Personnel Lead"></td>
														<td><select size="1" id="row-20-office" name="row-20-office" class="form-control ">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Jenette Caldwell</td>
														<td><input type="text" class="form-control" id="row-21-age" name="row-21-age" value="30"></td>
														<td><input type="text" class="form-control" id="row-21-position" name="row-21-position" value="Development Lead"></td>
														<td><select size="1" id="row-21-office" name="row-21-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Yuri Berry</td>
														<td><input type="text" class="form-control" id="row-22-age" name="row-22-age" value="40"></td>
														<td><input type="text" class="form-control" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)"></td>
														<td><select size="1" id="row-22-office" name="row-22-office" class="form-control select2">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Caesar Vance</td>
														<td><input type="text" class="form-control" id="row-23-age" name="row-23-age" value="21"></td>
														<td><input type="text" class="form-control" id="row-23-position" name="row-23-position" value="Pre-Sales Support"></td>
														<td><select size="1" id="row-23-office" name="row-23-office" class="form-control select2">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Doris Wilder</td>
														<td><input type="text" class="form-control" id="row-24-age" name="row-24-age" value="23"></td>
														<td><input type="text" class="form-control" id="row-24-position" name="row-24-position" value="Sales Assistant"></td>
														<td><select size="1" id="row-24-office" name="row-24-office" class="form-control select2">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Angelica Ramos</td>
														<td><input type="text" class="form-control" id="row-25-age" name="row-25-age" value="47"></td>
														<td><input type="text" class="form-control" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)"></td>
														<td><select size="1" id="row-25-office" name="row-25-office" class="form-control select2">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Gavin Joyce</td>
														<td><input type="text" class="form-control" id="row-26-age" name="row-26-age" value="42"></td>
														<td><input type="text" class="form-control" id="row-26-position" name="row-26-position" value="Developer"></td>
														<td><select size="1" id="row-26-office" name="row-26-office" class="form-control select2">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Jennifer Chang</td>
														<td><input type="text" class="form-control" id="row-27-age" name="row-27-age" value="28"></td>
														<td><input type="text" class="form-control" id="row-27-position" name="row-27-position" value="Regional Director"></td>
														<td><select size="1" id="row-27-office" name="row-27-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Brenden Wagner</td>
														<td><input type="text" class="form-control" id="row-28-age" name="row-28-age" value="28"></td>
														<td><input type="text" class="form-control" id="row-28-position" name="row-28-position" value="Software Engineer"></td>
														<td><select size="1" id="row-28-office" name="row-28-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Fiona Green</td>
														<td><input type="text" class="form-control" id="row-29-age" name="row-29-age" value="48"></td>
														<td><input type="text" class="form-control" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)"></td>
														<td><select size="1" id="row-29-office" name="row-29-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Shou Itou</td>
														<td><input type="text" class="form-control" id="row-30-age" name="row-30-age" value="20"></td>
														<td><input type="text" class="form-control" id="row-30-position" name="row-30-position" value="Regional Marketing"></td>
														<td><select size="1" id="row-30-office" name="row-30-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo" selected="selected">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Michelle House</td>
														<td><input type="text" class="form-control" id="row-31-age" name="row-31-age" value="37"></td>
														<td><input type="text" class="form-control" id="row-31-position" name="row-31-position" value="Integration Specialist"></td>
														<td><select size="1" id="row-31-office" name="row-31-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Suki Burks</td>
														<td><input type="text" class="form-control" id="row-32-age" name="row-32-age" value="53"></td>
														<td><input type="text" class="form-control" id="row-32-position" name="row-32-position" value="Developer"></td>
														<td><select size="1" id="row-32-office" name="row-32-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Prescott Bartlett</td>
														<td><input type="text" class="form-control" id="row-33-age" name="row-33-age" value="27"></td>
														<td><input type="text" class="form-control" id="row-33-position" name="row-33-position" value="Technical Author"></td>
														<td><select size="1" id="row-33-office" name="row-33-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Gavin Cortez</td>
														<td><input type="text" class="form-control" id="row-34-age" name="row-34-age" value="22"></td>
														<td><input type="text" class="form-control" id="row-34-position" name="row-34-position" value="Team Leader"></td>
														<td><select size="1" id="row-34-office" name="row-34-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Martena Mccray</td>
														<td><input type="text" class="form-control" id="row-35-age" name="row-35-age" value="46"></td>
														<td><input type="text" class="form-control" id="row-35-position" name="row-35-position" value="Post-Sales support"></td>
														<td><select size="1" id="row-35-office" name="row-35-office" class="form-control ">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Unity Butler</td>
														<td><input type="text" class="form-control" id="row-36-age" name="row-36-age" value="47"></td>
														<td><input type="text" class="form-control" id="row-36-position" name="row-36-position" value="Marketing Designer"></td>
														<td><select size="1" id="row-36-office" name="row-36-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Howard Hatfield</td>
														<td><input type="text" class="form-control" id="row-37-age" name="row-37-age" value="51"></td>
														<td><input type="text" class="form-control" id="row-37-position" name="row-37-position" value="Office Manager"></td>
														<td><select size="1" id="row-37-office" name="row-37-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Hope Fuentes</td>
														<td><input type="text" class="form-control" id="row-38-age" name="row-38-age" value="41"></td>
														<td><input type="text" class="form-control" id="row-38-position" name="row-38-position" value="Secretary"></td>
														<td><select size="1" id="row-38-office" name="row-38-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Vivian Harrell</td>
														<td><input type="text" class="form-control" id="row-39-age" name="row-39-age" value="62"></td>
														<td><input type="text" class="form-control" id="row-39-position" name="row-39-position" value="Financial Controller"></td>
														<td><select size="1" id="row-39-office" name="row-39-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Timothy Mooney</td>
														<td><input type="text" class="form-control" id="row-40-age" name="row-40-age" value="37"></td>
														<td><input type="text" class="form-control" id="row-40-position" name="row-40-position" value="Office Manager"></td>
														<td><select size="1" id="row-40-office" name="row-40-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Jackson Bradshaw</td>
														<td><input type="text" class="form-control" id="row-41-age" name="row-41-age" value="65"></td>
														<td><input type="text" class="form-control" id="row-41-position" name="row-41-position" value="Director"></td>
														<td><select size="1" id="row-41-office" name="row-41-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Olivia Liang</td>
														<td><input type="text" class="form-control" id="row-42-age" name="row-42-age" value="64"></td>
														<td><input type="text" class="form-control" id="row-42-position" name="row-42-position" value="Support Engineer"></td>
														<td><select size="1" id="row-42-office" name="row-42-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Bruno Nash</td>
														<td><input type="text" class="form-control" id="row-43-age" name="row-43-age" value="38"></td>
														<td><input type="text" class="form-control" id="row-43-position" name="row-43-position" value="Software Engineer"></td>
														<td><select size="1" id="row-43-office" name="row-43-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Sakura Yamamoto</td>
														<td><input type="text" class="form-control" id="row-44-age" name="row-44-age" value="37"></td>
														<td><input type="text" class="form-control" id="row-44-position" name="row-44-position" value="Support Engineer"></td>
														<td><select size="1" id="row-44-office" name="row-44-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo" selected="selected">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Thor Walton</td>
														<td><input type="text" class="form-control" id="row-45-age" name="row-45-age" value="61"></td>
														<td><input type="text" class="form-control" id="row-45-position" name="row-45-position" value="Developer"></td>
														<td><select size="1" id="row-45-office" name="row-45-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Finn Camacho</td>
														<td><input type="text" class="form-control" id="row-46-age" name="row-46-age" value="47"></td>
														<td><input type="text" class="form-control" id="row-46-position" name="row-46-position" value="Support Engineer"></td>
														<td><select size="1" id="row-46-office" name="row-46-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Serge Baldwin</td>
														<td><input type="text" class="form-control" id="row-47-age" name="row-47-age" value="64"></td>
														<td><input type="text" class="form-control" id="row-47-position" name="row-47-position" value="Data Coordinator"></td>
														<td><select size="1" id="row-47-office" name="row-47-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Zenaida Frank</td>
														<td><input type="text" class="form-control" id="row-48-age" name="row-48-age" value="63"></td>
														<td><input type="text" class="form-control" id="row-48-position" name="row-48-position" value="Software Engineer"></td>
														<td><select size="1" id="row-48-office" name="row-48-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Zorita Serrano</td>
														<td><input type="text" class="form-control" id="row-49-age" name="row-49-age" value="56"></td>
														<td><input type="text" class="form-control" id="row-49-position" name="row-49-position" value="Software Engineer"></td>
														<td><select size="1" id="row-49-office" name="row-49-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Jennifer Acosta</td>
														<td><input type="text" class="form-control" id="row-50-age" name="row-50-age" value="43"></td>
														<td><input type="text" class="form-control" id="row-50-position" name="row-50-position" value="Junior Javascript Developer"></td>
														<td><select size="1" id="row-50-office" name="row-50-office" class="form-control ">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Cara Stevens</td>
														<td><input type="text" class="form-control" id="row-51-age" name="row-51-age" value="46"></td>
														<td><input type="text" class="form-control" id="row-51-position" name="row-51-position" value="Sales Assistant"></td>
														<td><select size="1" id="row-51-office" name="row-51-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Hermione Butler</td>
														<td><input type="text" class="form-control" id="row-52-age" name="row-52-age" value="47"></td>
														<td><input type="text" class="form-control" id="row-52-position" name="row-52-position" value="Regional Director"></td>
														<td><select size="1" id="row-52-office" name="row-52-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Lael Greer</td>
														<td><input type="text" class="form-control" id="row-53-age" name="row-53-age" value="21"></td>
														<td><input type="text" class="form-control" id="row-53-position" name="row-53-position" value="Systems Administrator"></td>
														<td><select size="1" id="row-53-office" name="row-53-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London" selected="selected">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Jonas Alexander</td>
														<td><input type="text" class="form-control" id="row-54-age" name="row-54-age" value="30"></td>
														<td><input type="text" class="form-control" id="row-54-position" name="row-54-position" value="Developer"></td>
														<td><select size="1" id="row-54-office" name="row-54-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco" selected="selected">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Shad Decker</td>
														<td><input type="text" class="form-control" id="row-55-age" name="row-55-age" value="51"></td>
														<td><input type="text" class="form-control" id="row-55-position" name="row-55-position" value="Regional Director"></td>
														<td><select size="1" id="row-55-office" name="row-55-office" class="form-control ">
															<option value="Edinburgh" selected="selected">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Michael Bruce</td>
														<td><input type="text" class="form-control" id="row-56-age" name="row-56-age" value="29"></td>
														<td><input type="text" class="form-control" id="row-56-position" name="row-56-position" value="Javascript Developer"></td>
														<td><select size="1" id="row-56-office" name="row-56-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
													<tr>
														<td>Donna Snider</td>
														<td><input type="text" class="form-control" id="row-57-age" name="row-57-age" value="27"></td>
														<td><input type="text" class="form-control" id="row-57-position" name="row-57-position" value="Customer Support"></td>
														<td><select size="1" id="row-57-office" name="row-57-office" class="form-control ">
															<option value="Edinburgh">
																Edinburgh
															</option>
															<option value="London">
																London
															</option>
															<option value="New York" selected="selected">
																New York
															</option>
															<option value="San Francisco">
																San Francisco
															</option>
															<option value="Tokyo">
																Tokyo
															</option>
														</select></td>
													</tr>
												</tbody>
												<tfoot >
													<tr>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Age</th>
														<th class="border-bottom-0">Position</th>
														<th class="border-bottom-0">Office</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 CLOSED-->

                        <!-- ROW-2 -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">File Export DataTable</h3>
									</div>
									<div class="card-body">
                                        <div class="table-responsive">
											<table id="fileexport-datatable" class="table table-bordered key-buttons text-nowrap">
												<thead>
													<tr>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Position</th>
														<th class="border-bottom-0">Office</th>
														<th class="border-bottom-0">Age</th>
														<th class="border-bottom-0">Start date</th>
														<th class="border-bottom-0">Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td>$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td>$372,000</td>
													</tr>
													<tr>
														<td>Herrod Chandler</td>
														<td>Sales Assistant</td>
														<td>San Francisco</td>
														<td>59</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
													</tr>
													<tr>
														<td>Rhona Davidson</td>
														<td>Integration Specialist</td>
														<td>Tokyo</td>
														<td>55</td>
														<td>2010/10/14</td>
														<td>$327,900</td>
													</tr>
													<tr>
														<td>Colleen Hurst</td>
														<td>Javascript Developer</td>
														<td>San Francisco</td>
														<td>39</td>
														<td>2009/09/15</td>
														<td>$205,500</td>
													</tr>
													<tr>
														<td>Sonya Frost</td>
														<td>Software Engineer</td>
														<td>Edinburgh</td>
														<td>23</td>
														<td>2008/12/13</td>
														<td>$103,600</td>
													</tr>
													<tr>
														<td>Jena Gaines</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>30</td>
														<td>2008/12/19</td>
														<td>$90,560</td>
													</tr>
													<tr>
														<td>Quinn Flynn</td>
														<td>Support Lead</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2013/03/03</td>
														<td>$342,000</td>
													</tr>
													<tr>
														<td>Charde Marshall</td>
														<td>Regional Director</td>
														<td>San Francisco</td>
														<td>36</td>
														<td>2008/10/16</td>
														<td>$470,600</td>
													</tr>
													<tr>
														<td>Haley Kennedy</td>
														<td>Senior Marketing Designer</td>
														<td>London</td>
														<td>43</td>
														<td>2012/12/18</td>
														<td>$313,500</td>
													</tr>
													<tr>
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
													</tr>
													<tr>
														<td>Michael Silva</td>
														<td>Marketing Designer</td>
														<td>London</td>
														<td>66</td>
														<td>2012/11/27</td>
														<td>$198,500</td>
													</tr>
													<tr>
														<td>Paul Byrd</td>
														<td>Chief Financial Officer (CFO)</td>
														<td>New York</td>
														<td>64</td>
														<td>2010/06/09</td>
														<td>$725,000</td>
													</tr>
													<tr>
														<td>Gloria Little</td>
														<td>Systems Administrator</td>
														<td>New York</td>
														<td>59</td>
														<td>2009/04/10</td>
														<td>$237,500</td>
													</tr>
													<tr>
														<td>Bradley Greer</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>41</td>
														<td>2012/10/13</td>
														<td>$132,000</td>
													</tr>
													<tr>
														<td>Dai Rios</td>
														<td>Personnel Lead</td>
														<td>Edinburgh</td>
														<td>35</td>
														<td>2012/09/26</td>
														<td>$217,500</td>
													</tr>
													<tr>
														<td>Jenette Caldwell</td>
														<td>Development Lead</td>
														<td>New York</td>
														<td>30</td>
														<td>2011/09/03</td>
														<td>$345,000</td>
													</tr>
													<tr>
														<td>Yuri Berry</td>
														<td>Chief Marketing Officer (CMO)</td>
														<td>New York</td>
														<td>40</td>
														<td>2009/06/25</td>
														<td>$675,000</td>
													</tr>
													<tr>
														<td>Caesar Vance</td>
														<td>Pre-Sales Support</td>
														<td>New York</td>
														<td>21</td>
														<td>2011/12/12</td>
														<td>$106,450</td>
													</tr>
													<tr>
														<td>Doris Wilder</td>
														<td>Sales Assistant</td>
														<td>Sidney</td>
														<td>23</td>
														<td>2010/09/20</td>
														<td>$85,600</td>
													</tr>
													<tr>
														<td>Angelica Ramos</td>
														<td>Chief Executive Officer (CEO)</td>
														<td>London</td>
														<td>47</td>
														<td>2009/10/09</td>
														<td>$1,200,000</td>
													</tr>
													<tr>
														<td>Gavin Joyce</td>
														<td>Developer</td>
														<td>Edinburgh</td>
														<td>42</td>
														<td>2010/12/22</td>
														<td>$92,575</td>
													</tr>
													<tr>
														<td>Jennifer Chang</td>
														<td>Regional Director</td>
														<td>Singapore</td>
														<td>28</td>
														<td>2010/11/14</td>
														<td>$357,650</td>
													</tr>
													<tr>
														<td>Brenden Wagner</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>28</td>
														<td>2011/06/07</td>
														<td>$206,850</td>
													</tr>
													<tr>
														<td>Fiona Green</td>
														<td>Chief Operating Officer (COO)</td>
														<td>San Francisco</td>
														<td>48</td>
														<td>2010/03/11</td>
														<td>$850,000</td>
													</tr>
													<tr>
														<td>Shou Itou</td>
														<td>Regional Marketing</td>
														<td>Tokyo</td>
														<td>20</td>
														<td>2011/08/14</td>
														<td>$163,000</td>
													</tr>
													<tr>
														<td>Michelle House</td>
														<td>Integration Specialist</td>
														<td>Sidney</td>
														<td>37</td>
														<td>2011/06/02</td>
														<td>$95,400</td>
													</tr>
													<tr>
														<td>Suki Burks</td>
														<td>Developer</td>
														<td>London</td>
														<td>53</td>
														<td>2009/10/22</td>
														<td>$114,500</td>
													</tr>
													<tr>
														<td>Prescott Bartlett</td>
														<td>Technical Author</td>
														<td>London</td>
														<td>27</td>
														<td>2011/05/07</td>
														<td>$145,000</td>
													</tr>
													<tr>
														<td>Gavin Cortez</td>
														<td>Team Leader</td>
														<td>San Francisco</td>
														<td>22</td>
														<td>2008/10/26</td>
														<td>$235,500</td>
													</tr>
													<tr>
														<td>Martena Mccray</td>
														<td>Post-Sales support</td>
														<td>Edinburgh</td>
														<td>46</td>
														<td>2011/03/09</td>
														<td>$324,050</td>
													</tr>
													<tr>
														<td>Unity Butler</td>
														<td>Marketing Designer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/12/09</td>
														<td>$85,675</td>
													</tr>
													<tr>
														<td>Howard Hatfield</td>
														<td>Office Manager</td>
														<td>San Francisco</td>
														<td>51</td>
														<td>2008/12/16</td>
														<td>$164,500</td>
													</tr>
													<tr>
														<td>Hope Fuentes</td>
														<td>Secretary</td>
														<td>San Francisco</td>
														<td>41</td>
														<td>2010/02/12</td>
														<td>$109,850</td>
													</tr>
													<tr>
														<td>Vivian Harrell</td>
														<td>Financial Controller</td>
														<td>San Francisco</td>
														<td>62</td>
														<td>2009/02/14</td>
														<td>$452,500</td>
													</tr>
													<tr>
														<td>Timothy Mooney</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>37</td>
														<td>2008/12/11</td>
														<td>$136,200</td>
													</tr>
													<tr>
														<td>Jackson Bradshaw</td>
														<td>Director</td>
														<td>New York</td>
														<td>65</td>
														<td>2008/09/26</td>
														<td>$645,750</td>
													</tr>
													<tr>
														<td>Olivia Liang</td>
														<td>Support Engineer</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2011/02/03</td>
														<td>$234,500</td>
													</tr>
													<tr>
														<td>Bruno Nash</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>38</td>
														<td>2011/05/03</td>
														<td>$163,500</td>
													</tr>
													<tr>
														<td>Sakura Yamamoto</td>
														<td>Support Engineer</td>
														<td>Tokyo</td>
														<td>37</td>
														<td>2009/08/19</td>
														<td>$139,575</td>
													</tr>
													<tr>
														<td>Thor Walton</td>
														<td>Developer</td>
														<td>New York</td>
														<td>61</td>
														<td>2013/08/11</td>
														<td>$98,540</td>
													</tr>
													<tr>
														<td>Finn Camacho</td>
														<td>Support Engineer</td>
														<td>San Francisco</td>
														<td>47</td>
														<td>2009/07/07</td>
														<td>$87,500</td>
													</tr>
													<tr>
														<td>Serge Baldwin</td>
														<td>Data Coordinator</td>
														<td>Singapore</td>
														<td>64</td>
														<td>2012/04/09</td>
														<td>$138,575</td>
													</tr>
													<tr>
														<td>Zenaida Frank</td>
														<td>Software Engineer</td>
														<td>New York</td>
														<td>63</td>
														<td>2010/01/04</td>
														<td>$125,250</td>
													</tr>
													<tr>
														<td>Zorita Serrano</td>
														<td>Software Engineer</td>
														<td>San Francisco</td>
														<td>56</td>
														<td>2012/06/01</td>
														<td>$115,000</td>
													</tr>
													<tr>
														<td>Jennifer Acosta</td>
														<td>Junior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>43</td>
														<td>2013/02/01</td>
														<td>$75,650</td>
													</tr>
													<tr>
														<td>Cara Stevens</td>
														<td>Sales Assistant</td>
														<td>New York</td>
														<td>46</td>
														<td>2011/12/06</td>
														<td>$145,600</td>
													</tr>
													<tr>
														<td>Hermione Butler</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>47</td>
														<td>2011/03/21</td>
														<td>$356,250</td>
													</tr>
													<tr>
														<td>Lael Greer</td>
														<td>Systems Administrator</td>
														<td>London</td>
														<td>21</td>
														<td>2009/02/27</td>
														<td>$103,500</td>
													</tr>
													<tr>
														<td>Jonas Alexander</td>
														<td>Developer</td>
														<td>San Francisco</td>
														<td>30</td>
														<td>2010/07/14</td>
														<td>$86,500</td>
													</tr>
													<tr>
														<td>Shad Decker</td>
														<td>Regional Director</td>
														<td>Edinburgh</td>
														<td>51</td>
														<td>2008/11/13</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Michael Bruce</td>
														<td>Javascript Developer</td>
														<td>Singapore</td>
														<td>29</td>
														<td>2011/06/27</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Donna Snider</td>
														<td>Customer Support</td>
														<td>New York</td>
														<td>27</td>
														<td>2011/01/25</td>
														<td>$112,000</td>
													</tr>
												</tbody>
											</table>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED-->

					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/datatable.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
@endsection
