<a id="edit" class="btn btn-info btn-xs" href="{{ url("admin/booking/" . $id . "/edit") }}">
<i class="glyphicon glyphicon-edit icon-white"></i>Edit</a>
<button type="button" class="btn btn-danger btn-xs" onclick="checkDelete({{$id}}, this);" data-token="{{ csrf_token() }}">
<i class="glyphicon glyphicon-trash icon-white"></i>Delete</button>