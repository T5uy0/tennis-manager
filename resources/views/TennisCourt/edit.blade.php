<p>{{$court->hour}}</p>
<p>{{$court->name}}</p>
<p>{{$court->day}}</p>
<p>{{$court->court_status_id}}</p>
<form action="{{ route('TennisCourt.update', $court->id) }}" method="post">
    @csrf
    @method('put')
    <label for="court_status_id">Statut du court :</label>
    <select name="court_status_id" id="court_status_id">
        @foreach($statuses as $status)
            <option value="{{ $status->id }}" @selected($status->id == $court->court_status_id)>{{ $status->label }}</option>
        @endforeach
    </select>
    <button type="submit">update</button>
</form>
