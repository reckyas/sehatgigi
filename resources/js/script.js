var main = document.getElementById('main');
// Base url

main.addEventListener('submit',function (e) {
	e.preventDefault();
	var url = e.target.getAttribute('action');
	e.target.classList.add('activeForm');
	var data = $('.activeForm').serialize();
	var modall = e.target.getAttribute('modal');
	var fnName = e.target.getAttribute('fn');
	var form_user = e.target.getAttribute('id');
	var form = document.getElementById(form_user);
	if (form_user == 'form1' || form_user=='form2') {
		if ($(e.target.getAttribute('pass')).val() == $(e.target.getAttribute('passw')).val()) {
			$.ajax({
				url : e.target.getAttribute('action'),
				type : e.target.getAttribute('method'),
				data : new FormData(form),
				contentType: false,
				cache: false,
				processData: false,
				dataType : 'JSON',
				error: function () {
					$('#csrf_field').attr('name'.response.csrf_data.name);
					$('#csrf_field').val(response.csrf_data.hash);
					swal({
					type: 'error',
					title: 'Oops...',
					text: 'Terjadi sebuah kesalahan'
					})
				},
				success: function (response) {
					$(modall).modal('hide');
					swal({
		              position: 'top-end',
		              type: 'success',
		              title: response.pesan,
		              showConfirmButton: false,
		              timer: 1500
		            }); 
					getDataForTable().ajax.reload();
					getDataForTable2().ajax.reload();
					$('#csrf_field').attr('name'.response.csrf_data.name);
					$('#csrf_field').val(response.csrf_data.hash);
				}
			});
    	} else {
    		alert('password tidak sama');
    	}
	} else {

		$.ajax({
			url: url,
			type: "post",
			data: data,
			dataType: 'JSON',
			beforeSend: function () {
				 
			},
			error: function () {
				$('#csrf_field').attr('name'.response.csrf_data.name);
				$('#csrf_field').val(response.csrf_data.hash);
				swal({
				  type: 'error',
				  title: 'Oops...',
				  text: 'Terjadi sebuah kesalahan'
				})
			},
			success: function (response) {
				$('#csrf_field').attr('name'.response.csrf_data.name);
				$('#csrf_field').val(response.csrf_data.hash);
				$(modall).modal('hide');
				window[fnName]();
				swal({
	              position: 'top-end',
	              type: 'success',
	              title: response.pesan,
	              showConfirmButton: false,
	              timer: 1500
	            });
			}
		});
		$(".activeForm").each( function() { this.reset; });
	}
});
// Function Link url 
const menu_side = document.getElementById('menu-side');
menu_side.addEventListener('click', function(e){
	e.preventDefault();
	var url = e.target.getAttribute('href');
	var title = e.target.getAttribute('data-title');
	var path = e.target.getAttribute('data-path');
	if (e.target.getAttribute('linked')=="true") {
		goToPage(url,path,title);
	}
})
function goToPage(url,path,title){
	window.history.pushState({"html":getPage(url),"pageTitle":title},"", path);
	$('#main').load(url);
	document.title = title;
}
function getPage(url) {
	$.ajax({
		url:url,
		type:'get',
		dataType:'html',
		success: function (response) {
			return response;
		}
	})
}