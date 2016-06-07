@extends('layouts.front_dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="board-header">
    	<h2>Dashboard</h2>
    </div>
    <div class="main dash1">
    	<section class="notifs">
    		<div class="wrapper">
    			<ul>
    				<li class="active">
    					<figure class="warning"><i class="icon ion-arrow-graph-down-left"></i></figure>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    				</li>
    				<li>
    					<figure class="alert"><i class="icon ion-alert"></i></figure>
    					<p>Consequatur eaque accusamus.</p>
    				</li>
    				<li>
    					<figure class="done"><i class="icon ion-checkmark"></i></figure>
    					<p>Amet enim saepe asperiores, molestiae, et adipisci.</p>
    				</li>
    			</ul>

    			<div class="nav">
    				<div class="nav-left"><i class="icon ion-arrow-left-b"></i></div>
    				<div class="nav-right"><i class="icon ion-arrow-right-b"></i></div>
    			</div>
    		</div>
    	</section>

    	<section class="order-status">
    		<div class="wrapper">
    			<figure><i class="icon ion-ios-checkmark-outline"></i></figure>
    			<div class="content">
    				<h4 class="title">Orders approved</h4>
    				<p class="value">1,234</p>
    			</div>
    		</div>
    	</section>

    	<section class="order-status">
    		<div class="wrapper">
    			<figure><i class="icon ion-ios-paper-outline"></i></figure>
    			<div class="content">
    				<h4 class="title">Orders to validate</h4>
    				<p class="value">500</p>
    			</div>
    		</div>
    	</section>

    	<section class="order-status">
    		<div class="wrapper">
    			<figure><i class="icon ion-ios-close-outline"></i></figure>
    			<div class="content">
    				<h4 class="title">Orders rejected</h4>
    				<p class="value">145</p>
    			</div>
    		</div>
    	</section>

    	<section class="line-chart">
    		<div class="wrapper">
    			<h4 class="title">Weekly Sales</h4>
    			<div id="chartdiv" style="width:100%; height:400px;"></div>
    		</div>
    	</section>

    	<section class="bar-graph">
    		<div class="wrapper">
    			<h4 class="title">Income per Category</h4>
    			<div id="bardiv" style="width: 100%; height: 400px;"></div>
    		</div>
    	</section>
    </div>
@endsection