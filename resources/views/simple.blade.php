<html>
    <head>
</head>
<body>
<form action="{{url('/simple')}}" method="post">
				{{csrf_field()}}
                <input type="text" name="name">name
                <input type="text"name="content">Content
                <input type="checkbox" name="status">Status
                <input type="submit" name="save" value="Save">
</form>