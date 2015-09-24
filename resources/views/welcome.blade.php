<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


		{!! Html::style('css/default.css') !!}
		{!! Html::style('css/default.date.css') !!}
		{!! Html::style('css/default.time.css') !!}

		<!-- <link rel="stylesheet" href="/pickadate.js/css/main.css">
		<link rel="stylesheet" href="/pickadate.js/vendor/pickadate/lib/themes/default.css" id="theme_base">
		<link rel="stylesheet" href="/pickadate.js/vendor/pickadate/lib/themes/default.date.css" id="theme_date">
		<link rel="stylesheet" href="/pickadate.js/vendor/pickadate/lib/themes/default.time.css" id="theme_time">  -->

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">



		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #000000;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}
		</style>
	</head>
	<body  class="container">
		<!-- <div class="container">
			<div class="content">
				<div class="title">Kensen John: Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<form>pload
				      <SELECT>
				      	<OPTION>Hello</OPTION>
				      	<OPTION>There</OPTION>
				      </SELECT>
				</form>
			</div>
		</div> -->
		<div class="row">
		  <div class="col-md-12"><h1>Upload Image</h1></div>
		</div>
		<div class="row">
		  <div class="col-md-12">
		  	{!! Form::open(array('url' => '/upload_image', 'method' => 'post', 'class' => 'form-horizontal' , 'files' => true, 'id' => 'frm_upload_file')) !!}
		  		<div class="row">	
					<div class="col-md-3">
						{!! Form::label('post_image', 'Image', array('class' => 'control-label')) !!}
		  				{!! Form::file( 'image' , array('class' => 'form-control',  'id' => 'uploadFile' )) !!} 
		  			</div>
		  		</div>
		  		<div class="row">
				  <div class="col-md-12">
				  	&nbsp;
				  </div>
				 </div>
				 <div class="row">
                    <div class="col-md-3">
                        <label class="form_label">&nbsp;</label>
                        <div id="upload_file_progress">
                            <div id="bar_upload_file_progress" class="bar" style="width: 0%;"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form_label">&nbsp;</label>
                        <div id="progress_status"></div>
                    </div>
                </div>
		  		<div class="row">	
					<div class="col-md-3">
						{!! Form::button('Upload', array('class' => 'control-label', 'id' => 'btn_upload_file', 'class' => 'btn btn-default' )) !!} 
		  			</div>
		  		</div>
		  	{!! Form::close() !!}
		  </div>
		 </div>
		<div class="row">
		  <div class="col-md-12">
		  	&nbsp;
		  </div>
		 </div>
		<div class="row">
		  <div class="col-md-12"><h1>Schedule A Post</h1></div>
		</div>
		<div class="row">
		  <div class="col-md-12">
			  
		  	{!! Form::open(array('url' => 'save_schedule', 'method' => 'post', 'class' => 'form-horizontal' )) !!}
			  	<div class="row">
				  <div class="col-md-3">
				   		{!! Form::label('schedule_date', 'Date', array('class' => 'control-label')) !!}
				   		{!! Form::text( 'schedule_date' , 'Choose Date', array('class' => 'form-control')) !!}
				   </div>
				   <div class="col-md-3">
				   		{!! Form::label('schedule_time', 'Time', array('class' => 'control-label')) !!}
				   		{!! Form::text( 'schedule_time' , 'Choose Time', array('class' => 'form-control')) !!}
				   </div>
				</div>
				<div class="row">
				  <div class="col-md-12">
				  	&nbsp;
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-3">
				   		{!! Form::label('phone_num', 'Phone Number', array('class' => 'control-label')) !!}
				   		{!! Form::text( 'phone_num' , '' , $attributes =  array('class' => 'form-control', 'placeholder' => '(xxx) xxx-xxxx' )) !!}
				   </div>
				</div>
				<div class="row">
				  <div class="col-md-12">
				  	&nbsp;
				  </div>
				</div>
			  	<div class="row">	
					<div class="col-md-3">
						{!! Form::button('Submit', array('class' => 'control-label', 'id' => 'btn_schedule_post', 'class' => 'btn btn-default' )) !!} 
		  			</div>
		  		</div>
		  		{!! Form::hidden( 'uploaded_filename' , '' , $attributes =  array('id' => 'uploaded_filename' ) ) !!}
			{!! Form::close() !!}
		  </div>
		</div>
	</body>
	{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
	{!! Html::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js') !!}
	{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
	{!! Html::script('js/legacy.js') !!}
	{!! Html::script('js/picker.js') !!}
	{!! Html::script('js/picker.date.js') !!}
	{!! Html::script('js/picker.time.js') !!}
	{!! Html::script('js/jquery.iframe-transport.js') !!}
	{!! Html::script('js/jquery.fileupload.js') !!}

	<script   type="text/javascript">
    	$(window).load(function() {
    		$( "#schedule_date" ).pickadate();
    		$( "#schedule_time" ).pickatime();
  		
    		$('#btn_schedule_post').on('click', function(){
    			console.log('Clicked Schedule Post');
    		});
    	});

    	function makeAjaxCall(actionUrl,dataString,methodType,callBackMethod) {
	        $.ajax({
	            url: actionUrl ,
	            type: methodType ,
	            dataType: "json",
	            data: dataString ,
	            success: callBackMethod,
	            error:function(a,b,c) {
	                displayMssgBoxAlert('Oops!! Something went wrong. Please try again later (ajx-007) - ' + a.responseText + ' = ' + b + " = " + c, true);
	            }
	        });
	    }


	    $(function () {
	        $('#frm_upload_file').fileupload({
	            dataType: 'json',
	            replaceFileInput: false,
	            add: function (e, data) {
	                $('#btn_upload_file').unbind('click');
	                $('#progress_status').text('');
	                data.context = $('#btn_upload_file').click(function () {
	                    $('#progress_status').text('Processing ...');
	                    data.submit();
	                });
	            },
	            done: function (e, data) {
	            	if( data.result != undefined ) {
	            		 var varDataResult = data.result;

	            		$('#upload_file_progress .bar').css(
	                            'width','0%'
	                    );
	                    $('#uploaded_filename').val( varDataResult.filename );
	                    $('#progress_status').text('Upload Complete.');
	                    $('#btn_upload_file').unbind('click');
	            	} 
	            	
	            },
	            progressall: function (e, data) {
	            	console.log( data );
	                var progress = parseInt(data.loaded / data.total * 100, 10);
	                $('#upload_file_progress .bar').css(
	                        'width',
	                        progress + '%'
	                );
	            }
	     	});
    	});

    </script>
</html>
