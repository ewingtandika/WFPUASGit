@extends('layouts.menumahasiswa')

@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sistem Perencanaan Studi</h1>
			<hr style="height: 0.1px; border: solid; background-color: black;">
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-8">
			<!-- /.panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-clock-o fa-fw"></i> <b style="font-size: 20px;">Berita Perwalian</b>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="panel-body">
						<h4>Berita Terbaru</h4>
						<blockquote>
							<dl class="dl-horizontal">
							@foreach($listperwalians as $perwalians)							
							<dt>{{$perwalians->nama}}</dt>
							<dd>{{$perwalians->tanggal_mulai .' s.d. '.$perwalians->tanggal_selesai}}</dd>
							@endforeach	
								<!-- <dt>FPP 1</dt>
								<dd>25/Jul/2017 00:00:00 s.d. 25/Jul/2017 15:00:00</dd>
								<dt>FPP 2</dt>
								<dd>27/Jul/2017 20:00:00 s.d. 28/Jul/2017 13:00:00</dd>
								<dt>Kasus Khusus</dt>
								<dd>31/Jul/2017 06:00:00 s.d. 31/Jul/2017 13:00:00</dd> -->
							</dl>
						</blockquote>
						<hr>
					</div>
					<ul class="timeline">
						<li>
							<div class="timeline-badge"><i class="fa fa-check"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
									<p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 jam yang lalu oleh Admin</small>
									</p>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge danger"><i class="fa fa-bomb"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge info"><i class="fa fa-save"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
									<hr>
									<div class="btn-group">
										<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i> <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Action</a>
											</li>
											<li><a href="#">Another action</a>
											</li>
											<li><a href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-8 -->
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-user fa-fw"></i> Data Mahasiswa
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="panel-body">
						<h4><b><li>HARTINI CHENDANA</li></b></h4>
						<blockquote style="padding-left: 30px;">
							<P>160415027</P>
							<p>SKS Max : 24</p>
						</blockquote> 
					</div>
					<!-- /.panel-body -->        
				</div>
				<!-- /.panel-body -->
			</div>                    
		</div>
		<!-- /.col-lg-4 -->
	</div>
	<!-- /.row -->
</div>
@endsection