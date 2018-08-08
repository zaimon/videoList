<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row" style="margin-top:50px">
			<div class="panel panel-default">
				<div class="panel-heading">Video Search Result</div>
				<div class="panel-body" style="margin-bottom: 30px">
					<div class="col-xs-12">

						<div class="row">
							<form action="" method="GET">
								<div class="form-group">
									<div class="input-group col-xs-6 pull-right">
										<input type="text" name="search" class="form-control" placeholder="Search Video" aria-describedby="basic-addon2">
										<span class="input-group-addon btn btn-default" id="basic-addon2"><i class="glyphicon glyphicon-search"></i></span>
									</div>
								</div>
							</form>
						</div>
						<div class="row">
						</div>
						<div class="row">
							@foreach($data['video'] as $v)
							@if(isset($v['id']['videoId']))
							<div class="col-xs-4 text-center">
								<a style="width: 100%" href="https://www.youtube.com/embed/{{$v['id']['videoId']}}" target="_blank">
									<img width="100%" src="{{ $v['snippet']['thumbnails']['medium']['url'] }}">

									<p>{{ $v['snippet']['title'] }}</p>
								</div>
								@endif

								@endforeach

							</div>
						</div>
					</div>	
				</div>

			</div>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">

	// $(function(){
	// 	$.ajaxSetup({
	// 		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
	// 	});

	// 	$.ajax({ 
	// 		type	: "GET",
	// 		url:"https://s3-ap-southeast-1.amazonaws.com/ysetter/media/video-search.json",
	// 					// async:false,
	// 					success:function(rs){
	// 						console.log(rs);
	// 						// rs = $.parseJSON(rs);
	// 						// var date = new Date(rs.created_at);
	// 						// if(rs){
	// 						// 	$(".main_container").append('<div style="z-index: 9999999999999;" class="alert alert-success alert-dismissible fade in" role="alert">'
	// 						// 		+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>'
	// 						// 		+'</button>'
	// 						// 		+'<strong>ข้อความ</strong> ระบบบันทึก Remark request หมายเลข '+$id+' เรียบร้อย'
	// 						// 		+'</div>');
	// 						// 	$('tr.parent[data-id="'+$id+'"] .remark_text').html('<i class="fa fa-exclamation-triangle" style="line-height: inherit;"> </i> &nbsp;'+rs.note);
	// 						// 	//'+ +'&nbsp; 
	// 						// 	$("."+$id+" .remark_area").before('<div class=" red small remark_list">'
	// 						// 		+'<label class="">'+date.getDate() + '/' + (date.getMonth()+ 1) + '/' +  date.getFullYear()+' </label> &nbsp;->&nbsp;<span>'+rs.note+'</span></div>	');
	// 						// }else{
	// 						// 	$(".main_container").append('<div style="z-index: 9999999999999;" class="alert alert-warning alert-dismissible fade in" role="alert">'
	// 						// 		+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>'
	// 						// 		+'</button>'
	// 						// 		+'<strong>แจ้งเตือน</strong> ระบบไม่สามารถ Remark request หมายเลข '+$id+'ได้'
	// 						// 		+'</div>');
	// 						// }
	// 					}
	// 				}).responseText;
	// });

</script>
</html>
