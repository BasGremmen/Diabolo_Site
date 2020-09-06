@foreach($lazari as $lazarus)
	
    <option value="{{$lazarus->id}}">{{$lazarus->name }} {{$lazarus->last_name}}</option>
    
@endforeach