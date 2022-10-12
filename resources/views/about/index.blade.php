@extends('layouts.index')
@section('title', 'About')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title">
                                    &ensp;About
                                </h2>
                            </div>
                        </div>	
       
                <div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
   						<div class="col-md-4">
      						<img src="{{url('/assets/images/sisil.jpeg')}}" class="card-img">
 						</div>
    					<div class="col-md-8">
    						<div class="card-body">
        						<h5 class="card-title">Aplikasi ini dibuat oleh:</h5>
        						<p class="card-text">Nama	 : Silsia Apriyanti</p>
        						<p class="card-text">NIM 	 : 1931730075</p>
        						<p class="card-text">Tanggal : 09 Oktober 2022</p>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
        </div>
    </div>
@endsection

