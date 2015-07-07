@extends('app')

@section('title') Admin @stop

@section('content')
<div class="container">
  <div class="row">
	    <div class="col-md-12"> 
	      
	      <div class="panel">
		        <div class="panel-body">					

					<div class = "table-responsive">
						<div>
							<h3> Showing All records <a class="pull-right" href="{{url('auth/logout')}}">Logout</a> </h3> 
							<br><br>
						</div>
						
						{{--*/ $sn=0/*--}}
						<table class="table table-striped table-bordered table-hover">
							<thead>
								 <tr>
								 	<td> <strong> S/N </strong></td> 
								 	<td> <strong> PHOTO </strong></td> 
									<td> <strong> FIRST NAME </strong></td> 
									<td> <strong> LAST NAME </strong></td>
									<td> <strong> ADDRESS </strong></td>
									<td> <strong> PHONE </strong></td>
									<td> <strong> EMAIL </strong></td>
									<td> <strong> MATRIC NUMBER </strong></td>
									<td> <strong> COLLEGE </strong></td>
									<td> <strong> DEPARTMENT </strong></td>
									<td> <strong> SET </strong></td>
									<td> <strong> GRADUATION SESSION </strong></td>
								</tr> 
							</thead>
							<tbody>
								@foreach($all as $a)
									<tr>
										<td> {{$sn = $sn+1}} </td>
										<td> <img src="{{asset($a->photo)}}" class="img-thumbnail"> </td>
										<td> {{$a->first_name}} </td>
										<td> {{$a->last_name}} </td>
										<td> {{$a->home_address}} </td>
										<td> {{$a->phone_no}} </td>
										<td> {{$a->email}} </td>
										<td> {{$a->mat_no}} </td>
										<td> {{$a->college}} </td>
										<td> {{$a->department}} </td>
										<td> {{$a->set}} </td>
										<td> {{$a->graduation__session}} </td>
									</tr>				
								@endforeach

							</tbody>


						</table>
						<br><br><br><br>
						<h3 class ="text-upper"> Summary of Records </h3>
						<br><br>
						<h4> College of Science </h4>
						<table class="table table-striped table-bordered table-hover">
							<thead>
								 <tr>
								 	<td> <strong> S/N </strong></td> 
									<td> <strong> DEPARTMENT </strong></td> 
									<td> <strong>NUMBER OF GRADUATES </strong></td>
								</tr> 
							</thead>
							<tbody>
								@for($i=0;$i < $scienceCount;$i++)
								 
									<tr>
										<td>
											{{ $i+1 }}
										</td>
										<td>
											@if($science[$i] == 'Industrial-Chemistry')
												{{ $science[$i] = 'Industrial Chemistry'}}
											@elseif($science[$i] == 'Earth-Sciences-Geology')
												{{ $science[$i] = 'Earth Sciences-Geology'}}
											@elseif($science[$i] == 'Earth-Sciences-Geophysics')
												{{ $science[$i] = 'Earth Sciences-Geophysics'}}
											@elseif($science[$i] == 'Mathematics-Computer-Science')
												{{ $science[$i] = 'Mathematics and Computer Science'}}
											@elseif($science[$i] == 'Environmental-Science')
												{{ $science[$i] = 'Environmental Science'}}
											@else
												{{ $science[$i] }}
											@endif
											
										</td>
										<td>
											{{ $scienceDeptGrads[$i] }}
										</td>
										
									</tr>
										
								@endfor
							</tbody>
													
						</table>
						<strong>Total: {{$totalScience}} </strong>
						<br><br>

						<h4> College of Technology </h4>
						<table class="table table-striped table-bordered table-hover">
							<thead>
								 <tr>
								 	<td> <strong> S/N </strong></td> 
									<td> <strong> DEPARTMENT </strong></td> 
									<td> <strong>NUMBER OF GRADUATES </strong></td>
								</tr> 
							</thead>
							<tbody>
								@for($j=0;$j < $techCount;$j++)
								 
									<tr>
										<td>
											{{ $j+1 }}
										</td>
										<td>
											@if($tech[$j] == 'Mechanical-Engineering')
												{{ $tech[$j] = 'Mechanical Engineering'}}
											
											@elseif($tech[$j] == 'Chemical-Engineering')
												{{ $tech[$j] = 'Chemical Engineering'}}
											@elseif($tech[$j] == 'Petroleum-Engineering')
												{{ $tech[$j] = 'Petroleum Engineering'}}
											@elseif($tech[$j] == 'Electrical-Engineering')
												{{ $tech[$j] = 'Electrical Engineering'}}
											@elseif($tech[$j] == 'Marine-Engineering')
												{{ $tech[$j] = 'Marine Engineering'}}
											@else
												{{$tech[$j]}}
											@endif
										</td>
										<td>
											{{ $techDeptGrads[$j] }}
										</td>
										
									</tr>
										
								@endfor
							</tbody>
													
						</table>
						<strong>Total: {{$totalTech}} </strong>
						<br><br>
					</div>
					<br><br>
					

				</div>
			</div>
		</div>
	</div>
</div>

@endsection